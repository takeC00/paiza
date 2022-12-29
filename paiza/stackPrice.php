<?php
    $input_line = fgets(STDIN);
    $a = explode(' ', $input_line);
    $endDay = $a[0];
    $buy = $a[1];
    $sell = $a[2];
    $money = 0;
    $haveStockPrice = 0;

    for($today=1; $today<$endDay; $today++){
        $stockPrice = fgets(STDIN);
        if($stockPrice <= $buy){
            $money -= $stockPrice;
            $haveStockPrice ++;
        }elseif ($stockPrice >= $sell){
            $money += $stockPrice*$haveStockPrice;
            $haveStockPrice = 0;
        }
    }

		//最終日
    $stockPrice = fgets(STDIN);
    $money = $money+$stockPrice*$haveStockPrice;
    echo $money;
?>
