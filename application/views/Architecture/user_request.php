<?php
$this->load->view('Architecture/Layout/architecture_header');
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
      <p style="color: BLACK;">House Description : <?php echo $fetch->ab_house_description?></p>
      <p style="color: BLACK;">Booking Status : <?php echo $fetch->ab_booking_status?></p>
      <?php
      if($fetch->ab_booking_status=='Approved')
      {
      ?>
       <p style="color: BLACK;">Payment Status : <?php echo $fetch->ab_payment_status?></p>
       <?php
   }
   ?>
   <?php
      if($fetch->ab_payment_status=='Payed')
      {
      ?>
      <br>
       <form style="background-color: grey" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Architecture_controller/architecture_house_plan')?>">
       	<br>
       	<label style="color: black"><b>Upload House Plan (pdf)</b></label><br><br>
        <input type="hidden" name="architecture_booking_id" value="<?php echo $fetch->architecture_booking_id?>">
       	<input type="file" name="plan"><br></br>
       	<input type="submit" name="" style="background-color: black;color: white"><br><br>
       </form>
       <?php
   }
   ?>
      <br>
      <?php
      if($fetch->ab_booking_status=='Pending')
      {
      ?>
      <div>
      <a href="<?php echo base_url('index.php/Architecture_controller/architecture_user_approve/'.$fetch->architecture_booking_id)?>"><BUTTON style="width: 100px;background-color: green;color:white;border-radius: 10px">APPROVE</BUTTON></a>
      <a href="<?php echo base_url('index.php/Architecture_controller/architecture_user_reject/'.$fetch->architecture_booking_id)?>"><BUTTON style="width: 100px;background-color: red;color:white;border-radius: 10px">REJECT</BUTTON></a>
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
$this->load->view('Architecture/Layout/architecture_footer');

?>
