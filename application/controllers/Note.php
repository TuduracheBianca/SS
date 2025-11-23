<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Note_model');
    }

    public function index(){
        // Obține ID-ul profesorului logat (pentru test, folosește un ID hardcodat)
        $id_profesor = 1; // Schimbă cu ID-ul real al profesorului logat
        
        // Obține materiile profesorului și notele existente
        $materii = $this->Note_model->get_materii_by_profesor($id_profesor);
        $note = $this->Note_model->get_note_by_profesor($id_profesor);
        
        $data = array(
            "MATERII" => $materii,
            "NOTE" => $note
        );
        
        $CONTENT = $this->parser->parse("note/lista", $data, true);
        $TITLE = "Gestionare Note";
        $SIDENAV = $this->parser->parse("template/sidenavp", array(), true);
        $TOPBAR = $this->parser->parse("template/topbara", array(), true);
        $FOOTER = $this->parser->parse("template/footer", array(), true);
     
        $this->parser->parse("template/template", array(
            "TITLE" => $TITLE, 
            "CONTENT" => $CONTENT,
            "SIDENAV" => $SIDENAV,
            "TOPBAR" => $TOPBAR,
            "FOOTER" => $FOOTER
        ), false);
    }

    public function get_studenti($id_materie) {
        $studenti = $this->Note_model->get_studenti_by_materie($id_materie);
        echo json_encode($studenti);
    }

    public function adauga() {
        $data = array(
            'id_student' => $this->input->post('id_student'),
            'id_materie' => $this->input->post('id_materie'),
            'nota' => $this->input->post('nota'),
            'data_promovare' => $this->input->post('data_nota'),
            'semestru' => $this->input->post('semestru'),
            'promovare' => ($this->input->post('nota') >= 5) ? 'Promovat' : 'Nepromovat'
        );

        // Verifică dacă există deja notă
        if($this->Note_model->check_nota_exista($data['id_student'], $data['id_materie'])) {
            echo json_encode(array('success' => false, 'message' => 'Studentul are deja notă la această materie'));
            return;
        }

        $result = $this->Note_model->adauga_nota($data);
        echo json_encode(array('success' => $result));
    }

    public function editeaza($id_cross) {
        $data = array(
            'nota' => $this->input->post('nota'),
            'data_promovare' => $this->input->post('data_nota'),
            'semestru' => $this->input->post('semestru'),
            'promovare' => ($this->input->post('nota') >= 5) ? 'Promovat' : 'Nepromovat'
        );

        $result = $this->Note_model->actualizeaza_nota($id_cross, $data);
        echo json_encode(array('success' => $result));
    }

    public function sterge($id_cross) {
        $result = $this->Note_model->sterge_nota($id_cross);
        echo json_encode(array('success' => $result));
    }
}