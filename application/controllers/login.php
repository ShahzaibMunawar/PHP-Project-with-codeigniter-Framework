<?php

class login extends CI_Controller {

    public function index() {
        $this->load->view('public/public_login');
    }

    public function admin_login() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|alpha|max_length[20]|trim');

        $this->form_validation->set_rules('password', 'Password', 'required|alpha|max_length[20]|trim');

//        $this->form_validation->set_error_delimiters("<p class='text-danger'","</p>");
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('loginModel');
            $login_id = $this->loginModel->validate_login($username, $password);
            if ($login_id) {

                $this->session->set_userdata('user_id', $login_id);

                return redirect('admin/dashboard');
            } else {
                echo 'password do not match';
            }

            //            echo 'success';
        } else {
            $this->load->view('public/public_login');
            echo validation_errors();
        }
    }

}

?>
