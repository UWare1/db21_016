<?php 
<<<<<<< HEAD
=======
$controllers = array('pages'=>['home','error'],'detail'=>['index'], 'ProductPrice'=>['index']);
>>>>>>> 573f53dd63f4bffdb8d48e72f426336c07cf7636

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages": $controller = new PagesController();
        break;
<<<<<<< HEAD
        case"ProductPrice": require_once("models/ProductPrice.php");
                            $controller = new ProductController();
                            break;
=======
        case"detail": require_once("models/detailModel.php");
                        $controller = new detailController();
        break;
>>>>>>> 573f53dd63f4bffdb8d48e72f426336c07cf7636
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action);
    }
    else{
        call('pages','error');
    }
}
else{
    call('pages','error');
}
?>