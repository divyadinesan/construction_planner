<?php
$this->load->view('Designer/Layout/header');
?>


<br><br><br><br>
<br><br><br>
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

<h2 align="center"><b>3D</b></h2>

<br><br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Customer Name</th>
      <th>House Plan</th>
      <th>3D Plan</th>
    <!--   <th>Upload Updated Plan</th> -->
     
    </tr>
    <?php
    $i=1;
    foreach ($three_d_booking as $fetch) {
    
    ?>
    <tr>
      <td style="color:black"><?php echo $i?></td>
      <td style="color:black"><?php echo $fetch->customer_name?></td>
      <td style="color:black"><object data="<?php echo base_url('Asset/Designer/house_plan_for_3d/'.$fetch->db_house_plan)?>" type="application/pdf" width="300" height="500">

</object></td>
 <td style="color:black"><object data="<?php echo base_url('Asset/Designer/3d_design/'.$fetch->db_3d_plan)?>" type="application/pdf" width="300" height="500">

</object></td>
     
      
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
$this->load->view('Designer/Layout/footer');

?>
