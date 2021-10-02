<?php 
$controllers = array('pages'=>['home','error'],'detail'=>['index','newQuotation','addDetail','search','updateForm'], 
                    'ProductPrice'=>['index','newProductPrice','addProductPrice','search','updateForm','update','deleteConfirm','delete'],
                    'Quotation'=>['index', 'newQuotation', 'addQuotation', 'search', 'updateForm', 'update', 'DeleteConfirm', 'delete']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages": $controller = new PagesController();
        break;
        case"ProductPrice": require_once("models/ProductPrice.php");
                            require_once("models/productModel.php");
                            $controller = new ProductController();
                            break;
        case"detail": require_once("models/detailModel.php");
                    require_once("models/quotationModel.php");
                    require_once("models/productModel.php");
                    $controller = new detailController();
                    break;
        case"Quotation": require_once("models/Quotation.php");
                         require_once("models/Employee.php");
                         require_once("models/Customer.php");
                         $controller = new QuotationController();
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