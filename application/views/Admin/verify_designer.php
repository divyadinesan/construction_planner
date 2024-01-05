<?php
$this->load->view('Admin/Layout/admin_header.php');
?>
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Verify Designer</h4>
                    <div style="overflow-x:auto;">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th scope="col">Sl.No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Password</th>
                                <th scope="col">Address</th>
                                <th scope="col">Licence</th>
                                <th scope="col">Image</th>
                                 <th scope="col">Approve</th>
                                <th scope="col">Reject</th>
                            </tr>
                        </thead>
                        <tbody>
 <?php
    $i=1;
    foreach ($designer as $fetch) {
    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $fetch->d_name?></td>
      <td><?php echo $fetch->d_email?></td>
      <td><?php echo $fetch->d_phone?></td>
      <td><?php echo $fetch->d_password?></td>
      <td><?php echo $fetch->d_address?></td>
      
    
      <td><object data="<?php echo base_url('Asset/Designer/Designer_licence/'.$fetch->d_experience_certificate )?>"  width="300" height="300px" type="application/pdf"></object></td>
      <td><img src="<?php echo base_url('Asset/Designer/Designer_image/'.$fetch->d_image)?>" style="height: 100px;width: 100px"></td>

      <td><a href="<?php echo base_url('index.php/Admin_controller/designer_approve/'.$fetch->designer_id)?>"><button style="background-color:green;color:white;border-radius: 5px"><b>Approved</b></button></a></td>
      <td><a href="<?php echo base_url('index.php/Admin_controller/designer_reject/'.$fetch->designer_id)?>"><button style="background-color:red;color:white;border-radius: 5px"><b>Reject</b></button></a></td>
      
    </tr>
    <?php
    $i++;
}
?> 
                            
                        </tbody>
                    </table>
                    </div>
                </div>
      
    </tr>
    
  

<?php
$this->load->view('Admin/Layout/admin_footer.php');
?>