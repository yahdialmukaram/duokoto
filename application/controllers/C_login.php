<?php 

class C_login extends CI_Controller{

    function __construct()
    {
		parent::__construct();		
		$this->load->model('m_login');

	}

    function index()
    {
        $this->load->view('layout/login');
        
	}

    function aksi_login()
    {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("tb_admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('C_login');
            
		}else{
            
            echo "Username dan password salah !";
		}
	}

    function logout()
    {
		$this->session->sess_destroy();
        redirect('C_login');

    }
    // public function registrasi()
    // {
    //     $this->load->view('layout/registrasi');
        
                
    // }
}