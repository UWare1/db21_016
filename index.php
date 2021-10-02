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
        <br>[<a href="?controller=ProductPrice&action=index"> ProductPrice </a>]<br>
        new ProductPrice<a href="?controller=ProductPrice&action=newProductPrice"> click </a><br>
        <form method="get" action="">
                <input type="text" name="key">
                <input type="hidden" name="controller" value="ProductPrice"/>
                <button type="submit" name="action" value="search">
                Search</button>
        </form>
        
        <br>
        <br>[<a href="?controller=detail&action=index"> Detail </a>]<br>

        <br>[<a href="?controller=Quotation&action=index"> Quotation </a>]<br>
        new Quotation : <a href="?controller=Quotation&action=newQuotation">click </a><br>
        <form method="get" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="Quotation">
            <button type="submit" name="action" value="search">
                Search</button>
        </form>
        <?php require_once("routes.php");?>
</body>
</html>