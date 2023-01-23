<?php
    $pass = fgets(STDIN);
    $pass_length = strlen($pass)-1;
    $pass_array = [];
    for($i=0; $i<$pass_length; $i++){
        $pass_array[$i] = $pass[$i];
    }

    $input = fgets(STDIN);
    $input_length = strlen($input)-1;
    $input_array = [];
    for($i=0; $i<$input_length; $i++){
        $input_array[$i] = $input[$i];
    }

    $check = array_diff($pass_array, $input_array);

    if(empty($check)){
        if($pass_array === $input_array){
            echo 'NO';
        }
        else {
            echo 'YES';
        }
    }else{
        echo 'NO';
    }
?>
