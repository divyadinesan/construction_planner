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
  width: 25%;
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

<h2 align="center">Designer</h2>
<br><br>

<div class="row">
<?php
foreach ($designer as $fetch) {

?>

  <div class="column">
    <div class="card">
      <img src="<?php echo base_url('Asset/Designer/Designer_image/'.$fetch->d_image)?>" style="height: 200px;width: 280px">
      <br>
      <p style="color: BLACK">NAME : <?php echo $fetch->d_name?></p>
      <p style="color: BLACK">EXPERIENCE :<?php echo $fetch->d_experience?>Years</p>
       <p style="color: BLACK">FEE AMOUNT: ₹<?php echo $fetch->d_fee_amount?></p>

      <br>
       <a href="<?php echo base_url('index.php/Customer_controller/designer_booking/'.$fetch->designer_id)?>">
    <button>Book Now</button>
  </a>
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