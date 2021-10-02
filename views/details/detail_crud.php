Hi all
<table border= 2>
    <tr><td> Qid </td> <td> Product ID </td> <td> Product Name </td>  <td> Product Detail </td> 
    <td> Product Color </td> <td> QDqty </td> <td> numColor </td><td> update </td><td> Delete </td></tr>
    <?php 
        foreach($detailList as $detail){
        echo "<tr><td> $detail->QID</td>
                <td>$detail->Pd_id</td>
                <td>$detail->Pd_name</td>
                <td>$detail->Pd_d</td>
                <td>$detail->Pd_c</td>
                <td>$detail->qty</td>
                <td>$detail->numc</td>
                <td><a href = ?controller=detail&action=updateForm&Qid=$detatail->QID> UPDATE </td>
                <td>Delete</td>
                </tr>";
    }
    echo "</table>";
    ?>