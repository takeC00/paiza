<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $array = explode(' ', $input_line, 2);

    $items = intval($array[0]);
    //var_dump('$items='.$items);

    $max_calory = intval($array[1]);
    //var_dump('$max_calory='.$max_calory);

    $ranking_array = [];
    $total_calory = 0;

    $menu_count = 0;

    for($total_calory=0; $total_calory<=$max_calory; $total_calory+=$menu_calory)
    {

        $input_line = fgets(STDIN);
        $menu = explode(' ', $input_line, 2);
        $menu_ranking = $menu[0];
        //var_dump($menu_ranking);
        $menu_calory = $menu[1];
        //var_dump($menu_calory);

        if($total_calory+$menu_calory >$max_calory)
        {
            //食べたメニューの中でランキングTOP10までのメニュー数出力
            if(in_array('1',$ranking_array))
            {
                $menu_count ++;
            }
            if(in_array('2',$ranking_array))
            {
                $menu_count ++;
            }
            if(in_array('3',$ranking_array))
            {
                $menu_count ++;
            }
            if(in_array('4',$ranking_array))
            {
                $menu_count ++;
            }
            if(in_array('5',$ranking_array))
            {
                $menu_count ++;
            }
            if(in_array('6',$ranking_array))
            {
                $menu_count ++;
            }
            if(in_array('7',$ranking_array))
            {
                $menu_count ++;
            }
            if(in_array('8',$ranking_array))
            {
                $menu_count ++;
            }
            if(in_array('9',$ranking_array))
            {
                $menu_count ++;
            }
            if(in_array('10',$ranking_array))
            {
                $menu_count ++;
            }
            echo $menu_count;
            break;
        }

        array_push($ranking_array, $menu_ranking);

        if(in_array('1', $ranking_array, true)&&
            in_array('2', $ranking_array, true)&&
            in_array('3', $ranking_array, true)&&
            in_array('4', $ranking_array, true)&&
            in_array('5', $ranking_array, true)&&
            in_array('6', $ranking_array, true)&&
            in_array('7', $ranking_array, true)&&
            in_array('8', $ranking_array, true)&&
            in_array('9', $ranking_array, true)&&
            in_array('10', $ranking_array, true))
        {
            echo 'Yes';
            break;
        }
    }

		//北島さんver
    $str = fgets(STDIN);
    $arr = explode(' ', $str, 2);

    $N = $arr[0];
    $C = $arr[1];

    $ate_calory = 0;
    $cnt = 0;


    while($ate_calory <= $C){
        $str = fgets(STDIN);
        $arr = explode(' ', $str, 2);
        $n = $arr[0];
        $c = $arr[1];

        $ate_calory += $c;
        if (1 <= $n && $n <= 10) {
            $cnt++;
        }
    }

    echo ($cnt == 10 ? "Yes" : $cnt) . "\n";
?>
