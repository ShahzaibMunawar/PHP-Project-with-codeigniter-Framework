<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Articlemodel extends CI_Model {

    public function article_list() {
        $user_id = $this->session->userdata('user_id');
        $query = $this->db
                ->select('title')
                ->from('artical')
                ->where('user_id', $user_id)// this is used to find the values in data base 
                ->get();
        return $query->result();
    }

    public function add_artical($array) {
        return $this->db->insert('artical', $array);
    }

}
