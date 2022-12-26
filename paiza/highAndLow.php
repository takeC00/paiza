<?php
    $input_line = fgets(STDIN);
    $parents = explode(' ', $input_line);
    $parentA = $parents[0];
    $parentB = $parents[1];

    $childrenCount = fgets(STDIN);

    for($i=0; $i<$childrenCount; $i++)
    {
        $input_line = fgets(STDIN);
        $child = explode(' ', $input_line);
        $childA = $child[0];
        $childB = $child[1];

        if($parentA > $childA || $parentA === $childA && $parentB < $childB)
        {
            echo "High";
            echo "\n";
        }elseif($parentA < $childA || $parentA === $childA && $parentB > $childB) {
            echo "Low";
            echo "\n";
        }
    }
?>
