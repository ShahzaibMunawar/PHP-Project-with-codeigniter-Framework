<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin extends CI_Controller {

    public function dashboard() {

        $this->load->helper('form');
        
        $this->load->model('articlemodel'); //to load a model and also rename the name for future use

        $articals = $this->articlemodel->article_list(); // this will fetch the data from database through the "Articlemodel"->articallist

        $this->load->view('admin/dashboard', ['articals' => $articals]);
    }

    public function add_artical() {
        $this->load->helper('form'); //load helper
        $this->load->view('admin/add_artical'); //open add artical page
    }

    public function store_artical() {
        $this->load->library('form_validation');
        if ($this->form_validation->run('add_artical_rules')) {

            $post = $this->input->post();
            unset($post['submit']);
//            print_r($post);
//            exit;
            $this->load->model('articlemodel', 'artical');

            if ($this->artical->add_artical($post)) {
                $this->session->set_flashdata('feedback', 'Artical Saved Successfully.');
                $this->session->set_flashdata('feedback_class', 'alert-success'); //this funcion will change the color of flash display to green
            } else {
                $this->session->set_flashdata('feedback', 'Failed to add artical Please try again.');
                $this->session->set_flashdata('feedback_class', 'alert-danger'); //this funcion will change the color of flash display to red
            }
            return redirect('admin/dashboard');
        } else {
            return redirect('admin/add_artical');
        }
    }

    public function edit_artical($artical_id) {
        $this->load->helper('form');
        $this->load->model('articlemodel');
        $artical = $this->articlemodel->find_artical($artical_id); //this will redirect to the artical model class 
        $this->load->view('admin/edit_artical', ['artical' => $artical]);
    }

    public function update_artical($artical_id) {

        $this->load->library('form_validation');
        if ($this->form_validation->run('add_artical_rules')) {

            $post = $this->input->post();
            unset($post['submit']);
//            print_r($post);
//            exit;
            $this->load->model('articlemodel', 'artical');

            if ($this->artical->update_artical($artical_id, $post)) {
                $this->session->set_flashdata('feedback', 'Artical Updated Successfully.');
                $this->session->set_flashdata('feedback_class', 'alert-success'); //this funcion will change the color of flash display to green
            } else {
                $this->session->set_flashdata('feedback', 'Failed to Update artical Please try again.');
                $this->session->set_flashdata('feedback_class', 'alert-danger'); //this funcion will change the color of flash display to red
            }
            return redirect('admin/dashboard');
        } else {
            return redirect('admin/edit_artical');
        }
    }

    public function delete_artical() {
        $artical_id = $this->input->post("artical_id");
        $this->load->model('articlemodel','artical');
        if ($this->artical->delete_artical($artical_id)) {
                $this->session->set_flashdata('feedback', 'Artical Deleted Successfully.');
                $this->session->set_flashdata('feedback_class', 'alert-success'); //this funcion will change the color of flash display to green
            } else {
                $this->session->set_flashdata('feedback', 'Failed to Delete artical Please try again.');
                $this->session->set_flashdata('feedback_class', 'alert-danger'); //this funcion will change the color of flash display to red
            }
            return redirect('admin/dashboard');
        
    }
    public function search(){
        $this->load->model('articlemodel');
        $keyword = $this->input->post('search');
        $articals  = $this->articlemodel->search($keyword);

  
       $this->load->view('admin/dashboard', ['articals' => $articals]);
    }

//   if user id is not loged in then it will be redirect to the login page
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            return redirect('login');
        }
    }

}
