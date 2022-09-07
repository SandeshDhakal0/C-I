<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductController extends CI_Controller
{

    public function __construct()
    {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
    
    public function index()
    {
        $this->load->view('product/create'.array('error'=> ''));
    }

    public function create()
    {
        $this->load->view('product/create');
    }

    public function store()
    {
        // $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'product_name', 'required');
        $this->form_validation->set_rules('id','product_id','required');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('product/create');
                }
                else
                {
                        $this->load->view('product/create');
                }
                // For image upload
                $config['upload_path']          = './uploads/';
                // $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('product/create', $error);
                }
                else
                {
                        // $data = array('upload_data' => $this->upload->data());

                        $this->load->view('product/create', $data);
                }
        }

    }
