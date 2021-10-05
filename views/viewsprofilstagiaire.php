<!DOCTYPE html>
 <html lang="en">
 <head>
   <!--icone-->
   
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profil stagiaire</title>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="../asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../asset/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../asset/css/style.css" rel="stylesheet">
  <link href="../asset/css/style-responsive.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../asset/css/style2.css"> -->
   <link rel="stylesheet" href="../asset/style/titre.css">
  
  </head>
 <body>
<?php include('../views/includes/header.php');?>
<section id="main-content">
      <section class="wrapper site-min-height">
        <br><br> 
        <!--contenue-->

        <div class="titre0">
          <center>
  <h1>trainee profile </h1>
          </center>
</div>
<br><br><br>

<!-- tableau de ses information -->
  
<div class="table">
<table class="table ">
  <thead class="table-secondary">
    <tr>
      <th scope="col">trainee id</th>
      <th scope="col">first name</th>
      <th scope="col">Last name</th>
      <th scope="col">departement</th>
      <th scope="col">email</th>
      <!-- <th scope="col">idframer</th> -->
      <th scope="col">framer name</th>
      <th scope="col">action</th>
      
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>reseau</td>
      <td>ufut</td>
      
      <td>karim tawen</td>
      <td class="td">

      <a title="click to edit the profil" href="../asset/views/viewseditprofil.php">
<button type="button" class="btn btn-dark">add </button>
      </a>

      
      <button id="project" type="button" class="btn btn-secondary">project</button>
      <button id="projecth" type="button" class="btn btn-info">project</button>



<button id="tasks" type="button" class="btn btn-info">tasks</button>
<button id="tasksh" type="button" class="btn btn-danger">tasks</button>

<button id="rapport" type="button" class="btn btn-secondary">report</button>
      <button id="rapporth" type="button" class="btn btn-warning">report</button>



 
    </tr>
   </tbody>
</table>
</div><br><br>

 


  <!-- tableau qui detail son projet -->
  <div class="tablesuite1">
  <div class="titre">
          
  <h3>my project</h3>
         
</div>
<div class="table">
<table class="table ">
  <thead class="table-info">
    <tr>
      
      <th scope="col">project name</th>
       <th scope="col">creation date</th> 
      <th scope="col">start date</th>
       
      <th scope="col">end date</th>
      <th scope="col">department</th>
      <th scope="col">action</th>
       
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>placeapp</td>
      <td>francois</td>
      <td>12/02/21</td>
      <td>12/04/21</td>
       
      <td>reseau</td>
      
      <td class="td">


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
 
 
  
<!-- <a href="../views/viewsalltasks.php"> -->
 <button type="button" class="btn btn-info">tasks</button> 
   
      </td>
    </tr>
</tbody>
</table>
</div>
  </div><br><br>

 <!-- tableau des taches -->
 <div class="tablesuite2">
<div class="titre">
           
  <h3>my tasks</h3>
         
 
  </div>

 <div class="table">
<table class="table ">
  <thead class="table-info">
    <tr>
     
      <th scope="col">tasks number</th>
       <th scope="col">tasks name</th> 
       <th scope="col">start date </th>
      <th scope="col">task completion deadline</th>
       <th scope="col">remaining time</th>
       <th scope="col">action</th>
       <th scope="col">stain status</th>
       
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>modelisation</td>
      <td>12/02/21</td>
      <td>2jour</td> 
      <td>1</td>
     
      <td class="td">
         <!-- creation modal -->
 <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  description
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">description tasks</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      representation de tout les acteur dans le diagramme de classe et aussi realisation des differenr diagramme : de cas d'utilisation de classe de sequence  et ....
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
   <!-- fin modal -->
</td>
    
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
 

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>interface de connexion</td>
      <td>12/02/21</td>
      <td>2jour</td> 
      <td>2</td>

      <td class="td">
        <!-- creation modal -->

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
 

    </tr>
  </tbody>
</table>
</div>
 </div>
  
<!-- nouveau tableau our les les rapport
        -->
<div class="tablesuite3">

          <div class="titre2">
  <h2>rapport</h2>
</div>
         
               
<div class="table">
<table class="table ">
  <thead class="table-info">
    <tr>
      
      <!-- <th scope="col">traine name</th> -->
       <th scope="col"> type de rapport</th> 
      <th scope="col">date d'envoie</th>
       <th scope="col">  </th>
      <th scope="col">action</th>
       
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <!-- <td>julien noumo</td> -->
      <td>rapport de semaine</td>
      <td>10/2/2021</td>
       <td>....</td>
      <td>


      <button id="tasksh" type="button" class="btn btn-danger">views rapport</button>
      <!-- saisir d'un nouveau rapport -->

      
      <!-- fin  -->
      <button id="tasksh" type="button" class="btn btn-secondary">news rapport</button>






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
 
 <script type="text/javascript" src="../asset/js/bouton.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 <script>
   $(document).ready(function(){
     
      $('.tablesuite1').hide();
      $('#projecth').hide();

      $('#project').on('click',function(){

        $('.tablesuite1').fadeIn();  
        $('#projecth').show();
        $('#project').hide();

      });


      $('#projecth').on('click',function(){

$('.tablesuite1').fadeOut();  
$('#projecth').hide();
$('#project').show();

});
// pour les tache

$('.tablesuite2').hide();
      $('#tasksh').hide();

      $('#tasks').on('click',function(){

        $('.tablesuite2').fadeIn();  
        $('#tasksh').show();
        $('#tasks').hide();

      });


      $('#tasksh').on('click',function(){

$('.tablesuite2').fadeOut();  
$('#tasksh').hide();
$('#tasks').show();

});

// pour les rapports
$('.tablesuite3').hide();
$('#rapporth').hide();

$('#rapport').on('click',function(){

  $('.tablesuite3').fadeIn();  
  $('#rapporth').show();
  $('#rapport').hide();

});


$('#rapporth').on('click',function(){

$('.tablesuite3').fadeOut();  
$('#rapporth').hide();
$('#rapport').show();

});

   })

 </script>
 
 
 
 </html>
