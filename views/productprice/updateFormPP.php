<form method="get" action="">
    <label>รหัสสินค้า<select name="PDid">
        <option value=""> choose </option>
        <?php foreach($productList as $ProductPrice)
            {echo "<option value= $ProductPrice->PDid>";
                if($ProductPrice->PDid==$ProductPrice->PDid) {echo "selected='selected'";}
                echo ">$ProductPrice->PDid</option>";
            }?>
    </select></label><br>
<input type="hidden" name="controller" value="ProductPrice"/>
<button type="submit" name="action" value="index"> Back </button>
<button type="submit" name="action" value="update"> update </button>
</form>