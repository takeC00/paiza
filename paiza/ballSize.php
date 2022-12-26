<?php
    $input_line = fgets(STDIN);
    $input_line = explode(' ', $input_line);
    $boxCount = $input_line[0];
    $bollSize = $input_line[1];
    $canInto = [];

    for($i=1; $i<=$boxCount; $i++){
        $input_line = fgets(STDIN);
        $input_line = explode(' ', $input_line);
        $h = $input_line[0];
        $w = $input_line[1];
        $d = $input_line[2];
        if($bollSize<=$h && $bollSize<=$w && $bollSize<=$d){
            array_push($canInto, $i);
        }
    }
    $c = count($canInto);
    for($i=0; $i<$c; $i++){
        echo $canInto[$i];
        echo "\n";
    }

?>
