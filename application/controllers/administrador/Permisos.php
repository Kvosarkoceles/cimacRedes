<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();

		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}


		$this->permisos = $this->backend_lib->control();
		$this->load->model("Permisos_model");
		$this->load->model("Usuarios_model");
	}

	public function index(){
		$data  = array(
			'permisos' => $this->Permisos_model->getPermisos(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/list",$data);
		$this->load->view("layouts/footer");
	}

	public function add(){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'menus' => $this->Permisos_model->getMenus(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/add",$data);
		$this->load->view("layouts/footer");
	}

	public function edit($id){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'menus' => $this->Permisos_model->getMenus(),
			'permiso' => $this->Permisos_model->getPermiso($id)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$menu = $this->input->post("menu");
		$rol = $this->input->post("rol");
		$acceso = $this->input->post("acceder");
		$insert = $this->input->post("insert");
		$read = $this->input->post("read");
		$update = $this->input->post("update");
		$delete = $this->input->post("delete");


		$data  = array(
			'menu_id' => $menu,
			'rol_id' => $rol,
			'acceso' => $acceso,
			'read' => $read,
			'insert' => $insert,
			'update' => $update,
			'delete' => $delete
		);

		if ($this->Permisos_model->save($data)) {
			redirect(base_url()."administrador/permisos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."administrador/permisos/add");
		}
	}

	public function update(){
		$idpermiso = $this->input->post("idpermiso");
		$menu = $this->input->post("menu");
		$rol = $this->input->post("rol");
		$acceso = $this->input->post("acceder");
		$insert = $this->input->post("insert");
		$read = $this->input->post("read");
		$update = $this->input->post("update");
		$delete = $this->input->post("delete");


		$data  = array(
			'read' => $read,
			'acceso' => $acceso,
			'insert' => $insert,
			'update' => $update,
			'delete' => $delete
		);

		if ($this->Permisos_model->update($idpermiso,$data)) {
			redirect(base_url()."administrador/permisos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."administrador/permisos/edit".$idpermiso);
		}
	}
}
