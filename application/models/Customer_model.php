<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function customer_insert_model($result)
	{
		return $this->db->insert('customer',$result);
	}

	public function login_check_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('customer');
	}

	public function customer_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('architecture');
		$this->db->where('architecture_status','Approved');
		return $this->db->get()->result();
	}

	public function designer_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('designer');
		$this->db->where('designer_status','Approved');
		return $this->db->get()->result();
	}

	public function contractor_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('contractor');
		$this->db->where('contractor_status','Approved');
		return $this->db->get()->result();
	}

	public function customer_id_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('customer_email',$email);
		return $this->db->get()->result();
	}

	public function customer_update_model($result,$customer_id)
	{
		$this->db->where('customer_id',$customer_id);
		return $this->db->update('customer',$result);
	}

	public function customer_architecture_fetch_model($architecture_id)
	{
		$this->db->select('*');
		$this->db->from('architecture');
		$this->db->where('architecture_id',$architecture_id);
		return $this->db->get()->result();
	}
	public function customer_contractor_fetch_model($contractor_id)
	{
		$this->db->select('*');
		$this->db->from('contractor');
		$this->db->where('contractor_id',$contractor_id);
		return $this->db->get()->result();
	}

	public function architecture_booking_model($arrdata)
	{
		return $this->db->insert('architecture_booking',$arrdata);
	}

	public function book_architecture_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('architecture_booking');
		$this->db->join('architecture','architecture.architecture_id =architecture_booking.ab_architecture_id');
		return $this->db->get()->result();
	}


	public function cancel_architecture_model($architecture_booking_id)
	{
		$this->db->where('architecture_booking_id',$architecture_booking_id);
		return $this->db->delete('architecture_booking');
	}

	public function architecture_book_fetch_model($architecture_booking_id)
	{
		$this->db->select('*');
		$this->db->from('architecture_booking');
		$this->db->join('architecture','architecture.architecture_id =architecture_booking.ab_architecture_id');
		$this->db->join('customer','customer.customer_id=architecture_booking.ab_customer_id');
		$this->db->where('architecture_booking.architecture_booking_id',$architecture_booking_id);
		return $this->db->get()->result();
	}

	public function designer_book_fetch_model($db_designer_bookingid)
	{
		$this->db->select('*');
		$this->db->from('designer_booking');
		$this->db->join('designer','designer.designer_id=designer_booking.db_designer_id');
		$this->db->join('customer','customer.customer_id=designer_booking.db_customer_id');
		$this->db->where('designer_booking.db_designer_bookingid',$db_designer_bookingid);
		return $this->db->get()->result();
	}

	public function architecture_payment_insert_model($arrdata)
	{
		return $this->db->insert('architecture_payment',$arrdata);
	}

	public function architecture_payment_payed_model($architecture_booking_id,$update)
	{
		 
		$this->db->where('architecture_booking_id',$architecture_booking_id);
		return $this->db->update('architecture_booking',$update);
	}

	public function house_plan_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('architecture_booking');
		$this->db->join('architecture','architecture.architecture_id=architecture_booking.ab_architecture_id');
		$this->db->where('architecture_booking.ab_customer_email',$email);
		return $this->db->get()->result();
	}

	public function customer_designer_fetch_model($designer_id)
	{
		$this->db->select('*');
		$this->db->from('designer');
		$this->db->where('designer_id',$designer_id);
		return $this->db->get()->result();
	}

	public function designer_booking_insert_model($result)
	{
		return $this->db->insert('designer_booking',$result);
	}

	public function book_designer_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('designer_booking');
		$this->db->join('designer','designer.designer_id=designer_booking.db_designer_id');
		return $this->db->get()->result();
	}
	
	public function cancel_designer_model($db_designer_bookingid)
	{
		$this->db->where('db_designer_bookingid',$db_designer_bookingid);
		return $this->db->delete('designer_booking');
	}

	public function designer_payment_insert_model($arrdata)
	{
		return $this->db->insert('designer_payment',$arrdata);
	}
	
	public function designer_payment_payed_model($designer_booking_id,$update)
	{
		$this->db->where('db_designer_bookingid ',$designer_booking_id);
		return $this->db->update('designer_booking',$update);
	}

	public function house_3d_plan_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('designer_booking');
		$this->db->join('designer','designer.designer_id=designer_booking.db_designer_id');
		$this->db->where('designer_booking.db_customer_email',$email);
		return $this->db->get()->result();
	}

	public function contractor_booking_insert_model($result)
	{
		return $this->db->insert('contractor_booking',$result);
	}
	public function book_contractor_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('contractor_booking');
		$this->db->join('contractor','contractor.contractor_id=contractor_booking.cb_contractor_id');
		return $this->db->get()->result();
	}
	public function cancel_contractor_model($contractor_booking_id)
	{
		$this->db->where('contractor_booking_id',$contractor_booking_id);
		return $this->db->delete('contractor_booking');
	}
	public function contractor_book_fetch_model($contractor_booking_id)
	{
		$this->db->select('*');
		$this->db->from('contractor_booking');
		$this->db->join('contractor','contractor.contractor_id=contractor_booking.cb_contractor_id');
		$this->db->join('customer','customer.customer_id=contractor_booking.cb_customer_id');
		$this->db->where('contractor_booking.contractor_booking_id',$contractor_booking_id);
		return $this->db->get()->result();
	}
	public function contractor_payment_insert_model($arrdata)
	{
		return $this->db->insert('contractor_payment',$arrdata);
	}
	public function contractor_payment_payed_model($contractor_booking_id,$update)
	{
		$this->db->where('contractor_booking_id',$contractor_booking_id);
		return $this->db->update('contractor_booking',$update);
	}
	public function Construction_cost_details_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('contractor_booking');
		$this->db->join('contractor','contractor.contractor_id=contractor_booking.cb_contractor_id');
		$this->db->where('contractor_booking.cb_customer_email',$email);
		return $this->db->get()->result();
	}
	public function architecture_reviewinsert_model($arrdata)
	{
		return $this->db->insert('architecture_review',$arrdata);
	}
	public function designer_reviewinsert_model($arrdata)
	{
		return $this->db->insert('designer_review',$arrdata);
	}
	public function contractor_reviewinsert_model($arrdata)
	{
		return $this->db->insert('contractor_review',$arrdata);
	}
	public function architecture_review_fetch_model($architecture_id)
	{

		$this->db->select('*');
		$this->db->from('architecture_review');
		$this->db->join('customer','architecture_review.customer_id=customer.customer_id');
		$this->db->where('architecture_review.architecture_id',$architecture_id);
		return $this->db->get()->result();
	}
	public function designer_review_fetch_model($designer_id)
	{
		$this->db->select('*');
		$this->db->from('designer_review');
		$this->db->join('customer','designer_review.customer_id=customer.customer_id');
		$this->db->where('designer_review.designer_id',$designer_id);
		return $this->db->get()->result();
	}
	public function contractor_review_fetch_model($contractor_id)
	{
		$this->db->select('*');
		$this->db->from('contractor_review');
		$this->db->join('customer','contractor_review.customer_id=customer.customer_id');
		$this->db->where('contractor_review.contractor_id',$contractor_id);
		return $this->db->get()->result();
	}


}