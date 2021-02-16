<?php

for($i=1; $i<=3; $i=$i+1)
{
    for($j=1; $j<=$i; $j=$j+1)
    {
        echo "* ";
    }
    echo "\n";
}

echo "\n\n";


for($i=3; $i>=1; $i=$i-1)
{
    for($j=1; $j<=$i; $j=$j+1)
    {
        echo "".$j." ";
    }
    echo "\n";
}

echo "\n\n";


$k=65;

for($i=1; $i<=3; $i=$i+1)
{
    for($j=1; $j<=$i; $j=$j+1)
    {
         $ch = chr($k);
         echo "".$ch." ";
         $k = $k + 1;
    }
    echo "\n";
}


?>
