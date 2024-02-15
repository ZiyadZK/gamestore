<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_game extends CI_Model {
    public function getFeatured() {
        $this->db->from('game');
        $this->db->where('best_seller', 'true');
        $this->db->order_by('rating', 'desc');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPC() {
        $this->db->from('game');
        $this->db->where('platform', 'PC');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }
}

?>