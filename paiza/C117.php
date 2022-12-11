<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $array = explode(' ', $input_line);

    $shop = $array[0];
    $month = $array[1];

    $input_line = fgets(STDIN);
		$array = explode(' ', $input_line);
		
    $construction_cost = $array[0];
    $human_cost = $array[1];
    $human_cost_month = $human_cost*$month;
    $profit = $array[2];

    $deficit = 0;
    for($i=1; $i<=$shop; $i++)
    {
        $ramen = fgets(STDIN);
        //var_dump($ramen);
        $profit_by_month = intval($profit)*intval($ramen);
        if($profit_by_month - $construction_cost - $human_cost_month < 0)
        {
          $deficit ++;
        }
    }
    echo $deficit;
?>
