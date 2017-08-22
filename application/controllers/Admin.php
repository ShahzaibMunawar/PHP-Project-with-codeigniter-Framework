<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends CI_Controller{
    
    
    public function dashboard(){
        
         $this->load->model('articlemodel','artical'); //to load a model and also rename the name for future use
         
         $articals = $this->artical->article_list(); //
         
        $this->load->view('admin/dashboard',['articals'=>$articals]);//this $articals take 
    }
    public function add_artical(){
        $this->load->helper('form');
        $this->load->view('admin/add_artical');
    }
    
    public function store_artical(){
        $this->load->library('form_validation');
        if($this->form_validation->run('add_artical_rules')){
            
        }else{
            return redirect('admin/add_artical');
        }
    }

    public function edit_artical(){
        
    }
    public function delete_artical(){
        
    }
//   if user id is not loged in then it will be redirect to the login page
    public function __construct() {
        parent::__construct();
        if( ! $this->session->userdata('user_id')){
        return redirect('login');
    }
    }
}