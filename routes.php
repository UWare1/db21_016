<?php 
$controllers = array('pages'=>['home','error'],'detail'=>['index'], 'ProductPrice'=>['index','newProductPrice','addProductPrice']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages": $controller = new PagesController();
        break;
        case"ProductPrice": require_once("models/ProductPrice.php");
                            require_once("models/ProductPrice.php");
                            $controller = new ProductController();
                            break;
        case"detail": require_once("models/detailModel.php");
                        $controller = new detailController();
        break;
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