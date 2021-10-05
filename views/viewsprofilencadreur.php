<!DOCTYPE html>
 <html lang="en">
 <head>
   <!--icone-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tache</title>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="../asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../asset/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../asset/css/style.css" rel="stylesheet">
  <link href="../asset/css/style-responsive.css" rel="stylesheet">
   <link rel="stylesheet" href="../asset/css/style2.css">  
   <link rel="stylesheet" href="../asset/style/titre.css">
  </head>
 <body>
<?php include('../views/includes/header.php');?>
<section id="main-content">
      <section class="wrapper site-min-height">
        <br> <br><br>
        <!--contenue-->

       <div class="titre1">
             <h3>list of my trainee</h3>
       </div><br>

       <div class="titre3">
          <center>
  <h2>farmer profile </h2>
          </center>
</div><br> <br>



       <div class="table">
<table class="table ">
  <thead class="table-secondary">
    <tr>
      <th scope="col">trainee id</th>
      <th scope="col">first name</th>
      <th scope="col">Last name</th>
      <th scope="col">departement</th>
      <th scope="col">profil</th>
      <th scope="col">email</th>
      <!-- <th scope="col">idframer</th> -->
      
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2</th>
      <td>simon</td>
      <td>elvis</td>
      <td>reseau</td>
      <td>developpeur</td>
      <td>ufut</td>
      
      
      <td class="td">

 <button type="button" class="btn btn-warning">add profil</button>
   
       
<button id="views" type="button" class="btn btn-info">views my trainee</button>
   
<button id="viewsh" type="button" class="btn btn-secondary">views my trainee</button>
   
       
      </td>
  </tr>
  </tbody>
</table>
       </div>
<br><br><br>






















<div class="tablesuite1">

        <div class="titre2">
             
  <h2>my trainee</h2>
             
</div>

<div class="table">
<table class="table ">
  <thead class="table-danger">
    <tr>
      <th scope="col">trainee id</th>
      <th scope="col">first name</th>
      <th scope="col">Last name</th>
      <th scope="col">departement</th>
       
      <th scope="col">email</th>
      <!-- <th scope="col">idframer</th> -->
      
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>reseau</td>
      
      <td>ufut</td>
      
      
      <td class="td">

      <a title="click to views the profile trainee" href="">
<button type="button" class="btn btn-secondary">views profile</button>
      </a>
      <a title="click to attribute tasks" href="../views/viewstasks.php">
<button type="button" class="btn btn-info">attribute tasks</button>
      </a>
  </tr>
  <tr>
      <th scope="row">5</th>
      <td>dongo</td>
      <td>dimitri</td>
      <td>reseau</td>
      
       

      <td>ufut</td>
      
      
      <td class="td">

      <a title="click to views profile trainee" href="">
<button type="button" class="btn btn-secondary">views profile</button>

<a title="clic to attribute a tasks" href="../views/viewstasks.php">
<button type="button" class="btn btn-info">attribute tasks</button>
</a>
    </tr>
   
    
    <tr>
      <th scope="row">6</th>
      <td>happi</td>
      <td>yannick</td>
      <td>reseau</td>
       
      <td>ufut</td>
      
    
      <td class="td">

      <a title="click to views profile trainee" href="">
<button type="button" class="btn btn-secondary">views profile</button>

<a title="click to attribute tasks" href="../views/viewstasks.php">
<button type="button" class="btn btn-info">attribute tasks</button>
      </a>
<!-- <button type="button" class="btn btn-info">attribute tasks</button> -->

    </tr>
  </tbody>
</table>
</div>
</div>
      </section>
      <!-- /wrapper -->
    </section>
 
   <?php include('../views/includes/footer.html'); ?>
 </body>
 <script type="text/javascript" src="../asset/js/search.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 </html>
