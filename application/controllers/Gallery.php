<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index(){
		$data['konten']="v_gallery";
		$this->load->view('template', $data);
	}
}
?>