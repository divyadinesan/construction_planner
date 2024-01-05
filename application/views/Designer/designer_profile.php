<?php
$this->load->view('Designer/Layout/header');

?>


<style type="text/css">
 #brdr
  {
    border-style: solid;
    border-color:grey;
    border-width: 6px;
    height: 1060px;
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
            	foreach ($designer as $fetch)
            	?>
               <form action="<?php echo base_url('index.php/Designer_controller/designer_update/'.$fetch->designer_id)?>" method="post" name="login" enctype="multipart/form-data">
               	  <div class="form-group">
                     <label>Designer Name</label>
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->d_name?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->d_email?>" readonly style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Phone Number</label>
                     <input type="text" name="phone"  class="form-control my-input" id="name" placeholder=""value="<?php echo $fetch->d_phone?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                     <input type="text" name="password"  class="form-control my-input" id="email" placeholder="" value="<?php echo $fetch->d_password?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Address</label>
                     <input type="text" name="address"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->d_address?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Experience</label>
                     <input type="text" name="experience"  class="form-control my-input" id="name" placeholder="" value="<?php echo $fetch->d_experience?>"style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                  <div class="form-group">
                     <label>Image</label><br>
                     <img src="<?php echo base_url('Asset/Designer/Designer_image/'.$fetch->d_image)?>">
                  </div>
                  <div class="form-group">
                     <label>Upload New Image</label>
                     <input type="file" name="image"  class="form-control my-input" id="name" placeholder=""style="width: 400px;border-radius: 15px;height: 40px;padding-left: 15px">
                  </div>
                   <br>
                  <div class="text-center ">
                     <button type="submit" style="background-color: grey;color: white">Submit</button>
                  </div>
                  
               </form>
               
               
      </div>
   </center>

<br><br><br>

<?php
$this->load->view('Designer/Layout/footer');

?>