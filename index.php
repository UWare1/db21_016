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
        <br>[<a href="?controller=pages&action=detail"> Detail </a>]<br>
        <?php require_once("routes.php");?>
</body>
</html>