<?php
include('includes/header.html');

$questions = array(
        1 => array(
               'Question'       => 'What does PHP stand for?',
               'Answer'         => array(   'A' => 'PHP: Hypertext Preprocessor',
                                            'B' => 'Personal Home Page', 
                                            'C' => 'Programmers Hosting Platform'),
                'CorrectAnswer' => 'A'),
        2 => array(
               'Question'       => 'What is the population of Los Angeles?',
               'Answer'         => array(   'A' => '13 Million',
                                            'B' => '8 Million', 
                                            'C' => '20 Million'),
                'CorrectAnswer' => 'B'),


            );


?>

<h1>Val Okafor Simple PHP Quiz</h1>
        <form action="quiz.php" method="post" id="quiz">
           <?php foreach ($questions as $quizNumber => $value) { ?>
                <ol>
                    <li>
                        <h3><?php echo $value['Question']; ?> </h3>
                        <?php 
                            foreach ($value as $letter => $answer) {
                                $label = 'question-'.$quizNumber.'-answers-'.$letter;
                            ?>
                            <div class="form-group">
                                <input type="radio" name="answers[<?php echo $quizNumber; ?>]" id="<?php echo $label; ?>"
                                value="<?php echo $letter; ?> " />
                                
                                <label for="<?php echo $label; ?>"><?php echo $letter; ?> <?php echo $answer ?></label>
                            </div>
                            <?php } ?> 
                    </li>
                </ol>
                <?php } ?>   

       	<button type="submit" class="btn btn-primary">Submit Quiz</button>
    
        </form>

    <?php include('includes/footer.html') ?>


