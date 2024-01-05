<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Architecture_controller extends CI_Controller 
{

	public function index()
	{
		$this->load->view('Customer/index');
	}
	public function architecture_login()
	{
		$this->load->view('Architecture/architecture_login');
	}

	public function architecture_register()
	{
		$this->load->view('Architecture/architecture_register');
	}

	public function architecture_insert()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$experience=$this->input->post('experience');
		$fee=$this->input->post('fee');
		$arrdata=array('a_email'=>$email);
		$this->load->model('Architecture_model');
		$count=$this->Architecture_model->email_check_model($arrdata);
		if($count==0)
		{
				$image=$_FILES['licence']['name'];
				if($image!="")
				{
					$time = Time();
					$images = explode('.',$image);
					$Add_photos =$time.'.'.end($images);
					$config['upload_path']= './Asset/Architecture/Architecture_licence';
					$config['allowed_types']= 'pdf';
					$config['file_name'] = $Add_photos;
					 $this->load->library('upload', $config);
					 $this->upload->initialize($config);
					if($this->upload->do_upload('licence'))
					{
						
						$image1=$_FILES['architecture_image']['name'];
						if($image1!="")
						{
							$time1 = Time();
							$images1 = explode('.',$image1);
							$Add_photos1 =$time1.'.'.end($images1);
							$config1['upload_path']= './Asset/Architecture/Architecture_image';
							$config1['allowed_types']= 'jpg|png|jpeg';
							$config1['file_name'] = $Add_photos1;
							$this->load->library('upload', $config1);
							$this->upload->initialize($config1);
							if($this->upload->do_upload('architecture_image'))
							{
								$result=array('a_name'=>$name,'a_email'=>$email,'a_phone'=>$phone,'a_password'=>$password,'a_addres'=>$address,'fee_amount'=>$fee,'architecture_image'=>$Add_photos1,'a_experience'=>$experience,'a_experience_certificate'=>$Add_photos,'architecture_type'=>'Architecture','architecture_status'=>'Pending');
								$this->load->model('Architecture_model');
								$exe=$this->Architecture_model->architecture_insert_model($result);
								if($exe)
								{
									echo "<script>alert('Waiting For Admin Approval!!')</script>";
									$this->architecture_login();
								}
								else
								{
									echo "<script>alert('Failed to update')</script>";
									$this->architecture_register();
								}
							}
							else
							{
								echo "<script>alert('Invalid Image!!')</script>";
								$this->architecture_register();
							}
					}
					else
					{
						echo "<script>alert('Invalid File!!')</script>";
						$this->architecture_register();
					}
				}
				else
				{
					echo "<script>alert('Choose PDF File!!')</script>";
					$this->architecture_register();
				}	

			}
		}
		else
		{
			echo "<script>alert('Already Registered.!!')</script>";
									$this->architecture_register();
		}
	}

	public function Architecture_login_check()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$arrdata=array('a_email'=>$email,'a_password'=>$password,'architecture_status'=>'Approved');
		$this->load->model('Architecture_model');
		$count=$this->Architecture_model->login_check_model($arrdata);
		if($count>0)
		{
			echo "<script>alert('Welcome')</script>";
			$this->session->set_userdata('email',$email);
			$this->architecture_profile();
		}
		else
		{
			echo "<script>alert('Try Again!!')</script>";
			$this->index();
		}
	}
	public function architecture_profile()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Architecture_model');
			$arrdata['architecture']=$this->Architecture_model->architecture_fetch();
			$this->load->view('Architecture/architecture_profile',$arrdata);
		}
		else
		{
			$this->index();
		}
	}
	public function architecture_update($architecture_id)
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
			$config['upload_path']= './Asset/Architecture/Architecture_image';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $Add_photos;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('image'))
			{
				$result=array('a_name'=>$name,'a_email'=>$email,'a_phone'=>$phone,'a_password'=>$password,'a_addres'=>$address,'architecture_image'=>$Add_photos,'a_experience'=>$experience);
						$this->load->model('Architecture_model');
						$exe=$this->Architecture_model->architecture_update_model($result,$architecture_id);
				if($result)
				{
					echo "<script>alert('Successfully Updated ')</script>";
					$this->architecture_profile();
				}
				else
				{
					echo "<script>alert('Failed to update')</script>";
					$this->architecture_profile();
				}
			}
			else
			{
				echo "<script>alert('Invalid photo')</script>";
					$this->architecture_profile();
			}
			}
			else
			{
				$result=array('a_name'=>$name,'a_email'=>$email,'a_phone'=>$phone,'a_password'=>$password,'a_addres'=>$address,'a_experience'=>$experience);
						$this->load->model('Architecture_model');
						$exe=$this->Architecture_model->architecture_update_model($result,$architecture_id);
				if($result)
				{
					echo "<script>alert('Successfully Updated ')</script>";
					$this->architecture_profile();
				}
				else
				{
					echo "<script>alert('Failed to update')</script>";
					$this->architecture_profile();
				}
			}	
	}

	public function user_request()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Architecture_model');
			$arrdata['user_request']=$this->Architecture_model->user_request_fetch();
			$this->load->view('Architecture/user_request',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function architecture_user_approve($architecture_booking_id)
	{
		$verify_user=array('ab_booking_status'=>'Approved');
		$this->load->model('Architecture_model');
		$exe=$this->Architecture_model->architecture_user_verify_model($architecture_booking_id,$verify_user);
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

	public function architecture_user_reject($architecture_booking_id)
	{
		$verify_user=array('ab_booking_status'=>'Rejected');
		$this->load->model('Architecture_model');
		$exe=$this->Architecture_model->architecture_user_verify_model($architecture_booking_id,$verify_user);
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

	public function architecture_house_plan()
	{
		$architecture_booking_id=$this->input->post('architecture_booking_id');
		$image=$_FILES['plan']['name'];
			if($image!="")
			{
			$time = Time();
			$images = explode('.',$image);
			$Add_photos =$time.'.'.end($images);
			$config['upload_path']= './Asset/Architecture/House_plan';
			$config['allowed_types']= 'pdf';
			$config['file_name'] = $Add_photos;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('plan'))
			{
				$result=array('house_plan'=>$Add_photos);
						$this->load->model('Architecture_model');
						$exe=$this->Architecture_model->architecture_house_plan_upload_model($result,$architecture_booking_id);
				if($result)
				{
					echo "<script>alert('Successfully Updated ')</script>";
					$this->plan();
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

	public function plan()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Architecture_model');
			$arrdata['house_plan']=$this->Architecture_model->house_plan_request_fetch();
			$this->load->view('Architecture/plan',$arrdata);
		}
		else
		{
			$this->index();
		}
	}
	
}