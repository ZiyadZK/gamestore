<?php

class cart extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('model_game');
        $this->load->model('model_cart');
    }

    public function index() {
        if(!$this->session->has_userdata('userdata')) {
            return redirect(base_url('/auth/login'));
        }

        $userdata = $this->session->userdata('userdata');
        $result = $this->model_cart->getCart($userdata[0]['id_user']);
        var_dump($result);
    }
}