<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('auth'));
		}
	}
	
	public function index(){
    $data['title'] = 'Dashboard';
		$data['in'] =  $this->Model_page->stat0('tbl_parkir');
		$data['out'] =  $this->Model_page->stat1('tbl_parkir');
		$data['hasil']= $this->Model_page->tampil('tbl_kendaraan')->result();
    $this->load->view('include/header', $data);
		$this->load->view('dashboard');
    $this->load->view('include/footer');
	}

  public function cekin(){
		if($this->session->userdata('level')!= 2){
			redirect(base_url('page'));
		}
		$parkir = $_POST['parkir'];
		$petugas = $_POST['petugas'];
		$jenis = $_POST['jenis'];
		$waktu = $_POST['waktu'];
		$pemilik = $_POST['pemilik'];
		$plat = $_POST['plat'];
		$data = array(
			'id_parkir'=>$parkir,
			'id_petugas'=>$petugas,
			'id_kendaraan'=>$jenis,
			'pemilik'=>$pemilik,
			'plat'=>$plat,
			'waktu_masuk'=>$waktu
			);
		$this->Model_page->tambah('tbl_parkir',$data);
		$this->session->set_flashdata('msg', $data);
		redirect(base_url('page/print'));
	}

	public function print(){
		if($this->session->userdata('level')!= 2){
			redirect(base_url('page'));
		}
		$this->load->view('print');
	}

	public function cek(){
		if($this->session->userdata('level')!= 2){
			redirect(base_url('page'));
		}
		$id = $_POST['cari'];
		$data= $this->Model_page->cek($id)->result();
		$this->session->set_flashdata('search', $id);
		if($data['0'] == null){
			$this->session->set_flashdata('hasil',
		'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data parkir tidak ditemukan!!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>'
		);
		}elseif($data['0']->status == 1){
			$this->session->set_flashdata('hasil',
		'<div class="alert alert-warning alert-dismissible fade show" role="alert">
			Kendaraan sudah checkout!!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>'
		);
		}else{
			$this->session->set_flashdata('hasil', '
			<div>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>Pemilik</td>
							<td>:</td>
							<td>'.$data['0']->pemilik.'</td>
						</tr>
						<tr>
							<td>Plat</td>
							<td>:</td>
							<td>'.$data['0']->plat.'</td>
						</tr>
						<tr>
							<td>Waktu Masuk</td>
							<td>:</td>
							<td>'.$data['0']->waktu_masuk.'</td>
						</tr>
						<tr>
							<td>Tarif</td>
							<td>:</td>
							<td>'.$data['0']->tarif.'</td>
						</tr>
					</tbody>
				</table>
				<a href="'.base_url('page/checkout/').$data['0']->id_parkir.'" class="btn btn-success btn-block">Check-Out</a>
				<a href="'.base_url('page').'" class="btn btn-secondary btn-block">Tutup</a>
			</div>					
			');
		}
		redirect(base_url('page'));

	}

	public function checkout($id){
		if($this->session->userdata('level')!= 2){
			redirect(base_url('page'));
		}
		$where = array('id_parkir' => $id);
			$data = array(
			'status' => 1,
			'waktu_keluar' => date("Y-m-d H:i:s")
		);
		$this->db->update('tbl_parkir',$data,$where);
		$this->session->set_flashdata('hasil',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong> Checkout kendaraan!!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>'
		);
		redirect(base_url('page'));
	}            

  public function jenis()
	{
    $data['title'] = 'Jenis Kendaraan';
		$data['hasil']= $this->Model_page->tampil('tbl_kendaraan')->result();
    $this->load->view('include/header', $data);
    $this->load->view('include/modal');
		$this->load->view('jenis');
    $this->load->view('include/footer');
	}
  function hapus_jenis($id){
		if($this->session->userdata('level')!= 1){
			redirect(base_url('page'));
		}
		$where = array('id'=>$id);
		$this->Model_page->hapus('tbl_kendaraan',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menghapus data jenis kendaraan!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/jenis'));
	}

	public function tambah_jenis(){
		if($this->session->userdata('level')!= 1){
			redirect(base_url('page'));
		}
		$jenis = $_POST['jenis'];
		$tarif = $_POST['tarif'];
		$data = array(
			'jenis'=>$jenis,
			'tarif'=>$tarif,
			);
		$this->Model_page->tambah('tbl_kendaraan',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menambahkan data jenis kendaraan!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/jenis'));
	}

	public function edit_jenis(){
		if($this->session->userdata('level')!= 1){
			redirect(base_url('page'));
		}
		$where = array('id' => $_POST['id']);
		$jenis = $_POST['jenis'];
		$tarif = $_POST['tarif'];
		$data = array(
		'jenis'=>$jenis,
		'tarif'=>$tarif,
		);
		$this->db->update('tbl_kendaraan',$data,$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menambahkan data jenis kendaraan!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/jenis'));
	}

  public function sedang_parkir()
	{
    $data['title'] = 'Sedang Parkir';
		$data['hasil']= $this->Model_page->sedang_parkir()->result();
    $this->load->view('include/header', $data);
		$this->load->view('masuk');
    $this->load->view('include/footer');
	}

  public function sudah_keluar()
	{
    $data['title'] = 'Sudah Keluar';
		$data['hasil']= $this->Model_page->sudah_keluar('tbl_parkir')->result();
    $this->load->view('include/header', $data);
		$this->load->view('keluar');
    $this->load->view('include/footer');
	}

  public function petugas(){
		if($this->session->userdata('level')!= "1"){
			redirect(base_url('page'));
		}
    $data['title'] = 'Petugas';
    $data['hasil']= $this->Model_page->tampil('tbl_petugas')->result();
    $this->load->view('include/header', $data);
    $this->load->view('include/modal');
		$this->load->view('petugas');
    $this->load->view('include/footer');
	}

	public function tambah_petugas(){
		if($this->session->userdata('level')!= 1){
			redirect(base_url('page'));
		}
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$hp = $_POST['hp'];
		$email = $_POST['email'];
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$level = $_POST['level'];
		$data = array(
			'nama'=>$nama,
			'jk'=>$jk,
			'hp'=>$hp,
			'email'=>$email,
			'username'=>$username,
			'password'=>md5($password),
			'level'=>$level,
			);
		$this->Model_page->tambah('tbl_petugas',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menambahkan data petugas!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/petugas'));
	}

  function hapus_petugas($id){
		if($this->session->userdata('level')!= 1){
			redirect(base_url('page'));
		}
		$where = array('id_petugas'=>$id);
		$this->Model_page->hapus('tbl_petugas',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Menghapus data petugas!!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>'
		);
		redirect(base_url('page/petugas'));
	}
}
