<table border= 2>
    <tr>
        <td> Qid </td> 
        <td> QDate </td> 
        <td> Product ID </td> 
        <td> Product Name </td>  
        <td> CUSid </td> 
        <td> CUSname </td> 
        <td> EMPid </td> 
        <td> EMPname </td>
        <td> Update </td>
        <td> Delete </td> </tr>
    <?php 
        foreach($quotationlist as $Quotationas){
            echo "<tr>
                    <td>$Quotationas->QID</td>
                    <td>$Quotationas->QDate</td>
                    <td>$Quotationas->PDid</td>
                    <td>$Quotationas->PDname</td>
                    <td>$Quotationas->CUSid</td>
                    <td>$Quotationas->CUSname</td>
                    <td>$Quotationas->EMPid</td>
                    <td>$Quotationas->EMPname</td>
                    <td> <a href=?controller=Quotation&action=updateForm&QID=$Quotationas->Qid>
                         Update </a></td>
                    <td> <a href=?controller=Quotation&action=DeleteConfirm&QID=$Quotationas->Qid>
                         Delete </a></td>
                </tr>";
        }
        echo "</table>";
    ?>