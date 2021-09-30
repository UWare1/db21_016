<?php echo "<br>Are you sure to delete this product<br>
            <br>$productPrice->PDid $productPrice->minQty $productPrice->Qty 
            $productPrice->price $productPrice->screenPC<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="productPrice"/>
    <input type="hidden" name="PDid" value="<?php echo $productPrice->PDid;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="delete"> Delete </button>
</form>