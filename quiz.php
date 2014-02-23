<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Val Simple Quiz</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        
    </head>
    <body>
        <div class="container">
        	<?php 
        		$answer_1 = $_POST['question_1'];

        		// if ($answer_1 == "A") {echo "<span class=\"label label-success\">Success</span>";}
        		// else
        		// 	{echo "<span class=\"label label-danger\">Wrong Answer</span>";}


        		$correctAnswer = false;

        		if ($answer_1 == "A") {$correctAnswer = true;}

        		if($correctAnswer == true)
        		{
        			echo "<span class=\"label label-success\">Success</span>";
        		}
        		else
        			{echo "<span class=\"label label-danger\">Wrong Answer</span>";}

        	?>

        </div>
    </body>
</html>
