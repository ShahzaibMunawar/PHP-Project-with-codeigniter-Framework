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
}