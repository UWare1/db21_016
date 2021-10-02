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
<style>
    body {
        background-image: linear-gradient(to bottom right, rgb(246, 162, 148) 20%, rgb(244, 124, 124));
        text-align: center;
    }
</style>
<html>
    <head></head>
    <body>
        <?php echo "Controller = ".$controller."  |  Action = ".$action;?>
        <br>[<a href="?controller=pages&action=home"> Home </a>]<br>
        <br>[<a href="?controller=ProductPrice&action=index"> ProductPrice </a>]<br>
        
        <br>
        <br>[<a href="?controller=detail&action=index"> Detail </a>]<br>

        <br>[<a href="?controller=Quotation&action=index"> Quotation </a>]<br>
        <?php require_once("routes.php");?>
</body>
</html>