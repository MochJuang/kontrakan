<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_model extends CI_Model {

	public function get_rekomendasi($id_kota)
	{
		return $this->db->select('kontrakan.id_kontrakan, nama_kontrakan, harga, type, kategori,  lokasi,klik, foto')
				->join('kategori','kategori.id_kategori = kontrakan.id_kategori','left')
				->join('diklik','diklik.id_kontrakan = kontrakan.id_kontrakan','left')
				->join('type','type.id_type = kontrakan.id_type','left')
				->join('kota','kota.id_kota = kontrakan.id_kota','left')
				->where(['kontrakan.id_kota' => $id_kota])->order_by('klik','desc')->limit(4)->get('kontrakan')->result_array();
	}	
	public function get_rekomendasi_detail($id_kota,$per_page,$offset)
	{
		$data = $this->db->select('kontrakan.id_kontrakan, nama_kontrakan, harga, type, kategori,  lokasi,klik, foto')
				->join('kategori','kategori.id_kategori = kontrakan.id_kategori','left')
				->join('diklik','diklik.id_kontrakan = kontrakan.id_kontrakan','left')
				->join('type','type.id_type = kontrakan.id_type','left')
				->join('kota','kota.id_kota = kontrakan.id_kota','left')
				->where(['kontrakan.id_kota' => $id_kota])->order_by('klik','desc');
		return ['data' => $data->get('kontrakan',$per_page,$offset)->result_array() , 'row' => $data->get('kontrakan')->num_rows()];
	}	
	public function get_kontrakan()
	{
		return $this->db->select('kontrakan.id_kontrakan, nama_kontrakan, harga, type, kategori,  lokasi,klik, foto')
				->join('kategori','kategori.id_kategori = kontrakan.id_kategori','left')
				->join('diklik','diklik.id_kontrakan = kontrakan.id_kontrakan','left')
				->join('type','type.id_type = kontrakan.id_type','left')
				->join('kota','kota.id_kota = kontrakan.id_kota','left')
				->order_by('klik','desc')->limit(20)->get('kontrakan')->result_array();
	}	
	public function search_kontrakan($value)
	{
		return $this->db->select('kontrakan.id_kontrakan, nama_kontrakan, harga, type, kategori,  lokasi,klik, foto')
				->join('kategori','kategori.id_kategori = kontrakan.id_kategori','left')
				->join('diklik','diklik.id_kontrakan = kontrakan.id_kontrakan','left')
				->join('type','type.id_type = kontrakan.id_type','left')
				->join('kota','kota.id_kota = kontrakan.id_kota','left')
				->like(['kontrakan.nama_kontrakan' => $value])
				->or_like(['kota' => $value])
				->or_like(['lokasi' => $value])
				->order_by('klik','desc')->limit(4)->get('kontrakan')->result_array();
	}
	public function detail($id)
	{
		$value = $this->db->select('kontrakan.id_kontrakan, nama_kontrakan, harga, type, kategori,  lokasi, foto, ,luas_kamar,deskripsi,listrik,id_pemilik')
				->join('kategori','kategori.id_kategori = kontrakan.id_kategori','left')
				->join('type','type.id_type = kontrakan.id_type','left')
				->join('kota','kota.id_kota = kontrakan.id_kota','left')->get_where('kontrakan',['kontrakan.id_kontrakan' => $id])->row_array();
		$gambar = $this->db->where(['id_kontrakan' => $value['id_kontrakan']])->get('gambar', 2)->result_array();
		$fasilitas = $this->db->select('id_fasilitas,fasilitas,icon')->join('fasilitas_master','fasilitas_master.id_fasilitas_master = fasilitas.id_fasilitas_master')
						->get_where('fasilitas', ['id_kontrakan' => $value['id_kontrakan']])->result_array();
		$data = [
			'id_kontrakan'		=> $value['id_kontrakan'],
			'nama_kontrakan'	=> $value['nama_kontrakan'],
			'harga'				=> $value['harga'],
			'type'				=> $value['type'],
			'kategori'			=> $value['kategori'],
			'lokasi'			=> $value['lokasi'],
			'foto'				=> $value['foto'],
			'luas_kamar'		=> $value['luas_kamar'],
			'deskripsi'			=> $value['deskripsi'],
			'gambar'			=> $gambar,
			'data_pemilik'		=> $this->db->get('pemilik', ['id_pemilik' => $value['id_pemilik']])->row_array(),
			'listrik'			=> $value['listrik'],
			'fasilitas'			=> $fasilitas,
		];
		return $data;
	}
	public function filter($value= [])
	{
		$harga_max = $value['harga_max'];	
		$harga_min = $value['harga_min'];	
		$id_kota = $value['kota'];	
		$id_kategori = $value['kategori'];	
		$id_type = $value['type'];	

		$query = "SELECT kontrakan.id_kontrakan, nama_kontrakan, harga, type, kategori, lokasi, foto, klik FROM kontrakan 
					inner join type on kontrakan.id_type = type.id_type
					inner join kota on kontrakan.id_kota = kota.id_kota
					inner join kategori on kontrakan.id_kategori = kategori.id_kategori
					inner join diklik on kontrakan.id_kontrakan = diklik.id_kontrakan
					WHERE harga between $harga_min AND $harga_max and 
					kontrakan.id_kota = $id_kota and 
					kontrakan.id_kategori = $id_kategori and 
					kontrakan.id_type = $id_type  order by klik desc LIMIT 20 ";
		return $this->db->query($query)->result_array();
	}
	public function get_image_kontrakan($id)
	{
		return $this->db->get_where('gambar', ['id_kontrakan' => $id])->result_array();
	}

}

/* End of file front_model.php */
/* Location: ./application/models/front_model.php */