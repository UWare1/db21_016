<?php 
$controllers = array('pages'=>['home','error'],'detail'=>['index']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages": $controller = new PagesController();
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