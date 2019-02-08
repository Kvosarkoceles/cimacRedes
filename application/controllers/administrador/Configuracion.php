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
	/*++ Funciones para las vistas Periodistas tart  ++*/
	public function index(){
		$data  = array(
		'edades' => $this->Configuracion_model->getEdades(),
		'tipocasa' => $this->Configuracion_model->getTipodecasa(),
		'estadocivil' => $this->Configuracion_model->getEstadocivil(),
		'tipodemedio' => $this->Configuracion_model->	getTipodemedio(),
		'tipodecontrato' => $this->Configuracion_model->getTipodecontrato(),
		'cargoenelmedio' => $this->Configuracion_model->getTipodecargo(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function edades(){
		$data  = array(
		'menus' => $this->Configuracion_model->getEdades(),
		'ruta' => "editEdades"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function vivienda(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodecasa(),
		'ruta' => "editCasa"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function civil(){
		$data  = array(
		'menus' => $this->Configuracion_model->getEstadocivil(),
		'ruta' => "editaEstadoCivil"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function medio(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodemedio(),
		'ruta' => "editaTipodemedio"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function contrato(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodecontrato(),
		'ruta' => "editaTipodecontrato"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function cargo(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodecargo(),
		'ruta' => "editaTipodecargo"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function fuente(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodefuente(),
		'ruta' => "editaTipodefuente"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	/*++ Funciones para las vistas Periodistas end  ++*/
	/*++ Funciones para editar variables Periodistas start  ++*/
	public function editEdades($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getEdad($id),
			'base' => "edades_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function edades_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$menu = 'edades';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'parametro' => $nombres,
				'descripcion' => $descripcion,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/edades");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editEdades".$idmenu);
			}
		}else {
			$this->editEdades($idmenu);
		}
	}
	public function editCasa($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getCasa($id),
			'base' => "casa_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function casa_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$menu = 'tipodecasa';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/vivienda");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editCasa".$idmenu);
			}
		}else {
			$this->editCasa($idmenu);
		}
	}
	public function editaEstadoCivil($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getCivil($id),
			'base' => "estadoCivil_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function estadoCivil_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$menu = 'estadocivil';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/civil");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaEstadoCivil".$idmenu);
			}
		}else {
			$this->editaEstadoCivil($idmenu);
		}
	}
	public function editaTipodemedio($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipomedio($id),
			'base' => "tipodemedio_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function tipodemedio_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$menu = 'tipodemedio';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/medio");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaTipodemedio".$idmenu);
			}
		}else {
			$this->editaTipodemedio($idmenu);
		}
	}
	public function editaTipodecontrato($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipocontrato($id),
			'base' => "tipodecontrato_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function tipodecontrato_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$menu = 'tipodecontrato';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/contrato");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaTipodecontrato".$idmenu);
			}
		}else {
			$this->editaTipodecontrato($idmenu);
		}
	}
	public function editaTipodecargo($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipocargo($id),
			'base' => "tipodecargo_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function tipodecargo_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$menu = 'cargoenelmedio';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/cargo");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaTipodecargo".$idmenu);
			}
		}else {
			$this->editaTipodecargo($idmenu);
		}
	}
	public function editaTipodefuente($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipofuente($id),
			'base' => "tipodefuente_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function tipodefuente_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$menu = 'fuente';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/fuente");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaTipodefuente".$idmenu);
			}
		}else {
			$this->editaTipodefuente($idmenu);
		}
	}
	/*++ Funciones para editar variables Periodistas end  ++*/
	/*++ Funciones para las vistas Registros tart  ++*/
	public function motivogresion(){
		$data  = array(
		'menus' => $this->Configuracion_model->getMotivodelaagresion(),
		'ruta' => "editaMotivogresion"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function tipodeinvestigacion(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodeinvestigacion(),
		'ruta' => "editaTipodeinvestigacion"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	/*++ Funciones para las vistas Registros end  ++*/
	/*++ Funciones para editar variables Registros start  ++*/
	public function editaMotivogresion($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getMotivoagresion($id),
			'base' => "motivogresion_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function motivogresion_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$menu = 'motivodelasgresion';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/motivogresion");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaMotivogresion".$idmenu);
			}
		}else {
			$this->editaMotivogresion	($idmenu);
		}
	}
	public function editaTipodeinvestigacion($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipoinvestigacion($id),
			'base' => "tipodeinvestigacion_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function tipodeinvestigacion_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$menu = 'tipodeinvestigacion';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/tipodeinvestigacion");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaTipodeinvestigacion".$idmenu);
			}
		}else {
			$this->editaMotivogresion	($idmenu);
		}
	}
	/*++ Funciones para editar variables Registros end  ++*/
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
