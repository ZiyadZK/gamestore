<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
    public function index() {
        // Check if the user has a session or not
       if($this->session->has_userdata('userdata') == false) {
            return redirect(base_url('/auth/login'));
       }

       echo "Dashboard Page";
    }
}