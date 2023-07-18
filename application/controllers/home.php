<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();

        $this->load->model(['mod_jadwal', 'mod_ruangan', 'mod_matakuliah', 'mod_dosen_front', 'mod_penelitian']);
    }

    public function jadwalmatkul() {
		$allEvents['result'] = $this->db->get("db_calendar_matkul")->result();
   
        foreach ($allEvents['result'] as $key => $value) {
            $allEvents['allEvents'][$key]['title'] = $value->title;
            $allEvents['allEvents'][$key]['dosen'] = $value->dosen;
            $allEvents['allEvents'][$key]['ruang'] = $value->ruang;
            $allEvents['allEvents'][$key]['detail'] = $value->detail;
            $allEvents['allEvents'][$key]['kelas'] = $value->kelas;
            $allEvents['allEvents'][$key]['start'] = $value->to_events_date;
            $allEvents['allEvents'][$key]['end'] = $value->from_events_date;
            $allEvents['allEvents'][$key]['backgroundColor'] = "#3788d8";
        }
		$this->load->view('frontend/jadwalmatkul', $allEvents);
	}

    public function ruangan() {
        $data['get_ruangan_isi'] = $this->mod_ruangan->get_ruangan_isi();
        $data['get_ruangan_kosong'] = $this->mod_ruangan->get_ruangan_kosong();
		$this->load->view('frontend/ruangan', $data);
	}

    public function matkul() {
		$data['get_matkul_front'] = $this->mod_matakuliah->get_matkul_front();
		$this->load->view('frontend/matkul', $data);
	}

    public function profildosen() {
        $data['get_dosen_front'] = $this->mod_dosen_front->get_dosen_front();
        $this->load->view('frontend/dosen', $data);
    }

    public function penelitian() {
        $data['keyword'] = $this->input->get('keyword');
        $data['dosen'] = $this->input->get('dosen');
		$data['search_result'] = $this->mod_penelitian->search($data['keyword']);
        // $data['search_dosen'] = $this->mod_penelitian->filtersort($data['dosen']);
        $this->load->view('frontend/penelitian', $data);
    }

    public function filterdosen() {
        $data['dosen'] = $this->input->get('dosen');

        $data['search_dosen'] = $this->mod_penelitian->filtersort($data['dosen']);
        $this->load->view('frontend/penelitian', $data);
    }

    public function loadmorepenelitian()
    {
        $page   =  $_GET['page'];
        $penelitian = $this->mod_penelitian->get_penelitian($page);
        foreach($penelitian as $hasil){

            echo '<div class="col-md-3" style="margin-bottom: 2rem;">
            <div class="card">
            <a href="'.base_url().'home/detail_penelitian/'.$hasil->id_penelitian.'">
                  <img class="card-img-top" style="width: 100%;" src="<?php echo base_url(); ?>paper-kit-master/assets/paper_img/webinar.png" alt="Card image cap">
                </a>
                <div class="card-body">
                <h5 class="card-title">
                    <a href="'.base_url().'home/detail_penelitian/'.$hasil->id_penelitian.'">'.$hasil->nama_penelitian.'</a>
                </h5>
                <p class="card-text">Dosen: '.$hasil->nama_lengkap.'</p>
                <p class="card-text">'.$hasil->tahun.'</p>
                <a href="'.base_url().'home/detail_penelitian/'.$hasil->id_penelitian.'" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>';
        }
        exit;
    }    
    

    public function detail_penelitian($id_penelitian) {
        $data['get_data_peneliti'] = $this->mod_penelitian->get_detail_penelitian($id_penelitian);
        $this->load->view('frontend/detail_penelitian', $data);
    }

    
}
?>