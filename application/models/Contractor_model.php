<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contractor_model extends CI_Model {

	public function contractor_insert_model($result)
	{
		return $this->db->insert('contractor',$result);
	}

	public function contractor_email_check_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('contractor');
	}
	public function login_check_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('contractor');
	}

	public function contractor_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('contractor');
		$this->db->where('c_email',$email);
		return $this->db->get()->result();
	}
	
	public function contrator_update_model($result,$contractor_id)
	{
		$this->db->where('contractor_id',$contractor_id);
		return $this->db->update('contractor',$result);
	}
	public function user_request_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('contractor_booking');
		$this->db->join('customer','customer.customer_id=contractor_booking.cb_customer_id');
		$this->db->where('contractor_booking.cb_contractor_email',$email);
		//$this->db->where('contractor_booking.house_plan','Pending');
		return $this->db->get()->result();
	}
	public function contractor_user_verify_model($contractor_booking_id,$verify_user)
	{
		$this->db->where('contractor_booking_id',$contractor_booking_id);
		return $this->db->update('contractor_booking',$verify_user);
	}
	public function construction_cost_details_pdf_model($result,$contractor_booking_id)
	{
		$this->db->where('contractor_booking_id',$contractor_booking_id);
		return $this->db->update('contractor_booking',$result);
	}
	public function Construction_cost_details_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('contractor_booking');
		$this->db->join('customer','customer.customer_id=contractor_booking.cb_customer_id');
		$this->db->where('contractor_booking.cb_contractor_email',$email);
		return $this->db->get()->result();
	}
}