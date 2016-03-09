<?php

class Hello extends CI_Controller {

	public function __construct() {

		parent::__construct();

		echo "visada cia ! <br>";
	}

	public function one($p1,$p2 = 'tree') {
		echo "This is one $p1, $p2";

	}

	public function pav($name) {

		$this->load->model('model','lmodel');
		$duomenys['profilis'] = $this->lmodel->getProfile();
		//$arrayName = array('' => , );

		
		$this->load->view('one',$duomenys);
	}

		public function index() {
		echo "This is index";

	}
}
