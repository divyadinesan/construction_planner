<?php
$this->load->view('Customer/Layout/header');
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
      <th>Designer Name</th>
      <th>House Plan</th>
      <th>3D Plan</th>
       <?php
   
   foreach ($house_3d_plan as $h_3d) 
    if($h_3d->db_3d_plan!='Pending')
    {
    
    ?>
    <th>Express your Experience</th>
    <?php
  }
  ?>
      
     
    </tr>
    <?php
    $i=1;
    foreach ($house_3d_plan as $fetch) {
    
    ?>
    <tr>
      <td style="color:black"><?php echo $i?></td>
      <td style="color:black"><?php echo $fetch->d_name?></td>
      <td style="color:black"><object data="<?php echo base_url('Asset/Designer/house_plan_for_3d/'.$fetch->db_house_plan)?>" type="application/pdf" width="300" height="500">

</object></td>
 <td style="color:black"><object data="<?php echo base_url('Asset/Designer/3d_design/'.$fetch->db_3d_plan)?>" type="application/pdf" width="300" height="500">

</object></td>

<?php
if($fetch->db_3d_plan!='Pending')
{
?>
<form method="post" action="<?php echo base_url('index.php/Customer_controller/designer_reviewinsert')?>">
        <td>
          <input type="text" name="review" placeholder="Enter Your Experience"><br><br>
           <select name="rating" style="background-color: black;height: 50px;width:150px">
                           <option value="☆☆☆☆☆">🌟🌟🌟🌟🌟</option>
                           <option value="☆☆☆☆">🌟🌟🌟🌟✩</option>
                           <option value="☆☆☆">🌟🌟🌟✩✩</option>
                           <option value="☆☆">🌟🌟✩✩✩</option>
                           <option value="☆">🌟✰✩✩✩</option>

                           
                           
                        </select><br>
                       
                        <input type="hidden" name="customer_id" value="<?php echo $fetch->db_customer_id?>">
                        <input type="hidden" name="customer_email" value="<?php echo $fetch->db_customer_email?>">
                        <input type="hidden" name="designer_id" value="<?php echo $fetch->db_designer_id?>">
                         <input type="hidden" name="designer_email" value="<?php echo $fetch->db_designer_email?>">
                          <input type="submit" name="">
                        </td>
       </form>

<?php
}
?>
    
      
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
$this->load->view('Customer/Layout/footer');

?>