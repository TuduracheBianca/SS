<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupe extends CI_Controller {

    public function index(){
        
        $GRUPE=$this->db->query("select * from grupe")->result();
        
        $CONTENT = $this->parser->parse("grupe/lista", array("GRUPE"=>$GRUPE), true);
        
        $TITLE = "Lista grupelor";
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
        $CONTENT = $this->parser->parse("grupe/add",[], true);
        
        $TITLE = "Adăugare grupe";
        
        $this->parser->parse("template/template", array(
            "TITLE" => $TITLE, 
            "CONTENT" => $CONTENT
        ), false);
    }
    
    function add_done(){
		$post=$this->input->post();
		$grupa=[];
		
		$grupa["id_an"]=$post["id_an"];
		$grupa["denumire"]=$post["denumire"];
		$grupa["nr_studenti"]=$post["nr_studenti"];
		$grupa["tutore"]=$post["tutore"];
		//echo "<pre>"; print_r($grupe);
		
		$this->db->query("insert into grupe (id_an,denumire,nr_studenti,tutore) 
						values ('".$grupa["id_an"]."','".$grupa["denumire"]."', '".$grupa["nr_studenti"]."','".$grupa["tutore"]."')");
		redirect("grupe/index");	
    }

    function edit($id_grupa){
    $grupa = $this->db->query("SELECT * FROM grupe WHERE id_grupa = ?", [$id_grupa])->row_array();
    if(!$grupa){
        show_error("Grupa nu există!");
        return;
    }


    $CONTENT = $this->parser->parse("grupe/edit", $grupa, true);
    $TITLE = "Editare grupa";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function edit_done(){
    $post = $this->input->post();
    $id_grupa = $post["id_grupa"];

    $grupa = [
        "denumire" => $post["denumire"],
        "nr_studenti" => $post["nr_studenti"],
        "tutore" => $post["tutore"]
    ];

    $this->db->where("id_grupa", $id_grupa);
    $this->db->update("grupe", $grupa);

    redirect("grupe/index");
}

	function delete($id_grupa)
{
    $grupa = $this->db->query("SELECT * FROM grupe WHERE id_grupa = ?", [$id_grupa])->row_array();

    if (!$grupa) {
        show_error("Grupa nu există!");
        return;
    }

    // Pregătim datele pentru view
    $CONTENT = $this->parser->parse("grupe/delete", [
        "id_grupa" => $grupa["id_grupa"],
        "denumire" => $grupa["denumire"]
    ], true);

    $TITLE = "Ștergere grupa";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function delete_done($id_grupa)
{
    $this->db->where("id_grupa", $id_grupa);
    $this->db->delete("grupe");

    redirect("grupe/index");
}
}