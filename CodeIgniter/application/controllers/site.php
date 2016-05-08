<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
    
    public function index() {
		
        $this->pagrindinis();
        
	}
    
    public function pagrindinis() {
		
        $this->load->view("header");
        $this->load->view("pagrindinis");
        $this->load->view("footer");
        
	}
    public function apieMus() {
		
        $this->load->view("header");
        $this->load->view("apieMus");
        $this->load->view("footer");
        
	}
    public function pristatymas() {
		
        $this->load->view("header");
        $this->load->view("pristatymas");
        $this->load->view("footer");
        
	}
    public function taisykles() {
		
        $this->load->view("header");
        $this->load->view("taisykles");
        $this->load->view("footer");
        
	}
    public function kontaktai() {
		
        $this->load->view("header");
        $this->load->view("kontaktai");
        $this->load->view("footer");
        
	}
    public function DUK() {
		
        $this->load->view("header");
        $this->load->view("DUK");
        $this->load->view("footer");

	}
    public function prisijungimas() {
        
        $this->load->view("header");
        $this->load->view("login");
        $this->load->view("footer");

    }   
    public function krepselis() {
        
        $this->load->view("header");
        $this->load->view("krepselis");
        $this->load->view("footer");

    }   
    public function marskineliai() {
        
        $this->load->view("header");
        $this->load->view("marskineliai");
        $this->load->view("footer");

    }   
    public function uniformos() {
        
        $this->load->view("header");
        $this->load->view("uniformos");
        $this->load->view("footer");

    }   
    public function kostiumai() {
        
        $this->load->view("header");
        $this->load->view("kostiumai");
        $this->load->view("footer");

    } 
} 