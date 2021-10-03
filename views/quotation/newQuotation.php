<style>
    input[type=text], [type=number], [type=date] {
        width: 10%;
        padding: 5px 8px;
        margin: 5px 0px;
        text-align: center;
        box-sizing: border-box;
        border: none;
        background-color: rgb(57, 57, 78);
        color: white;
    }
    .dropbtn {
        background-color: rgb(57, 57, 78);
        color: white;
        padding: 4.5px 6.5px;
        border: none;
    }
    .left{
        width:110px;
        float:left;
        text-align:left;
    }
    .right{
        width:110px;
        float:right;
        text-align:right;
    }
    .button {
        padding: 5.75px 8px;
        text-align: center;
        text-decoration: none;
        font-size: 12px;
        margin: 0px 0px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: rgb(57, 57, 78); 
        color: white; 
        border: 2px solid rgb(57, 57, 78);
    }

    .button1:hover {
        background-color: white;
        color: rgb(57, 57, 78);
        border: 2px solid white;
    }
</style>

<form method="get" action="">
    
    <label>Quotation ID  :  <input type="number" name="QID"/> </label><br>
    <label>Quotation Date  :  <input type="date" name="QDate"/> </label><br>
    
    <label>Customer ID  :  <select class="dropbtn" name="CUSid">
        <?php 
            foreach($customerlist as $Customer){
                echo "<option value= $Customer->CUSid>
                $Customer->CUSid</option>";
            }
        ?>
    </select></label><br>
    <label>Employee ID  :  <select class="dropbtn" name="EMPid">
        <?php 
            foreach($employeelist as $Employee){
                echo "<option value= $Employee->EMPid>
                $Employee->EMPid</option>";
            }
        ?>
    </select></label><br>

    <label>Credit  :  <input type="number" name="Credit"/> </label><br>
    <label>Deposit  :  <input type="number" name="Deposit"/> </label><br>
    <label>Production  :  <input type="text" name="Production"/> </label><br>
    <label>DateProduction  :  <input type="date" name="DateProduction"/> </label><br>
    <label>Shipping  :  <input type="text" name="Shipping"/> </label><br>

    <input type="hidden" name="controller" value="Quotation"/>
    <button class="button button1" type="submit" name="action" value="index"> Back </button>
    <button class="button button1" type="submit" name="action" value="addQuotation"> ADD </button>
</form>