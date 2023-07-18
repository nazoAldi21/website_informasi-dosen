<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if ($this->session->userdata('username')=='') {
			redirect ('/');
		}

		$this->load->model(['mod_matkul', 'mod_prodi','model_user', 'mod_dosen', 'mod_ruangan']);
	}

	public function index() {
		$data['header'] = 'Dashboard';
		$data['content'] = 'dosen/index';
		$data['title'] = "Dashboard";
		$data['icon'] = "fa fa-dashboard";
		$data['dash'] = "class=enable";
		$data['t_penelitian'] = $this->db->count_all('db_penelitian');
		$data['t_jadwal'] = $this->db->count_all('db_calendar_matkul');
		$data['t_user'] = $this->db->count_all('db_user');
		$data['dosen'] = $this->mod_dosen->get_dosen_by_id($this->session->userdata('username'));
		$this->load->view('layout/publik-template', $data);
	}

	function ubah_kata_sandi(){
		$data['header'] = 'Ubah Password';
		$data['content'] = 'dosen/ubah_sandi';
		$data['title'] = "Ubah Kata Sandi";
		$data['icon'] = "fa fa-unlock";
		$this->load->view('layout/publik-template', $data);
	}

	function auth_sandi(){
		$pass = $this->input->post('password');
		$data = ['password'=>md5($pass), 'password_text'=>$pass,];
		$this->model_user->update_sandi($data, $this->session->userdata('username'));
		$this->session->set_flashdata('notif', '<p id="notif" class="alert alert-success" id="notif"><strong>Sukses!</strong> Perubahan kata sandi berhasil di proses.</p>');
		redirect('dosen/dashboard', 'refresh');
	}

	public function get_ruangan(){
		$data['header'] = "Data Ruangan";
		$data['content'] = 'dosen/ruangan/index';
		$data['get_ruangan'] = $this->mod_ruangan->get_ruangan();

		$this->load->view('layout/publik-template', $data);
	}

	public function logout(){
		$this->session->unset_userdata('username', '');
		$this->session->unset_userdata('level', '');
		$this->session->unset_userdata('prodi', '');
		$this->session->unset_userdata('dosen', '');
		$this->session->unset_userdata('id', '');
		session_destroy();
		redirect('/');
	}
	
}

?>

