<!-- Write a PHP script to calculate the area and perimeter of a Rectangle, and display the result.
Hints: The area of a Rectangle = length × width, perimeter = 2 × (length + width) -->

<?php

  $length=25;
  $width=10;
  $area = $length*$width;
  $perimeter = 2*($length+$width);
  echo "The area of the Rectangle: ".$area."\n";
  echo "perimeter: ".$perimeter;
?>
