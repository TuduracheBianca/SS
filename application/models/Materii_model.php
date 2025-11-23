<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materii_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_materii() {
        $query = $this->db->get('materie');
        return $query->result_array();
    }
}