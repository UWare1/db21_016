<form method="get" action="">
<label>Product<select name="PDid">
    <option value=""> choose </option>
    <?php foreach($productList as $Pro)
        {echo "<option value= $Pro->pdid>$Pro->pdname</option>";}?>
        </select></label><br>
<label>minQty<input type="text" name="minQty"/></label><br>
<label>Qty<input type="text" name="Qty"/></label><br>
<label>Price<input type="text" name="price"/></label><br>
<label>screenPC<input type="text" name="screenPC"/></label><br>
<input type = "hidden" name="controller" value="ProductPrice"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="addProductPrice">Save</button>
</form>