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
<html>
    <body>
        New Quotation : <a href="?controller=Quotation&action=newQuotation">Click </a><br>
        <form method="get" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="Quotation">
            <button class="button button1" type="submit" name="action" value="search">
                Search</button>
        </form>
    </body>
</html>
<table class= "content-table" border= 2>
    <thead>
    <tr>
        <td> Quotation ID </td> 
        <td> Quotation Date </td>  
        <td> Customer ID </td> 
        <td> Customer Name </td> 
        <td> Employee ID </td> 
        <td> Employee Name </td>
        <td> Credit </td> 
        <td> Deposit </td>
        <td> Production </td>
        <td> DateProduction </td>
        <td> Shipping </td>
        <td> Update </td>
        <td> Delete </td> </tr></thead>
    <tbody>
    <?php 
        foreach($quotationlist as $Quotationas){
            echo "
                    <tr>
                    <td>$Quotationas->QID</td>
                    <td>$Quotationas->QDate</td>
                    <td>$Quotationas->CUSid</td>
                    <td>$Quotationas->CUSname</td>
                    <td>$Quotationas->EMPid</td>
                    <td>$Quotationas->EMPname</td>
                    <td>$Quotationas->Credit</td>
                    <td>$Quotationas->Deposit</td>
                    <td>$Quotationas->Production</td>
                    <td>$Quotationas->DateProduction</td>
                    <td>$Quotationas->Shipping</td>
                    <td> <a href=?controller=Quotation&action=updateForm&QID=$Quotationas->QID>
                         Update </a></td>
                    <td> <a href=?controller=Quotation&action=DeleteConfirm&QID=$Quotationas->QID>
                         Delete </a></td>
                </tr>";
        }
        echo "</table>";
    ?>
    </tbody>

