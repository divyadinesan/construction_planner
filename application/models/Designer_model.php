<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer_model extends CI_Model {


	public function designer_insert_model($result)
	{
		return $this->db->insert('designer',$result);
	}

	public function login_check_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('designer');
	}
	public function designer_email_check_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('designer');
	}

	public function designer_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('designer');
		$this->db->where('d_email',$email);
		return $this->db->get()->result();
	}

	public function designer_update_model($result,$designer_id)
	{
		$this->db->where('designer_id',$designer_id);
		return $this->db->update('designer',$result);
	}

	public function user_request_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('designer_booking');
		$this->db->join('customer','customer.customer_id=designer_booking.db_customer_id');
		$this->db->where('designer_booking.db_designer_email',$email);
		$this->db->where('designer_booking.db_3d_plan','Pending');
		return $this->db->get()->result();
	}

	public function designer_user_verify_model($db_designer_bookingid,$verify_user)
	{
		$this->db->where('db_designer_bookingid',$db_designer_bookingid);
		return $this->db->update('designer_booking',$verify_user);
	}

	public function designer_house_plan_upload_model($result,$designer_booking_id)
	{
		$this->db->where('db_designer_bookingid',$designer_booking_id);
		return $this->db->update('designer_booking',$result);
	}

	public function three_d_booking_fetch()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('designer_booking');
		$this->db->join('customer','customer.customer_id=designer_booking.db_customer_id');
		$this->db->where('designer_booking.db_designer_email',$email);	
		return $this->db->get()->result();
	}
	
}