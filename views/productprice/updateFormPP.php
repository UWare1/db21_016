<form method="get" action="">
    <label>Product<select name="PDid">
        <option value=""> choose </option>
        <?php foreach($productList as $ProPrice)
            {echo "<option value= $ProPrice->pdid>";
                if($ProPrice->pdid==$ProductPrice->PDid) 
                {echo "selected='selected'";}
                echo " $ProPrice->pdname</option>";
            }?>
    </select></label><br>
    <label>minQty<input type="text" name="minQty"
        value="<?php echo $ProductPrice->minQty;?>"/></label><br>
    <label>Qty<input type="text" name="Qty"
        value="<?php echo $ProductPrice->Qty;?>"/></label><br>
    <label>Price<input type="text" name="price"
        value="<?php echo $ProductPrice->price;?>"/> </label><br>
    <label>screenPC<input type="text" name="screenPC"
        value="<?php echo $ProductPrice->screenPC;?>"/></label><br>
<input type="hidden" name="controller" value="ProductPrice"/>
<input type="hidden" name="PDid" value="<?php echo $ProductPrice->PDid;?>"/>
<button type="submit" name="action" value="index"> Back </button>
<button type="submit" name="action" value="update"> update </button>
</form>