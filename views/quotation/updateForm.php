<form method="get" action="">
    
    <label>Quotation ID  :  <input type="text" name="QID"
        value="<?php echo $Quotation->QID;?>"/> </label><br>
    <label>Quotation Date  :  <input type="date" name="QDate"
        value="<?php echo $Quotation->QDate;?>"/> </label><br>
    <label>Customer ID  :  <select name="CUSid">
        <?php 
            foreach($customerlist as $Customer){
                echo "<option value= $Customer->CUSid";
                if($Customer->CUSid==$Quotation->CUSid){
                    echo "selected='selected'";
                }
                echo ">$Customer->CUSid</option>";
            }
        ?>
    </select></label><br>

    <label>Customer Name  :  <input type="text" name="CUSname"
        value="<?php echo $Quotation->CUSname;?>"/> </label><br>
    <label>Employee ID  :  <select name="EMPid">
        <?php 
            foreach($employeelist as $Employee){
                echo "<option value= $Employee->EMPid";
                if($Employee->EMPid==$Quotation->EMPid){
                    echo "selected='selected'";
                }
                echo ">$Employee->EMPid</option>";
            }
        ?>
    </select></label><br>
    <label>Employee Name  :  <input type="text" name="EMPname"
        value="<?php echo $Quotation->EMPname;?>"/> </label><br>
    <label>Credit  :  <input type="text" name="Credit"
        value="<?php echo $Quotation->Credit;?>"/> </label><br>
    <label>Deposit  :  <input type="text" name="Deposit"
        value="<?php echo $Quotation->Deposit;?>"/> </label><br>
<input type="hidden" name="controller" value="Quotation"/>
<button type="submit" name="action" value="index"> Back </button>
<button type="submit" name="action" value="update"> Update </button>
</form>