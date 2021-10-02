Hi NEW
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
    <label> Product Color <input type="text" name="PDcolor"/></label>
    <br>
    <label> qty <input type="text" name="QDqty"/></label>
    <br>
    <label> num Color <input type="text" name="numColor"/></label>
    <br>
    <input type="hidden" name="controller" value="detail"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="addDetail"> SAVE </button>

</form>