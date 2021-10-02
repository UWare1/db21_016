<table border= 2>
    <tr>
        <td> Quotation ID </td> 
        <td> Quotation Date </td>  
        <td> Customer ID </td> 
        <td> Customer Name </td> 
        <td> Employee ID </td> 
        <td> Employee Name </td>
        <td> Credit </td> 
        <td> Deposit </td>
        <td> Update </td>
        <td> Delete </td> </tr>
    <?php 
        foreach($quotationlist as $Quotationas){
            echo "<tr>
                    <td>$Quotationas->QID</td>
                    <td>$Quotationas->QDate</td>
                    <td>$Quotationas->CUSid</td>
                    <td>$Quotationas->CUSname</td>
                    <td>$Quotationas->EMPid</td>
                    <td>$Quotationas->EMPname</td>
                    <td>$Quotationas->Credit</td>
                    <td>$Quotationas->Deposit</td>
                    <td> <a href=?controller=Quotation&action=updateForm&QID=$Quotationas->Qid>
                         Update </a></td>
                    <td> <a href=?controller=Quotation&action=DeleteConfirm&QID=$Quotationas->Qid>
                         Delete </a></td>
                </tr>";
        }
        echo "</table>";
    ?>