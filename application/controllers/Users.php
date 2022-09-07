<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function signin()
    {
        $this->load->view('login/signin');
    }

    public function db_test()
    {
        // $this->load->model('User');
        $this->User->connection_test();
    }
}