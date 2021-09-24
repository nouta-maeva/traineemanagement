<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update stagiaire</title>
</head>

<body>
    <?php include('../views/includes/headerAjout.html');?>


<<div class="pg">
        <form action="controllerCourses/validUpdate/" method="POST" class="viewsstagiaire">
            <div class="add">
                <h1>Add intern</h1>
            </div>
            <div class="in">
                <label>id intern:</label><br>
                <input type="text" name="id intern" class="inpt" value=""><br>
                <label>name intern:</label><br>
                <input type="text"  name="last name" class="inpt" value=""><br>
                <label>email:</label><br>
                <input type="text"  name="email" class="inpt" value=""><br>
                <label>idframer:</label><br>
                <input type="text" name="id framer" class="inpt" value=""> </input><br>
           <label>framer name</label>
           <input type="text" name="framer name" class="inpt" value=""></input><br>
           
            </div>
            <!-- <a href="../views/viewsallstagiaire.php"> -->
            <button name="update" type="submit" class="submit">Submit</button>
            <!-- </a> -->
            <input type="hidden" name="courseId" value="<?=$data['courseId']?>">
            
        </form>
    </div>

</body>
</html>