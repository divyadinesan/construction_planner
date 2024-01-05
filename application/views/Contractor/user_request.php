<?php
$this->load->view('Contractor/Layout/header');

?>

<br><br><br><br><br>
<br><br>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 35%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2 align="center">User Request</h2>
<br><br>

<div class="row">

<?php
foreach ($user_request as $fetch) {

?> 
  <div class="column">
    <div class="card">
      
      <br>
      <p style="color: BLACK;">Customer Name :<?php echo $fetch->customer_name?></p>
      <p style="color: BLACK;">Customer Phone :<?php echo $fetch->customer_phone?></p>
      <p style="color: BLACK;">House Description : <?php echo $fetch->cb_house_description?></p>
      <p style="color: BLACK;">Booking Status : <?php echo $fetch->cb_booking_status?></p>
      
      <?php
      if($fetch->cb_booking_status=='Approved' and $fetch->cb_payment_status=='Payed')
      {
      ?>
       <p style="color: BLACK;">Payment Status : <?php echo $fetch->cb_payment_status?></p>
        <form style="background-color: grey" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Contractor_controller/construction_cost_details_pdf')?>">
        <br>
        <label style="color: black"><b>upload Construction Cost Details</b></label><br><br>
        <input type="hidden" name="contractor_booking_id" value="<?php echo $fetch->contractor_booking_id?>">
        <input type="file" name="cost_detail_pdf">
        <input type="submit" name="" style="background-color: black;color: white"><br><br>
       </form>
       <?php
   }
   ?>
 
   <p style="color: BLACK;">House Plan : <br><object data="<?php echo base_url('Asset/Customer/contractor_house_plan/'.$fetch->cb_house_plan)?>" type="application/pdf" width="300" height="500">

</object></p>
 <p style="color: BLACK;">3D Plan : <br><object data="<?php echo base_url('Asset/Customer/contractor_3dhouse_plan/'.$fetch->cb_house_3d)?>" type="application/pdf" width="300" height="500">

</object></p>

      <br>
      <?php
      if($fetch->cb_booking_status=='Pending')
      {
      ?>
      <div>
      <a href="<?php echo base_url('index.php/Contractor_controller/contractor_user_approve/'.$fetch->contractor_booking_id)?>"><BUTTON style="width: 100px;background-color: green;color:white;border-radius: 10px">APPROVE</BUTTON></a>
      <a href="<?php echo base_url('index.php/Contractor_controller/contractor_user_reject/'.$fetch->contractor_booking_id)?>"><BUTTON style="width: 100px;background-color: red;color:white;border-radius: 10px">REJECT</BUTTON></a>
      	</div>
      	<?php
      }
      ?>
      <br>
     
    </div>

  </div>
 <?php
}
?> 


 
</div>

</body>
</html>

<br><br><br>



<?php
$this->load->view('Contractor/Layout/footer');

?>
