DELETE
<?php 
echo "<br> Are you sure to delete this quotation detail<br>
    <br> $d->QID $d->Pd_id $d->Pd_c<br>";
?>

<form method="get" action="">
    <input type="hidden" name="controller" value="detail"/>
    <input type="hidden" name="x" value="<?php echo $d->QID; ?>"/>
    <input type="hidden" name="y" value="<?php echo $d->Pd_id; ?>"/>
    <input type="hidden" name="z" value="<?php echo $d->Pd_c; ?>"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="delete"> DELETE </button>
</form>