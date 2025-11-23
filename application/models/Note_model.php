<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Obține materiile predate de profesor
    public function get_materii_by_profesor($id_profesor) {
        $this->db->select('m.id_materie, m.denumire');
        $this->db->from('materie m');
        $this->db->join('cross_profesori_materii cpm', 'cpm.id_materie = m.id_materie');
        $this->db->where('cpm.id_profesor', $id_profesor);
        $query = $this->db->get();
        return $query->result_array();
    }

    // Obține notele existente pentru materiile profesorului (din cross_studenti_materii)
    public function get_note_by_profesor($id_profesor) {
        $this->db->select('csm.id_cross_stud_materie, csm.nota, csm.data_promovare as data_nota, csm.semestru, 
                          s.nume as nume_student, s.prenume as prenume_student,
                          m.denumire as nume_materie, m.id_materie');
        $this->db->from('cross_studenti_materii csm');
        $this->db->join('studenti s', 's.id_student = csm.id_student', 'left');
        $this->db->join('materie m', 'm.id_materie = csm.id_materie', 'left');
        $this->db->join('cross_profesori_materii cpm', 'cpm.id_materie = m.id_materie', 'left');
        $this->db->where('cpm.id_profesor', $id_profesor);
        $this->db->order_by('m.denumire, s.nume, s.prenume');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    // Obține studenții pentru o materie (pentru dropdown)
    public function get_studenti_by_materie($id_materie) {
        $this->db->select('s.id_student, s.nume, s.prenume');
        $this->db->from('studenti s');
        $this->db->join('cross_studenti_materii csm', 'csm.id_student = s.id_student');
        $this->db->where('csm.id_materie', $id_materie);
        $this->db->order_by('s.nume, s.prenume');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    // Adaugă o notă nouă (în cross_studenti_materii)
    public function adauga_nota($data) {
        return $this->db->insert('cross_studenti_materii', $data);
    }

    // Actualizează o notă (în cross_studenti_materii)
    public function actualizeaza_nota($id_cross, $data) {
        $this->db->where('id_cross_stud_materie', $id_cross);
        return $this->db->update('cross_studenti_materii', $data);
    }

    // Șterge o notă (din cross_studenti_materii)
    public function sterge_nota($id_cross) {
        $this->db->where('id_cross_stud_materie', $id_cross);
        return $this->db->delete('cross_studenti_materii');
    }

    // Verifică dacă studentul are deja notă la materia respectivă
    public function check_nota_exista($id_student, $id_materie) {
        $this->db->where('id_student', $id_student);
        $this->db->where('id_materie', $id_materie);
        $query = $this->db->get('cross_studenti_materii');
        return $query->num_rows() > 0;
    }
}