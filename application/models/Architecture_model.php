<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Architecture_model extends CI_Model {


	public function architecture_insert_model($result)
	{
		return $this->db->insert('architecture',$result);
	}

	public function login_check_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('architecture');
	}
	public function email_check_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('architecture');
	}

	public function architecture_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('architecture');
		$this->db->where('a_email',$email);
		return $this->db->get()->result();
	}

	public function architecture_update_model($result,$architecture_id)
	{
		$this->db->where('architecture_id',$architecture_id);
		return $this->db->update('architecture',$result);
	}

	public function user_request_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('architecture_booking');
		$this->db->join('customer','customer.customer_id =architecture_booking.ab_customer_id');
		$this->db->where('architecture_booking.ad_architecture_email',$email);
		$this->db->where('architecture_booking.house_plan','Pending');
		return $this->db->get()->result();
	}

	public function architecture_user_verify_model($architecture_booking_id,$verify_user)
	{
		$this->db->where('architecture_booking_id',$architecture_booking_id);
		return $this->db->update('architecture_booking',$verify_user);
	}

	public function architecture_house_plan_upload_model($result,$architecture_booking_id)
	{
		$this->db->where('architecture_booking_id',$architecture_booking_id);
		return $this->db->update('architecture_booking',$result);
	}
	
	public function house_plan_request_fetch() 
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('architecture_booking');
		$this->db->join('customer','customer.customer_id =architecture_booking.ab_customer_id');
		$this->db->where('architecture_booking.ad_architecture_email',$email);
		return $this->db->get()->result();
	}










}