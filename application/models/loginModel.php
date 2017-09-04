<?php

class loginModel extends CI_Model {

    public function validate_login($username, $password) {
//        $password = md5($password); //encryption                                                                                                                                                                                                                                                                               
        $q = $this->db->where(['username' => $username, 'password' => $password])->get('user');

        if ($q->num_rows()) {
           
            return $q->row()->id;

            return true;
        } else {
            return FALSE;
        }
    }
    public function add_user($array) {
        return $this->db->insert('user', $array);
    }

}

?>