<?php
include('includes/header.html');

$questions = array('What does php stand for?', 'What is the population of Los Angeles?', 'What is the capital of California?');
$answers = array(
    array(0 => 'PHP: Hypertext Preprocessor', 'Personal Home Page', 'Programmers Hyper Platform'),
    array(0 => '8 million', '20 mllion', '9.7 million'),
    array(0 => 'Sacramento', 'Los Angeles', 'San Francisco')
    );

?>

<h1>Val Okafor Simple PHP Quiz</h1>
        <form action="quiz.php" method="post" id="quiz">
       <?php 
       $pattern = ' ';
       $replace = '_';
       for ($num=0; $num < count($questions) ; $num++) { 

        echo "<div class=\"form-group\">";
        echo "<label for=\"$questions[$num]\">$questions[$num]</label>" ."<ol>";
        
       foreach ($answers[$num] as $answer) {
           $answer_with_no_space = str_replace($pattern, $replace, $answer);
           echo "<li><input type=\"radio\" id=\"$answer_with_no_space\" value=\"$answer_with_no_space\" name=\"$answer_with_no_space\" />\n";
           echo "<label for=\"$answer\">$answer</label></li>\n";}
       echo "</ol>" . "</div>";          
       }


       ?>   
      

       	<button type="submit" class="btn btn-primary">Submit Quiz</button>
    
        </form>

    <?php include('includes/footer.html') ?>


