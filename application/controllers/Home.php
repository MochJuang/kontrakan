<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		has_login();
		// dd($this->front->get_rekomendasi(6));
	$this->load->view('frontend/templates/header');
	$this->load->view('frontend/home');
	$this->load->view('frontend/templates/footer');
	}

	public function last_query()
	{
		has_login();
		$this->front->get_rekomendasi(6);
		echo $this->db->last_query();
	}

	public function get_rekomendasi($id_kota)
	{
		has_login();
		echo json_encode($this->front->get_rekomendasi($id_kota));
	}
	public function add_klik($id)
	{
		has_login();
		if ($jumlah = $this->db->get_where('diklik', ['id_kontrakan' => $id])->row()->klik) {
			$jumlah = intval($jumlah) + 1;
			if ($this->db->update('diklik', ['klik' => $jumlah],['id_kontrakan' => $id])) {
				return true;
			}
		}else{
			return $this->db->insert('diklik', ['id_kontrakan' => $id, 'klik' => 1]);
		}
	}
	public function search($value='')
	{
		has_login();
		$data = $this->front->search_kontrakan($value);
		echo json_encode($data);
	}
	public function detail($id)
	{
		has_login();
		$data['kontrakan'] = $this->db->get_where('kontrakan', ['id_kontrakan' => $id])->row()->nama_kontrakan;
		$data['data'] = $this->front->detail($id);
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/detail',$data);
		$this->load->view('frontend/templates/footer');

	}
	public function detail_gambar($id)
	{
		has_login();
		$data['data'] = $this->front->get_image_kontrakan($id);
		$data['kontrakan'] = $this->db->get_where('kontrakan', ['id_kontrakan' => $id])->row()->nama_kontrakan;
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/detail_gambar',$data);
		$this->load->view('frontend/templates/footer');
		
	}
	public function detail_rekomendasi($id_kota,$fas= 0,$offset= 0)
	{
		has_login();
		$per_page = 1;
		$row = $this->front->get_rekomendasi_detail($id_kota,$per_page,$offset);

		$this->load->library('pagination');

		$config['base_url'] = base_url("home/detail_rekomendasi/$id_kota/$offset");
		$config['total_rows'] = $row['row'];
		$config['per_page'] = $per_page;
		$config['num_links'] = 1;	
		
		$config['full_tag_open'] = '<ul class="page-pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = "<i class='fa fa-angle-right'></i>";
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = "<i class='fa fa-angle-left'></i>";
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class=\"active\"><a href='#'>";
		$config['cur_tag_close'] = '</a></li>';

		$data['data'] = $row['data'];

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		dd($row['row']);

		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/detail_rekomendasi',$data);
		$this->load->view('frontend/templates/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */