<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursanti_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_grupe() {
        $query = $this->db->get('studenti');
        return $query->result_array();
    }
}