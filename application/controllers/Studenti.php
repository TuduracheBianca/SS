<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studenti extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$STUDENTI=$this->db->query("select * from studenti")->result();
		
        $CONTENT = $this->parser->parse("studenti/lista", array("STUDENTI"=>$STUDENTI), true);
        
        $TITLE = "Lista studentilor";
        
        $this->parser->parse("template/template", array(
            "TITLE" => $TITLE, 
            "CONTENT" => $CONTENT
        ), false);
    }
    
    function add(){
        $CONTENT = $this->parser->parse("studenti/add",[], true);
        
        $TITLE = "Adăugare student";
        
        $this->parser->parse("template/template", array(
            "TITLE" => $TITLE, 
            "CONTENT" => $CONTENT
        ), false);
    }
    
    function add_done(){
		$post=$this->input->post();
		$student=[];
		
		$student["nume"]=$post["nume"];
		$student["prenume"]=$post["prenume"];
		$student["email"]=$post["email"];
		$student["CNP"]=$post["CNP"];
		$student["media"]=$post["media"];
		$student["nivel"]=$post["nivel"];
		$student["limba_studiu"]=$post["limba_studiu"];
		$student["specializare"]=$post["specializare"];
		$this->load->model("users_model");
		$student["username"]=$this->users_model->generate_username_st($student["nume"], $student["prenume"]);
		$student["parola"]=$this->users_model->generate_password();
		
		//echo "<pre>"; print_r($student);
		
		$this->db->query("insert into studenti (nume,prenume, email, CNP, media, nivel, limba_studiu, specializare, username, parola) 
						values ('".$student["nume"]."','".$student["prenume"]."', '".$student["email"]."', '".$student["CNP"]."', '".$student["media"]."', '".$student["nivel"]."', '".$student["limba_studiu"]."', '".$student["specializare"]."', '".$student["username"]."', '".$student["parola"]."')");
		redirect("studenti/index");	
    }

function edit($id_student){
    $student = $this->db->query("SELECT * FROM studenti WHERE id_student = ?", [$id_student])->row_array();
    if(!$student){
        show_error("Studentul nu există!");
        return;
    }

    // Setăm tag-urile <option> selectate corespunzător
    $replacements = [
        "SELECT_L"  => ($student["nivel"] == "l") ? "selected" : "",
        "SELECT_M"  => ($student["nivel"] == "m") ? "selected" : "",
        "SELECT_D"  => ($student["nivel"] == "d") ? "selected" : "",

        "SELECT_RO" => ($student["limba_studiu"] == "ro") ? "selected" : "",
        "SELECT_DE" => ($student["limba_studiu"] == "de") ? "selected" : "",
        "SELECT_EN" => ($student["limba_studiu"] == "en") ? "selected" : "",
        "SELECT_HU" => ($student["limba_studiu"] == "hu") ? "selected" : "",

        "SELECT_MI" => ($student["specializare"] == "mi") ? "selected" : "",
        "SELECT_MAT"=> ($student["specializare"] == "m") ? "selected" : "",
        "SELECT_INF"=> ($student["specializare"] == "i") ? "selected" : ""
    ];

    // Flattenăm: combinăm câmpurile studentului cu replacement-urile
    $data = array_merge($student, $replacements);

    $CONTENT = $this->parser->parse("studenti/edit", $data, true);
    $TITLE = "Editare student";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function edit_done(){
    $post = $this->input->post();
    $id_student = $post["id_student"];

    $student = [
        "nume" => $post["nume"],
        "prenume" => $post["prenume"],
        "email" => $post["email"],
        "CNP" => $post["CNP"],
        "media" => $post["media"],
        "nivel" => $post["nivel"],
        "limba_studiu" => $post["limba_studiu"],
        "specializare" => $post["specializare"]
    ];

    $this->db->where("id_student", $id_student);
    $this->db->update("studenti", $student);

    redirect("studenti/index");
}

	function delete($id_student)
{
    // Preluăm studentul din baza de date
    $student = $this->db->query("SELECT * FROM studenti WHERE id_student = ?", [$id_student])->row_array();

    if (!$student) {
        show_error("Studentul nu există!");
        return;
    }

    // Pregătim datele pentru view
    $CONTENT = $this->parser->parse("studenti/delete", [
        "id_student" => $student["id_student"],
        "nume" => $student["nume"],
        "prenume" => $student["prenume"],
        "username" => $student["username"]
    ], true);

    $TITLE = "Ștergere student";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function delete_done($id_student)
{
    // Ștergem studentul din baza de date
    $this->db->where("id_student", $id_student);
    $this->db->delete("studenti");

    // Redirectăm la lista de studenți
    redirect("studenti/index");
}

}