<table border=2>
<tr> <td>PDid</td>
<td>PDname</td>
<td>minQty</td>
<td>Qty</td>
<td>price</td>
<td>screenPC</td>
<td>update</td>
<td>delete</td> </tr>
<?php foreach($productList as $ProductPrice) {
    echo "<tr><td>$ProductPrice->PDid</td>
    <td>$ProductPrice->PDname</td>
    <td>$ProductPrice->minQty</td>
    <td>$ProductPrice->Qty</td>
    <td>$ProductPrice->price</td>
    <td>$ProductPrice->screenPC</td>
    <td><a href=?controller=ProductPrice&action=updateForm&PDid=$indexProductPrice->PDid> update </a></td>
    <td><a href=?controller=ProductPrice&action=deleteConfirm&PDid=$indexProductPrice->PDid> delete </a></td>
    </tr>";
}

echo "</table>";

?>


