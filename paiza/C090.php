<?php
    $input_line = fgets(STDIN);

    $a = str_replace('-', '', $input_line);

    $length = strlen($a);

    for($i=0; $i<$length-1; $i++)
    {
        $b = substr($a,$i,1);

        if($b == 0)
        {
            $dial_distance += 12*2;
        }else{
            $dial_distance += ($b+2)*2;
        }
    }
    echo($dial_distance);
?>
