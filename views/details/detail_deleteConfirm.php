<?php
echo "<br> Are you sure to delete this quotation detail<br>
        <br> $detail->QID $detail->Pd_id  $detail->Pd_c $detail->qty $detail->numc <br>";
?>

<form method="get" action="">
    <input type="hidden" name="controller" value="detail"/>
    <input type="hidden" name="Qid" value="<?php echo $detaill->QID; ?>"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="delete"> DELETE </button>
</form>