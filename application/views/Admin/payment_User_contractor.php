<?php
$this->load->view('Admin/Layout/admin_header.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<h2 align="center">User - Contactor Payment Details</h2><br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
    	<th>Sl.No</th>
       <th>Contractor Name</th>
      <th>Customer Name</th>
      <th>Card Name</th>
      <th>Card Number</th>
      <th>Expiry Date</th>
      <th>Amount</th>
      
    </tr>
   
  <?php
  $i=1;
  foreach ($user_contractor as $fetch) 
  {
  
  ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $fetch->c_name?></td>
      <td><?php echo $fetch->customer_name?></td>
      <td><?php echo $fetch->card_name?></td>
      <td><?php echo $fetch->card_number?></td>
      <td><?php echo $fetch->expiry_date?></td>
      <td>₹<?php echo $fetch->amount?></td>
     
      
    </tr>
    <?php
    $i++;
	}
	?>
  </table>
</div>

</body>
</html>

<?php
$this->load->view('Admin/Layout/admin_footer.php');
?>