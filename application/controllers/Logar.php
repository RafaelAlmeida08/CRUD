<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logar extends CI_Controller {      
    
    public function index()
    {             
      $this->load->view('usuarios/login');
      
    }

    public function verificar_logado()
    {
        if($this->session->userdata('logado')==false)
        {
          redirect('logar');
        }
    } 
    
    public function logarusuario()
    {  
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');     
    
        $this->db->where('usuario_email',$email);
        $this->db->where('usuario_senha',$senha);
        $this->db->where('usuario_status',1);
        $data['usuario'] = $this->db->get('usuarios')->result();

        if(count($data['usuario']) == 1)
        {
          $dados['nome']   = $data['usuario'][0]->usuario_nome;
          $dados['id']     = $data['usuario'][0]->usuario_id;
          $dados['nivel']  = $data['usuario'][0]->usuario_nivel;
          $dados['logado'] = true;  
          $this->session->set_userdata($dados);

          if($dados['nivel'] == 2)
          {
            redirect('home/index_admin');
          }
          else
          {
            redirect('home/index_user');
          }
          
         
        }else
        {
          redirect('logar');
        }
    
    }

    public function sair()
    {
      $this->session->sess_destroy();
      redirect('logar');
    }
}





