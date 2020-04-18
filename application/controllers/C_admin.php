<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->load->library('upload');
        if ($this->session->userdata('level')!=='admin' or 
        $this->session->userdata('logged_in')!==true
        )  {
            $this->session->set_flashdata('error', 'Anda tidak punya akses untuk menu tersebut');
            redirect('c_login');
        }
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/home');
        $this->load->view('layout/footer');

    }
    public function V_berita()
    {

        $data['tb_berita'] = $this->Model->tampil_data();

        $this->load->view('layout/header');
        $this->load->view('layout/V_berita', $data);
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
        $this->load->view('layout/edit', $data);
        $this->load->view('layout/footer');
        // print_r($data);
        // echo json_encode($data);
	}
	// fungsi simpan di edit
    public function simpan_edit($id)
    {
		$gambar=$this->upload('filefoto');
		if ($gambar['status']=='success') {
			$data = array(
				'judul' => $this->input->post('judul'),
				'image' => $gambar['data'],
				'isi' => $this->input->post('isi'),
			);
		}
		else {
			$data = array(
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
			);
		}
		$this->Model->model_edit_simpan($id, $data);
        $this->session->set_flashdata('success', 'Data telah di ubah');
        redirect('c_admin/v_berita');
    }
    public function hapus_berita($id)
    {
        $this->Model->model_hapus($id);
        $this->session->set_flashdata('danger', 'Data telah di hapus');

        redirect('c_admin/v_berita');
    }
    public function pageview()
    {
        $this->load->view('pageview');
        
    }
    public function simpan_post()
    {
		// coding simpan di buat lebih simpal
        $gambar = $this->upload('filefoto');
        $jdl = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $kategori=$this->input->post('kategori');
        if ($kategori=='0') {
            $this->session->set_flashdata('success', 'Ketegori belum anda pilih');
            redirect('c_admin/V_berita');
        }else {
            if ($gambar['status'] == 'success') {
                $object = [
                    'judul' => $jdl,
                    'isi' => $isi,
                    'image' => $gambar['data'],
                    'kategori'=>$kategori,
                ];
                $this->Model->simpan_berita($object);
                $this->session->set_flashdata('success', 'Berita berhasil di simpan');
                redirect('c_admin/V_berita');
            }
            else {
                $this->session->set_flashdata('success', 'Data Gagal di upload');
                redirect('c_admin/V_berita');
            }
        }
	}
	// tambah kan fungsi upload  untuk semua
    public function upload($name)
    {
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload($name)) {
                $gbr = $this->upload->data();
                // Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 710;
                $config['height'] = 420;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $response['data'] = $gbr['file_name'];
                $response['status'] = 'success';
                return $response;
            } else {
                $response['status'] = 'rrror';
                return $response;
                // redirect('c_admin/V_berita');
            }

        }
    }


    // olahraga

    public function tambah_olahraga()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/tambah_olahraga');
        $this->load->view('layout/footer');
    }
    public function simpan_olahraga()
    {
        
            // coding simpan di buat lebih simpal
            $gambar = $this->upload('filefoto');
            $jdl = $this->input->post('judul');
            $isi = $this->input->post('isi');
            if ($gambar['status'] == 'success') {
                $object = [
                    'judul' => $jdl,
                    'isi' => $isi,
                    'image' => $gambar['data'],
                ];
                $this->Model->simpan_berita($object);
                $this->session->set_flashdata('success', 'Berita berhasil di simpan');
                redirect('c_admin/V_berita');
            }
            else {
                $this->session->set_flashdata('success', 'Data Gagal di upload');
                redirect('c_admin/V_berita');
            }
        
    }
    public function V_berita_olahraga()
    {
        $data['tb_berita'] = $this->Model->tampil_data();

        $this->load->view('layout/header');
        $this->load->view('layout/V_berita_olahraga', $data);
        $this->load->view('layout/footer');
    }

}
