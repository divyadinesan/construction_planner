<?php
$this->load->view('Customer/Layout/header');

?>
<style type="text/css">
  #brdr
  {
    border-style: solid;
    border-color:grey;
    border-width: 6px;
    height: 750px;
    width: 600px;
    margin-top: 30px;
    padding-bottom: 30px;
  }
</style>
<center>
<div id="brdr">
<br><br><br>

            <h2 class="wv-heading--title">
            <b> My Profile</b>
            </h2>

<br><br>
        
            	<?php
            	foreach ($customer as $fetch)
            	?>
               <form action="<?php echo base_url('index.php/Customer_controller/Customer_profile_update/'.$fetch->customer_id)?>" method="post" name="login" enctype="multipart/form-data">
               	  <div >
                     <label>Customer Name</label><br>
                     <input type="text" name="name"   id="name"  value="<?php echo $fetch->customer_name?>" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px"><br><br>
                  </div>
                  <div  >
                     <label>Customer Email</label><br>
                     <input type="email" name="email"  value="<?php echo $fetch->customer_email?>" readonly style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px"><br><br>
                  </div>
                    <div  >
                     <label>Customer Phone Number</label><br>
                     <input type="text" name="phone"  value="<?php echo $fetch->customer_phone?>" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px"><br><br>
                  </div>
                 
                  <div  >
                      <label>Customer Address</label><br>
                     <input type="text" name="address" value="<?php echo $fetch->customer_address?>" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px"><br><br>
                  </div>
                   <div  >
                      <label>Customer Password</label><br>
                     <input type="text" name="password" value="<?php echo $fetch->customer_password?>" style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px"><br><br>
                  </div>
                  <br>
                 <div  >
                     <button type="submit" style="width: 100px;background-color:grey;color: white">Submit</button>

                  
                 </div>


               </form>
               </div>
               
             
           
<br><br><br>
</center>
<?php
$this->load->view('Customer/Layout/footer');

?>