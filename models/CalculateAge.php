<?php


abstract class CalculateAge
{
    private static $age,
        $birthDay = '';

    static function getAge($date){

        $date  = explode('/', $date);
        $toDay = explode('/', date('d/m/Y'));

        if($date[1] < $toDay[1] || ($date[1] == $toDay[1] && $date[0] <= $toDay[0] )){
            self::$age = $toDay[2] - $date[2];
        }else{
            self::$age = $toDay[2] - $date[2] - 1;
        }
        return self::$age;
    }

    static function getBirthDay($date){

        $date  = explode('/', $date);
        $toDay = explode('/', date('d/m/Y'));

        if($date[1] == $toDay[1] && $date[0] == $toDay[0]){
            self::$birthDay = 'Happy Birth Day';
        }
        return self::$birthDay;
    }
    /**
     * @param $name
     * @param $args
     */
    public function __call($name, $args){

        echo $name," doesn't exist in this class";
    }
}