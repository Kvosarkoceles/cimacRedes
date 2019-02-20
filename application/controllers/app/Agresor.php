<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agresor extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Periodistas_model");
		$this->load->model("Registros_model");
		$this->load->model("Manifestacion_model");
	}
	public function index(){
		show_404();
	}
	public function add($id){
		$data  = array(
			'tipodemanifestaciones' => $this->Registros_model->getTipodemanifestaciones(),
			'id_datosincidente'=>$id
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/registros/agresor/add",$data);
		$this->load->view("layouts/footer");
	}
	public function info($id){
		$data  = array(
			'periodista' => $this->Periodistas_model->getPeriodista($id),
			'trabajo' => $this->Periodistas_model->getTrabajo($id),
			'registros' => $this->Periodistas_model->getRegistro($id),
			'id_datosincidente'=>$id
		//	'menus' => $this->Permisos_model->getMenus(),
		//	'permiso' => $this->Permisos_model->getPermiso($id)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/periodistas/info",$data);
		$this->load->view('layouts/footer');
	}
	public function edit($id){
		$data  = array(
			'tipodemanifestaciones' => $this->Registros_model->getTipodemanifestaciones(),
			'id_datosincidente'=>$id
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/registros/manifestacion/edit",$data);
		$this->load->view("layouts/footer");
	}
	public function store(){
		// Agresion  start //
		$motivodelasgresion = $this->input->post("motivodelasgresion");
		$tipoDeInvestigacion = $this->input->post("tipoDeInvestigacion");
		$sexoAgresor = $this->input->post("sexoAgresor");
		$tipoagresor = $this->input->post("tipoagresor");
		$nivel1 = $this->input->post("nivel1");
		$nivel2 = $this->input->post("nivel2");
		$nombreagresor = $this->input->post("nombreagresor");
		// Agresion  end //
		$this->form_validation->set_rules("sexoAgresor","tipodemanifestacion","required");
		if ($this->form_validation->run()) {
			$data  = array(
				'id_datosincidente' => $datosincidente,
				'id_tipodemanifestacion' => $tipodemanifestacion,
				'observaciones' => $observacionesmanifestacion,
				'id_estatus' => 1,
			);
			if ($this->Manifestacion_model->save($data)) {
				redirect(base_url()."app/registros/info/$datosincidente");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."app/manifestacion/add/$datosincidente");
			}
		}else {
			$this->add($datosincidente);
		}
	}
	public function update(){
		$idperiodista = $this->input->post("idperiodista");
		$idtrabajo = $this->input->post("idtrabajo");
		$nombres = $this->input->post("nombres");
		$apellidoPaterno = $this->input->post("apellidoPaterno");
		$apellidoMaterno = $this->input->post("apellidoMaterno");
		$edad = $this->input->post("edad");
		$estado = $this->input->post("estado");
		$municipio = $this->input->post("municipio");
		$localidad = $this->input->post("localidad");
		$tiposdecasa = $this->input->post("tiposdecasa");
		$viveCon = $this->input->post("viveCon");
		$dependientesEconomicos = $this->input->post("dependientesEconomicos");
		$estadoCivil = $this->input->post("estadoCivil");
		$comunidadindigena = $this->input->post("comunidadindigena");
		$comunidadLGBTTTI = $this->input->post("comunidadLGBTTTI");
		$telefonoparticular = $this->input->post("telefonoparticular");
		$telefonocelular = $this->input->post("telefonocelular");
		$email = $this->input->post("email");
		$telegram = $this->input->post("telegram");
		$skype = $this->input->post("skype");
		$facebook = $this->input->post("facebook");
		$twitter = $this->input->post("twitter");
		$instagram = $this->input->post("instagram");
		$youtube = $this->input->post("youtube");
		$snapchat = $this->input->post("snapchat");
		$otraredsocial = $this->input->post("otraredsocial");
		$nombreDelMedio = $this->input->post("nombreDelMedio");
		$tipodemedio = $this->input->post("tipodemedio");
		$paracuantosmedioslabora = $this->input->post("paracuantosmedioslabora");
		$tipodecontrato = $this->input->post("tipodecontrato");
		$direcciondelmedio = $this->input->post("direcciondelmedio");
		$cargoenelmedio = $this->input->post("cargoenelmedio");
		$fuente = $this->input->post("fuente");
		$Link1 = $this->input->post("Link1");
		$Link2 = $this->input->post("Link2");
		$Link3 = $this->input->post("Link3");
		$Link4 = $this->input->post("Link4");
		$Link5 = $this->input->post("Link5");
		$AnosDeEjercerElPeriodismo = $this->input->post("AnosDeEjercerElPeriodismo");
		$SexoDelJefeInmediato = $this->input->post("sexodeljefeinmediato");
		$this->form_validation->set_rules("nombres","Nombres","required");
		$this->form_validation->set_rules("apellidoPaterno","Apellido Paterno","required");
		$this->form_validation->set_rules("edad","Edad","required");
		$this->form_validation->set_rules("estado","Estado","required");
		$this->form_validation->set_rules("tipodemedio","Tipo de medio","required");
		$this->form_validation->set_rules("cargoenelmedio","Cargo en el medio","required");
		$this->form_validation->set_rules("fuente","Fuente","required");
		if ($this->form_validation->run()) {
			$datosperiodistas  = array(
				'nombres' => $nombres,
				'apellidoPaterno' => $apellidoPaterno,
				'apellidoMaterno' => $apellidoMaterno,
				'id_Edad' => $edad,
				'id_estados' => $estado,
				'Municipio' => $municipio,
				'Localidad' => $localidad,
				'id_tipodecasa' => $tiposdecasa,
				'viveCon' => $viveCon,
				'dependientesEconomicos' => $dependientesEconomicos,
				'id_estadoCivil' => $estadoCivil,
				'comunidadIndigena' => $comunidadindigena,
				'comunidadLGBTTTI' => $comunidadLGBTTTI,
				'telefonoparticular' => $telefonoparticular,
				'telefonocelular' => $telefonocelular,
				'email' => $email,
				'telegram' => $telegram,
				'skype' => $skype,
				'facebook' => $facebook,
				'twitter' => $twitter,
				'instagram' => $instagram,
				'youtube' => $youtube,
				'snapchat' => $snapchat,
				'otraredsocial' => $otraredsocial,
				'fechaultimamodificacion' =>date("Y")."-".date("m")."-".date("d"),
				'id_uduarioModificacion	' => $this->session->userdata("id")
			);
			$datoslaborales = array(
				'nombreDelMedio' => $nombreDelMedio,
				'id_tipodemedio' => $tipodemedio,
				'paracuantosmedioslabora' => $paracuantosmedioslabora,
				'id_tipodecontrato' => $tipodecontrato,
				'DireccionDelMedio' => $direcciondelmedio,
				'id_cargoenelmedio' => $cargoenelmedio,
				'id_fuente' => $fuente,
				'Links1' => $Link1,
				'Links2' => $Link2,
				'Links3' => $Link3,
				'Links4' => $Link4,
				'Links5' => $Link5,
				'AnosDeEjercerElPeriodismo' => $AnosDeEjercerElPeriodismo,
				'id_SexoDelJefeInmediato' => $SexoDelJefeInmediato,
			);
			if ($this->Periodistas_model->update($idperiodista,$datosperiodistas,"datosperiodistas")) {
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."app/periodistas/edit".$idperiodista);
			}
			if($this->Periodistas_model->update($idtrabajo,$datoslaborales,"datoslaborales")){
					redirect(base_url()."app/periodistas/info/$idperiodista");
			}	else{
					$this->session->set_flashdata("error","No se pudo guardar la informacion");
					redirect(base_url()."app/periodistas/edit/".$idperiodista);
			}
		}else {
			$this->edit($idperiodista);
		}
	}
	public function delete($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Manifestacion_model->delete($id,$data);
			redirect(base_url()."app/registros");
	}
}
