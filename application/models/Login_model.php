<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {    

  public function logar($dados)
  {
    $this->db->where('usuario_email','email');
    $this->db->where('usuario_senha','senha');
    $resultado = $this->db->get('usuarios');
    if($resultado->num_rows() == 1)
    {
        return 0;
    }else
    {
      return 1;
    }
  }
    
}




