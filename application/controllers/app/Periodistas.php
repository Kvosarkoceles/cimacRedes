<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periodistas extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Periodistas_model");
		$this->load->model("Registros_model");
	}

	public function index(){
		$data  = array(
			'periodistas' => $this->Periodistas_model->getPeriodistas()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/list",$data);
		$this->load->view('layouts/footer');
	}

	public function add(){
		$data  = array(
			'edades' => $this->Periodistas_model->getEdades(),
			'estados' => $this->Periodistas_model->getEstados(),
			'tiposdecasa' => $this->Periodistas_model->getTiposDeCasa(),
			'estadocivil' => $this->Periodistas_model->getEstadoCivil(),
			'comunidadindigena' => $this->Periodistas_model->getComunidaIndigena(),
			'comunidadlgbttti' => $this->Periodistas_model->getComunidaLGBTTTI(),
			'tipodemedio' => $this->Periodistas_model->getTipoDeMedio(),
			'tipodecontrato' => $this->Periodistas_model->getTipoDeContrato(),
			'cargoenelmedio' => $this->Periodistas_model->getCargoEnElMedio(),
			'fuente' => $this->Periodistas_model->getFuente(),
			'sexo' => $this->Periodistas_model->getSexo(),


		);
		/*$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/add",$data);
		$this->load->view("layouts/footer");	*/
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/periodistas/add",$data);
		$this->load->view("layouts/footer");
	}

	public function info($id){
		$data  = array(
			'periodista' => $this->Periodistas_model->getPeriodista($id),
			'trabajo' => $this->Periodistas_model->getTrabajo($id),
			'registros' => $this->Periodistas_model->getRegistro($id),
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
			'edades' => $this->Periodistas_model->getEdades(),
			'estados' => $this->Periodistas_model->getEstados(),
			'tiposdecasa' => $this->Periodistas_model->getTiposDeCasa(),
			'estadocivil' => $this->Periodistas_model->getEstadoCivil(),
			'comunidadindigena' => $this->Periodistas_model->getComunidaIndigena(),
			'comunidadlgbttti' => $this->Periodistas_model->getComunidaLGBTTTI(),
			'tipodemedio' => $this->Periodistas_model->getTipoDeMedio(),
			'tipodecontrato' => $this->Periodistas_model->getTipoDeContrato(),
			'cargoenelmedio' => $this->Periodistas_model->getCargoEnElMedio(),
			'fuente' => $this->Periodistas_model->getFuente(),
			'sexo' => $this->Periodistas_model->getSexo(),
			'periodista' => $this->Periodistas_model->getPeriodista($id),
			'trabajo' => $this->Periodistas_model->getTrabajo($id),
		//	'trabajo' => $this->Periodistas_model->getTrabajo2($id),

		);
		/*$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/add",$data);
		$this->load->view("layouts/footer");	*/
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/periodistas/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function store(){

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
		$id_SexoDelJefeInmediato = $this->input->post("sexodeljefeinmediato");
		$cuantasreporterasyreporteroshayenelmedio = $this->input->post("cuantasreporterasyreporteroshayenelmedio");
		$cuantasreporterashayenelmedio = $this->input->post("cuantasreporterashayenelmedio");
		$cuantasreporterasyreporteroshayenlafuente = $this->input->post("cuantasreporterasyreporteroshayenlafuente");
		$cuantasreporterashayenlafuente	 = $this->input->post("cuantasreporterashayenlafuente");


		$datosperiodistas  = array(
			'fechaRegistro' =>date("Y")."-".date("m")."-".date("d"),
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
			'id_usuario' => $this->session->userdata("id"),
			'estatus' => "1",
		);
		$idultimo=$this->Periodistas_model->save("datosperiodistas",$datosperiodistas);
		$datoslaborales = array(
			'Id_datospersonales' => $idultimo,
			'id_tipodemedio' => $tipodemedio,
			'paracuantosmedioslabora ' => $paracuantosmedioslabora,
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
			'id_SexoDelJefeInmediato' => $id_SexoDelJefeInmediato,
			'cuantasreporterasyreporteroshayenelmedio' => $cuantasreporterasyreporteroshayenelmedio,
			'cuantasreporterashayenelmedio' => $cuantasreporterashayenelmedio,
			'cuantasreporterasyreporteroshayenlafuente' => $cuantasreporterasyreporteroshayenlafuente,
			'cuantasreporterashayenlafuente' => $cuantasreporterashayenlafuente,
		);
		//if ($this->Periodistas_model->save($data)) {

		if($idultimo){
			if ($this->Periodistas_model->save("datoslaborales",$datoslaborales)) {
				redirect(base_url()."app/registros/add/".$idultimo);
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."app/periodistas/add");
			}


		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."app/periodistas/add");
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
		$cuantasreporterasyreporteroshayenelmedio = $this->input->post("cuantasreporterasyreporteroshayenelmedio");
		$cuantasreporterashayenelmedio = $this->input->post("cuantasreporterashayenelmedio");
		$cuantasreporterasyreporteroshayenlafuente = $this->input->post("cuantasreporterasyreporteroshayenlafuente");
		$cuantasreporterashayenlafuente	 = $this->input->post("cuantasreporterashayenlafuente");


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
			'id_usuario' => $this->session->userdata("id"),
		);
		$datoslaborales = array(
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
			'cuantasreporterasyreporteroshayenelmedio' => $cuantasreporterasyreporteroshayenelmedio,
			'cuantasreporterashayenelmedio' => $cuantasreporterashayenelmedio,
			'cuantasreporterasyreporteroshayenlafuente' => $cuantasreporterasyreporteroshayenlafuente,
			'cuantasreporterashayenlafuente' => $cuantasreporterashayenlafuente,

		);
		if ($this->Periodistas_model->update($idperiodista,$datosperiodistas,"datosperiodistas")) {


		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."app/periodistas/edit".$idperiodista);
		}

		if($this->Periodistas_model->update($idtrabajo,$datoslaborales,"datoslaborales")){
				redirect(base_url()."app/periodistas");
		}	else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."app/periodistas/edit".$idperiodista);
			}

	}
	public function getIncidentes($id){
	$this->db->select("u.*");
	$this->db->from("datosincidente u");

//	$this->db->join("roles r","u.id_rol = r.id");
	$this->db->where("u.id_datospersonales",$id);
//	$this->db->where("u.estado","1");
	$resultado = $this->db->get();
	return $resultado->result();

}
	public function delete($id){
		$data  = array(
			'estatus' => "0",
		);
		$this->Periodistas_model->delete($id,$data);
			redirect(base_url()."app/periodistas");
	}
}
