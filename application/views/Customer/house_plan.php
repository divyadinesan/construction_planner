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

<h2 align="center">House Plan</h2>

<br><br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Architecture Name</th>
      <th>House Description</th>
      <th>House Plan</th>
       <?php
   
    foreach ($house_plan as $hse_pln) 
    if($hse_pln->house_plan!='Pending')
    {
    ?>
    <th>Express your Experience</th>
    <?php
  }
  ?>
      
     
    </tr>
    <?php
    $i=1;
    foreach ($house_plan as $fetch) {
    
    ?>
    <tr>
      <td style="color:black"><?php echo $i?></td>
      <td style="color:black"><?php echo $fetch->a_name?></td>
      <td style="color:black"><?php echo $fetch->ab_house_description?></td>
      <td style="color:black"><object data="<?php echo base_url('Asset/Architecture/House_plan/'.$fetch->house_plan)?>" type="application/pdf" width="300" height="500">

</object></td>
<?php
if($fetch->house_plan!='Pending')
{
?>
<form method="post" action="<?php echo base_url('index.php/Customer_controller/architecture_reviewinsert')?>">
        <td>
          <input type="text" name="review" placeholder="Enter Your Experience"><br><br>
           <select name="rating" style="background-color: black;height: 50px;width:150px">
                           <option value="☆☆☆☆☆">🌟🌟🌟🌟🌟</option>
                           <option value="☆☆☆☆">🌟🌟🌟🌟✩</option>
                           <option value="☆☆☆">🌟🌟🌟✩✩</option>
                           <option value="☆☆">🌟🌟✩✩✩</option>
                           <option value="☆">🌟✰✩✩✩</option>

                           
                           
                        </select><br>
                       
                        <input type="hidden" name="customer_id" value="<?php echo $fetch->ab_customer_id?>">
                        <input type="hidden" name="customer_email" value="<?php echo $fetch->ab_customer_email?>">
                        <input type="hidden" name="architecture_id" value="<?php echo $fetch->ab_architecture_id?>">
                         <input type="hidden" name="architecture_email" value="<?php echo $fetch->ad_architecture_email?>">
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