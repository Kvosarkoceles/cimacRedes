<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
			$this->permisos = $this->backend_lib->control();
		$this->load->model("Configuracion_model");
		$this->load->model('Dependent_model', 'dep_model', TRUE);
	}

	public function index(){
		show_404();
	}
	/*++ Funciones para Periodistas start  ++*/
	/*++ Funciones para Edades start  ++*/
	public function edades(){
		$data  = array(
		'menus' => $this->Configuracion_model->getEdades(),
		'ruta' => "editEdades",
		'titulo' => "Edades",
		'agrega' => "addEdades",
		'delete' => "delete_edades",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addEdades(){
		$data  = array(
			'titulo' => 'Agrega nuevo parametro de edades',
			'tabla' => 'edades',
			'destino' => 'edades',
			'metodo' =>1
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editEdades($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getEdad($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
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
		$estatus = $this->input->post("status");
		$menu = 'edades';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus,
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
	public function delete_edades($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('edades',$data,$id);
		redirect(base_url()."administrador/configuracion/edades");
	}
	/*++ Funciones para Edades end  ++*/
	/*++ Funciones para Vivienda start  ++*/
	public function vivienda(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodecasa(),
		'ruta' => "editCasa",
		'titulo' => "Tipo de vivienda",
		'agrega' => "addVivienda",
		'delete' => "delete_tipovivienda",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addVivienda(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de vivienda',
			'tabla' => 'tipodecasa',
			'destino' => 'vivienda',
			'metodo' =>2
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editCasa($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getCasa($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
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
		$estatus = $this->input->post("status");
		$menu = 'tipodecasa';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
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
	public function delete_tipovivienda($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('tipodecasa',$data,$id);
		redirect(base_url()."administrador/configuracion/vivienda");
	}
	/*++ Funciones para Vivienda end  ++*/
	/*++ Funciones para Estado civil start  ++*/
	public function civil(){
		$data  = array(
		'menus' => $this->Configuracion_model->getEstadocivil(),
		'ruta' => "editaEstadoCivil",
		'titulo' => "Estado civil",
		'agrega' => "addCivil",
		'delete' => "delete_civil",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addCivil(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de estado civil',
			'tabla' => 'estadocivil',
			'destino' => 'civil',
			'metodo' =>3
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaEstadoCivil($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getCivil($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
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
		$estatus = $this->input->post("status");
		$menu = 'estadocivil';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
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
	public function delete_civil($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('estadocivil',$data,$id);
		redirect(base_url()."administrador/configuracion/civil");
	}
	/*++ Funciones para Estado civil end  ++*/
	/*++ Funciones para Tipo de medio start  ++*/
	public function medio(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodemedio(),
		'ruta' => "editaTipodemedio",
		'titulo' => "Tipo de medio",
		'agrega' => "addMedio",
		'delete' => "delete_medio",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addMedio(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de medio',
			'tabla' => 'tipodemedio',
			'destino' => 'medio',
			'metodo' => 4
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaTipodemedio($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipomedio($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
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
		$estatus = $this->input->post("status");
		$menu = 'tipodemedio';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
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
	public function delete_medio($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('tipodemedio',$data,$id);
		redirect(base_url()."administrador/configuracion/medio");
	}
	/*++ Funciones para Tipo de medio end  ++*/
	/*++ Funciones para Tipo de contrato start  ++*/
	public function contrato(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodecontrato(),
		'ruta' => "editaTipodecontrato",
		'titulo' => "Tipo de contrato",
		'agrega' => "addContrato",
		'delete' => "delete_contrato",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addContrato(){
		$data  = array(
			'titulo' => 'Agrega tipo de contrato',
			'tabla' => 'tipodecontrato',
			'destino' => 'contrato',
			'metodo' =>5
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function storeContrato(){
		$tabla = $this->input->post("tabla");
		$destino = $this->input->post("destino");
		$nombre = $this->input->post("nombre");
		$metodo = $this->input->post("metodo");
		$descripcion = $this->input->post("descripcion");
		$this->form_validation->set_rules("nombre","Nombres","required");

		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombre,
				'descripcion' => $descripcion
			);
			if ($this->Configuracion_model->save($tabla,$data)) {
				redirect(base_url()."administrador/configuracion/".$destino);
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/".$destino);
			}

		}else {
			switch ($metodo) {
				case 1:
					$this->addEdades();
					break;
				case 2:
					$this->addVivienda();
					break;
				case 3:
					$this->addCivil();
					break;
				case 4:
					$this->addMedio();
						break;
				case 5:
					$this->addContrato();
					break;
				case 6:
					$this->addCargo();
					break;
				case 7:
					$this->addFuente();
					break;
				case 8:
					$this->addMotivogresion();
					break;
				case 9:
					$this->addTipodeinvestigacion();
					break;
				case 81:
					$this->addTipoagresor();
					break;
				case 10:
					$this->addPerfilbajo();
					break;
				case 11:
					$this->addJudicializacion();
					break;
				case 12:
					$this->addManifestacion();
					break;
				default:
						show_404();
					break;
			}

		}


	}
	public function editaTipodecontrato($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipocontrato($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
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
		$estatus = $this->input->post("status");
		$menu = 'tipodecontrato';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
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
	public function delete_contrato($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('tipodecontrato',$data,$id);
		redirect(base_url()."administrador/configuracion/contrato");
	}

	/*++ Funciones para Tipo de contrato end  ++*/
	/*++ Funciones para Tipo de cargo start  ++*/
	public function cargo(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodecargo(),
		'ruta' => "editaTipodecargo",
		'titulo' => "Cargo en el medio",
		'agrega' => "addCargo",
		'delete' => "delete_cargo",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addCargo(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de cargo en medio',
			'tabla' => 'cargoenelmedio',
			'destino' => 'cargo',
			'metodo' => 6
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaTipodecargo($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipocargo($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
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
		$estatus = $this->input->post("status");
		$menu = 'cargoenelmedio';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
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
	public function delete_cargo($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('cargoenelmedio',$data,$id);
		redirect(base_url()."administrador/configuracion/cargo");
	}
	/*++ Funciones para Tipo de cargo end  ++*/
		/*++ Funciones para Fuente start  ++*/
	public function fuente(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodefuente(),
		'ruta' => "editaTipodefuente",
		'titulo' => "Fuente",
		'agrega' => "addFuente",
		'delete' => "delete_fuente",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addFuente(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de fuente',
			'tabla' => 'fuente',
			'destino' => 'fuente',
			'metodo' => 7
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaTipodefuente($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipofuente($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
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
		$estatus = $this->input->post("status");
		$menu = 'fuente';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
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
	public function delete_fuente($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('fuente',$data,$id);
		redirect(base_url()."administrador/configuracion/fuente");
	}
	/*++ Funciones para Fuente end  ++*/
	/*++ Funciones para Periodistas end  ++*/

	/*++ Funciones para editar variables Periodistas end  ++*/
	/*++ Funciones para las vistas Registros tart  ++*/
	public function motivogresion(){
		$data  = array(
		'menus' => $this->Configuracion_model->getMotivodelaagresion(),
		'ruta' => "editaMotivogresion",
		'titulo' => "Motivos de la agresión",
		'agrega' => "addMotivogresion",
		'delete' => "delete_motivogresion",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addMotivogresion(){
		$data  = array(
			'titulo' => 'Agrega nuevo motivo de la agresión',
			'tabla' => 'motivodelasgresion',
			'destino' => 'motivogresion',
			'metodo' => 8
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaMotivogresion($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getMotivoagresion($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
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
		$estatus = $this->input->post("status");
		$menu = 'motivodelasgresion';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
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
	public function delete_motivogresion($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('motivodelasgresion',$data,$id);
		redirect(base_url()."administrador/configuracion/motivogresion");
	}
	/*++ Funciones para las vistas Registros end  ++*/
	/*++ Funciones para editar variables Registros start  ++*/
	public function tipodeinvestigacion(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodeinvestigacion(),
		'ruta' => "editaTipodeinvestigacion",
		'titulo' => "Tipo de investigación",
		'agrega' => "addTipodeinvestigacion",
		'delete' => "delete_tipodeinvestigacion",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addTipodeinvestigacion(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de investigación',
			'tabla' => 'tipodeinvestigacion',
			'destino' => 'tipodeinvestigacion',
			'metodo' => 9
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaTipodeinvestigacion($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipoinvestigacion($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
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
		$estatus = $this->input->post("status");
		$menu = 'tipodeinvestigacion';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
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
	public function delete_tipodeinvestigacion($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('tipodeinvestigacion',$data,$id);
		redirect(base_url()."administrador/configuracion/tipodeinvestigacion");
	}
	/*++ Funciones para editar variables Registros end  ++*/
	/*++ Funciones para las vistas Registros end  ++*/
	/*++ Funciones para editar variables Registros start  ++*/
	public function perfilbajo(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodeperfilbajo(),
		'ruta' => "editaPerfilbajo",
		'titulo' => "Perfil bajo",
		'agrega' => "addPerfilbajo",
		'delete' => "delete_perfilbajo",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addPerfilbajo(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de perfil bajo',
			'tabla' => 'perfilbajo',
			'destino' => 'perfilbajo',
			'metodo' => 10
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaPerfilbajo($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipoperfilbajo($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
			'base' => "perfilbajo_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function perfilbajo_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$estatus = $this->input->post("status");
		$menu = 'perfilbajo';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/perfilbajo");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaPerfilbajo".$idmenu);
			}
		}else {
			$this->editaMotivogresion	($idmenu);
		}
	}
	public function delete_perfilbajo($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('perfilbajo',$data,$id);
		redirect(base_url()."administrador/configuracion/perfilbajo");
	}
	/*++ Funciones para editar variables Registros end  ++*/
	/*++ Funciones para editar variables Registros start  ++*/
	public function judicializacion(){
		$data  = array(
		'menus' => $this->Configuracion_model->getJudicializaciono(),
		'ruta' => "editaJudicializacion",
		'titulo' => "Judicializacion",
		'agrega' => "addJudicializacion",
		'delete' => "delete_judicializacion",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addJudicializacion(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo judicializacion',
			'tabla' => 'tipodejudicializacion',
			'destino' => 'judicializacion',
			'metodo' => 11
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaJudicializacion($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipojudicializaciono($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
			'base' => "judicializacion_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function judicializacion_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$estatus = $this->input->post("status");
		$menu = 'tipodejudicializacion';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/judicializacion");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaJudicializacion".$idmenu);
			}
		}else {
			$this->editaMotivogresion	($idmenu);
		}
	}
	public function delete_judicializacion($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('tipodejudicializacion',$data,$id);
		redirect(base_url()."administrador/configuracion/judicializacion");
	}
	/*++ Funciones para editar variables Registros end  ++*/
	/*++ Funciones para editar variables Registros start  ++*/
	public function manifestacion(){
		$data  = array(
		'menus' => $this->Configuracion_model->getManifestacion(),
		'ruta' => "editaManifestacion",
		'titulo' => "Manifestacion de la violencia",
		'agrega' => "addManifestacion",
		'delete' => "delete_manifestacion",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addManifestacion(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo manifestacion',
			'tabla' => 'tipodemanifestaciones',
			'destino' => 'manifestacion',
			'metodo' => 12
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaManifestacion($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipomanifestacion($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
			'base' => "manifestacion_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function manifestacion_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$estatus = $this->input->post("status");
		$menu = 'tipodemanifestaciones';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/manifestacion");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaManifestacion".$idmenu);
			}
		}else {
			$this->editaManifestacion	($idmenu);
		}
	}
	public function delete_manifestacion($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('tipodemanifestaciones',$data,$id);
		redirect(base_url()."administrador/configuracion/manifestacion");
	}
	/*++ Funciones para editar variables Registros end  ++*/
	/*++ Funciones para las vistas Agresor tart  ++*/
	public function tipoagresor(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipoagresor(),
		'ruta' => "editaTipoagresor",
		'titulo' => "Tipo de agresor",
		'agrega' => "addTipoagresor",
		'delete' => "delete_tipoagresor",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addTipoagresor(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de agresor',
			'tabla' => 'tipoagresor',
			'destino' => 'tipoagresor',
			'metodo' => 81
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function editaTipoagresor($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipodeagresor($id),
			'estatus' => $this->Configuracion_model->getEstatus(),
			'base' => "tipoagresor_update"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function tipoagresor_update(){
		$idmenu = $this->input->post("idmenu");
		$nombres = $this->input->post("nombres");
		$descripcion = $this->input->post("descripcion");
		$estatus = $this->input->post("status");
		$menu = 'tipoagresor';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
				'id_estatus' => $estatus,
			);

			if ($this->Configuracion_model->update($menu,$data,$idmenu)) {
				redirect(base_url()."administrador/configuracion/tipoagresor");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaTipoagresor".$idmenu);
			}
		}else {
			$this->editaMotivogresion	($idmenu);
		}
	}
	public function delete_tipoagresor($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('tipoagresor',$data,$id);
		redirect(base_url()."administrador/configuracion/tipoagresor");
	}

	public function editaNivel1($id){
		$data  = array(
			'nivel' => $this->Configuracion_model->getTipoNivel1($id),
			'tipoagresor' => $this->Configuracion_model->getTipoagresor(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/editNivel1",$data);
		$this->load->view("layouts/footer");
	}
	public function tipoagresor_nivel1(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipoagresor_nivel1(),
		'ruta' => "editaNivel1",
		'titulo' => "Tipo de agresor Nivel 1",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/listaNivel1",$data);
		$this->load->view("layouts/footer");
	}
	public function get_nivel1()	{
		$id_tipoAgresor = $this->input->post('id_tipoAgresor');
		$nivel1 = $this->dep_model->get_nivel1_query($id_tipoAgresor);
		if(count($nivel1)>0)
		{
			$pro_select_box = '';
			$pro_select_box .= '<option value="1	">Seleccione un valor</option>';

			foreach ($nivel1 as $nivel) {
				$pro_select_box .='<option value="'.$nivel->id.'">'.$nivel->nombre.'</option>';
			}
			echo json_encode($pro_select_box);
		}
	}
	public function storeNivel1(){
		$tipoagresor = $this->input->post("tipoagresor");
		$nombres = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$this->form_validation->set_rules("nombre","Nombre","required");
		$this->form_validation->set_rules("tipoagresor","Tipo de agresor","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'id_tipoAgresor' => $tipoagresor,
				'nombre' => $nombres,
				'descripcion'=> $descripcion
			);
			if ($this->Configuracion_model->save('nivel1agresor',$data)) {
				redirect(base_url()."administrador/configuracion/tipoagresor_nivel1");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/addItem1");
			}
		}else {
			$this->addItem1();
		}
	}
	public function addItem1(){
		$data  = array(
			'tipoagresor' => $this->Configuracion_model->getTipoagresor(),
			'nivel1' => $this->Configuracion_model->getTipoagresor_nivel1(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/addNivel1",$data);
		$this->load->view("layouts/footer");
	}
	public function updateNivel1(){
		$menu='nivel1agresor';
		$id_nivel1 = $this->input->post("id_nivel1");
		$id_tipoAgresor = $this->input->post("tipoagresor");
		$nombres = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$this->form_validation->set_rules("nombre","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'id_tipoAgresor' => $id_tipoAgresor,
				'nombre' => $nombres,
				'descripcion'=> $descripcion
			);

			if ($this->Configuracion_model->update($menu,$data,$id_nivel1)) {
				redirect(base_url()."administrador/configuracion/tipoagresor_nivel1");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaNivel1".$id_nivel1);
			}
		}else {
			$this->editaNivel1($id_nivel1);
		}


	}


	public function editaNivel2($id){
		$data['tipoAgresor'] = $this->dep_model->get_tipoAgresor_query();
		$data  = array(
			'tipoAgresor' => $this->dep_model->get_tipoAgresor_query(),
			'nivel2' => $this->Configuracion_model->getTipoNivel2($id),
			'tipoagresor' => $this->Configuracion_model->getTipoagresor(),
			'nivel1' => $this->Configuracion_model->getTipoagresor_nivel1(),
			'estatus' => $this->Configuracion_model->getEstatus(),

		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/editNivel2",$data);
		$this->load->view("layouts/footer");
	}
	public function tipoagresor_nivel2(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipoagresor_nivel2(),
		'ruta' => "editaNivel2",
		'titulo' => "Tipo de agresor Nivel 2",
		'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/listaNivel2",$data);
		$this->load->view("layouts/footer");
	}
	public function get_nivel2()	{
		$id_nivel1 = $this->input->post('id_nivel1');
		$nivel2 = $this->dep_model->get_nivel2_query($id_nivel1);
		if(count($nivel2)>0)
		{
			$pro_select_box = '';
			$pro_select_box .= '<option value="">Seleccione un valor</option>';

			foreach ($nivel2 as $nivel) {
				$pro_select_box .='<option value="'.$nivel->id.'">'.$nivel->nombre.'</option>';
			}
			echo json_encode($pro_select_box);
		}
	}
	public function storeNivel2(){
		$tipoagresor = $this->input->post("tipoagresor");
		$nivel1 = $this->input->post("nivel1");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$this->form_validation->set_rules("nombre","Nombres","required");
		$this->form_validation->set_rules("tipoagresor","Tipo de agresor","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'id_tipoAgresor' => $tipoagresor,
				'id_nivel1' => $nivel1,
				'nombre' => $nombre,
				'descripcion'=> $descripcion
				//'id_estado' => "1"
			);

			if ($this->Configuracion_model->save('nivel2agresor',$data)) {
				redirect(base_url()."administrador/configuracion/tipoagresor_nivel2");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/addItem2");
			}
		}else {
			$this->addItem2();
		}


	}
	public function updateNivel2(){
		$menu='nivel2agresor';
		$id_nivel2 = $this->input->post("id_nivel2");
		$tipoagresor = $this->input->post("tipoagresor");
		$nivel1 = $this->input->post("nivel1");
		$nombres = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$estatus = $this->input->post("status");
		$data  = array(
			'id_tipoAgresor' => $tipoagresor,
			'id_nivel1' => $nivel1,
			'nombre' => $nombres,
			'descripcion'=> $descripcion,
			'id_estatus'=> $estatus
		);

		if ($this->Configuracion_model->update($menu,$data,$id_nivel2)) {
			redirect(base_url()."administrador/configuracion/tipoagresor_nivel2");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."administrador/configuracion/editaNivel2".$id_nivel2);
		}

	}
	public function addItem2(){
		$data  = array(
			'tipoagresor' => $this->Configuracion_model->getTipoagresor(),
			'nivel1' => $this->Configuracion_model->getTipoagresor_nivel1(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/addNivel2",$data);
		$this->load->view("layouts/footer");
	}
	public function delete_item2($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Configuracion_model->update('nivel2agresor',$data,$id);
		redirect(base_url()."administrador/configuracion/tipoagresor_nivel2");
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
	private function _delete($id){
		$data  = array(
			'id_estado' => "0",
		);
		$this->Configuracion_model->update($id,$data);
		redirect(base_url()."administrador/usuarios");
	}

}
