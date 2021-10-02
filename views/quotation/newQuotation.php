<form method="get" action="">
    
    <label>Quotation ID  :  <input type="text" name="QID"/> </label><br>
    <label>Quotation Date  :  <input type="date" name="QDate"/> </label><br>
    <label>Customer ID  :  <select name="CUSid">
        <?php 
            foreach($customerlist as $Customer){
                echo "<option value= $Customer->CUSid>
                $Customer->CUSid</option>";
            }
        ?>
    </select></label><br>
    <label>Employee ID  :  <select name="EMPid">
        <?php 
            foreach($employeelist as $Employee){
                echo "<option value= $Employee->EMPid>
                $Employee->EMPid</option>";
            }
        ?>
    </select></label><br>
    <label>Credit  :  <input type="text" name="Credit"/> </label><br>
    <label>Deposit  :  <input type="text" name="Deposit"/> </label><br>
    <label>Production  :  <input type="text" name="Production"/> </label><br>
    <label>DateProduction  :  <input type="text" name="DateProduction"/> </label><br>
    <label>Shipping  :  <input type="text" name="Shipping"/> </label><br>


<input type="hidden" name="controller" value="Quotation"/>
<button type="submit" name="action" value="index"> Back </button>
<button type="submit" name="action" value="addQuotation"> ADD </button>
</form>