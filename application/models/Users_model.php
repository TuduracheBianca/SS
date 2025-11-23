<?php
Class Users_model extends CI_Model{

	public function __construct()	{
		parent::__construct();
        $this->load->database();
	}

	function generate_username_st($nume, $prenume){
		$username="st".$nume.substr($prenume,0,1);
		return $username;
	}
	function generate_username_pr($nume, $prenume){
		$username="pr".$nume.substr($prenume,0,1);
		return $username;
	}
	function generate_password(){
		$pass=md5(rand(1000,45855)."psw");
		return $pass;
	}
	
	public function get_by_username(string $username)
    {
        $sql = "
            SELECT id_admin   AS id, username, parola AS password, 'admin'    AS role FROM admini    WHERE username = ?
            UNION ALL
            SELECT id_student AS id, username, parola AS password, 'student'  AS role FROM studenti  WHERE username = ?
            UNION ALL
            SELECT id_profesor AS id, username, parola AS password, 'professor' AS role FROM profesori WHERE username = ?
            LIMIT 1
        ";
        $row = $this->db->query($sql, [$username, $username, $username])->row_array();
        if (! $row) return null;

        // trim password to remove accidental whitespace/trailing chars
        if (isset($row['password'])) {
            $row['password'] = trim($row['password']);
        }

        return $row;
    }

    // Optional helper to create a unified users table entry (if you migrate later)
    public function create_user(string $username, string $plainPassword, string $role = 'student')
    {
        $hash = password_hash($plainPassword, PASSWORD_DEFAULT);
        $data = [
            'username' => $username,
            'password' => $hash,
            'role'     => $role,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }


}
?>