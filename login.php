<?php

$conn = mysqli_connect("localhost", "root", "", "login");
if(isset($_POST['btnSubmit']))
{
   $txtEmail = $_POST['txtEmail'];
   $txtPass = $_POST['txtPass'];

   $query = "select * from login_tbl where email='{$txtEmail}' and password='{$txtPass}'";
   $result = mysqli_query($conn,$query);
   if($result === TRUE)
   {
      echo "<script>alert(\"You are wrong!\");<script>";
   }
   else
    {
      echo "<script>alert(\"Login successful\");</script>";
   }
}


?>




<!DOCTYPE html>
<html>
    <head>
        <title>Exploitant Informatique</title>
        <link rel="stylesheet" href="style.css">
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <form action="login.php" method="post">
    <div class="sidenav">
         <div class="login-main-text">
            <h2>Connexion au compte<br> Section exploitant informatique</h2>
            <p>Vous pouvez vous connectez a votre compte d'utilisateur en remplisant
            votre Email & Mot de passe.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>Email de l'utilisateur</label>
                     <input type="text" class="form-control" name="txtEmail" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Mot de passe</label>
                     <input type="password" class="form-control" name="txtPass" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black" name="btnSubmit" style="color: white;">Login</button>
               </form>
            </div>
         </div>
      </div>
      </form>
    </body>
</html>