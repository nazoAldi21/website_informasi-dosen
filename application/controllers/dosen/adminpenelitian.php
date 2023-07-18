<?php 
class Adminpenelitian extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if ($this->session->userdata('username')=='') {
			redirect ('/');
		}

		$this->load->model(['mod_penelitian', 'mod_dosen']);
	}

    public function index(){
		$data['header'] = "Data Penelitian Dosen";
		$data['content'] = 'dosen/penelitian/index';
		$data['get_penelitian'] = $this->mod_penelitian->get_penelitianadmin();

		$this->load->view('layout/template', $data);
	}

	public function add_penelitian(){
		$data['header'] = "Tambah Data Penelitian";
		$data['content'] = 'dosen/penelitian/add_penelitian';

		$this->load->view('layout/template', $data);
	}

	public function del_penelitian() {
		$id = $this->uri->segment(4);

			if ($id !=null) {
				# code...
				$this->mod_penelitian->delete($id);
				$this->session->set_flashdata('notif', '<p class="alert alert-success" id="notif">Data mata kuliah berhasil di proses.</p>');
				redirect('dosen/penelitian', 'refresh');	
			}
			$this->session->set_flashdata('notif', '<p class="alert alert-danger" id="notif">Penghapusan data mata kuliah gagal dilakukan. Silahkan periksa kembali inputan anda!</p>');
			redirect('dosen/penelitian', 'refresh');
	}

	public function auth_edit_penelitian(){
		$id_penelitian = $this->input->post('id_penelitian');

		$nama_penelitian = $this->input->post('nama_penelitian');
		$nama_dosen_id = $this->input->post('nama_dosen_id');
		$tahun = $this->input->post('tahun');
		$deskripsi = $this->input->post('deskripsi');

		if ($id_penelitian !=null) {
				# code...
				$this->mod_penelitian->set_edit($nama_penelitian, $nama_dosen_id, $tahun, $deskripsi, $id_penelitian);
				$this->session->set_flashdata('notif','<p class="alert alert-success" id="notif">Inputan data mata kuliah berhasil di simpan.</p>');
			redirect('dosen/penelitian', 'refresh');
			
		}
			$this->session->set_flashdata('notif','<p class="alert alert-danger" id="notif">Inputan gagal di proses. Silahkan periksa kembali inputan anda!</p>');
			redirect('dosen/penelitian', 'refresh');
	}

	public function auth_add_penelitian() {
		$klik = $this->input->post('submit');

		$nama_penelitian = $this->input->post('nama_penelitian');
		$nama_dosen_id = $this->input->post('nama_dosen_id');
		$tahun = $this->input->post('tahun');
		$deskripsi = $this->input->post('deskripsi');

		if (isset($klik)) {
			$this->mod_penelitian->add_penelitian($nama_penelitian, $nama_dosen_id, $tahun, $deskripsi);
			$this->session->set_flashdata('notif','<p class="alert alert-success" id="notif">Inputan data mata kuliah berhasil di simpan.</p>');
			redirect('dosen/penelitian', 'refresh');
			
		}
			$this->session->set_flashdata('notif','<p class="alert alert-danger" id="notif">Inputan gagal di proses. Silahkan periksa kembali inputan anda!</p>');
			redirect('dosen/penelitian', 'refresh');
	}

	public function edit_penelitian(){
		$data['header'] = 'Edit Data Peneletian Dosen';
		$data['content'] = 'dosen/penelitian/edit_penelitian';
		$data['penelitian_by_id'] = $this->mod_penelitian->get_penelitian_by_id($this->uri->segment(4));
		$data['nama_dosen_id'] = $this->mod_dosen->get_dosen();
		$this->load->view('layout/template', $data);
	}
}

?>