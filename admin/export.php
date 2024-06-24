<?php
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=file.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
require("connection.php");
$output = "";
	
	$output .="
		<table>
			<thead>
				<tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Type</th>
                <th>Discount</th>
                <th>Available Colors</th>
                <th>Product Image</th>
				</tr>
			<tbody>
	";
	
	$res=$con->query("SELECT * FROM `form`") ;
	while ($row = $res->fetch_assoc()){
		
	$output .= "
				<tr>
					<td>".$row['Proname']."</td>
					<td>".$row['Proprice']."</td>
					<td>".$row['Type']."</td>
					<td>".$row['Discount']."</td>
					<td>".$row['Color']."</td>
                    <td>".$row['Image']."</td>
				</tr>
	";
	}
	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>
