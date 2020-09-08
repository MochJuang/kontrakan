<?php 

$CI =& get_instance();

function notif_message(){
	global $CI;
	if ($CI->session->has_userdata('message')) {
		$data = $CI->session->userdata('message');
		$CI->session->unset_userdata('message');
		//dd($CI->session->userdata());
		return $data;
	}
}

function has_login(){
	global $CI;
	if (!$CI->session->has_userdata('userId')) {
		redirect('panel','refresh');
	}
}
function dd($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";die;
}
function type($value='')
{
	$data ='';
	switch ($value) {
		case 'Bulanan':$data='Bulan';break;
		case 'Mingguan':$data='Minggu';break;
		case 'Harian':$data='Hari';break;
	}
	return $data;
}