
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>dashboard</title>
<!--icone-->
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  
  <!-- Favicons -->
  

  <!-- Bootstrap core CSS -->
  <link href="../asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../asset/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../asset/css/style.css" rel="stylesheet">
  <link href="../asset/css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<link rel="stylesheet" href="../asset/css/style1.css"/>
<body>

  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include('../views/includes/header.php');?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <br><br>
        <!--mon contenue ici-->
      
 
        <?php include('../views/includes/headerAjout.html');?>
 <div class="pg">
        <form action="controllersproject/validUpdate/" method="POST" class="viewsproject">
            <div class="add">
                <h1>attribute tasks</h1>
            </div>
            
            <div class="in">
                <label>project name:</label><br>
                <input type="text" name="project name" class="inpt" value="" required/><br>
                <label>tasks number:</label><br>
                <input type="number"  name="tasks number" class="inpt" value=""><br>
                <label>trainee name :</label><br>
                <select name="name" class="inpt">
                <option value="francois">francois</option>
                <option value="paule">paule</option>
                </select>
                <label>tasks name :</label><br>
                 <input type="text"  name="tasks name" class="inpt" value=""><br>
                <label>start date:</label><br>
                <input type="date"  name="start date" class="inpt" value=""><br>
                <label>task completion deadline:</label><br>
                <input type="date" name="time completion deadline" class="inpt" value=""></input><br>
                <label>remaining time</label>
                <input type="number" name="remaining time" class="inpt" value=""></input><br>
                 
                <label>description</label>
           <input type="textarea" name="description" class="inpt" value=""></input><br>
           
            </div>
            <!-- <a href="../views/viewsallstagiaire.php"> -->
            <button name="update" type="submit" class="submit">Submit</button>
            <!-- <button name="attribute" type="submit" class="submit">attribute</button> -->
            <!-- </a> -->
            <input type="hidden" name="projectId" value="<?=$data['projectId']?>">
        </form>
    </div>

   
     
  
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <?php include('../views/includes/footer.html');?>
  <!--script for this page-->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>
