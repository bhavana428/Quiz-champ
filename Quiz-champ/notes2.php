<?php
session_start();
if(isset($_SESSION['username'])&& isset($_SESSION['password']))
{
    

?>

<html>

    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 <link href="note1.css" rel="stylesheet">   

    <body>
       <main class="main">
       <i><p class='text-success bg-dark'><?php echo $_SESSION['username'];?>  you have logged in succesfully</p></i>
        <header class="header">
            <a href="#" class="logo"><h2>Quiz</h2></a>
            <nav class="navbar navbar-expand-md">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
                <a href="#" class="active">home</a>
                <a href="score1.php">score board</a>
                <a href="logout.php">logout</a>
            </nav>
</div>
        </header>
       <div class="modal" id="m2" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
        <div class="container">
            <section class="quiz-section">
                <div class="quiz-box">
                    <h1><b>Simple Quiz</b></h1>
                    <div class="quiz-header">
                        <span class="header-score">Score:0/4</span>
                    </div>
                <h2 class="question-text"> what does html stand for?</h2>
                <div class="option-list">
                <!--<div class="option-text">
                <span>1.hyper text markup label</span>
                </div>
                <div class="option-text">
                <span>2.hypertextmarkup lang</span>   
                </div>
                <div class="option-text">
                <span>3.hypertextmarkup lang</span>   
                </div>
                <div class="option-text">
                <span>4.hypertextmarkup language</span>   
                </div>-->
        </div>
                <div class="quiz-footer">
                    <span class="question-total">1 of 4 questions</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <button class="next-btn">next</button><br><br>
                    <button class="score-btn btn btn-primary" data-bs-target="#m4" data-bs-toggle="modal">CLICK HERE TO VIEW SCORE</button>
                </div>
            </section>
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>


        <section class="home">
            <div class="home-content">
                <h1>QUIZ</h1>
                <p>here is the quiz go for it</p>
                <button class="start-btn" data-bs-toggle="modal" data-bs-target="#m1">start quiz</button>
            </div>
           <!-- -->
        </section>
        
       </main>
       
    <form action="score.php" method="post">
       <div class="modal" id="m4" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <div class="result-box">
                <h2>Result</h2>
                <div class="percentage-container">
                    <div class="circular-progress">
                        <span class="progress-value" name="percent">
                            0%
                        </span>
                        <input type="hidden" name="result" id="result">
                    </div>
                    <span class="score-text">score 0 out of 4</span>
                </div>
                <div class="modal-footer">
                <div class="buttons">
                    <a href="notes2.php" class="btn btn-primary">Try Again</a>
                    <a href="demo.php" class="btn btn-primary">Go to login page</a>
                    <button type="submit" class="btn btn-primary">save score</button>
        </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        
</form>
        <div class="modal" id="m1" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
       <div class="popup-info ">
        <h2><b>Quiz Guide</b></h2><br>
        <span class="info">1.This quiz contains total of 4 questions.</span><br>
        <span class="info">2.Answer can be selected only once.</span><br>
        <span class="info">3.you can't exit quiz while you're playing.</span><br>
        <span class="info">4.you will get points based on correct answers.</span><br>
        <span class="info">5.To view score click on view score option after completion of all questions.</span><br>
        <span class="info">6.you can save your score by clicking on save score option after completion of quiz in view quiz score.</span><br><br>
        
    
       <a href="notes2.php" class="btn btn-primary">exit</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="#m2" class="btn btn-primary" data-bs-toggle="modal">continue</a>
      
       </div>
       </div>
        </div>
        </div>
      

    <script src="question.js" defer></script>
    <script src="note.js" defer></script>





     
    </body>
    
</html>
<?php
}else
{
    header("Location:demo.php");
    exit();
}

?>