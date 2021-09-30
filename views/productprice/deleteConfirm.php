<?php echo "<br>Are you sure to delete this product<br>
            <br>$ProductPrice->PDid $ProductPrice->minQty $productPrice->Qty 
            $ProductPrice->price $ProductPrice->screenPC<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="ProductPrice"/>
    <input type="hidden" name="PDid" value="<?php echo $ProductPrice->PDid;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="delete"> Delete </button>
</form>