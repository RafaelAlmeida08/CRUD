<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atualizar_model extends CI_Model { 
  
    var $usuario_nome;
    var $usuario_senha;
    var $usuario_telefone;
    var $usuario_email;
    var $usuario_status;
    var $usuario_nivel;
    
    public function listaUsuario($id)
    {        
      $this->db->where("usuario_id",$id);
      return $this->db->get('usuarios')->row();      
    }  
    
    public function atualizaUsuario()
    {            
      $this->usuario_nome       = $this->input->post('nome');
      $this->usuario_senha      = $this->input->post('senha');
      $this->usuario_telefone   = $this->input->post('telefone');
      $this->usuario_email      = $this->input->post('email');
      $this->usuario_status     = $this->input->post('status');
      $this->usuario_nivel      = $this->input->post('nivel');
      $id_usuario               = $this->input->post('id');

      $this->db->where("usuario_id",$id_usuario);
      return $this->db->update('usuarios',$this);
          
    }  
}
