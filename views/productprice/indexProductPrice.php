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
        background-color: rgb(255, 244, 128);
        border-bottom: 1px rgb(255, 255, 255);
        border-left: 1px rgb(255, 255, 255);
        border-right: 1px rgb(255, 255, 255);
        color: #39394e;
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
                Welcome to นางสาวมนัญชยา ไวทยกุล รหัสนิสิต 6220503325<br>
                New ProductPrice<a href="?controller=ProductPrice&action=newProductPrice"> click!! </a><br>
                <form method="get" action="">
                        <input type="text" name="key">
                        <input type="hidden" name="controller" value="ProductPrice"/>
                        <button type="submit" name="action" value="search">
                        Search</button>
        </body></form>
</html>
<table class= "content-table" border=2>
<thead>
<tr> <td>PDid</td>
<td>PDname</td>
<td>minQty</td>
<td>Qty</td>
<td>price</td>
<td>screenPC</td>
<td>update</td>
<td>delete</td> </tr></thead>
<tbody>
<?php foreach($ProductList as $ProductPrice) {
    echo "<tr><td>$ProductPrice->PDid</td>
    <td>$ProductPrice->PDname</td>
    <td>$ProductPrice->minQty</td>
    <td>$ProductPrice->Qty</td>
    <td>$ProductPrice->price</td>
    <td>$ProductPrice->screenPC</td>
    <td><a href=?controller=ProductPrice&action=updateForm&PDid=$ProductPrice->PDid&minQty=$ProductPrice->minQty> update </a></td>
    <td><a href=?controller=ProductPrice&action=deleteConfirm&PDid=$ProductPrice->PDid&minQty=$ProductPrice->minQty> delete </a></td>
    </tr>";
}

echo "</table>";

?>
</tbody>


