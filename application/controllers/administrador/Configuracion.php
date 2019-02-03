<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Configuracion_model");
	}

	public function index(){
		$data  = array(
		'cargoenelmedio' => $this->Configuracion_model->getCargo(),
		'edades' => $this->Configuracion_model->getEdades(),
		'estadocivil' => $this->Configuracion_model->	getEstadocivil(),
			//'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}

	public function add(){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),

		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add",$data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$nombres = $this->input->post("nombres");
		$username = $this->input->post("nick");
		$password = sha1($this->input->post("password"));
		$rol = $this->input->post("rol");
		$this->form_validation->set_rules("nombres","Nombres","required");
		$this->form_validation->set_rules("nick","Usuario","required");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("rol","rol","required");


		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'username' => $username,
				'password' => $password,
				'id_rol' => $rol,
				'id_estado' => "1"
			);

			if ($this->Usuarios_model->save($data)) {
				redirect(base_url()."administrador/usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/usuarios/add");
			}
		}else {
			$this->add();
		}


	}
	public function update(){
		$idusuario = $this->input->post("idusuario");
		$nombres = $this->input->post("nombres");
		$username = $this->input->post("nick");
		$rol = $this->input->post("rol");
		$this->form_validation->set_rules("nombres","Nombres","required");
		$this->form_validation->set_rules("nick","Usuario","required");
		$this->form_validation->set_rules("rol","rol","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'username' => $username,
				'id_rol' => $rol
			);

			if ($this->Usuarios_model->update($idusuario,$data)) {
				redirect(base_url()."administrador/usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/usuarios/edit".$idusuario);
			}
		}else {
			$this->edit($idusuario);
		}


	}
	public function view(){
		$idusuario = $this ->input ->post("idusuario");
		$data = array(
			"usuario" => $this->Usuarios_model->getUsuario($idusuario),
		);
		$this->load->view("admin/usuarios/view",$data);
	}

	public function edit($id){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'usuario' => $this->Usuarios_model->getUsuario($id)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function delete($id){
		$data  = array(
			'id_estado' => "0",
		);
		$this->Usuarios_model->update($id,$data);
		redirect(base_url()."administrador/usuarios");
	}

}
