<?php
    $count = fgets(STDIN);
    $k = 0;
    $keyWord = '/.*' .fgets(STDIN).'*/';
		
    for($i=0; $i<$count; $i++){
        $targetWord = fgets(STDIN);
        //var_dump($targetWord);
        if(preg_match($keyWord, $targetWord)){
            echo $targetWord;
        }else{
            $k++;
        }
    }
    if($k == $i){
        echo 'None';
    }
?>
