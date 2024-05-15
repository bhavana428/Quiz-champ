
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style1.css" >
    </head>
    <body>
        
            
                    <div class="card bg-light mx-auto"   style="width:500px" id="card">
            
            <div class="card-body">
                    <form action="dat1.php" method="post">
        
                        <label for="email"> Email</label>
                        <input type="email" placeholder="Enter email" name="email1" class="form-control" id="email" required><br>
                        <label for="username"> Username</label>
                        <input type="text" placeholder="Enter Username" name="username1" class="form-control" id="username" required><br>
                        <label for="password"> Password</label>
                         <input type="password" placeholder="Enter Password" name="password1" class="form-control" id="password" required><br>
                    
                         &ensp;&ensp;&ensp;<button type="reset" class="btn btn-danger">reset</button>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                         <button type="submit" class="btn btn-success" data-bs-target="notes.html">register</button><br><br>
                         <a href="demo.php" class="btn btn-primary">back to home</a>
                         </div>
                  </div>
        
    </body>
    
</html>