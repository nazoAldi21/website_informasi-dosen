<?php 
class Jadwalkuliah extends CI_Controller{
	public function __construct(){
		parent::__construct();

		if ($this->session->userdata('username')=='') {
			redirect ('/');
		}

		$this->load->model('mod_jadwal');
	}

    public function index(){
		$data['header'] = "Data Jadwal Mata Kuliah";
		$data['content'] = 'dosen/jadwal/index';
		$data['get_jadwal'] = $this->mod_jadwal->get_jadwal();

		$this->load->view('layout/publik-template', $data);
	}

	public function add_jadwal(){
		$data['header'] = "Tambah Data Jadwal Matakuliah";
		$data['content'] = 'dosen/jadwal/add_jadwal';

		$this->load->view('layout/publik-template', $data);
	}

	public function del_jadwal() {
		$id = $this->uri->segment(4);

			if ($id !=null) {
				# code...
				$this->mod_jadwal->delete($id);
				$this->session->set_flashdata('notif', '<p class="alert alert-success" id="notif">Data mata kuliah berhasil di proses.</p>');
				redirect('dosen/jadwalkuliah', 'refresh');	
			}
			$this->session->set_flashdata('notif', '<p class="alert alert-danger" id="notif">Penghapusan data mata kuliah gagal dilakukan. Silahkan periksa kembali inputan anda!</p>');
			redirect('dosen/jadwalkuliah', 'refresh');
	}

	public function auth_edit_jadwal(){
		$id = $this->input->post('id');

		$title = $this->input->post('title');
		$dosen = $this->input->post('dosen');
		$to_events_date = $this->input->post('to_events_date');
		$from_events_date = $this->input->post('from_events_date');

		if ($id !=null) {
				# code...
				$this->mod_jadwal->set_edit($title, $dosen, $to_events_date, $from_events_date, $id);
				$this->session->set_flashdata('notif','<p class="alert alert-success" id="notif">Inputan data mata kuliah berhasil di simpan.</p>');
			redirect('dosen/jadwalkuliah', 'refresh');
			
		}
			$this->session->set_flashdata('notif','<p class="alert alert-danger" id="notif">Inputan gagal di proses. Silahkan periksa kembali inputan anda!</p>');
			redirect('dosen/jadwalkuliah', 'refresh');
	}

	public function auth_add_jadwal() {
		$klik = $this->input->post('submit');

		$title = $this->input->post('title');
		$dosen = $this->input->post('dosen');
		$to_events_date = $this->input->post('to_events_date');
		$from_events_date = $this->input->post('from_events_date');

		if (isset($klik)) {
			$this->mod_jadwal->add_jadwal($title, $dosen, $to_events_date, $from_events_date);
			$this->session->set_flashdata('notif','<p class="alert alert-success" id="notif">Inputan data mata kuliah berhasil di simpan.</p>');
			redirect('dosen/jadwalkuliah', 'refresh');
			
		}
			$this->session->set_flashdata('notif','<p class="alert alert-danger" id="notif">Inputan gagal di proses. Silahkan periksa kembali inputan anda!</p>');
			redirect('dosen/jadwalkuliah', 'refresh');
	}

	public function edit_jadwal(){
		$data['header'] = 'Edit Data Jadwal';
		$data['content'] = 'dosen/jadwal/edit_jadwal';
		$data['jadwal_by_id'] = $this->mod_jadwal->get_jadwal_by_id($this->uri->segment(4));
		$this->load->view('layout/publik-template', $data);
	}
}

?>