<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursanti extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$CURSANTI=$this->db->query("select * from studenti")->result();
		
        $CONTENT = $this->parser->parse("cursanti/lista", array("CURSANTI"=>$CURSANTI), true);
	 $SIDENAV = $this->parser->parse("template/sidenavp", array(), true);
        
        $TITLE = "Lista cursantilor";
        
        $this->parser->parse("template/template", array(
            "TITLE" => $TITLE, 
	    "SIDENAV" => $SIDENAV,
            "CONTENT" => $CONTENT
        ), false);
    }
    
  
}