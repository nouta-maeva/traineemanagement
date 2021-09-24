     <?php require_once('views/includes/head.html'); ?>
    
    <?php require_once('views/includes/headerAjout.html'); ?>


    <div class="pg">
        <form action="index.php?action=controllerCourses/addCourses" method="POST" class="viewCourses">
            <div class="add">
                <h1>Add a Course</h1>
            </div>
            <div class="in">
                <label>Course-Code:</label><br>
                <input type="text" name="courseCode" class="inpt"><br>
                <label>Course-Title:</label><br>
                <input type="text"  name="courseTitle" class="inpt"><br>
                <label>Course-Language:</label><br>
                <input type="text"  name="courseLangage" class="inpt"><br>
                <label>Course-Description:</label><br>
                <textarea name="courseDescription" class="inpt" cols="30" rows="10"> </textarea><br>
            </div>
            <button name="submit" class="submit">Submit</button>
        </form>
    </div>
    <?php require_once('views/includes/footer.html'); ?>
    
    
    