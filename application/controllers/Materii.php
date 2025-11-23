<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materii extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index(){
		$MATERII=$this->db->query("select * from materie")->result();
		$CONTENT=$this->parser->parse("materii/lista",array("MATERII"=>$MATERII), true);
		
		$TITLE="Lista materiilor";
		// INCLUDE SIDEBAR-UL ȘI CELELALTE PĂRȚI
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
        $CONTENT = $this->parser->parse("materii/add",[], true);
        
        $TITLE = "Adăugare materie";
        
        $this->parser->parse("template/template", array(
            "TITLE" => $TITLE, 
            "CONTENT" => $CONTENT
        ), false);
    }
    
    function add_done(){
		$post=$this->input->post();
		$materie=[];
		
		$materie["denumire"]=$post["denumire"];
		$materie["nr_credite"]=$post["nr_credite"];
		$materie["tip"]=$post["tip"];
		$materie["nr_max_studenti"]=$post["nr_max_studenti"];
		$materie["cod_disciplina"]=$post["cod_disciplina"];
		$materie["cod_pachet"]=$post["cod_pachet"];	
		$materie["finalizare"]=$post["finalizare"];
		
		//echo "<pre>"; print_r($materie);
		
		$this->db->query("insert into materie (denumire,nr_credite,tip,nr_max_studenti,cod_disciplina,cod_pachet,finalizare) 
						values ('".$materie["denumire"]."','".$materie["nr_credite"]."', '".$materie["tip"]."', '".$materie["nr_max_studenti"]."', '".$materie["cod_disciplina"]."', '".$materie["cod_pachet"]."', '".$materie["finalizare"]."')");
		redirect("materii/index");	
    }

	function edit($id_materie){
    $materie = $this->db->query("SELECT * FROM materie WHERE id_materie = ?", [$id_materie])->row_array();
    
	if(!$materie){
        show_error("Materia nu există!");
        return;
    }
	
	 // Setăm tag-urile <option> selectate corespunzător
    $replacements = [
        "SELECT_OB"  => ($materie["tip"] == "ob") ? "selected" : "",
        "SELECT_OP"  => ($materie["tip"] == "op") ? "selected" : "",
        "SELECT_F"  => ($materie["tip"] == "f") ? "selected" : "",

        "SELECT_C" => ($materie["finalizare"] == "c") ? "selected" : "",
        "SELECT_E" => ($materie["finalizare"] == "e") ? "selected" : "",
        "SELECT_V" => ($materie["finalizare"] == "v") ? "selected" : ""
    ];

    $data = array_merge($materie, $replacements);

    $CONTENT = $this->parser->parse("materii/edit", $data, true);
    $TITLE = "Editare materie";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function edit_done(){
    $post = $this->input->post();
    $id_materie = $post["id_materie"];

    $materie = [
        "denumire" => $post["denumire"],
        "nr_credite" => $post["nr_credite"],
        "tip" => $post["tip"],
        "nr_max_studenti" => $post["nr_max_studenti"],
        "cod_disciplina" => $post["cod_disciplina"],
        "cod_pachet" => $post["cod_pachet"],
        "finalizare" => $post["finalizare"],
    ];

    $this->db->where("id_materie", $id_materie);
    $this->db->update("materie", $materie);

    redirect("materii/index");
}

	function delete($id_materie)
{
    $materie = $this->db->query("SELECT * FROM materie WHERE id_materie = ?", [$id_materie])->row_array();

    if (!$materie) {
        show_error("Materia nu există!");
        return;
    }

    // Pregătim datele pentru view
    $CONTENT = $this->parser->parse("materii/delete", [
        "id_materie" => $materie["id_materie"],
        "denumire" => $materie["denumire"]
    ], true);

    $TITLE = "Ștergere materie";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function delete_done($id_materie)
{
    $this->db->where("id_materie", $id_materie);
    $this->db->delete("materie");

    redirect("materii/index");
}
}
