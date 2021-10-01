Hi
<form method="get" action="">

    <label> Quotation ID <select name="Qid">
        <?php foreach($quotationList as $quo) {echo "<option value=$quo->Q_ID> $quo->Q_ID </option>";}?>
        </select>
    </label>
    <br>
    <label> Product ID <select name="PDid">
        <?php foreach($productList as $pro) {echo "<option value=$pro->pdid> $pro->pdid </option>";}?>
        </select>
    </label>
    <br>
    <label> qty <input type="text" name="QDqty"/></label>

</form>