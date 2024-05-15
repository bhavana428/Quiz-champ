<?php
session_start();
$handle=mysqli_connect('localhost','root','','logindetails');
if(isset($_POST['username'])&& isset($_POST['password'])){
    function validate($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
    }

$uname=validate($_POST['username']);
$pass=validate($_POST['password']);

    $sq="select * from data where username='$uname' and password='$pass';";
    $re1=mysqli_query($handle,$sq);

    if(mysqli_num_rows($re1)==1){
        $row=mysqli_fetch_assoc($re1);
        if($row['username']===$uname && $row['password']===$pass){
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
            $_SESSION['email']=$row['email'];
            header("Location:notes2.php");
            exit();
        }
    }
    else{
       echo '<div class="alert alert-danger alert-dismissable fade show" role="alert" >
        <strong>error:</strong>wrong username or password please try again<button type="button" class="close" data-bs-dismiss="alert">
        <span>&times;</span></button></div>';
   
    }
    

}

else{
    header("Location: demo.php");
    exit();
}
?>


<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
      span{
        color:red;
      }
    </style>
    <link rel="stylesheet" href="style.css" >
   
</head>
    <body>
      

                 
      <div class="back">
      <br>
      &emsp;<br>
      &emsp;<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <img src="images.jpeg" height="350" width="350" >
        <center><button id="m" class="btn btn-danger btn-lg" data-bs-target="#m1" data-bs-toggle="modal"><i><b>Get Started</b></i></button></center>
        <div class="modal fade" id="m1" tabindex="-1"data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">LOGIN</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">

                        <label for="u1"> username</label>
                        <span id="username1"></span>
                        <input type="text" placeholder="Enter Username" name="username" class="form-control" id="u1" required><br>
                       
                        <label for="p"> password</label>
                         <input type="password" placeholder="Enter Password" name="password" id="p" class="form-control" required><br>
                      


                    &ensp;&ensp;&ensp;&ensp;<button type="reset" class="btn btn-danger">reset</button>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                   <button type="submit" class="btn btn-success" name="login">login</button><br><br>


                </form>
                </div>
                <div class="modal-footer">
                    
                    if new
                  <a href="data.php" class="btn btn-primary">register</a>
                </div>
              </div>
            </div>
          </div>
          </div>
      
    </body>

</html>


