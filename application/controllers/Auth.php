<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function loggin()
    {
        echo "Hello";exit;
        $this->load->view('auth/login');
    }
}