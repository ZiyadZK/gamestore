<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('model_game');
    }

    public function index() {
        // Check if the user has a session or not
       if($this->session->has_userdata('userdata') == false) {
            return redirect(base_url('/auth/login'));
       }
       $data['featured_game'] = $this->model_game->getFeatured();
       $data['pc_game'] = $this->model_game->getPC();

    //    var_dump($result);
       $this->load->view('dashboard', $data);
    }
}