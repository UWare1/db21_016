<style>
    .content-table {
        border-collapse: collapse;
        margin: auto;
        font-size: 0.9em;
        min-width: 500px;
        border-radius: 12px 12px 12px 12px;
        overflow: hidden;
        /*box-shadow: 0 0 8px rgba(10, 50, 50, 5);*/
    }

    .content-table thead tr {
        background-color: rgb(57, 57, 78);
        border-bottom: 1px rgb(57, 57, 78);
        border-left: 1px rgb(57, 57, 78);
        border-right: 1px rgb(57, 57, 78);
        color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }
    .content-table th ,
    .content-table td {
        padding: 12px 15px;
    }
    .content-table tbody tr {
        text-align: center;
        color: grey;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-bottom: 1px solid #f3f3f3;
        border-left: 1px solid #f3f3f3;
        border-right: 1px solid #f3f3f3;
    }
    .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }
    .content-table tbody tr:nth-of-type(odd) {
        background-color: #ffffff;
    }
    .content-table tbody tr:last-of-type {
        border-bottom: 5px solid rgb(57, 57, 78);
    }
    
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    
    input[type=text] {
        width: 10%;
        padding: 5px 8px;
        margin: 5px 0px;
        text-align: center;
        box-sizing: border-box;
        border: none;
        background-color: rgb(57, 57, 78);
        color: white;
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
ณัฐนรี คำเด่นเหล็ก 6220502086 <br>
NEW Quotation Detail [<a href="?controller=detail&action=newQuotation"> NEW </a>]

<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="detail">
    <button type="submit" name="action" value="search">
        Search</button>
</form>

<table class= "content-table" border= 2>
    <thead>
    <tr><td> Qid </td> <td> Product ID </td> <td> Product Name </td>  <td> Product Detail </td> 
    <td> Product Color </td> <td> QDqty </td> <td> numColor </td><td> UPDATE </td><td> DELETE </td></tr></thead>
    <tbody>
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
                <td><a href = ?controller=detail&action=delete_Confirm&Qid=$detail->QID&PDid=$detail->Pd_id&PDcolor=$detail->Pd_c> DELETE </td>
                </tr>";
    }
    echo "</table>";
    ?>
    </tbody>