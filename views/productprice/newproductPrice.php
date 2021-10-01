<form method="get" action="">
<label>สินค้า<select name="PDid">
    <option value=""> choose </option>
    <?php foreach($productList as $ProductPrice)
        {echo "<option value= $ProductPrice->PDid>ชื่อ $ProductPrice->PDname รหัส $ProductPrice->PDid</option>";}?>
        </select></label><br>
<label>จำนวนขั้นต่ำ<input type="text" name="minQty"/></label><br>
<label>จำนวนมากสุด<input type="text" name="Qty"/></label><br>
<label>ราคา<input type="text" name="price"/></label><br>
<label>สกรีนเพิ่มสีละ<input type="text" name="screenPC"/></label><br>
<input type = "hidden" name="controller" value="ProductPrice"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="addProductPrice">Save</button>
</form>