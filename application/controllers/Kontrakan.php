<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrakan extends CI_Controller {

	public function index($offset = 0)
	{
		has_login();

		$this->load->library('pagination');

		$per_page = 5;
		$data['data'] = $this->backend->get_kontrakan($per_page,$offset);
		$config['base_url'] = base_url('kontrakan/index');
		$config['total_rows'] = $this->db->get_where('kontrakan', ['id_pemilik' => $this->session->userdata('userId')])->num_rows();
		$config['per_page'] = $per_page;
		$config['num_links'] = 5;	
		
		$config['full_tag_open'] = '<ul class="pagination">';
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


		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['css'] = [
			'plugins/custombox/css/custombox.css'
		];

		$data['js'] = [
			'plugins/notifyjs/js/notify.js',
			'plugins/notifications/notify-metro.js',
			'plugins/custombox/js/legacy.min.js',
			'plugins/custombox/js/custombox.min.js'
		];
		$data['notifPesan'] = notif_message();
		// dd(count($data['data']));
		//dd($this->session->userdata());
		$this->load->view('templates/header',$data);	
		$this->load->view('backend/kontrakan/kontrakan', $data);
		$this->load->view('templates/footer',$data);	
	}

	public function tambah()
	{
		has_login();
		$this->form_validation->set_rules('type', 'Type Kontrakan', 'trim|required',['required' => 'Type Kontrakan Belum Dipilih']);
		$this->form_validation->set_rules('kategori', 'Kategori Kontrakan', 'trim|required',['required' => 'Kota Kontrakan Belum Dipilih']);
		$this->form_validation->set_rules('kota', 'Kota Kontrakan', 'trim|required',['required' => 'Kategori Kontrakan Belum Dipilih']);
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header');	
				$this->load->view('backend/kontrakan/add' );
				$this->load->view('templates/footer');	
			} else {
				// dd($_FILES);
			$config['upload_path'] = './assets/upload';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '100000000';
			$config['max_width']  = '7024000';
			$config['max_height']  = '99768000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				dd($error);
				}
			else{
				$data = array('upload_data' => $this->upload->data());
				$data = [
					'id_kota' 			=> $this->input->post('kota',true),
					'id_pemilik'		=> $this->session->userdata('userId'),
					'id_kategori' 		=> $this->input->post('kategori',true),
					'id_type' 			=> $this->input->post('type',true),
					'nama_kontrakan'	=> $this->input->post('nama_kontrakan',true),
					'harga' 			=> $this->input->post('harga',true),
					'luas_kamar' 		=> $this->input->post('luas',true),
					'deskripsi' 		=> $this->input->post('deskripsi',true),
					'lokasi' 			=> $this->input->post('lokasi',true),
					'listrik' 			=> ($this->input->post('tagihan',true) == 'yes') ? 1 : 0,
					'foto'				=>  $_FILES['file']['name']
				];
				if($this->db->insert('kontrakan', $data)){
					$data_id = $this->db->get_where('kontrakan', $data)->row()->id_kontrakan;
					for($i = 0;$i < $this->input->post('kuantitas') ; $i++){
						$this->db->insert('kuantitas', ['id_kontrakan' => $data_id,'status' => 'tersedia']);
					}
					$this->session->set_userdata('message',['type' => 'success', 'header' => 'Berhasil', 'pesan' => 'Berhasil Menambahkan Kontrakan']);
					redirect('kontrakan','refresh');
			}
			}
		}

	}
	public function hapus($id)
	{
		has_login();
		if ($this->db->delete('kontrakan',['id_kontrakan' => $id])) {
			$this->session->set_userdata('message',['type' => 'success', 'header' => 'Berhasil', 'pesan' => 'Berhasil Menghapus Kontrakan']);
			redirect('kontrakan','refresh');
		}
	}
	public function edit($id)
	{
		has_login();
		$data['data'] = $this->backend->get_edit($id);
		$this->load->view('templates/header');	
		$this->load->view('backend/kontrakan/edit',$data );
		$this->load->view('templates/footer');	
	}
	public function action_edit()
	{
		has_login();
		$this->form_validation->set_rules('type', 'Type Kontrakan', 'trim|required',['required' => 'Type Kontrakan Belum Dipilih']);
		$this->form_validation->set_rules('kategori', 'Kategori Kontrakan', 'trim|required',['required' => 'Kota Kontrakan Belum Dipilih']);
		$this->form_validation->set_rules('kota', 'Kota Kontrakan', 'trim|required',['required' => 'Kategori Kontrakan Belum Dipilih']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');	
			$this->load->view('backend/kontrakan/edit');
			$this->load->view('templates/footer');	
		} else {
			$data = [
				'id_kota' 			=> $this->input->post('kota',true),
				'id_pemilik'		=> $this->session->userdata('userId'),
				'id_kategori' 		=> $this->input->post('kategori',true),
				'id_type' 			=> $this->input->post('type',true),
				'nama_kontrakan'	=> $this->input->post('nama_kontrakan',true),
				'harga' 			=> $this->input->post('harga',true),
				'luas_kamar' 		=> $this->input->post('luas',true),
				'deskripsi' 		=> $this->input->post('deskripsi',true),
				'lokasi' 			=> $this->input->post('lokasi',true),
				'listrik' 			=> ($this->input->post('tagihan',true) == 'yes') ? 1 : 0
			];
			if($this->db->update('kontrakan', $data,['id_kontrakan' => $this->input->post('id_kontrakan')])){


				$data_id = $this->db->get_where('kontrakan', $data)->row()->id_kontrakan;
				$kts = $this->db->get_where('kuantitas', ['id_kontrakan' => $data_id,'status' => 'tersedia'])->num_rows();
				$input_k = $this->input->post('kuantitas');
				if ($kts > $input_k) {
					$inc = $kts - $input_k;
					for($i = 0;$i < $inc ; $i++){
						$this->db->where(['id_kontrakan' => $data_id,'status' => 'tersedia'])->delete('kuantitas');
					}
				}else if($kts < $input_k){
					$inc = $input_k - $kts;
					for($i = 0;$i < $inc ; $i++){
						$this->db->insert('kuantitas', ['id_kontrakan' => $data_id,'status' => 'tersedia']);
					}
				}
				$this->session->set_userdata('message',['type' => 'success', 'header' => 'Berhasil', 'pesan' => 'Berhasil Mengedit Kontrakan']);
				redirect('kontrakan','refresh');
			}
		}

	}
	public function gambar($id)
	{
		has_login();
		$data['id'] = $id;
		$data['data'] = $this->db->get_where('gambar', ['id_kontrakan' => $id])->result_array();
		$data['css'] = [
			'plugins/magnific-popup/css/magnific-popup.css'
		];
		$data['js'] = [
			'plugins/isotope/js/isotope.pkgd.min.js',
			'plugins/magnific-popup/js/jquery.magnific-popup.min.js'
		];
		$data['add_js_gambar'] = true;
		$data['img'] = $this->backend->get_gambar($id);
		$data['notifPesan'] = notif_message();
		$this->load->view('templates/header', $data);	
		$this->load->view('backend/kontrakan/gambar',$data);
		$this->load->view('templates/footer', $data);	
	}
	public function add_gambar($id)
	{
		$data['css'] = [
			'plugins/select2/css/select2.min.css',
			'plugins/bootstrap-sweetalert/sweet-alert.css',
			'plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css',
			'plugins/dropzone/dropzone.css',
		];
		$data['js'] = [
			'plugins/raphael/raphael-min.js',
			'plugins/jquery-knob/jquery.knob.js',
			'plugins/notifyjs/js/notify.js',
			'plugins/notifications/notify-metro.js',
			'plugins/select2/js/select2.min.js',
			'plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js',
			'plugins/multiselect/js/jquery.multi-select.js',
			'plugins/bootstrap-select/js/bootstrap-select.min.js',
			'plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js',
			'plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js',
			'plugins/bootstrap-maxlength/bootstrap-maxlength.min.js',
			'pages/jquery.form-advanced.init.js',
			'plugins/bootstrap-sweetalert/sweet-alert.min.js',
			'pages/jquery.sweet-alert.init.js',
			'plugins/moment/moment.js',
			'plugins/timepicker/bootstrap-timepicker.js',
			'plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
			'plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
			'plugins/clockpicker/js/bootstrap-clockpicker.min.js',
			'plugins/bootstrap-daterangepicker/daterangepicker.js',
			'pages/jquery.form-pickers.init.js',
			'plugins/dropzone/dropzone.js',
		];
		$this->load->view('templates/header', $data);	
		$this->load->view('backend/kontrakan/add_gambar',['id' => $id]);
		$this->load->view('templates/footer', $data);	
	}
	public function act_img($id)
	{
		// dd($_FILES);
		$config['upload_path'] = './assets/upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000000';
		$config['max_width']  = '7024000';
		$config['max_height']  = '99768000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			dd($error);
			}
		else{
			$data = array('upload_data' => $this->upload->data());
			$this->db->insert('gambar', ['gambar' => $_FILES['file']['name'],'id_kontrakan' => $id]);
			echo "success";
		}
	}
	public function remove_gambar($id_kontrakan,$id_gambar)
	{
		if ($this->session->has_userdata('message')) {
			$data['notifPesan'] = $this->session->userdata('message');
			$this->session->unset_userdata('message');
		}

		if ($this->db->delete('gambar',['id_gambar' => $id_gambar])) {
			$this->session->set_userdata('message',['type' => 'success', 'header' => 'Berhasil', 'pesan' => 'Berhasil Menghapus Gambar']);
			redirect("kontrakan/gambar/$id_kontrakan",'refresh');
		}
	}

	public function detail($id)
	{
		has_login();
		$data['data'] = $this->backend->detail_kontrakan($id);
		$this->load->view('templates/header', $data);	
		$this->load->view('backend/kontrakan/detail',$data);
		$this->load->view('templates/footer', $data);	
	}
	public function fasilitas($id)
	{
		has_login();
		$data['css'] = [
			'plugins/custombox/css/custombox.css'
		];

		$data['js'] = [
			'plugins/notifyjs/js/notify.js',
			'plugins/notifications/notify-metro.js',
			'plugins/custombox/js/legacy.min.js',
			'plugins/custombox/js/custombox.min.js'
		];
		$data['notifPesan'] = notif_message();
		$this->load->view('templates/header',$data);	
		$this->load->view('backend/kontrakan/fasilitas',['id' => $id]);
		$this->load->view('templates/footer',$data);	
	}
	public function fasilitas_add($id)
	{
		if ($this->input->post()) {
			foreach ($this->input->post('fasilitas') as $key => $value) {
				$this->db->insert('fasilitas', ['id_fasilitas_master' => $value, 'id_kontrakan' => $id]);
			}
			$this->session->set_userdata('message',['type' => 'success', 'header' => 'Berhasil', 'pesan' => 'Berhasil Membah Fasilitas']);
		}else{
			$this->session->set_userdata('message',['type' => 'danger', 'header' => 'Gagal', 'pesan' => 'Fasilitas belum dipilih']);
		}
			redirect("kontrakan/fasilitas/$id",'refresh');			

	}
	public function remove_fasilitas($id_kontrakan,$id_fasilitas)
	{
		if ($this->db->delete('fasilitas',['id_fasilitas' => $id_fasilitas])) {
			$this->session->set_userdata('message',['type' => 'success', 'header' => 'Berhasil', 'pesan' => 'Berhasil Menghapus Fasilitas']);
			redirect("kontrakan/fasilitas/$id_kontrakan",'refresh');
		}
		
	}

}

/* End of file Kontrakan.php */
/* Location: ./application/controllers/Kontrakan.php */