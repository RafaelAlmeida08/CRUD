<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excluir_model extends CI_Model {    

  public function excluir($id)
  {
    $this->db->where("usuario_id",$id); 
    return $this->db->delete("usuarios");
  }
    

}




