<!DOCTYPE html>
 <html lang="en">
 <head>
   <!--icone-->
   
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
  </head>
 <body>
<?php include('../views/includes/header.php');?>
<section id="main-content">
      <section class="wrapper site-min-height">
        
        <!--contenue-->
        <div class="titre">
  <h2>tasks list</h2>
</div><br><br>
    

 <div class="conteneur">
  <header class="recherche"><div class="barrederecherche">
                      <!-- <span class="las la-search"></span> -->
                      <input type="search" style="width: 300px;" placeholder="search here..." class="form-control" >
                      <span class="las la-search"></span>

                  </div></header>
                </div><br><br>

                  <!--button d'ajout-->
                <div class="ajout">
                  <br>
                   <div class="row">
                    <div class="col-md-20 ml-auto">  
                  <div class="d-grid gap-1 col-2 mx-auto"> 
                  <a href="../views/viewsupdateproject.php">
  <button class="btn btn-info" type="button" style="width: 300px;">new tasks</button>
                  </a>
                  </div>
                    </div>
</div>
               </div><br><br>
         
         
<div class="table">
<table class="table ">
  <thead class="table-secondary">
    <tr>
    <th scope="col">project name</th>
      <th scope="col">taks number</th>
      <th scope="col">tasks name</th>
      <th scope="col">start date </th>
      <th scope="col">task completion deadline</th>
       <th scope="col">remaining time</th>
        <th scope="col">stain status</th>
         <th scope="col">acion</th>
      <!-- <th scope="col">framer name</th>
      <th scope="col">action</th> --> 
      <!-- <th scope="col">end date</th> -->

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">eatpp</th>
      <td>tasks1</td>
      <td>modelisation</td>
      <td>12/02/21</td>
      <td>2jour</td> 
      <td>1</td>
      <td><button type="button" class="btn btn-danger">hard</button>
</td>
      <!-- <td>frncois</td> -->
      <td class="td">
      <a title="click to edit the student" href="">
<button type="button" class="btn btn-secondary">modify</button>
<button type="button" class="btn btn-info">description</button>
 <button type="button" class="btn btn-dark">views</button> 
</tr>

    <tr>
      <th scope="row">eatpp</th>
      <td>tasks1</td>
      <td>modelisation</td>
      <td>12/02/21</td>
      <td>2jour</td> 
      <td>1</td>
      <td><button type="button" class="btn btn-warning">in progress</button>
</td>
      <!-- <td>frncois</td> -->
      <td class="td">
      <a title="click to edit the student" href="">
<button type="button" class="btn btn-secondary">modify</button>
<button type="button" class="btn btn-info">description</button>
 <button type="button" class="btn btn-dark">views</button>
  </tbody>
  
  </tbody>
</table>
</div>

      </section>
      <!-- /wrapper -->
    </section>
 
   <?php include('../views/includes/footer.html'); ?>
 </body>
 <script type="text/javascript" src="../asset/js/search.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 </html>
