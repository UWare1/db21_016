<table border= 1>
    <tr><td> Qid </td> <td> PDid </td> <td> update </td> <td> delete </td>
    <?php 
        foreach($detailList as $detail){
        echo "<tr><td> $detail->QID</td>
                <td>$detail->Pd_id</td>
                <td> update </td> <td> delete </td>";
    }
    echo "</table>";
    ?>