<table border= 1>
    <tr><td> Qid </td> <td> Product ID </td> <td> Product Color </td> <td> QDqty </td>
    <td> numColor </td> <td> update </td> <td> delete </td>
    <?php 
        foreach($detailList as $detail){
        echo "<tr><td> $detail->QID</td>
                <td>$detail->Pd_id</td>
                <td>$detail->Pd_color</td>
                <td>$detail->qty</td>
                <td>$detail->num_c</td>
                <td> update </td> <td> delete </td>";
    }
    echo "</table>";
    ?>