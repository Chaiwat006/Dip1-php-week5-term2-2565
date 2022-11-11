<?php
$mark = 69;
if($mark >= 80 == 0)
    echo ("$mark = A");
    elseif($mark >= 70 && $mark < 80){
    echo ("$mark = B");
    }
    elseif($mark >= 60 && $mark < 70);{
    echo ("$mark = C");
    }
    elseif($mark >= 50 && $mark < 60);{
    echo ("$mark = D");
    }
    elseif($mark>=0 && $mark < 50 ){ //0-50
    echo ("$mark = F");
}
    else{
    echo ("$mark = Fails"); //-1 and 101
    }

?>