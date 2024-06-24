<?php
require("connection.php");
$res = $con->query("SELECT * FROM `table_view`");
$count=$res->num_rows;
?>
<table>
    <thead>
        <tr>
        <th>Product Name</th>
        <th>Product price</th>	
        <th>Product type</th>
        <th>Discount</th>
        <th>Available colors</th>
        <th>product image</th>	
</tr>		
</thead>
 <?php
 if($count>0)
 {
    while($row=res->fetch_assoc());

 {
?>
<tr>
    <td><?php echo $row["Product Name,,,t,Available colors,	"]; ?></td>

    <td><?php echo $row["Product price"];?></td>
    <td><?php echo $row["Product type"];?></td>
    <td><?php echo $row["Discount"];?></td>
    <td><?php echo $row["Available colors"];?></td>
    <td><?php echo $row["product image"];?></td>
</tr>
<?php
}

}?> </table>