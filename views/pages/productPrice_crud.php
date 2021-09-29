<table border=2>
<tr> <td>PDid</td>
<td>minQty</td>
<td>Qty</td>
<td>price</td>
<td>screenPC</td>
<td>update</td>
<td>delete</td> </tr>
<?php foreach($productList as $ProductPrice) {
    echo "<tr><td>$ProductPrice->PDid</td>
    <td>$ProductPrice->minQty</td>
    <td>$ProductPrice->Qty</td>
    <td>$ProductPrice->price</td>
    <td>$ProductPrice->screenPC</td>
    <td>update</td>
    <td>delete</td> </tr>";
}

new ProductPrice<a href=?controller=ProductPrice&action=newProductPrice> click </a> <br>
echo "</table>";

?>