<?php echo "<br>Are you sure to delete this product<br>
            <br>PDid: $ProductPrice->PDid, minQty: $ProductPrice->minQty,
            Qty: $ProductPrice->Qty, Price: $ProductPrice->price, screenPC: $ProductPrice->screenPC<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="ProductPrice"/>
    <input type="hidden" name="PDid" value="<?php echo $ProductPrice->PDid;?>"/>
    <input type="hidden" name="MinQty" value="<?php echo $ProductPrice->minQty;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="delete"> Delete </button>
</form>