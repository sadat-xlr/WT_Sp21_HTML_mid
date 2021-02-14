<html>
   <h3>lab-3:problem 2</h3>
     <body>
       <?php 
        $marks = 45;
		print"MARK:$marks<br>";

        if ($marks>=90)
		{
            echo "A+";
        }
        elseif ($marks>=80 && $marks<90)
		{
            echo "A & marks = $marks";
        }
        elseif ($marks>=70 && $marks<80)
		{
            echo "B & marks = $marks";
        }
        elseif ($marks>=60 && $marks<70)
		{
            echo "C & marks = $marks";
        }
		elseif ($marks>=50 && $marks<60)
		{
            echo "D & marks = $marks";
        }
        else
		{
            echo "<b>Fail</b>";
        }

     ?>
     </body>
</html>