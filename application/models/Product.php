<?php 
class Product extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        // $this->db = $this->load->database('default', TRUE);
    }

    public function insert($data)
    {
        $this->db->insert('products', $data);
        return $this->db->insert_id();
    }
}