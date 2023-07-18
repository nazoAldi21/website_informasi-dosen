<?php 
class Adminruangan extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if ($this->session->userdata('username')=='') {
			redirect ('/');
		}

		$this->load->model('mod_ruangan');
	}

    public function index(){
		$data['header'] = "Data Ruangan";
		$data['content'] = 'dosen/ruangan/index';
		$data['get_ruangan'] = $this->mod_ruangan->get_ruangan();

		$this->load->view('layout/template', $data);
	}
}

?>