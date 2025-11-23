<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursuri extends CI_Controller {

    public function index(){
        
        // Încarcă model-ul pentru materii
        $this->load->model('Materii_model');
        
        // Obține toate materiile din baza de date
        $materii = $this->Materii_model->get_materii();
        
        // Pregătește datele pentru template
        $data = array(
            "CURSURI" => $materii
        );
        
        $CONTENT = $this->parser->parse("cursuri/lista", $data, true);
        
        $TITLE = "Lista cursurilor";
        $SIDENAV = $this->parser->parse("template/sidenavs", array(), true);
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
}