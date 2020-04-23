<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
 
        function __construct(){
            parent::__construct();
            //load libary pagination
            $this->load->library('pagination');
    
        }
    
	public function index()
	{
        $this->load->library('pagination');
        $config['base_url'] = site_url('c_user/index'); //site url
        $config['total_rows'] = $this->Model->total_row_berita(); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="center_5 clearfix"><nav><ul class="  ">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Model->get_berita_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
        
        $data['berita']= $this->Model->berita_home('berita');
        $data['berita_olahraga']=$this->Model->berita_home('olahraga');
     
   
        $this->load->view('user/header');		
        $this->load->view('user/home',$data);
        $this->load->view('user/footer');
      	

    }
    public function pengunjung()
    {
            
      $pengunjung       = $this->Model->pengunjung()->num_rows();
      $totalpengunjung  = $this->Model->totalpengunjung()->row_array();
      $hits             = $this->Model->hits()->row_array();
      $totalhits        = $this->Model->totalhits()->row_array();
      $pengunjungonline = $this->Model->pengunjungonline()->num_rows();
      echo "<li>User Online : $pengunjungonline</li>
            <li>Today Visitor : $pengunjung</li>
            <li>Hits hari ini : $hits[total]</li>
            <li>Total pengunjung : $totalpengunjung[total]</li>";
            // print_r($pengunjung);
    }
    public function blog()
    {
        $this->load->library('pagination');
        $config['base_url'] = site_url('c_user/index'); //site url
        $config['total_rows'] = $this->Model->total_row_berita(); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="center_5 clearfix"><nav><ul class="  ">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Model->get_berita_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

        $data['berita']=$this->Model->berita_user();
        $data['berita_olahraga']=$this->Model->berita_home('olahraga');
        $this->load->view('user/header');		
        $this->load->view('user/blog',$data);
        $this->load->view('user/footer');
        // print_r($data);
        // echo json_encode($data);
    }
    public function gallery()
    {
        $this->load->view('user/header');		
        $this->load->view('user/gallery');
        $this->load->view('user/footer');
    }
    public function contact()
    {
        $this->load->view('user/header');		
        $this->load->view('user/contact');
        $this->load->view('user/footer');
    }
    public function details_berita($id)
    {
        $data['berita_olahraga']= $this->Model->berita_home('olahraga');
        
        $data['details'] = $this->Model->details_berita($id);
        $this->load->view('user/header');
        $this->load->view('user/details_berita',$data);
        $this->load->view('user/footer');
        // print_r($data);
    }

    // public function hit_counter($id)
    // {
    //     // $this->load->view('user/home', $id);
    //     $data['details'] = $this->Model->details_berita($id);
    //     $this->load->view('user/header');
    //     $this->load->view('user/details_berita',$data);
    //     $this->load->view('user/footer');
        
        
    // }

    // public function kirim_komen()
    // {
    //     // $this->load->view('user/detail_berita');
    //     $nama = $this->input->post('nama');
    //     $email = $this->input->post('email');
    //     $isi_komentar = $this->input->post('isi_komentar');
    //     $this->db->query("INSERT INTO tb_komentar VALUES('','0','$nama','$email','$isi_komentar')");
    //     redirect('','refresh');
    // }
    // public function balasKomen() 
    // {
    //     $id = $this->input->post('id');
    //     $nama = $this->input->post('nama');
    //     $email = $this->input->post('email');
    //     $isi_komentar = $this->input->post('isi_komentar');
    //     $this->db->query("INSERT INTO tb_komentar VALUES('','$id','$nama','$email','$isi_komentar')");
    //     redirect('','refresh');
    //    }

       public function simpan_saran()
       {
        $nama  = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $pesan = $this->input->post('pesan');
        $tanggal = $this->input->post('tanggal');
           $data = [
                    'nama'  => $nama,
                    'email' => $email,
                    'no_hp' => $no_hp,
                    'pesan' => $pesan,
                    'tanggal' => date('d-m-Y H:i:s'),
		   ];
           $this->Model->simpan_saran($data);
           $this->session->set_flashdata('success', 'Saran Berhasil di Kirim');
            redirect('c_user/contact');
              
       }
}
