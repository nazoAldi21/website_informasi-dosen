<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){

		parent::__construct();

		if ($this->session->userdata('username')) {
			if($this->session->userdata('level')==1){
				redirect ('admin/dashboard');
			}elseif($this->session->userdata('level')==2){
				redirect ('dosen/dashboard');
			}
		}

		$this->load->model(['mod_jtoday', 'mod_ruangan', 'mod_penelitian']);
	}

	public function index() {
		$data['get_sore'] = $this->mod_jtoday->get_sore();
		$data['get_weekend'] = $this->mod_jtoday->get_weekend();
		$data['get_reguler'] = $this->mod_jtoday->get_reguler();
		$data['penbaru'] = $this->mod_penelitian->get_peneliti_baru();
		$data['get_count'] = $this->mod_ruangan->get_count_kosong();
		$this->load->view('frontend/front', $data);
	}

	public function login() {
		$this->load->view('index');
	}

	public function cek_login() {

		$user = $this->input->post('userid');
		$pass = $this->input->post('password');
		$this->db->where('username',$user);
        $this->db->where('password',md5($pass));
        $hasil = $this->db->get('db_user');
		if ($hasil->num_rows >= 1) {
			foreach ($hasil->result() as $rs) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $rs->id;
				$sess_data['username'] = $rs->username;
				$sess_data['level'] = $rs->ref_level_id;
				$this->session->set_userdata($sess_data);
			}
			$dat = [
					'last_login'=>date('Y-m-d'.' '.'H:m:s'),
				];
				$user = $this->input->post('userid');
               	$this->db->where('username',$user);
               	$this->db->update('db_user',$dat);

			if ($this->session->userdata('level')==1) {
				redirect('admin/dashboard');
			}
			elseif ($this->session->userdata('level')==2) {
				redirect('dosen/dashboard');
			}		
		}else {
			
			redirect(base_url(), 'refresh');
			//echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>
