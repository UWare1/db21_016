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
        margin: 0;
        padding: 0;
        background-image: linear-gradient(to top right, rgb(48, 61, 232), rgb(207, 37, 204));
        text-align: center;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
    }
    header {
        background-color: rgb(34, 34, 54);
    }

    a:link {
        color: black;
        background-color: transparent;
        text-decoration: none;
    }
    a:visited {
        color: dodgerblue;
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

    .main-nav {
        height: 80px;
    }
    .navlinks {
        list-style: none;
        text-align: center;
        line-height: 80px;
        margin: 0;
        padding: 0;
    }
    .navlinks li {
        display: inline-block;
        margin: 0px 10px;
    }
    .navlinks li a {
        color: white;
        text-decoration: none;
        font-size: 17px;
        text-transform: uppercase;
    }
    .navlinks li a:hover {
        color: salmon;
        transition: all 0.3s ease 0s;
    }
    .navlinks li a:active {
        color: palevioletred;
        transition: all 0.2s ease 0s;
    }
    

</style>
<html>
    <head></head>
    <body>
        <header>
            <nav class="main-nav">
                <ul class="navlinks">
                    <li><a href="?controller=pages&action=home"> Home </a><li>
                    <li><a href="?controller=ProductPrice&action=index"> ProductPrice </a><li>
                    <li><a href="?controller=detail&action=index"> Detail </a><li>
                    <li><a href="?controller=Quotation&action=index"> Quotation </a><li>
                </ul><br>
                <?php echo "Status = ".$controller."  |  ".$action;?>
            </nav>
        </header>
        <br><br><?php require_once("routes.php");?></br>
</body>
</html>