<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class store extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('model_game');
    }

    public function index() {
        echo "this is Main Store's Page";
    }

    public function bestrating() {

        $data['game'] = $this->model_game->getBestRating();
        $this->load->view('store/view_best_rating', $data);
    }

    public function bestseller() {
        $data['game'] = $this->model_game->getBestSeller();
        $this->load->view('store/view_best_seller', $data);
    }
}