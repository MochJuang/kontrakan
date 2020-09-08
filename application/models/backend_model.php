<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_model extends CI_Model {

	public function get_type()
	{
		return $this->db->get('type')->result_array();
	}	
	public function get_kategori()
	{
		return $this->db->get('kategori')->result_array();
	}	
	public function get_kota()
	{
		return $this->db->get('kota')->result_array();
	}	
	public function login_pemilik($data = [])
	{
		return $this->db->get_where('pemilik',['email' => $data['email'],'password' => $data['password']])->row();
	}
	public function get_user($id)
	{
		return $this->db->get_where('pemilik',['id_pemilik' => $id])->row();
	}
	public function get_kontrakan($per_page,$offset)
	{
		$kos = $this->db->where('id_pemilik' , $this->session->userdata('userId'))->get('kontrakan',$per_page, $offset)->result_array();
		$data = [];
		foreach ($kos as $key => $value) {
			$data[] = [
				'id_kontrakan' => $value['id_kontrakan'], 
				'nama_kontrakan' => $value['nama_kontrakan'], 
				'harga' => $value['harga'], 
				'jumlah' => $this->db->get_where('kuantitas', ['id_kontrakan' => $value['id_kontrakan']])->num_rows(),	
				'terisi' => $this->db->get_where('kuantitas', ['id_kontrakan' => $value['id_kontrakan'],'status' => 'terisi'])->num_rows(),	
				'tersedia' => $this->db->get_where('kuantitas', ['id_kontrakan' => $value['id_kontrakan'], 'status' => 'tersedia'])->num_rows(),	
			];
		}
		return $data;
	}
	public function get_edit($id)
	{
		$data = [];
		$this->db->select('kontrakan.id_kontrakan, nama_kontrakan, id_kota as kota,id_kategori as kategori, id_type as type, harga, luas_kamar as luas, deskripsi, lokasi, listrik');
		$value = $this->db->get_where('kontrakan',[ 'id_kontrakan' => $id ])->row_array();
		$kuantitas = $this->db->get_where('kuantitas',[ 'kuantitas.id_kontrakan' => $value['id_kontrakan'], 'status' => 'tersedia'] )->num_rows();
		array_push($value, $kuantitas);
		return $value;
	}
	public function get_gambar($id)
	{
		$this->db->get_where('gambar', ['id_kontrakan' => $id])->result_array();
	}
	public function detail_kontrakan($id)
	{
		$this->db->select('kontrakan.id_kontrakan, nama_kontrakan, kota kategori, type, harga, luas_kamar as luas, deskripsi, lokasi, listrik');
		$this->db->join('kota', 'kontrakan.id_kota = kota.id_kota');
		$this->db->join('kategori', 'kontrakan.id_kategori = kategori.id_kategori');
		$this->db->join('type', 'kontrakan.id_type = type.id_type');
		$data = $this->db->get_where('kontrakan',[ 'kontrakan.id_kontrakan' => $id ])->row_array();
		
		$kuantitas_tersedia = $this->db->get_where('kuantitas',[ 'kuantitas.id_kontrakan' => $data['id_kontrakan'], 'status' => 'terisi'] )->num_rows();
		$kuantitas_jumlah = $this->db->get_where('kuantitas',[ 'kuantitas.id_kontrakan' => $data['id_kontrakan'] ])->num_rows();
		$kuantitas_terisi = $this->db->get_where('kuantitas',[ 'kuantitas.id_kontrakan' => $data['id_kontrakan'], 'status' => 'tersedia'] )->num_rows();
		array_push($data, $kuantitas_tersedia);
		array_push($data, $kuantitas_jumlah);
		array_push($data, $kuantitas_terisi);
		return $data;
		
	}
	public function get_fasilitas($id,$act = 'show')
	{
		if ($act == 'add') {
			$data = [];
			$fm = $this->db->get('fasilitas_master')->result_array();
			foreach ($fm as $key => $value) {
				$myf = $this->db->get_where('fasilitas',['id_fasilitas_master' => $value['id_fasilitas_master'],'id_kontrakan' => $id])->num_rows();
				if ($myf < 1) {
					$data[] = $value;
				}
			}
		}else{
			$data = $this->db->select('id_fasilitas, icon, fasilitas')
						->join('fasilitas_master','fasilitas.id_fasilitas_master = fasilitas_master.id_fasilitas_master')
						->get_where('fasilitas', ['id_kontrakan' => $id])->result_array();
		}
		return $data;
	}
}

/* End of file backend_model.php */
/* Location: ./application/models/backend_model.php */