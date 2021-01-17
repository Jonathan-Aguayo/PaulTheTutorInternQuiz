<?php
//get all the choices for this question. Since this is a true false question there is only 2
$getChoices = "SELECT * FROM choices where questionID= ";
$preparedStatement = $pdo->prepare($getChoices);
$preparedStatement->execute();
?>
<!-- I put this div on the outside of the while loop because each option will be shown as a button and I wanted the buttons to be wrapped by this button group-->
<div class="btn-group btn-group-toggle" data-toggle="buttons">

    <?php while ($choices = $preparedStatement->fetch(PDO::FETCH_ASSOC)) { ?>
        <!--The following lines will be executed for every answer choice-->

        <label class="btn btn-outline-success">
            <input class="answer btn-check" type="radio" name=<?php $choices['questionID']; ?> autocomplete="off" value=<?php $choices['choiceID']; ?>> <?php $choices['answerChoice']; ?>
            <!--This hidden field gets the title of the question so we can use it when outputting later-->
            <input type="hidden" name=<?php echo $questions['ID'], 'Title' ?> value=<?php echo $questions['title'] ?>>
        </label>

    <?php
        //Closing the while loop that loops through the answer choices
    }
    ?>
</div>