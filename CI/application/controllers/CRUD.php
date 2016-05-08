<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD extends CI_Controller {
    
    
    public function create() {
		
        $data = array(
            'review' => $this->input->post('review'),
            );
        $this->CRUD_model->add_review($data);
        redirect('index.php/vartotojas/rasytiAtsiliepima');
	}
    
    public function delete() {
        $this->CRUD_model->delete_row();
        redirect('index.php/vartotojas/adminasAnketa');
    }
    public function update(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','El. pašto laukelis','required|trim|xss_clean');
        $this->form_validation->set_rules('password','Slaptažodžio','required|md5|trim');
        $this->form_validation->set_rules('cpassword','Pakartotino slaptažodžio','required|md5|trim|matches[password]');

        $this->form_validation->set_message('required', '%s laukelis yra privalomas');
        $this->form_validation->set_message("matches", 'Slaptažodžiai nesutampa');

        if($this->form_validation->run()){
            $senas = $this->input->post('email');
            $naujas = array('password' => $this->input->post("password") );
            $this->CRUD_model->update_record($senas,$naujas);
            $data['reg']= "Jūsų duomenys atnaujinti sėkmingai";
            $this->load->view("header");
            $this->load->view("anketa",$data);
            $this->load->view("footer");
        }
        else{
            $data['uperr']= validation_errors();
            $this->load->view("header");
            $this->load->view("anketa",$data);
            $this->load->view("footer");
        }
    }
    public function deleteReview() {
        $this->CRUD_model->delete_review();
        redirect('index.php/vartotojas/adminasAnketa');
    }

    public function updateReview() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('rewid','Atsiliepimo id','required');
        $this->form_validation->set_rules('reviewText','Atsiliepimo tekstas','required');
        
        $this->form_validation->set_message('required', '%s laukelis yra privalomas');

        if($this->form_validation->run()){

            $senas = $this->input->post('rewid');
            $naujas = array('review' => $this->input->post("reviewText") );
            $this->CRUD_model->update_review($senas,$naujas);
            redirect('index.php/vartotojas/adminasAnketa');

        }
        else{
            $data['aderr']=validation_errors();
            if($query=$this->CRUD_model->get_records()){

                $data['records']=$query;
            }
            if($query=$this->CRUD_model->get_reviews()){

                $data['reviews']=$query;
            }

            
            $this->load->view("adminasAnketa",$data);
        }
        
    }
} 