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
?>
