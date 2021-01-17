<?php
$getChoices = "SELECT * FROM choices where questionID= ";
$preparedStatement = $pdo->prepare($getChoices);
$preparedStatement->execute();
//Start the label at 65 which is the ascii character for A. Convert to character in html
$choiceLabel = 65;
//This while loop will get all choices for this question where the questionId is the same as the ID of this question
while ($choices = $preparedStatement->fetch(PDO::FETCH_ASSOC)) { ?>

    <label class='row g-1 mcb mx-3 my-1 <?php if ($choiceLabel % 2 == 0) {
                                            //This code would handle alternating animations for answer choices
                                            echo 'animate__animated animate__backInLeft';
                                        } else {
                                            echo 'animate__animated animate__backInRight';
                                        } ?> '>
        <div class='col-1 my-auto'>
            <!--The name would be the questionID so that each questions radio buttons would be grouped together. Value is the choiceId which is the ID of each answer choice for a question.-->
            <input type="radio" class="answer btn-check " autocomplete="off" name=<?php echo ($choices['questionID']) ?> value=<?php echo ($choices['choiceID']); ?>>

            <!--Convert the choice label number into a character-->
            <label class="btn btn-light rounded-circle mx-2 border-dark bg-gradient" for="option1"><?php echo (chr($choiceLabel)); ?></label>
        </div>
        <!--echo the answer col of each choice so the buttons will be labeled with the answer choice text-->
        <div class='col'>
            <?php echo $choices['answerChoice'] ?>
            <!--This hidden field gets the title of the question so we can use it when outputting later-->
            <input type="hidden" name=<?php echo $questions['ID'], 'Title'; ?> value=<?php echo $choices['answerChoice']; ?>>
        </div>

    </label>

<?php
    //Increment the choiceLabel to be the next character in alpha order
    $choiceLabel++;
    //close the inner while loop that loops through the answer choices
}
?>