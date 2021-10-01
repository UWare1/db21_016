Hi
<form method="get" action="">

    <label> Quotation ID <select name="Qid">
        <?php foreach($quotationList as $quo) {echo "<option value=$quo->QID> $quo->QID </option>";}?>
        </select>
    </label>
    <br>
    <label> Product ID <select name="PDid">
        <?php foreach($productList as $pro) {echo "<option value=$pro->pdid> $quo->pdid </option>";}?>
        </select>
    </label>
    <br>
    <label> qty <input type="text" name="QDqty"/></label>

</form>