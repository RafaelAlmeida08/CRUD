<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function verificar_logado()
    {
        if($this->session->userdata('logado')==false)
        {
          redirect('logar');
        }
    } 
    public function index_admin()
	{            
        $this->verificar_logado();
        $this->load->view('templates/admin/header');
        $this->load->view('admin/home');
        $this->load->view('templates/footer');
    }

    public function index_user()
	{            
        $this->verificar_logado();
        $this->load->view('templates/usuario/header');
        $this->load->view('usuarios/home');
        $this->load->view('templates/footer');
    }
    
    
}
