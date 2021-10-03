<?php
    echo "<br>Are you sure to Delete this Quotation<br>
          <br>Quotation ID  = $Quotation->QID Customer Name = $Quotation->CUSname<br>";
?>

<form method="get" action="">
    <input type="hidden" name="controller" value="Quotation"/>
    <input type="hidden" name="QID" value="<?php echo $Quotation->QID; ?>"/>
    <input type="hidden" name="QDate" value="<?php echo $Quotation->QDate; ?>"/>
    <input type="hidden" name="CUSid" value="<?php echo $Quotation->CUSid; ?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="delete"> Delete </button>
</form>