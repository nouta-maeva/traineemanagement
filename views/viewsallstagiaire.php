 <!DOCTYPE html>
 <html lang="en">
 <head>
   <!--icone-->
   
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>stagiaire</title>
  <!-- Bootstrap core CSS -->
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

        <div class="titre">
  <h2>intern list</h2>
</div>
<br><br> 
<div class="conteneur">
  <header class="recherche"><div class="barrederecherche">
                      <span class="las la-search"></span>
                      <input type="search" style="width: 300px;" placeholder="search here" class="form-control">
                  </div></header>
                </div><br><br>

                  <!--button d'ajout-->
                <div class="ajout">
                  <br>
                   <div class="row">
                    <div class="col-md-4 ml-auto">  
                  <div class="d-grid gap-2 col-6 mx-auto"> 
                  <a href="../views/viewsupdatestagiaire.php">
  <button class="btn btn-info" type="button" style="width: 300px;">add intern</button>
                  </a>
                  </div>
                    </div>
</div>
               </div><br><br>


<!--creation tableau-->

    
<div class="table">
<table class="table ">
  <thead class="table-info">
    <tr>
      <th scope="col">trainee id</th>
      <th scope="col">first name</th>
      <th scope="col">Last name</th>
      <th scope="col">departement</th>
      <th scope="col">email</th>
      <!-- <th scope="col">idframer</th> -->
      <th scope="col">framer name</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>reseau</td>
      <td>ufut</td>
      
      <td>francois</td>
      <td class="td">

      <a title="click to edit the student" href="">
<button type="button" class="btn btn-secondary">modify</button>

<button type="button" class="btn btn-info">view</button>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>developpement</td>
      <td>tgyuf</td>
      
      <td>bernard</td>
      <td class="td">
      <a title="click to edit the student" href="">

<button type="button" class="btn btn-secondary">modify</button>

<button type="button" class="btn btn-info">view</button>

    </tr>
    <tr>
      <th scope="row">3</th>
      <!--colspan="longeur colone
      <td colspan="2">Larry the Bird</td>-->
      <td>larry</td>
      <td>paule</td>
      <td>reseau</td>
      <td>paule@gmail.com</td>
      
      <td>njoh</td>
      <td class="td">
      <a title="click to edit the student" href="">
<button type="button" class="btn btn-secondary">modify</button>

<button type="button" class="btn btn-info">view</button>

    </tr>
  </tbody>
</table>
</div>

      </section>
      <!-- /wrapper -->
    </section>
<!--barrre de recherche-->
    
<!--<div class="ajout">
                  <br>  
                  <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button">add intern</button>
  
</div>
               </div>-->
  
  
   <!--<table class="hovertabble" id="resulttable"data-responsive="table">;

   
   <thead>
   <tr class="tr">
   <th width="8%" class="th">id stagiaire</th>
   <th width="15%" class="th">name stagiaire</th>
   <th width="8%" class="th">prenom stagiaire</th>
   <th width="10%" class="th">email stagiaire</th>
   <th width="8%" class="th">departement</th>
   <th width="15%" class="th">id encadreur</th>
   <th width="15%" class="th">nom encadreur</th>
  </tr>
   </thead>
   <tbody>-->
   <!--ajout stagiaire-->
<!--<tr class="tr">
<td class="td">stagiaire id 1</td>
<td class="td">happi</td>
<td class="td">ahsley</td>
<td class="td">dob@gmail.com</td>
<td class="td">reseau</td>
<td class="td">encadreur id1</td>
<td class="td">willy jackson</td>-->
<!--creation de bottom-->



<!--<a title="click to edit the student" href="">
<button class="btn3">
<i class="bi bi-pencil1-square"></1> view
</button>
</a>

<a class="delbutton" title="click to delete">
<button class="btn4">
<i class="icon-trash"></i> modify
</button>
</a>
</td>
</tr>-->
<!--cest fini-->
</tbody>
   </table>
   <?php include('../views/includes/footer.html'); ?>
 </body>
 <script type="text/javascript" src="../asset/js/search.js"></script>
 </html>
