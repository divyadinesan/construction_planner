<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer_controller extends CI_Controller 
{

	public function index()
	{
		$this->load->view('Customer/index');
	}
	public function designer_login()
	{
		$this->load->view('Designer/designer_login');
	}
	public function designer_register()
	{
		$this->load->view('Designer/designer_register');
	}
	public function designer_reg_insert()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');

		$address=$this->input->post('address');
		 $fee=$this->input->post('fee'); 
		$experience=$this->input->post('experience');
		$arrdata=array('d_email'=>$email);
		$this->load->model('Designer_model');
		$count=$this->Designer_model->designer_email_check_model($arrdata);
		if($count==0)
		{
					$image=$_FILES['licence']['name'];
					if($image!="")
					{
						$time = Time();
						$images = explode('.',$image);
						$Add_photos =$time.'.'.end($images);
						$config['upload_path']= './Asset/Designer/Designer_licence';
						$config['allowed_types']= 'pdf';
						$config['file_name'] = $Add_photos;
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('licence'))
						{
							
							$image1=$_FILES['desiger_image']['name'];
							if($image1!="")
							{
								$time1 = Time();
								$images1 = explode('.',$image1);
								$Add_photos1 =$time1.'.'.end($images1);
								$config1['upload_path']= './Asset/Designer/Designer_image';
								$config1['allowed_types']= 'jpg|png|jpeg';
								$config1['file_name'] = $Add_photos1;
								$this->load->library('upload', $config1);
								$this->upload->initialize($config1);
								if($this->upload->do_upload('desiger_image'))
								{
									$result=array('d_name'=>$name,'d_email'=>$email,'d_phone'=>$phone,'d_password'=>$password,'d_address'=>$address,'d_fee_amount'=>$fee,'d_image'=>$Add_photos1,'d_experience'=>$experience,'d_experience_certificate'=>$Add_photos,'designer_type'=>'Designer','designer_status'=>'Pending');
									$this->load->model('Designer_model');
									$exe=$this->Designer_model->designer_insert_model($result);
									if($exe)
									{
										echo "<script>alert('Waiting For Admin Approval!!')</script>";
										$this->designer_login();
									}
									else
									{
										echo "<script>alert('Failed to update')</script>";
										$this->index();
									}
								}
								else
								{
									echo "<script>alert('Invalid Image!!')</script>";
									$this->index();
								}
						}
						else
						{
							echo "<script>alert('Invalid File!!')</script>";
							$this->index();
						}
					}
					else
					{
						echo "<script>alert('Choose PDF File!!')</script>";
						$this->index();
					}	

				}
		}
		else
			{
				echo "<script>alert('Already Registered..!')</script>";
				$this->index();
			}
	}
	public function Designer_login_check()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$arrdata=array('d_email'=>$email,'d_password'=>$password,'designer_status'=>'Approved');
		$this->load->model('Designer_model');
		$count=$this->Designer_model->login_check_model($arrdata);
		if($count>0)
		{
			echo "<script>alert('Welcome')</script>";
			$this->session->set_userdata('email',$email);
			$this->designer_profile();
		}
		else
		{
			echo "<script>alert('Try Again!!')</script>";
			$this->index();
		}
	}
	public function designer_profile()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Designer_model');
			$arrdata['designer']=$this->Designer_model->designer_fetch();
			$this->load->view('Designer/designer_profile',$arrdata);
		}
		else
		{
			$this->index();
		}
	}
	public function designer_update($designer_id)
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$experience=$this->input->post('experience');
		$image=$_FILES['image']['name'];
			if($image!="")
			{
			$time = Time();
			$images = explode('.',$image);
			$Add_photos =$time.'.'.end($images);
			$config['upload_path']= './Asset/Designer/Designer_image';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $Add_photos;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('image'))
			{
				$result=array('d_name'=>$name,'d_email'=>$email,'d_phone'=>$phone,'d_password'=>$password,'d_address'=>$address,'d_image'=>$Add_photos,'d_experience'=>$experience);
						$this->load->model('Designer_model');
						$exe=$this->Designer_model->designer_update_model($result,$designer_id);
				if($result)
				{
					echo "<script>alert('Successfully Updated ')</script>";
					$this->designer_profile();
				}
				else
				{
					echo "<script>alert('Failed to update')</script>";
					$this->designer_profile();
				}
			}
			else
			{
				echo "<script>alert('Invalid photo')</script>";
					$this->designer_profile();
			}
			}
			else
			{
				$result=array('d_name'=>$name,'d_email'=>$email,'d_phone'=>$phone,'d_password'=>$password,'d_address'=>$address,'d_experience'=>$experience);
						$this->load->model('Designer_model');
						$exe=$this->Designer_model->designer_update_model($result,$designer_id);
						if($result)
						{
							echo "<script>alert('Successfully Updated ')</script>";
							$this->designer_profile();
						}
						else
						{
							echo "<script>alert('Failed to update')</script>";
							$this->designer_profile();
						}
			}	
	}

	public function user_request()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Designer_model');
			$arrdata['user_request']=$this->Designer_model->user_request_fetch();
			$this->load->view('Designer/user_request',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function designer_user_approve($db_designer_bookingid)
	{
		$verify_user=array('db_booking_status'=>'Approved');
		$this->load->model('Designer_model');
		$exe=$this->Designer_model->designer_user_verify_model($db_designer_bookingid,$verify_user);
				if($exe)
				{
					echo "<script>alert('Approved')</script>";
					$this->user_request();
				}
				else
				{
					echo "<script>alert('Try Again')</script>";
					$this->user_request();
				}
	}

	public function designer_user_reject($db_designer_bookingid)
	{
		$verify_user=array('db_booking_status'=>'Rejected');
		$this->load->model('Designer_model');
		$exe=$this->Designer_model->designer_user_verify_model($db_designer_bookingid,$verify_user);
				if($exe)
				{
					echo "<script>alert('Rejected')</script>";
					$this->user_request();
				}
				else
				{
					echo "<script>alert('Try Again')</script>";
					$this->user_request();
				}
	}


	public function designer_3d_house_plan()
	{
	 	$designer_booking_id=$this->input->post('designer_booking_id');
	 	$image=$_FILES['3dplan']['name'];
	 		if($image!="")
	 		{
	 		$time = Time();
	 		$images = explode('.',$image);
	 		$Add_photos =$time.'.'.end($images);
	 		$config['upload_path']= './Asset/Designer/3d_design';
	 		$config['allowed_types']= 'pdf';
	 		$config['file_name'] = $Add_photos;
	 		$this->load->library('upload', $config);
	 		$this->upload->initialize($config);
	 		if($this->upload->do_upload('3dplan'))
	 		{
	 			$result=array('db_3d_plan'=>$Add_photos);
	 					$this->load->model('Designer_model');
				$exe=$this->Designer_model->designer_house_plan_upload_model($result,$designer_booking_id);
	 			if($result)
	 			{
	 				echo "<script>alert('Successfully Updated ')</script>";
	 				$this->threedplan();
	 			}
	 			else
	 			{
	 				echo "<script>alert('Failed to update')</script>";
	 				$this->user_request();
	 			}
			}
	 		else
	 		{
	 			echo "<script>alert('Invalid photo')</script>";
	 				$this->user_request();
	 		}
	 }
	}

	public function threedplan()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Designer_model');
			$arrdata['three_d_booking']=$this->Designer_model->three_d_booking_fetch();
			$this->load->view('Designer/threedplan',$arrdata);
		}
		else
		{
			$this->index();
		}
	}


}