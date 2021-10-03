ณัฐนรี คำเด่นเหล็ก 6220502086 <br>
NEW Quotation Detail [<a href="?controller=detail&action=newQuotation"> NEW </a>]

<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="detail">
    <button type="submit" name="action" value="search">
        Search</button>
</form>

<table border= 2>
    <tr><td> Qid </td> <td> Product ID </td> <td> Product Name </td>  <td> Product Detail </td> 
    <td> Product Color </td> <td> QDqty </td> <td> numColor </td><td> UPDATE </td><td> DELETE </td></tr>
    <?php 
        foreach($detailList as $detail){
        echo "<tr><td> $detail->QID</td>
                <td>$detail->Pd_id</td>
                <td>$detail->Pd_name</td>
                <td>$detail->Pd_d</td>
                <td>$detail->Pd_c</td>
                <td>$detail->qty</td>
                <td>$detail->numc</td>
                <td><a href = ?controller=detail&action=updateForm&Qid=$detail->QID> UPDATE </td>
                <td> DELETE </td>
                </tr>";
    }
    echo "</table>";
    ?>