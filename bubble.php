<?php
$a = array(7,8,3,5);
$num = count($a);

for($i= 0; $i < $num; $i++){
    //echo $i . '回目のfor文';
    //echo '<br>';
    for($j = 0; $j < $num - $i -1; $j++){
        echo ($a[$j] . 'と' . $a[$j+1] . 'を比較');
        echo '<br>';
        if($a[$j] > $a[$j+1]){
            $tmp = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j+1] = $tmp;
            print_r($a);
            echo '<hr>';
        }
    }
}
