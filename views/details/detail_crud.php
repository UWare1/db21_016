<table border= 2>
    <tr><td> Qid </td> <td> Product ID </td> <td> Product Color </td> <td> QDqty </td>
    <td> numColor </td><td> update </td><td> Delete </td></tr>
    <?php 
        foreach($detailList as $detail){
        echo "<tr><td> $detail->QID</td>
                <td>$detail->Pd_id</td>
                <td>$detail->Pd_c</td>
                <td>$detail->qty</td>
                <td>$detail->numc</td>
                <td>Update</td>
                <td>Delete</td>
                </tr>";
    }
    echo "</table>";
    ?>