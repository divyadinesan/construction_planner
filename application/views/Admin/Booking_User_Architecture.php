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

<h2 align="center">User Architecture Booking Details</h2><br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
    	<th>Sl.No</th>
       <th>Architecture Name</th>
      <th>Customer Name</th>
      <th>House Description</th>
      <th>House Plan</th>
      <th>Booking Status</th>
      <th>Payment Status</th>
      
    </tr>
   
  <?php
  $i=1;
  foreach ($user_architecture as $fetch) 
  {
  
  ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $fetch->a_name?></td>
      <td><?php echo $fetch->customer_name?></td>
      <td><?php echo $fetch->ab_house_description?></td>
      <td><object data="<?php echo base_url('Asset/Architecture/House_plan/'.$fetch->house_plan)?>" type="application/pdf" width="300" height="500">

</object></td>
      <td><?php echo $fetch->ab_booking_status?></td>
      <td><?php echo $fetch->ab_payment_status?></td>
     
      
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