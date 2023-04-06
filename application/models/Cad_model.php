<?php
class Cad_model extends CI_Model{
public function buscaTodos(){
    return $this->db->get("user_dados")->result_array();
}
}