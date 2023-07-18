<?php 
class Dosen extends CI_Controller{
	
	public function __construct(){
		parent::__construct();

		if ($this->session->userdata('username')=='') {
			redirect ('/');
		}

		$this->load->model('mod_dosen');
	}

	public function index(){
		$data['header'] = "Data Dosen";
		$data['username'] = $this->session->userdata('username');
		$data['content'] = 'dosen/dosen/index';
		$data['get_dosen'] = $this->mod_dosen->get_dosen();
		
		#$data['get_kelamin'] = $this->mod_dosen->get_kelamin();

		$this->load->view('layout/publik-template', $data);
	}

	public function auth_add_dosen(){
		$klik = $this->input->post('add_dosen');

		$nama_lengkap = $this->input->post('nama_lengkap');
		$nidn = $this->input->post('nidn');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$email = $this->input->post('email');

		if (isset($klik)) {
			$this->mod_dosen->add_dosen($nama_lengkap, $nidn, $jenis_kelamin, $agama, $email);
			$this->session->set_flashdata('notif', '<p class="alert alert-success" id="notif">Proses SUKSES</p>');
			redirect('admin/dosen', 'refresh');	
		}
			$this->session->set_flashdata('notif', '<p class="alert alert-success" id="notif">Proses GAGAL</p>');
	}

	public function add_dosen(){
		$data['header'] = "Menambahkan Data Dosen";
		$data['content'] = 'admin/dosen/add_dosen';
		$data['agama'] = $this->mod_mahasiswa->get_agama();

		$this->load->view('layout/template', $data);
	}

	public function auth_edit_dosen(){
		$id= $this->input->post('id');

		$nama_lengkap = $this->input->post('nama_lengkap');
		$nidn = $this->input->post('nidn');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$email = $this->input->post('email');

		if ($id !=null){
			$this->mod_dosen->set_edit($nama_lengkap, $nidn, $jenis_kelamin, $agama, $email, $id);
			$this->session->set_flashdata('notif', '<p class="alert alert-success" id="notif">Data Inputan Dosen baru berhasil disimpan.</p>');
			redirect('admin/dosen', 'refresh');
		}
			$this->session->set_flashdata('notif', '<p class="alert alert-danger" id="notif">Data Inputan Dosen gagal diproses. Silahkan periksa kembali!</p>');
			redirect('admin/dosen', 'refresh');
	}

	public function edit_dosen(){
		$data['header'] = "Edit Data Dosen";
		$data['content'] = 'admin/dosen/edit_dosen';
		$data['agama'] = $this->mod_mahasiswa->get_agama();
		
		$data['dosen_by_id'] = $this->mod_dosen->get_dosen_by_id($this->uri->segment(4));

		$this->load->view('layout/publik-template', $data);
	}

	public function del_dosen(){
		$id = $this->uri->segment(4);	

		if ($id !=null) {
			# code...
			$this->mod_dosen->delete($id);
			$this->session->set_flashdata('notif', '<p class="alert alert-success" id="notif"><strong>Sukses!</strong> Data dosen berhasil di Hapus/</p>');
			redirect('admin/dosen', 'refresh');
		}
			$this->session->set_flashdata('notif', '<p class="alert alert-danger" id="notif"><strong>Danger!</strong> Data gagal di proses.</p>');	
			redirect('admin/dosen', 'refresh');
	}
}
?>