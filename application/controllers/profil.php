<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Profil extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}
	
 	function tambah(){
		$this->load->view('profil/contact');
	}

	function tambah_aksi(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$message = $this->input->post('message');
		$data = array(
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'message' => $message
			 );
		$this->m_data->input_data($data,'kontak');
		redirect('profil/index');
	}
	public function index(){		
		$this->load->view('profil/header');
		$this->load->view('profil/services');
		$this->load->view('profil/portofolio');
		$this->load->view('profil/about');
		$this->load->view('profil/team');
		$this->load->view('profil/contact');
		$this->load->view('profil/footer');
	}
    public function pesan(){		
		$this->load->view('profil/header');
		$this->load->view('profil/contact');
		$this->load->view('profil/footer');
	}
    
	

}