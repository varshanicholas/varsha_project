<?php
ob_start();

function generateRow(){
	require('connection.php');
		$contents = '';
	 	
		$res=$con->query("select * from `form` ");
		
		
			while($row=$res->fetch_assoc())
			{
			
			$file=$row['Image'];
                      
	      	
			$contents .= '
			<tr>
				<td>'.$row['Proname'].'</td>
				<td>'.$row['Proprice'].'</td>
				<td>'.$row['Type'].'</td>
				<td>'.$row['Discount'].'</td>
				<td>'.$row['Color'].'</td>
				
				<td><img src="pic/'.$file.'" width="50" height="50"></td>
				
			</tr>
			';
		}

		
		return $contents;
	}
		

	
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
      
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	

      		
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
		   <th>Product Name</th>
		   <th>Product Price</th>
		   <th>Product Type</th>
		   <th>Discount</th>
		   <th>Available Colors</th>
		   <th>Product Image</th>
		   </tr>
			
			
           </tr>  
      ';  
   $content .= generateRow(); 
    $content .= '</table>';  
    $pdf->writeHTML($content);  
	ob_end_clean();
    $pdf->Output('Report.pdf', 'I');


?>