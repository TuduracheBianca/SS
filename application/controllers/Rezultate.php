<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rezultate extends CI_Controller {

    public function index(){
        
        // Încarcă model-ul pentru rezultate
        $this->load->model('Rezultate_model');
        
        // Obține toate rezultatele din baza de date
        $rezultate = $this->Rezultate_model->get_rezultate();
        
        // Pregătește datele pentru template
        $data = array(
            "REZULTATE" => $rezultate  // Folosește REZULTATE cu majuscule
        );
        
        $CONTENT = $this->parser->parse("rezultate/lista", $data, true);
        
        $TITLE = "Lista rezultatelor";
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