<?php

    $colors = array('red', 'blue', 'green', 'white', 'purple');
    $search = 'white';
    foreach($colors as $i)
    {
        if($i === $search)
        {
            echo $i." is in the array";
            break;
        }
    }

?>
