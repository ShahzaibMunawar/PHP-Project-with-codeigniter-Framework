<?php

class login extends CI_Controller {

    public function index() {
        if ($this->session->userdata('user_id')) {
            return redirect('admin/dashboard');
        }
        $this->load->view('public/public_login');
    }

    public function admin_login() {
        $this->load->library('form_validation');

//        $this->form_validation->set_rules('username', 'Username', 'required|alpha|max_length[20]|trim');
//        $this->form_validation->set_rules('password', 'Password', 'required|alpha|max_length[20]|trim');
//        $this->form_validation->set_error_delimiters("<p class='text-danger'","</p>");
        if ($this->form_validation->run('loginarea_rules')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('loginModel');
            $login_id = $this->loginModel->validate_login($username, $password);
            if ($login_id) {
                $this->session->set_userdata('user_id', $login_id);
                return redirect('admin/dashboard');
            } else {
               
                $this->session->set_flashdata('login_failed', 'Invalid Username/Password.');
                return redirect('login');
            }
//       echo 'success';
        } else {
            $this->load->view('public/public_login');
            echo validation_errors();
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        return redirect('login');
    }

    public function Signup() {
        $this->load->view('Signup/Signup');
    }

    public function store_user() {
        $this->load->library('form_validation');
        if ($this->form_validation->run('add_user_rules')) {

            $post = $this->input->post();
            unset($post['submit']);
//            print_r($post);
//            exit;
            $this->load->model('loginModel');
//``           ============ set flash data =======
            if ($this->loginModel->add_user($post)) {
                $this->session->set_flashdata('user_added', 'New Account created.');
                $this->session->set_flashdata('feedback_class', 'alert-success'); //this funcion will change the color of flash display to green
            } else {
                $this->session->set_flashdata('user_added', 'Failed to add user.');
                $this->session->set_flashdata('feedback_class', 'alert-danger'); //this funcion will change the color of flash display to red
            }
            return redirect('login/index');
//            =====================================
        } else {

            $this->load->view('Signup/Signup');
            echo validation_errors();
        }
    }

}

?>
