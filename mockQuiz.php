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

<body>
    <div class='container'>
        <div class='row '>
            <h1 class='display-5 text-center'>Hello welcome to mock quiz by Jonathan Aguayo</h1>
            <h1 class='display-6 text-center'>Made for Paul the Tutor</h1>
        </div>
        <div class='row'>
            <div class='col-3'>
                <h2>About each code file</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button  collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                checkAnswers.php
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This file is what handles grading the quiz once is had been submitted. It includes the code to grade database questions and includes a prepared statement to insert free response questions into the database.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                databaseConnection.php
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                code that handles logging in to database. Since I needed to reuse this code alot, I made it into its own file and use the include function to reuse it in different files.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                dbQuiz.php
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This file is the php file that I would use to render a quiz from a database. I am not using this file to render this page you see because I did not have a database with questions to test it on.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                freeResponseQuestion.php
                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This is the file that knows how to render a freeResponseQuestion. This file will be included any time we need to render a free response question which I assumed to be a value in a database column.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsefour">
                                multipleChoiceQuestion.php
                            </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This is the file that knows how to render a multipleChoiceQuestion.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingseven">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapsefour">
                                scripts.html
                            </button>
                        </h2>
                        <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This file contains the scripts that I used to build the mock quiz and it is also included in the dbQuiz.php file.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingeight">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapsefour">
                                styles.php
                            </button>
                        </h2>
                        <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This is the file that contains the stylesheets used to style this website. I used bootstrap 4 and a few custom classes to build this.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingnine">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsefour">
                                trueFalseQuestion.php
                            </button>
                        </h2>
                        <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This class knows how to render a trueFalseQuestion.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfive">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefour">
                                mockQuiz.php
                            </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This is the file that is rendering this page. It contains example questions that use the same template as the ones in the freeResponse.php, multipleChoiceQuestion.php, and trueFalseQuestion.php
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col'>
                <form action='checkAnswers.php' method='post' id='quizSubmit'>
                    <div class="card my-4 border-dark">
                        <div class='card-header'>
                            <h5 id='q1' class="card-title">1. What language is this question in?</h5>
                            <input type="hidden" name='q1Title' value='1. What language is this question in?'>
                        </div>
                        <label class='row g-1 mcb mx-3 my-1 py-2 animate__animated animate__backInLeft'>
                            <div class='col-1 my-auto'>
                                <input type="radio" class="answer btn-check " autocomplete="off" name='q1' value='English' required>
                                <label class="btn btn-light rounded-circle mx-2 border-dark bg-gradient" for="option1">A</label>
                            </div>
                            <div class='col'>
                                English
                            </div>
                        </label>
                        <label class='row g-1 mcb mx-3 my-1 py-2 animate__animated animate__backInRight'>
                            <div class='col-1 my-auto'>
                                <input type="radio" class="answer btn-check " autocomplete="off" name='q1' value='German'>
                                <label class="btn btn-light rounded-circle mx-2 border-dark bg-gradient" for="option1">A</label>
                            </div>
                            <div class='col'>
                                German
                            </div>
                        </label>
                        <label class='row g-1 mcb mx-3 my-1 py-2 animate__animated animate__backInLeft'>
                            <div class='col-1 my-auto'>
                                <input type="radio" class="answer btn-check " autocomplete="off" name='q1' value='Spanish'>
                                <label class="btn btn-light rounded-circle mx-2 border-dark bg-gradient" for="option1">A</label>
                            </div>
                            <div class='col'>
                                Spanish
                            </div>
                        </label>
                        <label class='row g-1 mcb mx-3 my-1 py-2 animate__animated animate__backInRight'>
                            <div class='col-1 my-auto'>
                                <input type="radio" class="answer btn-check " autocomplete="off" name='q1' value='Swedish'>
                                <label class="btn btn-light rounded-circle mx-2 border-dark bg-gradient" for="option1">A</label>
                            </div>
                            <div class='col'>
                                Swedish
                            </div>
                        </label>
                    </div>
                    <div class="card my-4 border-dark ">
                        <div class='card-header'>
                            <h5 id='q1' class="card-title">2. Please click the True button</h5>
                            <input type="hidden" name='trueFalseTitle' value='2. Please click the True button'>
                        </div>
                        <div class="btn-group btn-group-toggle animate__animated animate__backInLeft" data-toggle="buttons">
                            <label class="btn btn-outline-success">
                                <input class="answer btn-check" type="radio" name='trueFalse' value='True' required>True
                            </label>
                            <label class="btn btn-outline-success">
                                <input class="answer btn-check" type="radio" name='trueFalse' value='False'>False
                            </label>
                        </div>
                    </div>
                    <div class="card my-4 border-dark">
                        <div class='card-header'>
                            <h5 id='q1' class="card-title">3. Enter your name</h5>
                            <input type="hidden" name='freeResponseTitle' value='3. Enter your name'>
                        </div>
                        <div class="input-group animate__animated animate__backInRight ">
                            <textarea class="textInput" aria-label="With textarea" name='freeResponse' form='quizSubmit' placeholder="Enter answer here" style='height:150px;' required></textarea>
                        </div>
                    </div>
                    <input type='submit' class='btn btn-success' name='submit'>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include('scripts.html');
?>

</html>