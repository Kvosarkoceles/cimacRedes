<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Configuracion_model");
		$this->load->model('Dependent_model', 'dep_model', TRUE);
	}

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
	/*++ Funciones para Periodistas start  ++*/
	/*++ Funciones para Edades start  ++*/
	public function edades(){
		$data  = array(
		'menus' => $this->Configuracion_model->getEdades(),
		'ruta' => "editEdades",
		'titulo' => "Edades",
		'agrega' => "addEdades",
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
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
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
				'nombre' => $nombres,
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
	/*++ Funciones para Edades end  ++*/
	/*++ Funciones para Vivienda start  ++*/
	public function vivienda(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodecasa(),
		'ruta' => "editCasa",
		'titulo' => "Tipo de vivienda",
		'agrega' => "addVivienda",
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
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
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
	/*++ Funciones para Vivienda end  ++*/
	/*++ Funciones para Estado civil start  ++*/
	public function civil(){
		$data  = array(
		'menus' => $this->Configuracion_model->getEstadocivil(),
		'ruta' => "editaEstadoCivil",
		'titulo' => "Estado civil",
		'agrega' => "addCivil",
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
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
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
	/*++ Funciones para Estado civil end  ++*/
	/*++ Funciones para Tipo de medio start  ++*/
	public function medio(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodemedio(),
		'ruta' => "editaTipodemedio",
		'titulo' => "Tipo de medio",
		'agrega' => "addMedio",
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
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
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
	/*++ Funciones para Tipo de medio end  ++*/
	/*++ Funciones para Tipo de contrato start  ++*/
	public function contrato(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodecontrato(),
		'ruta' => "editaTipodecontrato",
		'titulo' => "Tipo de contrato",
		'agrega' => "addContrato",
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function addContrato(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de contrato',
			'tabla' => 'tipodecontrato',
			'destino' => 'contrato',
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
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
	/*++ Funciones para Tipo de contrato end  ++*/
	/*++ Funciones para Tipo de cargo start  ++*/
	public function cargo(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodecargo(),
		'ruta' => "editaTipodecargo",
		'titulo' => "Cargo en el medio",
		'agrega' => "addCargo",
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
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
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
	/*++ Funciones para Tipo de cargo end  ++*/
		/*++ Funciones para Fuente start  ++*/
	public function fuente(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodefuente(),
		'ruta' => "editaTipodefuente",
		'titulo' => "Fuente",
		'agrega' => "addFuente",
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
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	/*++ Funciones para Fuente end  ++*/
	/*++ Funciones para Periodistas end  ++*/






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
		'ruta' => "editaMotivogresion",
		'titulo' => "Motivos de la agresión",
		'agrega' => "addMotivogresion",
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function tipodeinvestigacion(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipodeinvestigacion(),
		'ruta' => "editaTipodeinvestigacion",
		'titulo' => "Tipo de investigación",
		'agrega' => "addTipodeinvestigacion",
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
	/*++ Funciones para las vistas Agresor tart  ++*/
	public function tipoagresor(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipoagresor(),
		'ruta' => "editaTipoagresor",
		'titulo' => "Tipo de agresor",
		'agrega' => "addTipoagresor",
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/list",$data);
		$this->load->view("layouts/footer");
	}
	public function tipoagresor_nivel1(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipoagresor_nivel1(),
		'ruta' => "editaNivel1",
		'titulo' => "Tipo de agresor Nivel 1"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/listaNivel1",$data);
		$this->load->view("layouts/footer");
	}
	public function tipoagresor_nivel2(){
		$data  = array(
		'menus' => $this->Configuracion_model->getTipoagresor_nivel2(),
		'ruta' => "editaNivel2",
		'titulo' => "Tipo de agresor Nivel 2"
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/listaNivel2",$data);
		$this->load->view("layouts/footer");
	}
	/*++ Funciones para las vistas Agresor end  ++*/
	/*++ Funciones para editar variables Agresor start  ++*/
	public function editaTipoagresor($id){
		$data  = array(
			'nombres' => $this->Configuracion_model->getTipodeagresor($id),
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
		$menu = 'tipoagresor';
		$this->form_validation->set_rules("nombres","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion' => $descripcion,
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
	public function editaNivel2($id){
		$data['tipoAgresor'] = $this->dep_model->get_tipoAgresor_query();
		$data  = array(
			'tipoAgresor' => $this->dep_model->get_tipoAgresor_query(),
			'nivel2' => $this->Configuracion_model->getTipoNivel2($id),
			'tipoagresor' => $this->Configuracion_model->getTipoagresor(),
			'nivel1' => $this->Configuracion_model->getTipoagresor_nivel1(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/editNivel2",$data);
		$this->load->view("layouts/footer");
	}
	/*++ Funciones para las vistas Agresor end  ++*/
	public function get_nivel1()	{
		$id_tipoAgresor = $this->input->post('id_tipoAgresor');
		$nivel1 = $this->dep_model->get_nivel1_query($id_tipoAgresor);
		if(count($nivel1)>0)
		{
			$pro_select_box = '';
			//$pro_select_box .= '<option value="">Select Province</option>';

			foreach ($nivel1 as $nivel) {
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
		if ($this->form_validation->run()) {
			$data  = array(
				'id_tipoAgresor' => $tipoagresor,
				'id_nivel1' => $nivel1,
				'nombre' => $nombre,
				'descripcion'=> $descripcion
				//'id_estado' => "1"
			);

			if ($this->Configuracion_model->save('nivel2Agresor',$data)) {
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
	public function storeNivel1(){
		$tipoagresor = $this->input->post("tipoagresor");
		$nombres = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$this->form_validation->set_rules("nombre","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'id_tipoAgresor' => $tipoagresor,
				'nombre' => $nombres,
				'descripcion'=> $descripcion
				//'id_estado' => "1"
			);

			if ($this->Configuracion_model->save('nivel1Agresor',$data)) {
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
	public function updateNivel2(){
		$menu='nivel2Agresor';
		$id_nivel2 = $this->input->post("id_nivel2");
		$tipoagresor = $this->input->post("tipoagresor");
		$nivel1 = $this->input->post("nivel1");
		$nombres = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		if ($this->form_validation->run()) {
			$data  = array(
				'id_tipoAgresor' => $tipoagresor,
				'id_nivel1' => $nivel1,
				'nombre' => $nombres,
				'descripcion'=> $descripcion
			);

			if ($this->Configuracion_model->update($menu,$data,$id_nivel2)) {
				redirect(base_url()."administrador/configuracion/tipoagresor_nivel2");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/editaNivel2".$id_nivel2);
			}
		}else {
			$this->editaNivel2($id_nivel2);
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
		$menu='nivel1Agresor';
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
	public function addTipoagresor(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de agresor',
			'tabla' => 'tipoagresor',
			'destino' => 'tipoagresor',
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function addMotivogresion(){
		$data  = array(
			'titulo' => 'Agrega nuevo motivo de la agresión',
			'tabla' => 'motivodelasgresion',
			'destino' => 'motivogresion',
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function addTipodeinvestigacion(){
		$data  = array(
			'titulo' => 'Agrega nuevo tipo de investigación',
			'tabla' => 'tipodeinvestigacion',
			'destino' => 'tipodeinvestigacion',
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/configuracion/add",$data);
		$this->load->view("layouts/footer");
	}
	public function store(){
		$tabla = $this->input->post("tabla");
		$destino = $this->input->post("destino");
		$nombres = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$this->form_validation->set_rules("nombre","Nombres","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'nombre' => $nombres,
				'descripcion'=> $descripcion
				//'id_estado' => "1"
			);

			if ($this->Configuracion_model->save($tabla,$data)) {
				redirect(base_url()."administrador/configuracion/$destino");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/configuracion/addItem1");
			}
		}else {
			$this->addItem1();
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
