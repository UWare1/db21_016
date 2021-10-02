<form method="get" action="">
    <label>Quotation ID<select name="QID">
        <?php 
            foreach($quotationlist as $Quotation){
                echo "<option value= $Quotation->Qid>";
                if($Quotation->Qid==$Quotation->Qid){
                    echo "selected='selected'";
                } else
                    echo ">$Quotation->Qid</option>";
            }
        ?>
    </select></label><br>

    <label>QDate<input type="date" name="QDate"
        value="<?php echo $Quotation->QDate;?>"/> </label><br>
    <label>Product ID<input type="text" name="PDid"
        value="<?php echo $Quotation->PDid;?>"/> </label><br>
    <label>Product Name<input type="text" name="PDname"
        value="<?php echo $Quotation->PDname;?>"/> </label><br>
    <label>CUSid<select name="CUSid">
        <?php 
            foreach($quotationlist as $Quotation){
                echo "<option value= $Quotation->CUSid>";
                ##if($Quotation->CUSid==$Employee->CUSid){
                    ##echo "selected='selected'";
                #} else
                    #echo ">$Quotation->CUSid</option>";
            }
        ?>
        <!--<output name="CUSname" aria-valuetext="<?php echo $Quotation->CUSname;?>"></output>-->
    </select></label><br>

    <label>CUSname<input type="text" name="CUSnamee"
        value="<?php echo $Quotation->CUSname;?>"/> </label><br>
    <label>EMPid<input type="text" name="price"
        value="<?php echo $Quotation->EMPid;?>"/> </label><br>
    <label>EMPname<input type="text" name="EMPname"
        value="<?php echo $Quotation->EMPname;?>"/> </label><br>
<input type="hidden" name="controller" value="Quotation"/>
<button type="submit" name="action" value="index"> Back </button>
<button type="submit" name="action" value="update"> Update </button>
</form>