<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);

    $array = explode('+', $input_line);//文字列→配列
    $items = count($array);//配列の要素数カウント

    for($i=0; $i<$items; $i++){
        $a = strval($array[$i]);//配列→文字列
        $ten = (substr_count($a, "<"));//文字列から該当する文字列の要素数カウント
        $one = (substr_count($a, "/"));

        $total += (10*$ten + $one);
    }
    echo $total;


?>
