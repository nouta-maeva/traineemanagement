<!DOCTYPE html>
 <html lang="en">
 <head>
   <!--icone-->
   
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>projet</title>
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
        
        <!--contenue-->

        <div class="titre1">
  <h2>project </h2>
</div>
<br><br>
        <div class="conteneur">

        <!-- <div class="conteneur"> -->
  <header class="recherche"><div class="barrederecherche">
  <span class="las la-search"></span>
                      <input type="search" style="width: 300px;" placeholder="search here..." class="form-control" >
                  

                  </div></header>
                </div><br><br>

                  <!--button d'ajout-->
                <div class="ajout">
                  <br>
                   <div class="row">
                    <div class="col-md-20 ml-auto">  
                  <div class="d-grid gap-1 col-2 mx-auto"> 
                  <a href="../views/viewsupdateproject.php">
                
                 
  <button class="btn btn-info" type="button" style="width: 300px;">+ new project</button>
                  
                 </a>
                  </div>
                    </div>
</div>
               </div><br><br>
     
               <div class="titre3">
                 <center>
  <h2>project list </h2>
                 </center>
</div>
  <!--creation d'un tableau-->
<div class="table">
<table class="table ">
  <thead class="table-secondary">
    <tr>
      <th scope="col">project number</th>
      <th scope="col">project name</th>
      
      <!-- <<select name="name" id="intern name"> -->
        <th scope="col">intern name</th>

                <!-- <option value="francois"></option>
                <option value="paule"></option>

                </select>    -->
      <th scope="col">creation date</th> 
      <th scope="col">start date</th>
       
      <th scope="col">end date</th>
      <th scope="col">department</th>
      
      <th scope="col">action</th>
      <!-- <th scope="col">framer name</th>
      <th scope="col">action</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">proj1</th>
      <td>placeapp</td>
      <td>francois</td>
      <td>12/02/21</td>
      <td>12/02/21</td>
      <td>12/03/21</td>
      <td>reseau</td>
      <!-- <td>enc2</td>
      <td>francois</td> -->
      <td class="td">

      <!-- <a title="click to edit the student" href=""> -->
        
      <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  description
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">description project</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        application aui gerer les place dans les salle qui permet de connaitre la place de chaque personne presente et qui signal chaque fois q'une place nest plus occupe
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-secondary">modify</button>

<!-- <button type="button" class="btn btn-info">description</button> -->

<!-- <a href="../views/viewsalltasks.php"> -->

 <button id="tasks" type="button" class="btn btn-dark">tasks</button> 
 <button id="tasksh" type="button" class="btn btn-warning">tasks</button> 
 
    </tr>
    <tr>
      <th scope="row">proj2</th>
      <td>eatapp</td>
      <td>francois</td>
      <td>14/05/22</td>
      <td>14/05/22</td>
      <td>14/06/22</td>
      <td>developpement</td>
      
      <td class="td">

      <!-- <a title="click to edit the student" href=""> -->
        
      <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  description
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">description project</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        application aui gerer les place dans les salle qui permet de connaitre la place de chaque personne presente et qui signal chaque fois q'une place nest plus occupe
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-secondary">modify</button>

<!-- bouton deroulant -->

<!-- fin deroulant -->
<!-- <a href="../views/viewsalltasks.php"> -->
 <button type="button" class="btn btn-dark">tasks</button>  
</td>

    </tr>
       
</tbody>
</table>
</div><br> <br>
<!-- table ssuivante cache et afficher -->

<div class="table1">



<div class="titre">
  <h2>task of project</h2>
</div>
                  
 
              
<div class="table">
<table class="table ">
 <thead class="table-info">
   <tr>
   <th scope="col">taks number</th>
      <th scope="col">tasks name</th>
      <!-- <th scope="col">list trainee</th> -->
      <th scope="col">start date </th>
      <th scope="col">task completion deadline</th>
       <th scope="col">remaining time</th>
      
       
       <th scope="col">stain status</th>
         
        <th scope="col">action</th>
       
   </tr>
 </thead>
 <tbody>
   <tr>
   <td>tasks1</td>
      <td>modelisation</td>
      <!-- <td>florence donfack</td> -->
      <td>12/02/21</td>
      <td>2jour</td> 
      <td>1</td>
     
      <td class="td">
      <label for="tasks not started">
 <button  id="b1" type="button" class="btn btn-warning"> tasks not started <input type="checkbox" name="tasks not started" id="b1"> </button>
 <label>

<label for="tasks not started">
 <button type="button" class="btn btn-primary">tasks in court  <input type="checkbox" name="tasks not started" id="tasks not started"></button>
</label>

<label for="tasks not started">
<button type="button" class="btn btn-success">difficulty tasks <input type="checkbox" name="tasks not started" id="tasks not started"></button>
</label>

<label for="tasks not started">
<button type="button" class="btn btn-danger">tasks completed<input type="checkbox" name="tasks not started" id="tasks not started"></button>
</label>
</td>
<td>

 <!-- creation modal -->
 <div class="bouton">
 <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  description 
</button>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" modal-lg role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> project description</h5>
        <!-- <button type="button" class="close" data-dismiss="modal">x </button> -->
      </div>
      <div class="modal-body">
      creation d'uninterface de connexion  avec un mot de passe des utilisateur et les autre donne de ton choix .
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</td>
   </tr>
   
   <tr>
   <td>tasks1</td>
      <td>creation interface</td>
      <!-- <td>florence donfack</td> -->
      <td>12/02/21</td>
      <td>2jour</td> 
      <td>1</td>
      <td class="td">
      <label for="tasks not started">
 <button  id="b1" type="button" class="btn btn-warning"> tasks not started <input type="checkbox" name="tasks not started" id="b1"> </button>
 <label>

<label for="tasks not started">
 <button type="button" class="btn btn-primary">tasks in court  <input type="checkbox" name="tasks not started" id="tasks not started"></button>
</label>

<label for="tasks not started">
<button type="button" class="btn btn-success">difficulty tasks <input type="checkbox" name="tasks not started" id="tasks not started"></button>
</label>

<label for="tasks not started">
<button type="button" class="btn btn-danger">tasks completed<input type="checkbox" name="tasks not started" id="tasks not started"></button>
</label>
</td>
<td>
   <!-- creation modal -->
   <div class="bouton">
 <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  description 
</button>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" modal-lg role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> project description</h5>
        <!-- <button type="button" class="close" data-dismiss="modal">x </button> -->
      </div>
      <div class="modal-body">
      creation d'uninterface de connexion  avec un mot de passe des utilisateur et les autre donne de ton choix .
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</td>
 

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
 <script src="assets/jquery.min.js"></script>
<script type="text/javascript" src="../asset/js/search.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 

 <script>
   $(document).ready(function(){
     
      $('.table1').hide();
      $('#tasksh').hide();

      $('#tasks').on('click',function(){

        $('.table1').fadeIn();  
        $('#tasksh').show();
        $('#tasks').hide();

      });


      $('#tasksh').on('click',function(){

$('.table1').fadeOut();  
$('#tasksh').hide();
$('#tasks').show();

});
 
   })

 </script>


 
 </html>
