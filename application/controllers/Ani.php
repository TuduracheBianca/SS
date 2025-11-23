<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ani extends CI_Controller {

    public function index(){
        
        $ANI=$this->db->query("select * from ani")->result();
        
        $CONTENT = $this->parser->parse("ani/lista", array("ANI"=>$ANI), true);
        
        $TITLE = "Lista anilor";
        $SIDENAV = $this->parser->parse("template/sidenava", array(), true);
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

    function add(){
        $CONTENT = $this->parser->parse("ani/add",[], true);
        
        $TITLE = "Adăugare ani";
        
        $this->parser->parse("template/template", array(
            "TITLE" => $TITLE, 
            "CONTENT" => $CONTENT
        ), false);
    }
    
    function add_done(){
		$post=$this->input->post();
		$an=[];

		$an["denumire"]=$post["denumire"];
		$an["an_inceput"]=$post["an_inceput"];
		$an["an_final"]=$post["an_final"];
		$an["nr_grupe"]=$post["nr_grupe"];

		//echo "<pre>"; print_r($ani);
		
		$this->db->query("insert into ani (denumire,an_inceput,an_final,nr_grupe) 
						values ('".$an["denumire"]."','".$an["an_inceput"]."', '".$an["an_final"]."', '".$an["nr_grupe"]."')");
		redirect("ani/index");	
    }

    function edit($id_an){
    $an = $this->db->query("SELECT * FROM ani WHERE id_an = ?", [$id_an])->row_array();
    if(!$an){
        show_error("Anul nu există!");
        return;
    }
    $CONTENT = $this->parser->parse("ani/edit", $an, true);
    $TITLE = "Editare ani";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function edit_done(){
    $post = $this->input->post();
    $id_an = $post["id_an"];

    $an = [
        "denumire" => $post["denumire"],
        "an_inceput" => $post["an_inceput"],
        "an_final" => $post["an_final"],
        "nr_grupe" => $post["nr_grupe"]
       
    ];

    $this->db->where("id_an", $id_an);
    $this->db->update("ani", $an);

    redirect("ani/index");
}

function delete($id_an)
{
    $an = $this->db->query("SELECT * FROM ani WHERE id_an = ?", [$id_an])->row_array();

    if (!$an) {
        show_error("Anul nu există!");
        return;
    }

    // Pregătim datele pentru view
    $CONTENT = $this->parser->parse("ani/delete", [
        "id_an" => $an["id_an"],
        "denumire" => $an["denumire"]
    ], true);

    $TITLE = "Ștergere an";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function delete_done($id_an)
{
    $this->db->where("id_an", $id_an);
    $this->db->delete("ani");

    redirect("ani/index");
}

}