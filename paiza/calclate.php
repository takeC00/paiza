<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);

    $array = str_replace(array("\r\n", "\r", "\n"), "", $input_line);
    $array = explode(' ',$array);

    $xWhere = (array_search('x', $array));
    //var_dump($xWhere);
    $enzanshi = $array[1];

    if($xWhere == 0){
        if($enzanshi ==  '+'){
            echo(intval($array[4])+intval($enzanshi)-intval($array[2]));
        }elseif($enzanshi == '-'){
            echo(intval($array[4])-intval($enzanshi)-intval($array[2]));
        }
    }elseif($xWhere == 2){
        if($enzanshi ==  '+'){
            echo(intval($array[4])+intval($enzanshi)+intval($array[0]));
        }elseif($enzanshi == '-'){
            echo(intval($array[0])-intval($enzanshi)-intval($array[4]));
        }
    }elseif($xWhere == 4){
        if($enzanshi == '+'){
            echo(intval($array[0])+intval($enzanshi)+intval($array[2]));
        }elseif($enzanshi == '-'){
            echo(intval($array[0])+intval($enzanshi)-intval($array[2]));
        }
    }
?>
