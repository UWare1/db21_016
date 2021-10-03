UPDATE
<form method="get" action="">
    <?php echo "$d->Pd_id" ?> <br>
    <label> Quotation ID <select name="Qid">
        <?php foreach($quotationList as $quo) {
            echo "<option value=$quo->Q_ID";
            if($quo->Q_ID==$d->QID)
            {
                echo " selected='selected'";
            }
            echo "> $quo->Q_ID </option>";}?>
        </select>
    </label>
    <br>
    <label> Product ID <select name="PDid">
        <?php foreach($productList as $pro) {
            echo "<option value=$pro->pdid";
            if($pro->pdid==$d->Pd_id)
            {
                echo " selected='selected'";
            }
            echo "> $pro->pdid </option>";}?>
        </select>
    </label>
    <br>
    <label> Product Color <input type="text" name="PDcolor" value="<?php echo $d->Pd_c;?>"/></label>
    <br>
    <label> qty <input type="text" name="QDqty" value="<?php echo $d->qty;?>"/></label>
    <br>
    <label> num Color <input type="text" name="numColor" value="<?php echo $d->numc;?>"/></label>
    <br>
    <input type="hidden" name="controller" value="detail"/>
    <input type="hidden" name="x" value="<?php echo $d->QID; ?>"/>
    <input type="hidden" name="y" value="<?php echo $d->Pd_id; ?>"/>
    <input type="hidden" name="z" value="<?php echo $d->Pd_c; ?>"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="update"> UPDATE </button>

</form>