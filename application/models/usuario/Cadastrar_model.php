<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar_model extends CI_Model {    

  public function inserir($dados)
  {
      return $this->db->insert('usuarios',$dados);
  }
}
