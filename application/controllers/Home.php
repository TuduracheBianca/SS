<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // ensure session + url helper are available and working
        $this->load->library('session');
        $this->load->helper('url');
    }

   public function index()
    {
        if (!$this->session->userdata('role')) {
            redirect('auth/login');
            return;
        }

        $role = $this->session->userdata('role') ?? 'guest';
        $this->render_by_role($role);
    }

    // helper that chooses views and renders (so we can reuse it for preview/debug)
    protected function render_by_role(string $role)
    {
        $r = strtolower(trim($role));

        switch ($r) {
            case 'admin':
            case 'administrator':
                 $sidenav = 'template/sidenava';
                $content_view = 'home/home_admin';
               
                break;
            case 'student':
            case 'studenti':
                $sidenav = 'template/sidenavs';
                $content_view = 'home/home_studenti';
                
                break;
            case 'profesor':
            case 'professor':
            case 'profesori':
                $sidenav = 'template/sidenavp';
                $content_view = 'home/home_profesori';
                break;
            default:
                $sidenav = 'template/sidenava';
                $content_view = 'home/home_guest';
                break;
        }

        $data = [
            'TITLE'   => 'Acasă',
            'BASE_URL'=> base_url(),
            'SIDENAV' => $this->load->view($sidenav, [], true),
            'TOPBAR'  => $this->load->view('template/topbara', [], true),
            'FOOTER'  => $this->load->view('template/footer', [], true),
            'CONTENT' => $this->load->view($content_view, [], true),
        ];

        $this->load->view('template/template', $data);
    }

    // sets session role and redirects to index (use: /index.php/home/as/student)
    public function as($role = 'guest')
    {
        $role = strtolower(trim($role));
        $this->session->set_userdata('role', $role);
        redirect('home');
    }

    // preview without using session (use: /index.php/home/preview/student)
    public function preview($role = 'guest')
    {
        $this->render_by_role($role);
    }

    // debug current session role (use: /index.php/home/debug)
    public function debug()
    {
        header('Content-Type: text/plain');
        echo "Session role: ";
        var_export($this->session->userdata('role'));
        echo "\n\nAll session data:\n";
        var_export($_SESSION ?? []);
    }

    // clear role (use: /index.php/home/logout)
    public function logout()
    {
        $this->session->unset_userdata('role');
        redirect('home');
    }
}
?>