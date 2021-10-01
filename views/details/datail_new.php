<form method="get" action="">
    <label> Quotation ID <select name="Qid">
        <?php foreach($quotationList as $quo) {echo "<option value=$quo->QID> $quo->QID </option>";}?>
        </select>
    </label>
    <label> Product ID <select name="PDid">
        <?php foreach($ProductList as $pro) {echo "<option value=$pro->pdid> $quo->pdid </option>";}?>
        </select>
    </label>