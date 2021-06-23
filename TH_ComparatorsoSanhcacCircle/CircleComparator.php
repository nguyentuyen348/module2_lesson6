<?php
include "Circle.php";
include "Comparator.php";

class CircleComparator implements Comparator
{
    public function compare(object $circleOne,object $circleTwo):int
    {
        $radiusOne=$circleOne->getRadius();
        $radiusTwo=$circleTwo->getRadius();

        if ($radiusOne>$circleTwo){
            return 1;
        }elseif($radiusOne<$circleTwo){
            return -1;
        }else{
            return 0;
        }
    }
}