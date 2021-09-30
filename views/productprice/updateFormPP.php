<form method="get" action="">
    <label>รหัสสินค้า<select name="PDid">
        <option value=""> choose </option>
        <?php foreach($productList as $ProPrice)
            {echo "<option value= $ProductPrice->PDid>";
                if($ProPrice->PDid==$ProductPrice->PDid) {echo "selected='selected'";}
                echo ">$ProPrice->name</option>";
            }?>
    </select></label><br>
    <label>จำนวนขั้นต่ำ<input type="text" name="minQty"
        value="<?php echo $ProductPrice->minQty;?>"/> </label><br>
    <label>จำนวนมากสุด<input type="text" name="Qty"
        value="<?php echo $ProductPrice->Qty;?>"/> </label><br>
    <label>ราคา<input type="text" name="price"
        value="<?php echo $ProductPrice->price;?>"/> </label><br>
    <label>สกรีนเพิ่มสีละ<input type="text" name="screenPC"
        value="<?php echo $ProductPrice->screenPC;?>"/> </label><br>
<input type="hidden" name="controller" value="ProductPrice"/>
<button type="submit" name="action" value="index"> Back </button>
<button type="submit" name="action" value="update"> update </button>
</form>