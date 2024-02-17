<?php

class model_cart extends CI_Model {
    public function getCart($id_user) {
        $query = $this->db->get_where('cart', ['id_user' => $id_user]);
        return $query->result_array();
    }
}