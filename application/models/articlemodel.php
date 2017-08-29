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
                ->select(['title', 'id'])
//                ->select('id')
                ->from('artical')
                ->where('user_id', $user_id)// this is used to find the values in data base 
                ->get();
        return $query->result();
    }

    public function find_artical($artical_id) {
        $q = $this->db->select(['id', 'title', 'body'])
                ->where('id', $artical_id)
                ->get('artical');
        return $q->row();
    }

    public function update_artical($artical_id, Array $artical) { //here array artical is also comming from the articalmodel class
        return $this->db
                        ->where('id', $artical_id)
                        ->update('artical', $artical); //1st artical is the name of table 2nd one  is the array of new data fethced from page
    }

    public function add_artical($array) {
        return $this->db->insert('artical', $array);
    }

    public function delete_artical($artical_id) {
        return $this->db->delete('artical', ['id' => $artical_id]);
    }

    public function search($articals) {
        $this->db->where('title', $articals);
        $query = $this->db->get('artic1al');
        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            redirect('admin/dashboard');
        }
    }

}
