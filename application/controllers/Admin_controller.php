<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller 
{

		public function index()
		{
			$this->load->view('Customer/index');
		}


		public function admin_login()
		{
			$this->load->view('Admin/login');
		}


		public function login_check()
		{
			$admin_email=$this->input->post('email');
			$admin_password=$this->input->post('password');
			$arrdata=array('admin_email'=>$admin_email,'admin_password'=>$admin_password);
			$this->load->model('Admin_model');
			$count=$this->Admin_model->login_check_model($arrdata);
			if($count>0)
			{
				echo "<script>alert('Welcome To Admin Panel!!')</script>";
				$this->session->set_userdata('email',$admin_email);
				$this->Change_password();
			}
			else
			{
				echo "<script>alert('Try Again!!')</script>";
				$this->index();
			}
		}


		public function Change_password()
		{
			if($this->session->has_userdata('email'))
			{
				$this->load->model('Admin_model');
				$arrdata['admindata']=$this->Admin_model->admin_fetch_model();
				$this->load->view('Admin/Change_password',$arrdata);
			}
			else
			{
				$this->index();
			}
		}
		public function user_details()
		{
			if($this->session->has_userdata('email'))
			{
				$this->load->model('Admin_model');
				$arrdata['userdata']=$this->Admin_model->customer_fetch_model();
				$this->load->view('Admin/user_details',$arrdata);
			}
			else
			{
				$this->index();
			}
		}
		public function payment_User_Architecture()
		{
			if($this->session->has_userdata('email'))
			{
				$this->load->model('Admin_model');
				$arrdata['user_architecture']=$this->Admin_model->payment_User_Architecture_model();
				$this->load->view('Admin/payment_User_Architecture',$arrdata);
			}
			else
			{
				$this->index();
			}
		}
		public function payment_User_designer()
		{
			if($this->session->has_userdata('email'))
			{
				$this->load->model('Admin_model');
				$arrdata['user_designer']=$this->Admin_model->payment_User_designer_model();
				$this->load->view('Admin/payment_User_designer',$arrdata);
			}
			else
			{
				$this->index();
			}
		}
		public function payment_User_contractor()
		{

			if($this->session->has_userdata('email'))
			{
				$this->load->model('Admin_model');
				$arrdata['user_contractor']=$this->Admin_model->payment_User_contractor_model();
				$this->load->view('Admin/payment_User_contractor',$arrdata);
			}
			else
			{
				$this->index();
			}
		}

		public function Booking_User_Architecture()
		{
			if($this->session->has_userdata('email'))
			{
				$this->load->model('Admin_model');
				$arrdata['user_architecture']=$this->Admin_model->Booking_User_Architecture_model();
				$this->load->view('Admin/Booking_User_Architecture',$arrdata);
			}
			else
			{
				$this->index();
			}
		}
		public function Booking_User_Designer()
		{
			if($this->session->has_userdata('email'))
			{
				$this->load->model('Admin_model');
				$arrdata['user_designer']=$this->Admin_model->Booking_User_Designer_model();
				$this->load->view('Admin/Booking_User_Designer',$arrdata);
			}
			else
			{
				$this->index();
			}
		}

		public function Booking_User_Contractor()
		{
			if($this->session->has_userdata('email'))
			{
				$this->load->model('Admin_model');
				$arrdata['user_contractor']=$this->Admin_model->Booking_User_Contractor_model();
				$this->load->view('Admin/Booking_User_Contractor',$arrdata);
			}
			else
			{
				$this->index();
			}
		}


		public function update_password($admin_id)
		{

			$admin_password=$this->input->post('newpassword');
			$arrdata=array('admin_password'=>$admin_password);
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->update_password_model($admin_id,$arrdata);
			if($execute==1)
			{
				echo "<script>alert('Successfull Updated')</script>";
				$this->index();
			}
			else
			{
				echo "<script>alert('Try Again!!')</script>";
				$this->index();
			}
		}


		public function verify_architecture()
		{
			$this->load->model('Admin_model');
			$arrdata['architecture']=$this->Admin_model->architectur_model();
			$this->load->view('Admin/verify_architecture',$arrdata);
		}


		public function architecture_approve($architecture_id)
		{
			$verify=array('architecture_status'=>'Approved');
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->architecture_verify_model($verify,$architecture_id);
			if($execute==1)
			{
				echo "<script>alert('Approved')</script>";
				$this->verify_architecture();
			}
			else
			{
				echo "<script>alert('Try Again!!')</script>";
				$this->verify_architecture();
			}
		}


		public function architecture_reject($architecture_id)
		{
			$verify=array('architecture_status'=>'Rejected');
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->architecture_verify_model($verify,$architecture_id);
			if($execute==1)
			{
				echo "<script>alert('Approved')</script>";
				$this->verify_architecture();
			}
			else
			{
				echo "<script>alert('Try Again!!')</script>";
				$this->verify_architecture();
			}
		}


		public function admin_logout()
		{
			$this->session->sess_destroy();
			$this->index();
		}


		public function verify_designer()
		{
			$this->load->model('Admin_model');
			$arrdata['designer']=$this->Admin_model->designer_model();
			$this->load->view('Admin/verify_designer',$arrdata);
		}


		public function designer_approve($designer_id)
		{
			$verify=array('designer_status'=>'Approved');
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->designer_verify_model($verify,$designer_id);
			if($execute==1)
			{
				echo "<script>alert('Approved')</script>";
				$this->verify_designer();
			}
			else
			{
				echo "<script>alert('Try Again!!')</script>";
				$this->verify_designer();
			}
		}


		public function designer_reject($designer_id)
		{
			$verify=array('designer_status'=>'Rejected');
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->designer_verify_model($verify,$designer_id);
			if($execute==1)
			{
				echo "<script>alert('Rejected')</script>";
				$this->verify_designer();
			}
			else
			{
				echo "<script>alert('Try Again!!')</script>";
				$this->verify_designer();
			}
		}


		public function verify_contractor()
		{
			$this->load->model('Admin_model');
			$arrdata['contractor']=$this->Admin_model->contractor_model();
			$this->load->view('Admin/verify_contractor',$arrdata);
		}


		public function contractor_approve($contractor_id)
		{
			$verify=array('contractor_status'=>'Approved');
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->contractor_verify_model($verify,$contractor_id);
			if($execute==1)
			{
				echo "<script>alert('Approved')</script>";
				$this->verify_contractor();
			}
			else
			{
				echo "<script>alert('Try Again!!')</script>";
				$this->verify_contractor();
			}
		}


		public function contractor_reject($contractor_id)
		{
			$verify=array('contractor_status'=>'Rejected');
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->contractor_verify_model($verify,$contractor_id);
			if($execute==1)
			{
				echo "<script>alert('Rejected')</script>";
				$this->verify_contractor();
			}
			else
			{
				echo "<script>alert('Try Again!!')</script>";
				$this->verify_contractor();
			}
		}


}