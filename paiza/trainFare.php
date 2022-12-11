<?php
    $input_line = fgets(STDIN);

    $array = explode(' ', $input_line);

		//所持金
    $money = $array[0];

		//乗り換え
    $trainChange = $array[1];

		//ポイント
    $point = 0;

    for($i=0; $i<$trainChange; $i++){
				//運賃
        $fare = fgets(STDIN);

        if($point<$fare){
            $money -= $fare;
            $point += 0.1*$fare;

            echo $money.' '.$point."\n";
        }else{
            $point -= $fare;
            echo $money.' '.$point."\n";
        }
    }
?>
