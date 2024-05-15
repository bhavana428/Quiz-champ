<?php
$showalert=false;
$showerror=false;
$handle=mysqli_connect('localhost','root','','logindetails');

/*$query="create database logindetails;";
mysqli_query($handle,$query);

$q2="create table data(email varchar(40),username varchar(20),password varchar(20));";
mysqli_query($handle,$q2);*/
$email=$_POST['email1'];
$username=$_POST['username1'];
$password=$_POST['password1'];
$esql="select * from data where username='$username' or email='$email';";
$r=mysqli_query($handle,$esql);
$nrow=mysqli_num_rows($r);
if($nrow>0){
$showerror="true";
}
else{

$q3="insert into data values('$email','$username','$password');";
$r2=mysqli_query($handle,$q3);
if($r2){
    $showalert=true;
    
}
}
?>

<html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style1.css" >
    </head>
   
    <body>

    <?php
        if($showalert){
echo '<div class="alert alert-success alert-dismissable fade show" role="alert" >
<strong></strong>account created successfully<button type="button" class="close" data-bs-dismiss="alert">
<span>&times;</span></button></div>';
        }
        if($showerror){
            echo '<div class="alert alert-danger alert-dismissable fade show" role="alert">
            <strong></strong>email or user name already exist try another <button type="button" class="close" data-bs-dismiss="alert">
            <span>&times;</span></button></div>';

                    }?>

   <div class="card bg-light mx-auto"   style="width:300px" id="card">
            
            <div class="card-body">
                    <form action="dat1.php" method="post">
        
                        <label for="email"> Email</label>
                        <input type="email" placeholder="Enter email" name="email1" class="form-control" id="email" required><br>
                        <label for="username">Username</label>
                        <input type="text" placeholder="Enter Username" name="username1" class="form-control" id="username" required><br>
                        <label for="password">Password</label>
                         <input type="password" placeholder="Enter Password" name="password1" class="form-control" id="password" required><br>
                    
                         &ensp;&ensp;&ensp;&ensp;<button type="reset" class="btn btn-danger">reset</button>&ensp;&ensp;&ensp;&ensp;&ensp;
                         <button type="submit" class="btn btn-success" data-bs-target="notes.html">register</button><br><br>
                         <a href="demo.php#m1" class="btn btn-primary">back to home</a>
                         </div>
                  </div>
        
    </body>
   
</html>