<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rezultate_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_rezultate() {
        // Folosim tabela cross_studentl_materii care există
        $this->db->select('csm.nota, csm.promovare, csm.data_promovare, csm.semestru, 
                          s.nume as nume_student, s.prenume as prenume_student,
                          m.denumire as nume_materie');
        $this->db->from('cross_studentl_materii csm');
        $this->db->join('studenti s', 's.id_student = csm.id_student', 'left');
        $this->db->join('materie m', 'm.id_materie = csm.id_materie', 'left');
        $this->db->order_by('csm.data_promovare', 'DESC');
        
        $query = $this->db->get();
        return $query->result_array();
    }
}