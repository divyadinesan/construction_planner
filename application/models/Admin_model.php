<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

		public function login_check_model($arrdata)
		{
			$this->db->where($arrdata);
			return $this->db->count_all_results('admin');
		}

		public function admin_fetch_model()
		{	
			$this->db->select('*');
			$this->db->from('admin as admin_table');
			return $this->db->get()->result();
		}

		public function update_password_model($admin_id,$arrdata)
		{
			$this->db->where('admin_id',$admin_id);
			return $this->db->update('admin',$arrdata);

		}

		public function architectur_model()
		{
			$this->db->select('*');
			$this->db->from('architecture');
			$this->db->where('architecture_status','Pending');
			return $this->db->get()->result();

		}

		public function architecture_verify_model($verify,$architecture_id)
		{
			return $this->db->update('architecture',$verify);
			$this->db->where('architecture_id','$architecture_id');
		}

		public function designer_model()
		{
			$this->db->select('*');
			$this->db->from('designer');
			$this->db->where('designer_status','Pending');
			return $this->db->get()->result();
		}

		public function designer_verify_model($verify,$designer_id)
		{
			return $this->db->update('designer',$verify);
			$this->db->where('designer_id','$designer_id');
		}

		public function contractor_model()
		{
			$this->db->select('*');
			$this->db->from('contractor');
			$this->db->where('contractor_status','Pending');
			return $this->db->get()->result();
		}
		
		public function contractor_verify_model($verify,$contractor_id)
		{
			return $this->db->update('contractor',$verify);
			$this->db->where('contractor_id','$contractor_id');
		}
		public function customer_fetch_model()
		{
			$this->db->select('*');
			$this->db->from('customer');
			return $this->db->get()->result();
		}
		public function payment_User_Architecture_model()
		{
			$this->db->select('*');
			$this->db->from('architecture_payment');
			$this->db->join('customer','architecture_payment.customer_id=customer.customer_id');
			$this->db->join('architecture','architecture_payment.architecture_id=architecture.architecture_id');
			return $this->db->get()->result();
		}
		public function payment_User_designer_model()
		{
			$this->db->select('*');
			$this->db->from('designer_payment');
			$this->db->join('customer','designer_payment.customer_id=customer.customer_id');
			$this->db->join('designer','designer_payment.designer_id=designer.designer_id');
			return $this->db->get()->result();
		}
		public function payment_User_contractor_model()
		{
			$this->db->select('*');
			$this->db->from('contractor_payment');
			$this->db->join('customer','contractor_payment.customer_id=customer.customer_id');
			$this->db->join('contractor','contractor_payment.contractor_id=contractor.contractor_id');
			return $this->db->get()->result();
		}
		public function Booking_User_Architecture_model()
		{
			$this->db->select('*');
			$this->db->from('architecture_booking');
			$this->db->join('customer','architecture_booking.ab_customer_id=customer.customer_id');
			$this->db->join('architecture','architecture_booking.ab_architecture_id=architecture.architecture_id');
			return $this->db->get()->result();
		}
		public function Booking_User_Designer_model()
		{
			$this->db->select('*');
			$this->db->from('designer_booking');
			$this->db->join('customer','designer_booking.db_customer_id=customer.customer_id');
			$this->db->join('designer','designer_booking.db_designer_id=designer.designer_id');
			return $this->db->get()->result();
		}
		public function Booking_User_Contractor_model()
		{
			$this->db->select('*');
			$this->db->from('contractor_booking');
			$this->db->join('customer','contractor_booking.cb_customer_id=customer.customer_id');
			$this->db->join('contractor','contractor_booking.cb_contractor_id=contractor.contractor_id');
			return $this->db->get()->result();
		}


}