    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesori extends CI_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index(){
		$PROFESORI=$this->db->query("select * from profesori")->result();
		
		$CONTENT=$this->parser->parse("profesori/lista", array("PROFESORI"=>$PROFESORI), true);
		
		$TITLE="Lista profesorilor";
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
        $CONTENT = $this->parser->parse("profesori/adaugare",[], true);
        
        $TITLE = "Adăugare profesor";
        
        $this->parser->parse("template/template", array(
            "TITLE" => $TITLE, 
            "CONTENT" => $CONTENT
        ), false);
    }
	
	function add_done(){
		$post=$this->input->post();
		$profesor=[];
		
		$profesor["nume"]=$post["nume"];
		$profesor["prenume"]=$post["prenume"];
		$profesor["email"]=$post["email"];
		$profesor["CNP"]=$post["CNP"];
		$profesor["departament"]=$post["departament"];
		$profesor["grad"]=$post["grad"];
		$this->load->model("users_model");
		$profesor["username"]=$this->users_model->generate_username_pr($profesor["nume"], $profesor["prenume"]);
		$profesor["parola"]=$this->users_model->generate_password();
		
		//echo "<pre>"; print_r($student);
		
		$this->db->query("insert into profesori (nume,prenume, email, CNP, departament, grad, username, parola) 
						values ('".$profesor["nume"]."','".$profesor["prenume"]."', '".$profesor["email"]."', '".$profesor["CNP"]."', '".$profesor["departament"]."', '".$profesor["grad"]."', '".$profesor["username"]."', '".$profesor["parola"]."')");
		redirect("profesori/index");	
    }

    function edit($id_profesor){
    $profesor = $this->db->query("SELECT * FROM profesori WHERE id_profesor = ?", [$id_profesor])->row_array();
    if(!$profesor){
        show_error("Profesorul nu există!");
        return;
    }

    // Setăm tag-urile <option> selectate corespunzător
    $replacements = [
        "SELECT_M"  => ($profesor["departament"] == "m") ? "selected" : "",
        "SELECT_I"  => ($profesor["departament"] == "i") ? "selected" : "",

        "SELECT_AS" => ($profesor["grad"] == "as") ? "selected" : "",
        "SELECT_LE" => ($profesor["grad"] == "le") ? "selected" : "",
        "SELECT_CO" => ($profesor["grad"] == "co") ? "selected" : "",
        "SELECT_PR" => ($profesor["grad"] == "pr") ? "selected" : ""

    ];

    // Flattenăm: combinăm câmpurile studentului cu replacement-urile
    $data = array_merge($profesor, $replacements);

    $CONTENT = $this->parser->parse("profesori/edit", $data, true);
    $TITLE = "Editare profesor";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function edit_done(){
    $post = $this->input->post();
    $id_profesor = $post["id_profesor"];

    $profesor = [
        "nume" => $post["nume"],
        "prenume" => $post["prenume"],
        "email" => $post["email"],
        "CNP" => $post["CNP"],
        "departament" => $post["departament"],
        "grad" => $post["grad"]
    ];

    $this->db->where("id_profesor", $id_profesor);
    $this->db->update("profesori", $profesor);

    redirect("profesori/index");
}

	function delete($id_profesor)
{
    $profesor = $this->db->query("SELECT * FROM profesori WHERE id_profesor = ?", [$id_profesor])->row_array();

    if (!$profesor) {
        show_error("Profesorul nu există!");
        return;
    }

    // Pregătim datele pentru view
    $CONTENT = $this->parser->parse("profesori/delete", [
        "id_profesor" => $profesor["id_profesor"],
        "nume" => $profesor["nume"],
        "prenume" => $profesor["prenume"],
        "username" => $profesor["username"]
    ], true);

    $TITLE = "Ștergere profesor";

    $this->parser->parse("template/template", [
        "TITLE" => $TITLE,
        "CONTENT" => $CONTENT
    ], false);
}

function delete_done($id_profesor)
{
    $this->db->where("id_profesor", $id_profesor);
    $this->db->delete("profesori");

    redirect("profesori/index");
}
}