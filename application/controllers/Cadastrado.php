<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrado extends CI_Controller {

	public function index(){
		$this->load->model("Cad_model");
		$lista=$this->Cad_model->buscaTodos();
		$dados=array("usuarios"=>$lista);
		$this->load->view('usuarios/index',$dados);
	}
	
}
