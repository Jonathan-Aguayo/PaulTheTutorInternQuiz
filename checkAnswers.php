<!DOCTYPE HTML>
<html>
<title>Quiz Results</title>

<head>
    <?php
    include('styles.html');
    ?>
</head>
<!-- Connecting to database and setting it to exception error mode -->
<?php
//include('databseConnection.php');
//Simple function to convert users score to percentage to be used in the progress bar
function get_percentage($score, $outOf)
{
    if ($outOf > 0) {
        return round((($score / $outOf) * 100), 2);
    } else {
        return 0;
    }
};
//Keep track of the total number of correct answsers
$correctCounter = 0;

// //I can use this prepared statement later to insert the free response submission into the database during the while loop that grades the other questions
// $insertFreeResponseAnswer = $pdo->prepare("INSERT into answers (questionID,title,response) VALUES (:questionID,:title, :response)")

?>

<body>
    <div class='container'>
        <div class='row mt-4'>
            <h1 class='display-5 text-center'>Hello <?php echo $_POST['freeResponse'] ?></1>
        </div>

        <div class="card my-4">
            <div class="card-header">
                <?php echo $_POST['q1Title']; ?>
            </div>
            <div class="card-body">
                <p class="card-text">Correct answer: <span class='fw-bolder'>English</span></p>
                <?php if ($_POST['q1'] == 'English') {
                    echo ('<p class="card-text correct"> Your answer: English </p>');
                    $correctCounter++;
                } else {
                    echo '<p class="card-text incorrect"> Your answer: ', $_POST['q1'], '</p>';
                }
                ?>
            </div>
        </div>

        <div class="card my-4">
            <div class="card-header">
                <?php echo $_POST['trueFalseTitle']; ?>
            </div>
            <div class="card-body">
                <p class="card-text">Correct answer: <span class='fw-bolder'>True</span></p>
                <?php if ($_POST['trueFalse'] == 'True') {
                    echo ('<p class="card-text correct"> Your answer: True </p>');
                    $correctCounter++;
                } else {
                    echo '<p class="card-text incorrect"> Your answer: ', $_POST['trueFalse'], '</p>';
                }
                ?>
            </div>
        </div>

        <div class="card my-4">
            <div class="card-header">
                <?php echo $_POST['freeResponseTitle']; ?>
            </div>
            <div class="card-body">
                <p class='card-body'>Your answer of :<br><br> <span class='fw-bolder'><?php echo $_POST['freeResponse']; ?> </span> <br><br> will be submitted to database and graded by a grader.</p>
            </div>
        </div>


        <?php
        // //This section of the quiz is what will handle grading the database questions
        // //Make query to get the questions corresponding to this quiz 
        // $getQuestions = "SELECT * FROM questions where quizID = "; //Quiz id of this quiz
        // $preparedQuestions = $pdo->prepare($getQuestions);
        // $preparedQuestions->execute();

        // //Prepare a sql statement to get the correct answer for a question given the question ID
        // $getAnswers = $pdo->prepare("SELECT correctAnswer FROM questions where questionID= :questiondID"); //inputting 
        // $getAnswers->bindParam(':questionID', $questionID); 
        ?>

        <?php
        // //Loop through all the questions in the quiz
        // while ($question = $preparedQuestions->fetch(PDO::FETCH_ASSOC)) {
        //     //Extract the correct answer from the question
        //     $correctAnswer = $question['correctAnswer'];
        //     //Extract ID from question
        //     $questionID = $question['ID'];
        //     //Get the submitted question from the user. All input fields have the corresponding question ID as the name. 
        //     $submittedQuestion = $_POST[$questionID];
        // 
        ?>


        <!-- After getting the correct answer and the users submitted answer I would compare them and if they are the same I would use html to output to the user that their answer is correct-->

        <!--If their answer is incorrect I would use html to output that the answer is incorrect-->
        <?php
        //     //Closing the while loop after completing html output
        // }
        // 
        ?>

        <?php
        include('scripts.html');
        ?>

        <p class='mt-4 pt-4'>Your score is <span class='fw-bolder'> <?php echo $correctCounter; ?></span> / 2</p>
        <div class='container mb-4 mt-1 pb-4'>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo get_percentage($correctCounter, 2), '%'; ?>" aria-valuenow="<?php echo get_percentage($correctCounter, 2); ?>" aria-valuemin="0" aria-valuemax="2"> <?php echo get_percentage($correctCounter, 2), '%'; ?></div>
            </div>
        </div>
        <br>

    </div>
</body>

</html>