<?php
function paginate($count){
    for($i = 1; $i <= $count/4; $i++){
        echo "<li class='page-item mr-2'><a id='page$i' class='page-link rounded-circle' href='?view=dating&page=$i'>$i <span class='sr-only'>(current)</span></a></li><br/>";
    }
}
