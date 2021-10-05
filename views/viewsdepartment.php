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
   <link rel="stylesheet" href="../asset/style/titre.css"> 
  </head>
 <body>
<?php include('../views/includes/header.php');?>
<section id="main-content">
      <section class="wrapper site-min-height">
        
        <!--contenue-->
        <div class="titre1">
  <h2>departement </h2>
</div><br><br><br>
    

 <div class="conteneur">
  <header class="recherche"><div class="barrederecherche">
                      <!-- <span class="las la-search"></span> -->
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
                  
  <button class="btn btn-info" type="button" style="width: 300px;"> + new department</button>
                
                 </a>
                  </div>
                    </div>
</div>
               </div><br><br>
         
   <div class="titre3">
     <center>
  <h2>departement list</h2>
     </center>
</div>
<div class="table">
<table class="table ">
  <thead class="table-info">
    <tr>
      
      <th scope="col">departement name</th>
       <th scope="col">number project</th> 
      <th scope="col">nombre intern</th>
       
      <th scope="col">number encadreur</th>
       
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>placeapp</td>
      <td>1</td>
      <td>10</td>
      <td>12</td>
       
    </tr>
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
