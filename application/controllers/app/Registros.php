<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Registros_model");
		$this->load->model("Periodistas_model");
		$this->load->model("File_model");
	}

	public function index(){
		$data  = array(
				'registros' => $this->Registros_model->getRegistros(),
				//'trabajos' => $this->Periodistas_model->getTrabajos(),
			);
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");


			//$this->load->view('datatable');
			$this->load->view("app/registros/list",$data);
			$this->load->view('layouts/footer');
	}

	public function add($id){
		$data  = array(
			'periodista' => $this->Periodistas_model->getPeriodista($id),
		//	'periodista' => $this->Periodistas_model->getPeriodista($id),
			'edades' => $this->Periodistas_model->getEdades(),
			'estados' => $this->Periodistas_model->getEstados(),
			'sinos' => $this->Registros_model->getSiNo(),
			'niveles' => $this->Registros_model->getNiveles(),
			'perfiles' => $this->Registros_model->getPerfiles(),
			'tipoDeInvestigacion' => $this->Registros_model->getTipoDeInvestigacion(),
			'motivodelasgresion' => $this->Registros_model->getMotivodelasgresion(),
			'sexo' => $this->Registros_model->getSexo(),
			'agresor' => $this->Registros_model->getTipoAgresor(),
			'nivelAgresor' => $this->Registros_model->getNivelagresor($id),
			'Judicializacion' => $this->Registros_model->getJudicializacionr($id),

		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
   	$this->load->view("app/registros/add",$data);
		$this->load->view("layouts/footer");
	}

	public function info($id){
		$data  = array(
			//'periodista' => $this->Periodistas_model->getPeriodista($id),
			//'trabajo' => $this->Periodistas_model->getTrabajo($id),
			'registros' => $this->Registros_model->getRegistro($id),
		//	'roles' => $this->Usuarios_model->getRoles(),
		//	'menus' => $this->Permisos_model->getMenus(),
		//	'permiso' => $this->Permisos_model->getPermiso($id)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/registros/info",$data);
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
		$this->load->view("app/registros/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$id_datospersonales = $this->input->post("idperiodista");
		$fechaIncidente = $this->input->post("fechaIncidente");
		$id_estados = $this->input->post("estado");
		$municipio = $this->input->post("municipio");
		$localidad = $this->input->post("localidad");
		$latitud = $this->input->post("latitud");
		$longitud = $this->input->post("longitud");
		$tipoDeViolenciaPsicologica = $this->input->post("tipoDeViolenciaPsicologica");
		$tipodeViolenciaFisica = $this->input->post("tipodeViolenciaFisica");
		$tipoDeViolenciaPatrimonial = $this->input->post("tipoDeViolenciaPatrimonial");
		$tipodeViolenciaEconomica = $this->input->post("tipodeViolenciaEconomica");
		$tipoDeViolenciaSexual = $this->input->post("tipoDeViolenciaSexual");
		$tipoDeViolenciaCibernetica = $this->input->post("tipoDeViolenciaCibernetica");
		$modalidadViolenciaFamiliar = $this->input->post("modalidadViolenciaFamiliar");
		$modalidadViolenciaLaboral = $this->input->post("modalidadViolenciaLaboral");
		$modalidadViolenciaEnLaComunidad = $this->input->post("modalidadViolenciaEnLaComunidad");
		$modalidadViolenciaInstitucional = $this->input->post("modalidadViolenciaInstitucional");
		$modalidadViolenciaFeminicida = $this->input->post("modalidadViolenciaFeminicida");
		$modalidadDeViolenciaCibernetica = $this->input->post("modalidadDeViolenciaCibernetica");
		$manifestacionesDeTipoAmenazas = $this->input->post("manifestacionesDeTipoAmenazas");
		$manifestacionesDeTipoFeminicida = $this->input->post("manifestacionesDeTipoFeminicida");
		$manifestacionesDeTipoDesaparcionesForzadas = $this->input->post("manifestacionesDeTipoDesaparcionesForzadas");
		$manifestacionesDeTipoDetenciones = $this->input->post("manifestacionesDeTipoDetenciones");
		$manifestacionesDeTipoDetencionesArbitrariasExtrajudicia = $this->input->post("manifestacionesDeTipoDetencionesArbitrariasExtrajudicia");
		$manifestacionesDeTipoDifamacionCalumniaInjuria = $this->input->post("manifestacionesDeTipoDifamacionCalumniaInjuria");
		$consecuenciaFueDespedida = $this->input->post("consecuenciaFueDespedida");
		$consecuenciasBajoPerfil = $this->input->post("consecuenciasBajoPerfil");
		$consecuenciasCambioDeDomicilio = $this->input->post("consecuenciasCambioDeDomicilio");
		$consecuenciasDesplazamiento = $this->input->post("consecuenciasDesplazamiento");
		$atencionMedicaRecibida = $this->input->post("atencionMedicaRecibida");
		$atencionPsicologicaRecibida = $this->input->post("atencionPsicologicaRecibida");
		$atencionJuridicaRecibida = $this->input->post("atencionJuridicaRecibida");
		$ningunaAtencionRecibida = $this->input->post("ningunaAtencionRecibida");
		$agresionAnterior = $this->input->post("agresionAnterior");
		$beneficiariaDelMecanismoDeProtecion = $this->input->post("beneficiariaDelMecanismoDeProtecion");
		$carpetaDeInvestigacionEnAlgunaProcuraduria = $this->input->post("carpetaDeInvestigacionEnAlgunaProcuraduria");
		$quejaAnteComisionDeDerechosHumanos = $this->input->post("quejaAnteComisionDeDerechosHumanos");
		$estasDeAcuedoConElMecanismoDeProteccion = $this->input->post("estasDeAcuedoConElMecanismoDeProteccion");
		$esasMedidasTePermitenSeguirHaciendoTuTrabajo = $this->input->post("esasMedidasTePermitenSeguirHaciendoTuTrabajo");
		$porQue = $this->input->post("porQue");
		$tenidoResultadosLaCarpetaDeInvestigacion = $this->input->post("tenidoResultadosLaCarpetaDeInvestigacion");
		$cuales = $this->input->post("cuales");
		$queAHechoLaComisionDeDerechosHumanos = $this->input->post("queAHechoLaComisionDeDerechosHumanos");
		$relatoriaDelHecho = $this->input->post("relatoriaDelHecho");
		//$this->Periodistas_model->update($idperiodista,$datosperiodistas,"datosperiodistas")
		//$imagen1 = $this->file->UploadImage('./public/img/','No se puede subir la imagen1...');

		$analisisDeContexto = $this->input->post("analisisDeContexto");
		$analisisDeRiesgo = $this->input->post("analisisDeRiesgo");
		$observaciones = $this->input->post("observaciones");
		$cimacHaceAcompanamientoAnteElMecanismo = $this->input->post("cimacHaceAcompanamientoAnteElMecanismo");
		$queOtraOrganizacionLasAcompana = $this->input->post("queOtraOrganizacionLasAcompana");
		$datoregistro  = array(
			'id_usuario' => $this->session->userdata("id"),
			'id_datospersonales' => $id_datospersonales,
			'fechaRegistro' =>date("Y")."-".date("m")."-".date("d"),
			'fechaIncidente' => $fechaIncidente,
			'id_estados' => $id_estados,
			'municipio' => $municipio,
			'localidad' => $localidad,
			'latitud' => $latitud,
			'longitud' => $longitud,
			'tipoDeViolenciaPsicologica' => $tipoDeViolenciaPsicologica,
			'tipodeViolenciaFisica' => $tipodeViolenciaFisica,
			'tipoDeViolenciaPatrimonial' => $tipoDeViolenciaPatrimonial,
			'tipodeViolenciaEconomica' => $tipodeViolenciaEconomica,
			'tipoDeViolenciaSexual' => $tipoDeViolenciaSexual,
			'tipoDeViolenciaCibernetica' => $tipoDeViolenciaCibernetica,
			'modalidadViolenciaFamiliar' => $modalidadViolenciaFamiliar,
			'modalidadViolenciaLaboral' => $modalidadViolenciaLaboral,
			'modalidadViolenciaEnLaComunidad' => $modalidadViolenciaEnLaComunidad,
			'modalidadViolenciaInstitucional' => $modalidadViolenciaInstitucional,
			'modalidadViolenciaFeminicida' => $modalidadViolenciaFeminicida,
			'modalidadDeViolenciaCibernetica' => $modalidadDeViolenciaCibernetica,
			'manifestacionesDeTipoAmenazas' => $manifestacionesDeTipoAmenazas,
			'manifestacionesDeTipoFeminicida' => $manifestacionesDeTipoFeminicida,
			'manifestacionesDeTipoDesaparcionesForzadas' => $manifestacionesDeTipoDesaparcionesForzadas,
			'manifestacionesDeTipoDetenciones' => $manifestacionesDeTipoDetenciones,
			'manifestacionesDeTipoDetencionesArbitrariasExtrajudicia' => $manifestacionesDeTipoDetencionesArbitrariasExtrajudicia,
			'manifestacionesDeTipoDifamacionCalumniaInjuria' => $manifestacionesDeTipoDifamacionCalumniaInjuria,
			'consecuenciaFueDespedida' => $consecuenciaFueDespedida,
			'consecuenciasBajoPerfil' => $consecuenciasBajoPerfil,
			'consecuenciasCambioDeDomicilio' => $consecuenciasCambioDeDomicilio,
			'consecuenciasDesplazamiento' => $consecuenciasDesplazamiento,
			'atencionMedicaRecibida' => $atencionMedicaRecibida,
			'atencionPsicologicaRecibida' => $atencionPsicologicaRecibida,
			'atencionJuridicaRecibida' => $atencionJuridicaRecibida,
			'ningunaAtencionRecibida' => $ningunaAtencionRecibida,
			'agresionAnterior' => $agresionAnterior,
			'beneficiariaDelMecanismoDeProtecion' => $beneficiariaDelMecanismoDeProtecion,
			'carpetaDeInvestigacionEnAlgunaProcuraduria' => $carpetaDeInvestigacionEnAlgunaProcuraduria,
			'quejaAnteComisionDeDerechosHumanos' => $quejaAnteComisionDeDerechosHumanos,
			'estasDeAcuedoConElMecanismoDeProteccion' => $estasDeAcuedoConElMecanismoDeProteccion,
			'esasMedidasTePermitenSeguirHaciendoTuTrabajo' => $esasMedidasTePermitenSeguirHaciendoTuTrabajo,
			'porQue' => $porQue,
			'tenidoResultadosLaCarpetaDeInvestigacion' => $tenidoResultadosLaCarpetaDeInvestigacion,
			'cuales' => $cuales,
			'queAHechoLaComisionDeDerechosHumanos' => $queAHechoLaComisionDeDerechosHumanos,
			'relatoriaDelHecho' => $relatoriaDelHecho,
			'analisisDeContexto' => $analisisDeContexto,
			'analisisDeRiesgo' => $analisisDeRiesgo,
			'observaciones' => $observaciones,
			'cimacHaceAcompanamientoAnteElMecanismo' => $cimacHaceAcompanamientoAnteElMecanismo,
			'queOtraOrganizacionLasAcompana' => $queOtraOrganizacionLasAcompana,
			'estatus' => "1",
		);

		if ($this->Registros_model->save($datoregistro)) {
			redirect(base_url()."app/periodistas/info/".$id_datospersonales);
		}

		else {
			redirect(base_url()."app/registros/add".$id_datospersonales);
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

	public function delete($id){
		$data  = array(
			'estatus' => "0",
		);
		$this->Registros_model->delete($id,$data);
			redirect(base_url()."app/registros");
	}
}
