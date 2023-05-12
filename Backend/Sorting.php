<?php

class SortingAlgorithms {
    
    public function selectionSortASC($arr) {
        $length = count($arr);
        for($i = 0; $i < ($length - 1); $i++) {
            $min = $i;

            for($n = $i + 1; $n < $length; $n++) {

                if($arr[$n] < $arr[$min]) {
                    $min = $n;
                }
            }

            if($min != $i) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$min];
                $arr[$min] = $tmp;
            }
        }

        return $arr;
    }

    public function selectionSortDSC($arr) {
        $length = count($arr);
        for($i = 0; $i < ($length - 1); $i++) {
            $min = $i;

            for($n = $i + 1; $n < $length; $n++) {

                if($arr[$n] > $arr[$min]) {
                    $min = $n;
                }
            }

            if($min != $i) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$min];
                $arr[$min] = $tmp;
            }
        }

        return $arr;
    }
    public function arrayToString($arr) {
        $str = "[";

        for ($i = 0; $i < count($arr); $i++) {
            if ($i == (count($arr) - 1)) {
                $str = $str . $arr[$i] . "]";
            } else {
                $str = $str . $arr[$i] . ", ";
            }
        }

        return $str;
    }
}
?>