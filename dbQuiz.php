<!DOCTYPE HTML>
<html>
<title>Paul The Tutors Quiz!</title>
<!-- Connecting to database and setting it to exception error mode -->
<?php
//include('databseConnection.php');
?>

<head>
    <?php
    include('styles.html')
    ?>
</head>

<body data-bs-spy='scroll'>
    <div class='container'>
        <div class='row align-content-start'>
            <div class='col'>
                <form action='checkAnswers.php' method='post'>
                    <?php
                    //Get all the questions that are in this quiz based on the quiz ID number
                    $getQuestions = "SELECT * FROM questions where quizID=";
                    $stmt = $pdo->prepare($getQuestions);
                    $stmt->execute();
                    $questionNumber = 1;
                    //This while loop will get all questions from this quiz where the qID is the same as the ID of this quiz
                    while ($questions = $stmt->fetch(PDO::FETCH_ASSOC)) {   ?>
                        <div class="card my-4 border-dark">
                            <div class='card-header'>
                                <!--Setting the title for each question that is returned from the query-->
                                <h5 class="card-title"><?php echo ($questionNumber + '. ' + $questions['qTitle']); ?> </h5>
                            </div>
                            <?php
                            if (strcmp($questions['questionType'], 'multipleChoice') == 0) {
                                //This php file will know how to handle outputting multiple choice questions
                                include('mutipleChoiceQuestion.php');
                            } elseif (strcmp($questions['questionType'], 'freeResponse') == 0) {
                                //This php file will know how to handle outputting freeResponseQuestions
                                include('freeResponseQuestion.php');
                            } elseif (strcmp($questions['questionType'], 'trueFalse') == 0) {
                                //This php file will know how to handle outputting trueFalseQuestions
                                include('trueFalseQuestion.php');
                            }
                            ?>
                        </div>
                    <?php
                        //Increment the question number by 1 so the title of the questions will have the correct question number
                        $questionNumber++;
                        //closing the outer while loop that will loop through all the questions
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include('scripts.html');
?>

</html>