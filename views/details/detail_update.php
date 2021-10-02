UPDATE
<form method="get" action="">

    <label> Quotation ID <select name="Qid">
        <?php foreach($quotationList as $quo) {
            echo "<option value=$quo->Q_ID";
            if($quo->Q_ID==$detaill->QID)
            {
                echo "selected='selected'";
            }
            echo"> $quo->Q_ID </option>";}?>
        </select>
    </label>
    <br>
    <label> Product ID <select name="PDid">
        <?php foreach($productList as $pro) {
            echo "<option value=$pro->pdid";
            if($pro->pdid==$detaill->Pd_id)
            {
                echo "selected='selected'";
            }
            echo"> $pro->pdid </option>";}?>
        </select>
    </label>
    <br>
    <label> Product Color <input type="text" name="PDcolor" value="<?php echo $detaill->Pd_c;?>"/></label>
    <br>
    <label> qty <input type="text" name="QDqty" value="<?php echo $detaill->qty;?>"/></label>
    <br>
    <label> num Color <input type="text" name="numColor" value="<?php echo $detaill->numc;?>"/></label>
    <br>
    <input type="hidden" name="controller" value="detail"/>
    <input type="hidden" name="id" value="<?php echo $order->id_order_cus; ?>"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="update"> SAVE </button>

</form>