
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

   <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formPayment"></span>
                    <hr class="my-5">
                    <?php
                    foreach ($booking_contractor as $fetch) 
                      # code...
                    
                    ?>
                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Credit Card Payment</h3>
                            <hr>
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                                CVC code is required.
                            </div>
                            <form class="form" role="form" autocomplete="off" method="post" action="<?php echo base_url('index.php/Customer_controller/contractor_payment_insert')?>">
                           <input type="hidden" name="contractor_booking_id" value="<?php echo $fetch->contractor_booking_id?>">
                            <input type="hidden" name="customer_id" value="<?php echo $fetch->cb_customer_id?>">
                               <input type="hidden" name="customer_email" value="<?php echo $fetch->cb_customer_email?>"> 
                                <input type="hidden" name="contractor_id" value="<?php echo $fetch->cb_contractor_id?>">
                                 <input type="hidden" name="contractor_email" value="<?php echo $fetch->cb_contractor_email?>">
                                <div class="form-group">
                                    <label for="cc_name">Card Holder's Name</label>
                                    <input type="text" class="form-control" id="cc_name" placeholder="eg: DIVYA DINESAN" required="required" name="card_name">
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" autocomplete="off" maxlength="20" pattern="\d{16}" title="Credit card number" required="" placeholder="16 Digits Number" name="card_number">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12">Card Exp. Date</label>
                                    <div class="col-md-4">
                                       <input type="text" class="form-control"  required="" placeholder="MM/YY" name="expiry_date">
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC" name="cvc">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12">Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">₹</span></div>
                                        <input type="text" class="form-control text-right" id="exampleInputAmount" value="<?php echo $fetch->fee_amount?>" name="amount">
                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block" style="width: 600px">Submit</button >
                                    </div>
                                </div>
                            </form>
                            <a href="<?php echo base_url('index.php/Customer_controller/My_contractor_booking')?>">
                            <button class="btn btn-success btn-lg btn-block">cancel</button></a>
                        </div>
                    </div>
                    <!-- /form card cc payment -->
   <br><br><br><br>