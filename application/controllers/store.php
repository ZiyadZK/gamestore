<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class store extends CI_Controller {
    public function index() {
        echo "this is Main Store's Page";
    }

    public function free() {
        echo "This is free store's page";
    }
}