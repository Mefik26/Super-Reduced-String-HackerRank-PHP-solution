<?php

// Solution for "Super Reduced String" https://www.hackerrank.com/challenges/reduced-string/problem
function superReducedString($s) {

    while(strlen($s)>0){

        $flag = false;

        for($i=0;$i<strlen($s)-1;$i++){

            if($s[$i]==$s[$i+1]){

                if(strlen($s)==2){
                    return "Empty String";
                }

                $first = substr($s,0,$i);
                $second = substr($s,$i+2);
                $s = $first.$second;

                $i=0;
                $flag = false;
                continue;

            }

            $flag = true;
        }

        if($flag) {
            return $s;
        }
    }

    return "Empty String";

?>
