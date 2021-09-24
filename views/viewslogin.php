<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../asset/css/login.css"/>
</head>
<body>
      
    <div id=container>
    <div class="logo">
    <b><h1>trainee management</h1></b><br>
    </div>
        <!--zone de connexion-->
        
        <form action=" viewsdashboard.php" method="POST">
        <h2><connexion/h2>
            <h1>LOGIN</h1><br>
            <label><b>user id:</b></label>
            <input type="text"  >
            <label><b>password:</b></label>
            <input type="password" >
           <center>  <input type="submit" id='submit' value='SUBMIT'></center>
          <?php
          if(isset($_GET['erreur'])){
              $err = $_GET['erreur'];
              if($err==1 || $err==2)
              echo"<p style='color: red'>utilisateur ou mot de passe incorrect</p>";
        }
          ?>
        </form>
        
    </div>
      
</body>
</html>