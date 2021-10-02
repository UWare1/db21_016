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
        background-image: linear-gradient(to top right, rgb(48, 61, 232), rgb(207, 37, 204));
        text-align: center;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
    }

    a:link {
        color: black;
        background-color: transparent;
        text-decoration: none;
    }
    a:visited {
        color: gray;
        background-color: transparent;
        text-decoration: none;
    }
    a:hover {
        color: plum;
        background-color: transparent;
        text-decoration: underline;
    }
    a:active {
        color: darksalmon;
        background-color: transparent;
        text-decoration: underline;
    }

</style>
<html>
    <head></head>
    <body>
        <header>
        <?php echo "Controller = ".$controller."  |  Action = ".$action;?>
        <br>[<a href="?controller=pages&action=home"> Home </a>]<br>
        <br>[<a href="?controller=ProductPrice&action=index"> ProductPrice </a>]<br>
        
        <br>
        <br>[<a href="?controller=detail&action=index"> Detail </a>]<br>

        <br>[<a href="?controller=Quotation&action=index"> Quotation </a>]<br>
        <?php require_once("routes.php");?>
        </header>
</body>
</html>