<div class="input-group ">
    <!--when this file is included in the dbQuiz file, we should be able to see the $questions variable and access its elements-->
    <textarea class="textInput" aria-label="With textarea" name=<?php echo $questions['ID']; ?> form='quizSubmit' placeholder="Enter answer here" style='height:150px;'></textarea>

    <!--This hidden field gets the title of the question so we can use it when outputting later-->
    <input type="hidden" name=<?php echo $questions['ID'], 'Title'; ?> value=<?php echo $questions['title']; ?>>
</div>