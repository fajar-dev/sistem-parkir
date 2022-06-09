<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_auth');
		
		if($this->session->userdata('status')=="login"){
			?>
			<script>
			window.location="<?php echo base_url(); ?>page";
			</script>
			<?php
		}
		
	}

	public function index()
	{
		$this->load->view('login');
	}

	function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$where = array(
			'username'=>$user,
			'password'=>md5($pass)
		);
		$cek = $this->Model_auth->cek_login('tbl_petugas',$where)->num_rows();
		$hasil= $this->Model_auth->cek_login('tbl_petugas',$where)->result();

		if($cek > 0 ){
			foreach ($hasil as $data) {
				$sesi = array(
					'id'=>$data->id_petugas,
					'nama'=>$data->nama,
					'level'=>$data->level,
					'status'=>"login",
					'login'=>1
					);
			};
			$this->session->set_userdata($sesi);
			redirect(base_url('page'));
		}else{
			$this->session->set_flashdata('msg',
			'<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Gagal!</strong> Username atau Password anda salah !!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect(base_url('auth'));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->session->userdata('status')==" ";
		redirect(base_url('auth'));
	} 

}
