<?php
$this->load->view('Customer/Layout/header');

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

<h2 align="center">Booking Status - Designer</h2>
<br><br>

<div class="row">

<?php
foreach ($designer_book as $fetch) {

?>
  <div class="column">
    <div class="card">
      <img src="<?php echo base_url('Asset/Designer/Designer_image/'.$fetch->d_image)?>" style="width: 400px">
      <br>
      <p style="color: BLACK;">Designer NAME :<?php echo $fetch->d_name?> </p>
      <p style="color: BLACK;">Designer EXPERIENCE :<?php echo $fetch->d_experience?></p>
      <p style="color: BLACK">FEE AMOUNT: ₹<?php echo $fetch->d_fee_amount?></p>
      <!-- <p style="color: BLACK;">House Plan:<?php echo $fetch->ab_house_description?> </p> -->
      <p style="color: BLACK;">BOOKING STATUS :<?php echo $fetch->db_booking_status?></p>

      <br>
      <?php
      if($fetch->db_payment_status!='Payed')
      {
      ?>
     <a href="<?php echo base_url('index.php/Customer_controller/cancel_designer/'.$fetch->db_designer_bookingid)?>"> <button>Cancel Booking</button></a>
      <?php
    }
    elseif($fetch->db_payment_status=='Payed')
    {
    ?>
     <p style="color:black;">PAYMENT STATUS :<b style="color:green;"><?php echo $fetch->db_payment_status?></b></p>

    <?php
  }
  ?>
     <?php
     if($fetch->db_booking_status=='Approved' and $fetch->db_payment_status!='Payed' )
     {
     ?>
     <br>
  <a href="<?php echo base_url('index.php/Customer_controller/designer_pay/'.$fetch->db_designer_bookingid)?>"><button style="background-color:green;color: white;width: 400px">PAY NOW</button></a>  
    <?php
  }
  ?>
  
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
$this->load->view('Customer/Layout/footer');

?>