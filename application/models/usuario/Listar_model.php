<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listar_model extends CI_Model {    

  public function listaUsuarios()
  {
    $dados = $this->db->get('usuarios');
    return $dados->result();
  }
    

}




