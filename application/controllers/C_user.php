<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function index()
	{
        // $this->load->view('layout/header');
        $this->load->view('user/header');		
        $this->load->view('user/home');
        $this->load->view('user/footer');
		// $this->load->view('layout/footer');		
// redirect('c_user');
    }
    public function blog()
    {
        $this->load->view('user/header');		
        $this->load->view('user/blog');
        $this->load->view('user/footer');
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
    
}
