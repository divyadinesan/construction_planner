<?php
$this->load->view('Architecture/Layout/architecture_header');

?>


<style type="text/css">
 #brdr
  {
    border-style: solid;
    border-color:grey;
    border-width: 6px;
    height: 1050px;
    width: 600px;
    margin-top: 30px;
    padding-bottom: 30px;
  }
</style>

<body>
   <center>
    <div id="brdr">
         
      
   <br><br>
            <h2 >
             My Profile
            </h2>
           <br><br>
         
      
            	<?php
            	foreach ($architecture as $fetch)
            	?>
               <form action="<?php echo base_url('index.php/Architecture_controller/architecture_update/'.$fetch->architecture_id)?>" method="post" name="login" enctype="multipart/form-data">
               	  <div class="form-group">
                     <label>Architecture Name</label>
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->a_name?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->a_email?>" readonly style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Phone Number</label>
                     <input type="text" name="phone"  class="form-control my-input" id="name" placeholder=""value="<?php echo $fetch->a_phone?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                     <input type="text" name="password"  class="form-control my-input" id="email" placeholder="" value="<?php echo $fetch->a_password?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Address</label>
                     <input type="text" name="address"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->a_name?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  
                  <div class="form-group">
                     <label>Experience</label>
                     <input type="text" name="experience"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->a_experience?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Archirtecture Image</label><br>
                     <img src="<?php echo base_url('Asset/Architecture/Architecture_image/'.$fetch->architecture_image)?>" style="width:200px"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Upload New Archirtecture Image</label>
                     <input type="file" name="image"  class="form-control my-input" id="name" placeholder=""style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                   <br>
                  <div class="text-center ">
                     <button type="submit" style="background-color: grey;color: white;border-radius: 10px">Submit</button>
                  </div>
                  
               </form>
               
               
             
   </div>
   </center>

<br><br><br>

<?php
$this->load->view('Architecture/Layout/architecture_footer');

?>