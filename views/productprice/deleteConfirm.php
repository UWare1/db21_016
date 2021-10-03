<?php echo "<br>Are you sure to delete this product<br>
            <br>PDid: $ProductPrice->PDid, Pdname: $ProductPrice->PDname, minQty: $ProductPrice->minQty,
            Qty: $productPrice->Qty, Price: $ProductPrice->price, screenPC: $ProductPrice->screenPC<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="ProductPrice"/>
    <input type="hidden" name="PDid" value="<?php echo $ProductPrice->PDid;?>"/>
    <input type="hidden" name="minQty" value="<?php echo $ProductPrice->minQty;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="delete"> Delete </button>
</form>