<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Visitor_model', 'visitor_model');
		$this->load->helper('text');
	}
	function index(){
		
		
		$data['header'] = $this->load->view('backend/v_header',$v,TRUE);
		$data['sidebar'] = $this->load->view('backend/v_sidebar',$v,TRUE);
		$this->load->view('backend/v_dashboard',$data);
	}

}