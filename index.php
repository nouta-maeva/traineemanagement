
<?php
// definition de la page courante
if(isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower( $_GET['page']));

} else{
    $page = 'login';
}
// array contenant toutes les pages
$allpages = scandir('controllers/');
if (in_array('controllers'.$page.'.php', $allpages)){

    //inclusion de la page 
    include_once 'models/model' .$page.'.php';
    include_once 'controllers/controllers' .$page.'.php';
    include_once 'views/views' .$page.'.php';
}else{
    // retour d'une erreur 404
    echo'erreur 404';
}
 