<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->load->library('upload');
        if ($this->session->userdata('level') !== 'admin' or
            $this->session->userdata('logged_in') !== true
        ) {
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
    public function V_saran()
    {
        $data['tb_saran'] = $this->Model->tampil_saran();

        $this->load->view('layout/header');
        $this->load->view('layout/V_saran', $data);
        $this->load->view('layout/footer');
    }
    public function delete_saran($id)
    {
        $this->Model->hapus_saran($id);
        $this->session->set_flashdata('danger', 'Data telah di hapus');

        redirect('c_admin/v_saran');

    }
    public function details_user($id)
    {
        $data['details'] = $this->Model->model_details($id);
        $this->load->view('layout/header');
        $this->load->view('layout/details_user', $data);
        $this->load->view('layout/footer');
        // print_r($data);

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
        $gambar = $this->upload('filefoto');
        if ($gambar['status'] == 'success') {
            $data = array(
                'judul' => $this->input->post('judul'),
                'image' => $gambar['data'],
                'isi' => $this->input->post('isi'),
            );
        } else {
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
        $kategori = $this->input->post('kategori');
        if ($kategori == '0') {
            $this->session->set_flashdata('success', 'Ketegori belum anda pilih');
            redirect('c_admin/V_berita');
        } else {
            if ($gambar['status'] == 'success') {
                $object = [
                    'judul' => $jdl,
                    'isi' => $isi,
                    'image' => $gambar['data'],
                    'kategori' => $kategori,
                ];
                $this->Model->simpan_berita($object);
                $this->session->set_flashdata('success', 'Berita berhasil di simpan');
                redirect('c_admin/V_berita');
            } else {
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
        if (!empty($_FILES[$name]['name'])) {
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
                $response['status'] = 'error';
                return $response;
                // redirect('c_admin/V_berita');
            }

        } else {
            return $response['status'] = 'image not found';
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
        } else {
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
    public function tambah_data_penduduk()
    {

        $this->load->view('layout/header');
        $this->load->view('layout/tambah_data_penduduk');
        $this->load->view('layout/footer');
    }

    public function data_penduduk()
    {

        $data['tb_penduduk'] = $this->Model->tampil_data_penduduk();

        $this->load->view('layout/header');
        $this->load->view('layout/data_penduduk', $data);
        $this->load->view('layout/footer');

    }
    public function simpan_data_penduduk()
    {

        // cara input foto
        $image = $this->upload('image');
        // input jk
        $jeniskelamin = $this->input->post('jenis_kelamin');
        if ($jeniskelamin == '0') {
            $this->session->set_flashdata('error', 'Anda Belum Memilih Jenis Kelamin');
            redirect('c_admin/tambah_data_penduduk');
        }
        // input agama
        $agama = $this->input->post('agama');
        if ($agama == '0') {

            $this->session->set_flashdata('error', 'Anda Belum Memilih agama');
            redirect('c_admin/tambah_data_penduduk');
        }
        if ($image['status'] == 'success') {
            $data = array(
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'agama' => $this->input->post('agama'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'image' => $image['data'],

            );
            $this->Model->simpan_data_penduduk($data);
            $this->session->set_flashdata('success', 'Data penduduk berhasil di tambahkan');
            redirect('c_admin/data_penduduk');
        } else {
            $this->session->set_flashdata('error', 'Foto yang anda upload tidak sesuai kriteria sisten');
            redirect('c_admin/tambah_data_penduduk');
        }

    }
    public function hapus_penduduk($id)
    {
        $this->Model->delete_penduduk($id);
        $this->session->set_flashdata('danger', '
        resident data successfully deleted');

        redirect('c_admin/data_penduduk');

    }
    public function fake($jumlah)
    {
        for ($i = 0; $i < $jumlah; $i++) {
            $data = array(
                'nik' => $i,
                'nama' => 'nama',
                'tgl_lahir' => 'tanggal_lair',
                'jenis_kelamin' => 'laki',
                'alamat' =>'a',
                'agama' => '2',
                'status_perkawinan' => '4',
                'pekerjaan' => '4',
                'kewarganegaraan' => '5',
                'image' => '178',

            );
            $this->Model->simpan_data_penduduk($data);
        }
    }

    public function v_dokumentasi()
    {
        $data ['dokumentasi'] = $this->Model->tampil_dokumentasi();
        
        $this->load->view('layout/header');
        $this->load->view('layout/v_dokumentasi',$data);
        $this->load->view('layout/footer');
    }
    public function tambah_dokumentasi()
    {  
        $this->load->view('layout/header');
        $this->load->view('layout/tambah_dokumentasi');
        $this->load->view('layout/footer');

}
public function hapus_dokumentasi($id)
{
     $this->Model->hapus_dokumentasi($id);
        $this->session->set_flashdata('danger', 'Data telah di hapus');

        redirect('c_admin/v_dokumentasi');

}
public function save_dokumentasi()
{
    $image = $this->upload('image');
    if ($image['status']== 'success') {
    
    $data = [
        'judul ' => $this->input->post('judul'),
        'image' => $image ['data'],
    ];
    $this->Model->save_dokumentasi($data);
    $this->session->set_flashdata('success', 'Data dokumentasi success di tambahkan');
    
    redirect('c_admin/v_dokumentasi');
    
}else {
    $this->session->set_flashdata('error', 'Foto yang anda upload tidak sesuai kriteria sisten');
    redirect('c_admin/tambah_dokumentasi');
}

}
}