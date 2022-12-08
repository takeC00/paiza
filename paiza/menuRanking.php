<?php
    // "12 9000"
    $input_line = fgets(STDIN);

		// [(0)=>"12", (1)=>"9000"]
    $array = explode(' ', $input_line, 2);

    $items = intval($array[0]);
    $max_calory = intval($array[1]);

		//$total_rankingの配列の中身に1〜10入ってれば"Yes"
		//カロリー合計が最大カロリー以下の間繰り返し注文
    $total_ranking = [];
    $total_calory = 0;

    while($total_calory <= $max_calory){

				//[(0)=>ランキング, (1)=>カロリー]
        $input_line = fgets(STDIN);
        $item_array = explode(' ', $input_line, 2);

        $ranking = intval($item_array[0]);
        $calory = intval($item_array[1]);

        array_push($total_ranking, $ranking);
        $total_calory += $calory;
    }
    if(in_array(1, $total_ranking)&&
        in_array(2, $total_ranking)&&
        in_array(3, $total_ranking)&&
        in_array(4, $total_ranking)&&
        in_array(5, $total_ranking)&&
        in_array(6, $total_ranking)&&
        in_array(7, $total_ranking)&&
        in_array(8, $total_ranking)&&
        in_array(9, $total_ranking)&&
        in_array(10, $total_ranking))
        {
            echo 'Yes';
            return;
        }
    else{
            echo count($total_ranking)-1;
        }
?>
