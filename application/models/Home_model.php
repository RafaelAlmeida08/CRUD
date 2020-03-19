<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {    

  public function nome($id)
  {
    $this->db->where("usuario_nome",$id);  
    return $this->db->get('usuarios',$id);
  }
    

}




