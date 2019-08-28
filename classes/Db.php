<?php



/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 07/09/2018
 * Time: 08:49
 */

class Db
{
    private static $instance = null;
    private $pdo,
        $query,
        $error = false,
        $results,
        $count = 0;
    private function __construct()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=babor; charset=utf8', 'root', '');
        }catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    /**
     * @return null
     */
    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new Db();
        }
        return self::$instance;
    }
    function query($sql, $params = [])
    {
        $this->error = false;
        if($this->query = $this->pdo->prepare($sql))
        {
            $x = 1;
            if(count($params))
            {
                foreach ($params as $param)
                {
                    $this->query->bindValue($x, $param);
                    $x++;
                }
            }
        }
        if($this->query->execute()){
            $this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
            $this->count   = $this->query->rowCount();
        }else
        {
            $this->error = true;
        }
        return $this;
    }

    private function action($action, $table, $where = []){

        if(count($where) === 3){
            $operators = ['=', '<', '>', '<=', '>='];

            $field    = $where[0];
            $operator = $where[1];
            $value    = $where[2];

            if(in_array($operator, $operators)){

                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ? ";

                if(!$this->query($sql, [$value])->error()){

                    return $this;
                }
            }
        }
        return false;
    }

    function get($table, $where){

        return $this->action('SELECT *', $table, $where);
    }

    function insert($table, $fields = []){

        $keys   = array_keys($fields);
        $values = '';
        $x      = 1;

        foreach ($fields as $field){

            $values .=  '?';

            if($x < count($fields)){

                $values .= ', ';
            }
            $x++;
        }

        $sql  = "INSERT INTO {$table}(`".implode('`,`', $keys)."`) VALUES({$values})";

        if(!$this->query($sql, $fields)->error()){

            return true;
        }

        return false;
    }

    function update($table, $id, $fields){

        $set = '';
        $x   =  1;

        foreach ($fields as $name => $value){

            $set .= "{$name} = ?";

            if($x < count($fields)){

                $set .= ', ';
            }
            $x++;
        }


        $sql = "UPDATE {$table} SET  {$set}  WHERE id = {$id}";

        if(!$this->query($sql, $fields)->error()){

            return true;
        }

        return false;
    }

    function results(){

        return $this->results;
    }

    function first(){

        return $this->results()[0];
    }


    function delete($table, $where){
        return $this->action('DELETE', $table, $where);
    }
    function count(){

        return $this->count;
    }



    function error()
    {
        return $this->error;
    }


}