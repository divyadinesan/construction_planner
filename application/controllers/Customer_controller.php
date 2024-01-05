<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_controller extends CI_Controller 
{

	public function index()
	{
		$this->load->view('Customer/index');
	}
	public function about()
	{
		$this->load->view('Customer/about');
	}
	public function contact()
	{
		$this->load->view('Customer/contact');
	}
	
	public function Customer_register()
	{
		$this->load->view('Customer/Customer_register');
	}
	public function customer_reg_insert()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');
		$address=$this->input->post('address');	
		$result=array('customer_name'=>$name,'customer_email'=>$email,'customer_phone'=>$phone,'customer_address'=>$address,'customer_password'=>$password);
						
		$this->load->model('Customer_model');
		$exe=$this->Customer_model->customer_insert_model($result);
		if($exe)
		{
			echo "<script>alert('Successfully Registered')</script>";
			$this->customer_login();
		}
		else
		{
			echo "<script>alert('Try Again!!!')</script>";
			$this->index();
		}

	}

	public function customer_login()
	{
		$this->load->view('Customer/customer_login');
	}
	public function customer_login_check()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$arrdata=array('customer_email'=>$email,'customer_password'=>$password);
		$this->load->model('Customer_model');
		$count=$this->Customer_model->login_check_model($arrdata);
		if($count>0)
		{
			echo "<script>alert('Welcome')</script>";
			$this->session->set_userdata('email',$email);
			$this->architecture();
		}
		else
		{
			echo "<script>alert('Try Again!!')</script>";
			$this->index();
		}
	}

	public function Customer_profile()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['customer']=$this->Customer_model->customer_id_fetch_model();
			$this->load->view('Customer/Customer_profile',$arrdata);
		}
		else
		{
			$this->index();
		}
	}
	public function Customer_profile_update($customer_id)
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');
		$address=$this->input->post('address');	
		$result=array('customer_name'=>$name,'customer_email'=>$email,'customer_phone'=>$phone,'customer_address'=>$address,'customer_password'=>$password);
						
		$this->load->model('Customer_model');
		$exe=$this->Customer_model->customer_update_model($result,$customer_id);
		if($exe)
		{
			echo "<script>alert('Successfully Update Your Profile')</script>";
			$this->Customer_profile();
		}
		else
		{
			echo "<script>alert('Try Again!!!')</script>";
			$this->Customer_profile();
		}	
	}

	public function architecture()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['architecture']=$this->Customer_model->customer_fetch_model();
			$this->load->view('Customer/architecture',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function architecture_booking($architecture_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['architecture_review']=$this->Customer_model->architecture_review_fetch_model($architecture_id);
			$arrdata['architecture']=$this->Customer_model->customer_architecture_fetch_model($architecture_id);
			$arrdata['customer']=$this->Customer_model->customer_id_fetch_model();
			$this->load->view('Customer/architecture_booking',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function architecture_booking_insert()
	{
		$architecure_id=$this->input->post('architecture_id');
		$architecture_email=$this->input->post('architecture_email');
		$architecure_experience=$this->input->post('a_experience');
		$customer_id=$this->input->post('customer_id');
		$customer_name=$this->input->post('customer_name');
		$customer_email=$this->input->post('customer_email');
		$customer_description=$this->input->post('customer_description');
		$arrdata=array('ab_customer_id'=>$customer_id,'ab_customer_email'=>$customer_email,'ab_architecture_id'=>$architecure_id,'ad_architecture_email'=>$architecture_email,'ab_house_description'=>$customer_description,'ab_booking_status'=>'Pending','ab_payment_status'=>'Pending','house_plan'=>'Pending');
		$this->load->model('Customer_model');
		$exe=$this->Customer_model->architecture_booking_model($arrdata);
		if($exe)
		{
			echo "<script>alert('Booking.. Waiting for Approval')</script>";
			$this->My_Architecture_booking();
		}
		else
		{
			echo "<script>alert('Try Again!!!')</script>";
			$this->architecture();
		}
		

	}
	public function My_Architecture_booking()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['architecture_book']=$this->Customer_model->book_architecture_fetch_model();
			// $arrdata['customer']=$this->Customer_model->customer_id_fetch_model();
			$this->load->view('Customer/My_Architecture_booking',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function cancel_architecture($architecture_booking_id)
	{
			$this->load->model('Customer_model');
			$exe=$this->Customer_model->cancel_architecture_model($architecture_booking_id);
			if($exe)
			{
				echo "<script>alert('your booking has been cancelled')</script>";
				$this->My_Architecture_booking();
			}
			else
			{
				echo "<script>alert('Try Again!!!')</script>";
				$this->My_Architecture_booking();
			}

	}
	public function architecture_payment($architecture_booking_id)
	{
			if($this->session->has_userdata('email'))
			{
				$this->load->model('Customer_model');
				$arrdata['booking_architecture']=$this->Customer_model->architecture_book_fetch_model($architecture_booking_id);
				
				$this->load->view('Customer/architecture_payment',$arrdata);
			}
			else
			{
				$this->index();
			}
	}
	public function payment_insert()
	{
		$architecture_booking_id=$this->input->post('architecture_booking_id');
		$customer_id=$this->input->post('customer_id');
		$customer_email=$this->input->post('customer_email');
		$architecture_id=$this->input->post('architecture_id');
		$ad_architecture_email=$this->input->post('ad_architecture_email');

		$card_name=$this->input->post('card_name');
		$card_number=$this->input->post('card_number');
		$expiry_date=$this->input->post('expiry_date');
		$cvc=$this->input->post('cvc');
		$amount=$this->input->post('amount');
		$arrdata=array('architecture_booking_id'=>$architecture_booking_id,'customer_id'=>$customer_id,'customer_email'=>$customer_email,'architecture_id'=>$architecture_id,'ad_architecture_email'=>$ad_architecture_email,'card_name'=>$card_name,'card_number'=>$card_number,'expiry_date'=>$expiry_date,'cvc'=>$cvc,'amount'=>$amount);
		$this->load->model('Customer_model');
		$execute=$this->Customer_model->architecture_payment_insert_model($arrdata);
		if($execute==1)
		{
			$update=array('ab_payment_status'=>'Payed');
			$this->load->model('Customer_model');
			$execute1=$this->Customer_model->architecture_payment_payed_model($architecture_booking_id,$update);
			if($execute1==1)
			{
				echo "<script>alert('Payment Completed')</script>";
				$this->My_Architecture_booking();
			}
			else
			{
				echo "<script>alert('Try Again!!!')</script>";
				$this->My_Architecture_booking();
			}

		}
		else
		{
			echo "<script>alert('Try Again!!!')</script>";
				$this->My_Architecture_booking();
		}

	}
	public function house_plan()
	{
		if($this->session->has_userdata('email'))
			{
				$this->load->model('Customer_model');
				$arrdata['house_plan']=$this->Customer_model->house_plan_fetch_model();
				$this->load->view('Customer/house_plan',$arrdata);
			}
			else
			{
				$this->index();
			}
	}

	public function designer()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['designer']=$this->Customer_model->designer_fetch_model();
			$this->load->view('Customer/designer',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function designer_booking($designer_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['designer_review']=$this->Customer_model->designer_review_fetch_model($designer_id);
			$arrdata['designer']=$this->Customer_model->customer_designer_fetch_model($designer_id);
			$arrdata['customer']=$this->Customer_model->customer_id_fetch_model();
			$this->load->view('Customer/designer_booking',$arrdata);
		}
		else
		{
			$this->index();
		}
	}
	
	public function designer_booking_insert()
	{
		$designer_id=$this->input->post('designer_id');
		$designer_email=$this->input->post('designer_email');
		$customer_id=$this->input->post('customer_id');
		$customer_email=$this->input->post('customer_email');
		$image=$_FILES['house_plan']['name'];
			if($image!="")
			{
			$time = Time();
			$images = explode('.',$image);
			$Add_photos =$time.'.'.end($images);
			$config['upload_path']= './Asset/Designer/house_plan_for_3d';
			$config['allowed_types']= 'pdf';
			$config['file_name'] = $Add_photos;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('house_plan'))
			{
				$result=array('db_designer_id'=>$designer_id,'db_designer_email'=>$designer_email,'db_customer_id'=>$customer_id,'db_customer_email'=>$customer_email,'db_house_plan'=>$Add_photos,'db_booking_status'=>'Pending','db_payment_status'=>'Pending','db_3d_plan'=>'Pending');
						$this->load->model('Customer_model');
						$exe=$this->Customer_model->designer_booking_insert_model($result);
				if($result)
				{
					echo "<script>alert('Booked.. Waiting For Approval ')</script>";
					$this->My_designer_booking();
				}
				else
				{
					echo "<script>alert('Failed to update')</script>";
					$this->designer();
				}
			}
			else
			{
				echo "<script>alert('Invalid photo')</script>";
					$this->designer();
			}	

	}
	}

	public function My_designer_booking()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['designer_book']=$this->Customer_model->book_designer_fetch_model();
			// $arrdata['customer']=$this->Customer_model->customer_id_fetch_model();
			$this->load->view('Customer/My_designer_booking',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function cancel_designer($db_designer_bookingid)
	{
		$this->load->model('Customer_model');
			$exe=$this->Customer_model->cancel_designer_model($db_designer_bookingid);
			if($exe)
			{
				echo "<script>alert('your booking has been cancelled')</script>";
				$this->My_designer_booking();
			}
			else
			{
				echo "<script>alert('Try Again!!!')</script>";
				$this->My_designer_booking();
			}
	}


	public function designer_pay($db_designer_bookingid)
	{
		if($this->session->has_userdata('email'))
			{
				$this->load->model('Customer_model');
				$arrdata['booking_designer']=$this->Customer_model->designer_book_fetch_model($db_designer_bookingid);
				$this->load->view('Customer/designer_payment',$arrdata);
			}
			else
			{
				$this->index();
			}
	}

	
	public function designer_payment_insert()
	{
		$designer_booking_id=$this->input->post('designer_booking_id');
		$customer_id=$this->input->post('customer_id');
		$customer_email=$this->input->post('customer_email');
		$designer_id=$this->input->post('designer_id');
		$designer_email=$this->input->post('designer_email');
		$card_name=$this->input->post('card_name');
		$card_number=$this->input->post('card_number');
		$expiry_date=$this->input->post('expiry_date');
		$cvc=$this->input->post('cvc');
		$amount=$this->input->post('amount');
		$arrdata=array('designer_booking_id'=>$designer_booking_id,'customer_id'=>$customer_id,'customer_email'=>$customer_email,'designer_id'=>$designer_id,'designer_email'=>$designer_email,'card_name'=>$card_name,'card_number'=>$card_number,'expiry_date'=>$expiry_date,'cvc'=>$cvc,'amount'=>$amount);
		$this->load->model('Customer_model');
		$execute=$this->Customer_model->designer_payment_insert_model($arrdata);
		if($execute==1)
		{
			$update=array('db_payment_status'=>'Payed');
			$this->load->model('Customer_model');
		 	$execute1=$this->Customer_model->designer_payment_payed_model($designer_booking_id,$update);
			if($execute1==1)
			{
				echo "<script>alert('Payment Completed')</script>";
				$this->My_designer_booking();
			}
			else
			{
				echo "<script>alert('Try Again!!!')</script>";
				$this->My_designer_booking();
			}
		}
		else
		{
			echo "<script>alert('Try Again!!!')</script>";
				$this->My_designer_booking();
		}

	}

	public function house_3d_plan()
	{
		if($this->session->has_userdata('email'))
			{
				$this->load->model('Customer_model');
				$arrdata['house_3d_plan']=$this->Customer_model->house_3d_plan_model();
				$this->load->view('Customer/house_3d_plan',$arrdata);
			}
			else
			{
				$this->index();
			}
	}

	public function contractor()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['contractor']=$this->Customer_model->contractor_fetch_model();
			$this->load->view('Customer/contractor',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function contractor_booking($contractor_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['contractor_review']=$this->Customer_model->contractor_review_fetch_model($contractor_id);
			
			$arrdata['contractor']=$this->Customer_model->customer_contractor_fetch_model($contractor_id);
			$arrdata['customer']=$this->Customer_model->customer_id_fetch_model();
			$this->load->view('Customer/contractor_booking',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function contractor_booking_insert()
	{
		$contractor_id=$this->input->post('contractor_id');
		$contractor_email=$this->input->post('contractor_email');
		$customer_id=$this->input->post('customer_id');
		$customer_email=$this->input->post('customer_email');
		$house_description=$this->input->post('house_description');
			$image=$_FILES['house_plan']['name'];
			if($image!="")
			{
			$time = Time();
			$images = explode('.',$image);
			$Add_photos =$time.'.'.end($images);
			$config['upload_path']= './Asset/Customer/contractor_house_plan';
			$config['allowed_types']= 'pdf';
			$config['file_name'] = $Add_photos;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
				if($this->upload->do_upload('house_plan'))
				{
					//3d
					$image1=$_FILES['house3d_plan']['name'];
					if($image1!="")
					{
					$time1 = Time();
					$images1 = explode('.',$image1);
					$Add_photos1 =$time1.'.'.end($images1);
					$config1['upload_path']= './Asset/Customer/contractor_3dhouse_plan';
					$config1['allowed_types']= 'pdf';
					$config1['file_name'] = $Add_photos1;
					$this->load->library('upload', $config1);
					$this->upload->initialize($config1);
						if($this->upload->do_upload('house3d_plan'))
						{
							$result=array('cb_customer_id'=>$customer_id,'cb_customer_email'=>$customer_email,'cb_contractor_id'=>$contractor_id,'cb_contractor_email'=>$contractor_email,'cb_house_description'=>$house_description,'cb_house_plan'=>$Add_photos,'cb_house_3d'=>$Add_photos1,'cb_contractor_description'=>'Pending','cb_booking_status'=>'Pending','cb_payment_status'=>'Pending');
									$this->load->model('Customer_model');
									$exe=$this->Customer_model->contractor_booking_insert_model($result);
							if($result)
							{
								echo "<script>alert('Booked.. Waiting For Approval ')</script>";
								$this->My_contractor_booking();
							}
							else
							{
								echo "<script>alert('Failed to update')</script>";
								$this->contractor();
							}

						}
						else
						{
							echo "<script>alert('Invalid File')</script>";
								$this->contractor();
						}	
				}
				else
				{
					echo "<script>alert('Invalid File')</script>";
						$this->contractor();
				}	

			}
			}

	}

	public function My_contractor_booking()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Customer_model');
			$arrdata['contractor_book']=$this->Customer_model->book_contractor_fetch_model();
			$this->load->view('Customer/My_contractor_booking',$arrdata);
		}
		else
		{
			$this->index();
		}
	}
	public function cancel_contractor($contractor_booking_id)
	{
			$this->load->model('Customer_model');
			$exe=$this->Customer_model->cancel_contractor_model($contractor_booking_id);
			if($exe)
			{
				echo "<script>alert('your booking has been cancelled')</script>";
				$this->My_contractor_booking();
			}
			else
			{
				echo "<script>alert('Try Again!!!')</script>";
				$this->My_contractor_booking();
			}
	}
	public function contractor_pay($contractor_booking_id)
	{
			if($this->session->has_userdata('email'))
			{
				$this->load->model('Customer_model');
				$arrdata['booking_contractor']=$this->Customer_model->contractor_book_fetch_model($contractor_booking_id);
				
				$this->load->view('Customer/contractor_payment',$arrdata);
			}
			else
			{
				$this->index();
			}
	}
	public function contractor_payment_insert()
	{
		$contractor_booking_id=$this->input->post('contractor_booking_id');
		$customer_id=$this->input->post('customer_id');
		$customer_email=$this->input->post('customer_email');
		$contractor_id=$this->input->post('contractor_id');
		$contractor_email=$this->input->post('contractor_email');
		$card_name=$this->input->post('card_name');
		$card_number=$this->input->post('card_number');
		$expiry_date=$this->input->post('expiry_date');
		$cvc=$this->input->post('cvc');
		$amount=$this->input->post('amount');
		$arrdata=array('contractor_id'=>$contractor_id,'contractor_email'=>$contractor_email,'contractor_booking_id'=>$contractor_booking_id,'customer_id'=>$customer_id,'customer_email'=>$customer_email,'card_name'=>$card_name,'card_number'=>$card_number,'cvc'=>$cvc,'expiry_date'=>$expiry_date,'amount'=>$amount);
		$this->load->model('Customer_model');
		$execute=$this->Customer_model->contractor_payment_insert_model($arrdata);
		if($execute==1)
		{
			$update=array('cb_payment_status'=>'Payed');
			$this->load->model('Customer_model');
		 	$execute1=$this->Customer_model->contractor_payment_payed_model($contractor_booking_id,$update);
			if($execute1==1)
			{
				echo "<script>alert('Payment Completed')</script>";
				$this->My_contractor_booking();
			}
			else
			{
				echo "<script>alert('Try Again!!!')</script>";
				$this->My_contractor_booking();
			}
		}
		else
		{
			echo "<script>alert('Try Again!!!')</script>";
				$this->My_contractor_booking();
		}
	}

	public function construction_cost_details()
	{
		if($this->session->has_userdata('email'))
			{
				$this->load->model('Customer_model');
			$arrdata['construction_details']=$this->Customer_model->Construction_cost_details_model();
				
				$this->load->view('Customer/construction_cost_details',$arrdata);
			}
			else
			{
				$this->index();
			}
	}
	public function architecture_reviewinsert()
	{
		$architecture_id=$this->input->post('architecture_id');
		$architecture_email=$this->input->post('architecture_email');
		$customer_id=$this->input->post('customer_id');
		$customer_email=$this->input->post('customer_email');
		$review=$this->input->post('review');
		$rating=$this->input->post('rating');
		$arrdata=array('architecture_id'=>$architecture_id,'architecture_email'=>$architecture_email,'customer_id'=>$customer_id,'customer_email'=>$customer_email,'review'=>$review,'rating'=>$rating);

		$this->load->model('Customer_model');
		$exe=$this->Customer_model->architecture_reviewinsert_model($arrdata);
		if($exe)
		{
			echo "<script>alert('Thank you For Your Review..')</script>";
			$this->architecture();
		}
		else
		{
			echo "<script>alert('Try Again!!!')</script>";
			$this->architecture();
		}
	}
	public function designer_reviewinsert()
	{
		$designer_id=$this->input->post('designer_id');
		$designer_email=$this->input->post('designer_email');
		$customer_id=$this->input->post('customer_id');
		$customer_email=$this->input->post('customer_email');
		$review=$this->input->post('review');
		$rating=$this->input->post('rating');
		$arrdata=array('designer_id'=>$designer_id,'designer_email'=>$designer_email,'customer_id'=>$customer_id,'customer_email'=>$customer_email,'rating'=>$rating,'review'=>$review);

		$this->load->model('Customer_model');
		$exe=$this->Customer_model->designer_reviewinsert_model($arrdata);
		if($exe)
		{
			echo "<script>alert('Thank you For Your Review..')</script>";
			$this->designer();
		}
		else
		{
			echo "<script>alert('Try Again!!!')</script>";
			$this->designer();
		}
	}
	public function contractor_reviewinsert()
	{

		$contractor_id=$this->input->post('contractor_id');
		$contractor_email=$this->input->post('contractor_email');
		$customer_id=$this->input->post('customer_id');
		$customer_email=$this->input->post('customer_email');
		$review=$this->input->post('review');
		$rating=$this->input->post('rating');
		$arrdata=array('contractor_id'=>$contractor_id,'contractor_email'=>$contractor_email,'customer_id'=>$customer_id,'customer_email'=>$customer_email,'rating'=>$rating,'review'=>$review);

		$this->load->model('Customer_model');
		$exe=$this->Customer_model->contractor_reviewinsert_model($arrdata);
		if($exe)
		{
			echo "<script>alert('Thank you For Your Review..')</script>";
			$this->contractor();
		}
		else
		{
			echo "<script>alert('Try Again!!!')</script>";
			$this->contractor();
		}
	}
}