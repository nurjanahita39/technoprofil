<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Profil extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
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