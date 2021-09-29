<?php
if(isset($_GET['controller']) && isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else{
    $controller = 'pages';
    $action = 'home';
}

?>

<html>
    <head></head>
    <body>
        <?php echo "controller = ".$controller.",action = ".$action;?>
        <br>[<a href="?controller=pages&action=home"> Home </a>]<br>
<<<<<<< HEAD
        <br>[<a href="?controller=ProductPrice&action=index"> ProductPrice </a>]<br>
=======
        <br>[<a href="?controller=pages&action=detail"> Detail </a>]<br>
>>>>>>> 573f53dd63f4bffdb8d48e72f426336c07cf7636
        <?php require_once("routes.php");?>
</body>
</html>