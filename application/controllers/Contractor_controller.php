<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contractor_controller extends CI_Controller 
{

	public function index()
	{
		$this->load->view('Customer/index');
	}

	public function contractor_login()
	{
		$this->load->view('Contractor/contractor_login');
	}
	public function contractor_register()
	{
		$this->load->view('Contractor/contractor_register');
		
	}
	public function contractor_reg_insert()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');
		$fee_amount=$this->input->post('fee_amount');
		$address=$this->input->post('address');
		$experience=$this->input->post('experience');
		$arrdata=array('c_email'=>$email);
		$this->load->model('Contractor_model');
		$count=$this->Contractor_model->contractor_email_check_model($arrdata);
		if($count==0)
		{
					$image=$_FILES['licence']['name'];
					if($image!="")
					{
						$time = Time();
						$images = explode('.',$image);
						$Add_photos =$time.'.'.end($images);
						$config['upload_path']= './Asset/Contractor/Contractor_licence';
						$config['allowed_types']= 'pdf';
						$config['file_name'] = $Add_photos;
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('licence'))
						{
							
							$image1=$_FILES['contractor_image']['name'];
							if($image1!="")
							{
								$time1 = Time();
								$images1 = explode('.',$image1);
								$Add_photos1 =$time1.'.'.end($images1);
								$config1['upload_path']= './Asset/Contractor/contractor_image';
								$config1['allowed_types']= 'jpg|png|jpeg';
								$config1['file_name'] = $Add_photos1;
								$this->load->library('upload', $config1);
								$this->upload->initialize($config1);
								if($this->upload->do_upload('contractor_image'))
								{
									$result=array('c_name'=>$name,'c_email'=>$email,'c_phone'=>$phone,'c_password'=>$password,'c_address'=>$address,'fee_amount'=>$fee_amount,'c_image'=>$Add_photos1,'c_experience'=>$experience,'c_experience_certificate'=>$Add_photos,'contractor_type'=>'Contractor','contractor_status'=>'Pending');
									
									$this->load->model('Contractor_model');
									$exe=$this->Contractor_model->contractor_insert_model($result);
									if($exe)
									{
										echo "<script>alert('Waiting For Admin Approval!!')</script>";
										$this->contractor_login();
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
			echo "<script>alert('Already Registered!!')</script>";
			$this->index();
		}
	}

	public function Contractor_login_check()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$arrdata=array('c_email'=>$email,'c_password'=>$password,'contractor_status'=>'Approved');
		$this->load->model('Contractor_model');
		$count=$this->Contractor_model->login_check_model($arrdata);
		if($count>0)
		{
			echo "<script>alert('Welcome')</script>";
			$this->session->set_userdata('email',$email);
			$this->Contractor_profile();
		}
		else
		{
			echo "<script>alert('Try Again!!')</script>";
			$this->index();
		}
	}
	public function Contractor_profile()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Contractor_model');
			$arrdata['contractor']=$this->Contractor_model->contractor_fetch();
			$this->load->view('Contractor/Contractor_profile',$arrdata);
		}
		else
		{
			$this->index();
		}
	}
	public function contractor_update($contractor_id)
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
			$config['upload_path']= './Asset/Contractor/Contractor_image';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $Add_photos;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('image'))
			{
				$result=array('c_name'=>$name,'c_email'=>$email,'c_phone'=>$phone,'c_password'=>$password,'c_address'=>$address,'c_image'=>$Add_photos,'c_experience'=>$experience);
						$this->load->model('Contractor_model');
						$exe=$this->Contractor_model->contrator_update_model($result,$contractor_id);
				if($result)
				{
					echo "<script>alert('Successfully Updated ')</script>";
					$this->Contractor_profile();
				}
				else
				{
					echo "<script>alert('Failed to update')</script>";
					$this->Contractor_profile();
				}
			}
			else
			{
				echo "<script>alert('Invalid photo')</script>";
					$this->Contractor_profile();
			}
			}
			else
			{
				$result=array('c_name'=>$name,'c_email'=>$email,'c_phone'=>$phone,'c_password'=>$password,'c_address'=>$address,'c_experience'=>$experience);
						$this->load->model('Contractor_model');
						$exe=$this->Contractor_model->contrator_update_model($result,$contractor_id);
				if($result)
				{
					echo "<script>alert('Successfully Updated ')</script>";
					$this->Contractor_profile();
				}
				else
				{
					echo "<script>alert('Failed to update')</script>";
					$this->Contractor_profile();
				}
			}	
	}


	public function user_request()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Contractor_model');
			$arrdata['user_request']=$this->Contractor_model->user_request_fetch();
			$this->load->view('Contractor/user_request',$arrdata);
		}
		else
		{
			$this->index();
		}
	}

	public function contractor_user_approve($contractor_booking_id)
	{
		$verify_user=array('cb_booking_status'=>'Approved');
		$this->load->model('Contractor_model');
		$exe=$this->Contractor_model->contractor_user_verify_model($contractor_booking_id,$verify_user);
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
	public function contractor_user_reject($contractor_booking_id)
	{
		$verify_user=array('cb_booking_status'=>'Rejected');
		$this->load->model('Contractor_model');
		$exe=$this->Contractor_model->contractor_user_verify_model($contractor_booking_id,$verify_user);
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

public function construction_cost_details_pdf()
	{
	 	$contractor_booking_id=$this->input->post('contractor_booking_id');
	 	$image=$_FILES['cost_detail_pdf']['name'];
	 		if($image!="")
	 		{
	 		$time = Time();
	 		$images = explode('.',$image);
	 		$Add_photos =$time.'.'.end($images);
	 		$config['upload_path']= './Asset/Contractor/construction_cost_details';
	 		$config['allowed_types']= 'pdf';
	 		$config['file_name'] = $Add_photos;
	 		$this->load->library('upload', $config);
	 		$this->upload->initialize($config);
	 		if($this->upload->do_upload('cost_detail_pdf'))
	 		{
	 			$result=array('cb_contractor_description'=>$Add_photos);
	 					$this->load->model('Contractor_model');
				$exe=$this->Contractor_model->construction_cost_details_pdf_model($result,$contractor_booking_id);
	 			if($result)
	 			{
	 				echo "<script>alert('Successfully Updated ')</script>";
	 				$this->Construction_cost_details();
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
public function Construction_cost_details()
{
	if($this->session->has_userdata('email'))
		{
			$this->load->model('Contractor_model');
			$arrdata['construction_details']=$this->Contractor_model->Construction_cost_details_model();
			$this->load->view('Contractor/Construction_cost_details',$arrdata);
		}
		else
		{
			$this->index();
		}
}

}