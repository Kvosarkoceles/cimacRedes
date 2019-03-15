<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agresores extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")){
			redirect(base_url());
		}
		$this->load->model("Registros_model");
		$this->load->model("Agresores_model");
	}

	public function add($id){
  	$data  = array(
	  	'sexo' => $this->Registros_model->getSexo(),
	  	'agresor' => $this->Registros_model->getTipoAgresor(),
	   	'nivel1_Agresor' => $this->Registros_model->getNivel1agresor(),
	  	'nivel2_Agresor' => $this->Registros_model->getNivel2agresor(),
	  	'id_datosincidente'=>$id
		);
		$this->load->view("layouts/header");
    $this->load->view("layouts/aside");
	 	$this->load->view("app/registros/agresor/add",$data);
  	$this->load->view("layouts/footer");
	}

	public function store(){
    // Agresion  start //
    $datosincidente = $this->input->post("id_datosincidente");
    $sexoAgresor = $this->input->post("sexoAgresor");
    $tipoagresor = $this->input->post("tipoagresor");
    $nivel1 = $this->input->post("nivel1");
    $nivel2 = $this->input->post("nivel2");
    $nombreagresor = $this->input->post("nombreagresor");
    // Agresion  end //
    $data  = array(
      'id_datosincidente' => $datosincidente,
      'id_sexo' => $sexoAgresor,
      'id_tipoAgresor' => $tipoagresor,
      'id_nivel1' => $nivel1,
      'id_nivel2' => $nivel2,
      'nombre' => $nombreagresor,
			'id_estatus'=>1
    );

    if ($this->Agresores_model->save($data)) {
      redirect(base_url()."app/registros/info/".$datosincidente);
    }
    else{
      $this->session->set_flashdata("error","No se pudo guardar la informacion");
      redirect(base_url()."administrador/usuarios/add");
    }
	}

	public function edit($id) {
    $data  = array(
			'sexo' => $this->Registros_model->getSexo(),
			'tipoagresor' => $this->Registros_model->getTipoAgresor(),
			'nivel1_Agresor' => $this->Registros_model->getNivel1agresor(),
			'nivel2_Agresor' => $this->Registros_model->getNivel2agresor(),
			'agresor' => $this->Registros_model->getAgresor($id),

		);
    $this->load->view("layouts/header");
    $this->load->view("layouts/aside");
    $this->load->view("app/registros/agresor/edit",$data);
    $this->load->view("layouts/footer");
  }

	public function update($id){
		// Agresion  start //
		$datosincidente = $this->input->post("id_datosincidente");
		$sexoAgresor = $this->input->post("sexoAgresor");
		$tipoagresor = $this->input->post("tipoagresor");
		$nivel1 = $this->input->post("nivel1");
		$nivel2 = $this->input->post("nivel2");
		$nombreagresor = $this->input->post("nombreagresor");
		// Agresion  end //
		$data  = array(

			'id_sexo' => $sexoAgresor,
			'id_tipoAgresor' => $tipoagresor,
			'id_nivel1' => $nivel1,
			'id_nivel2' => $nivel2,
			'nombre' => $nombreagresor,

		);

		if ($this->Agresores_model->update($id,$data)) {
			redirect(base_url()."app/registros/info/".$datosincidente);
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."administrador/usuarios/add");
		}
	}

	public function delete($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Agresores_model->update($id,$data);
	redirect($_SERVER['HTTP_REFERER']);
	}
}
