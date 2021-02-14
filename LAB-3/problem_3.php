<html>
   <h3>lab-3:problem 3</h3>
    <body>
    <?php

    $length = 20;
    $width = 20;

    $area = $length * $width;

    $perimeter = 2*($length + $width);

    echo "length=$length <br>width = $width<br>area = $area <br>perimeter =  $perimeter<br>";
   
    if ($length == $width)
	{
        echo "the shape is a square";
    }
	else
	{
		echo "   ";
	}
    ?>
    </body>
</html>