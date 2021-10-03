<style>
    input[type=text], [type=number] {
        width: 10%;
        padding: 5px 8px;
        margin: 5px 0px;
        text-align: center;
        box-sizing: border-box;
        border: none;
        background-color: rgb(57, 57, 78);
        color: white;
    }
</style>

<form method="get" action="">
    
    <label>Quotation ID  :  <input type="number" name="QID"
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

    <!--<label>Customer Name  :  <input type="text" name="CUSname"
        value="<?php echo $Quotation->CUSname;?>"/> </label><br>-->
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
    <!--<label>Employee Name  :  <input type="text" name="EMPname"
        value="<?php echo $Quotation->EMPname;?>"/> </label><br>-->
    <label>Credit  :  <input type="number" name="Credit"
        value="<?php echo $Quotation->Credit;?>"/> </label><br>
    <label>Deposit  :  <input type="number" name="Deposit"
        value="<?php echo $Quotation->Deposit;?>"/> </label><br>
    <label>Production  :  <input type="text" name="Production"
        value="<?php echo $Quotation->Production;?>"/> </label><br>
    <label>DateProduction  :  <input type="date" name="DateProduction"
        value="<?php echo $Quotation->DateProduction;?>"/> </label><br>
    <label>Shipping  :  <input type="text" name="Shipping"
        value="<?php echo $Quotation->Shipping;?>"/> </label><br>
<input type="hidden" name="controller" value="Quotation"/>
<button type="submit" name="action" value="index"> Back </button>
<button type="submit" name="action" value="update"> Update </button>
</form>