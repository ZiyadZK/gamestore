<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {
    public function login($username, $password) {
        $query = $this->db->get_where('user', ['username' => $username, 'password' => $password]);
        return $query->result_array();
    }

    public function isEmailExist($email) {
        $query = $this->db->get_where('user', ['email' => $email]);
        if($query->num_rows() > 0) {
            return true;
        }
        return false;
    }

    public function isUsernameExist($username) {
        $query = $this->db->get_where('user', ['username' => $username]);
        if($query->num_rows() > 0) {
            return true;
        }
        return false;
    }

    public function createUser($data) {
        $this->db->get('user');
        $this->db->insert('user', $data);
    }
}