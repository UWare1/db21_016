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
            
            <tr>
            <td>
                <a href="?controller=ProductPrice&action=updateForm&PDid=$ProductPrice->PDid"> update </a>
            </td>
            <td>
                <a href="?controller=ProductPrice&action=deleteConfirm&PDid=$ProductPrice->PDid"> delete </a>
            </td></tr>
        <br>
        <br>[<a href="?controller=detail&action=index"> Detail </a>]<br>
        <form method="get" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="detail">
            <button type="submit" name="action" value="search">
                Search</button>
        </form>

        <?php require_once("routes.php");?>
</body>
</html>