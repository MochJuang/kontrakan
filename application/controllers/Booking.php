<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function index()
	{
		has_logi();
		$data['data'] = $this->front->get_kontrakan();
		if ($this->input->post()) {
			$data['data'] = $this->front->filter($this->input->post());
		}
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/booking_kost',$data);
		$this->load->view('frontend/templates/footer');

	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */ 