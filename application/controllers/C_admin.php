<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('Model');
        $this->load->library('upload');
    }

	public function index()
	{
		$this->load->view('layout/header');		
		$this->load->view('layout/home');
		$this->load->view('layout/footer');		

	}
	public function V_berita()
	{

		$data ['tb_berita'] = $this->Model->tampil_data();

		$this->load->view('layout/header');		
		$this->load->view('layout/V_berita',$data);
		$this->load->view('layout/footer');	

	}	

	public function tambah()
	{
		$this->load->view('layout/header');		
		$this->load->view('layout/tambah');
		$this->load->view('layout/footer');	
		
	}
	public function edit_berita($id)
	{
		$data['edit'] = $this->Model->model_edit($id);
		$this->load->view('layout/header');
		$this->load->view('layout/edit',$data);
		$this->load->view('layout/footer');
		// print_r($data);
		// echo json_encode($data);
	}
	public function simpan_edit($id)
	{
		$data = array(
			'judul' => $this->input->post('judul'),
			'image' => $this->input->post('image'),
			'isi' => $this->input->post('isi'), 
		);	

		// print_r($data);
		$this->Model->model_edit_simpan($id,$data);
		$this->session->set_flashdata('success', 'Data telah di ubah');
		
		
		redirect('c_admin/v_berita');
		// yahdi


	}
	public function hapus_berita($id)
	{
		$this->Model->model_hapus($id);
		$this->session->set_flashdata('danger','Data telah di hapus');
		
		redirect('c_admin/v_berita');
	}
	function simpan_post(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
				$isi=$this->input->post('isi');
				$object=[
					'judul'=>$jdl,
					'isi'=>$isi,
					'image'=>$gambar
				];
				$this->Model->simpan_berita($object);
				$this->session->set_flashdata('success', 'Berita berhasil di simpan');
				
                redirect('c_admin/V_berita');
        }else{
            redirect('c_admin/V_berita');
        }
                      
       

        }
                 
    }
 
}
