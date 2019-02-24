<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Registros_model");
		$this->load->model("Agresor_model");
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
			'edades' => $this->Periodistas_model->getEdades(),
			'estados' => $this->Periodistas_model->getEstados(),
			'sinos' => $this->Registros_model->getSiNo(),
			'niveles' => $this->Registros_model->getNiveles(),
			'perfiles' => $this->Registros_model->getPerfiles(),
			'tipoDeInvestigacion' => $this->Registros_model->getTipoDeInvestigacion(),
			'motivodelasgresion' => $this->Registros_model->getMotivodelasgresion(),
			'sexo' => $this->Registros_model->getSexo(),
			'agresor' => $this->Registros_model->getTipoAgresor(),
			'nivel1_Agresor' => $this->Registros_model->getNivel1agresor(),
			'nivel2_Agresor' => $this->Registros_model->getNivel2agresor(),
			'Judicializacion' => $this->Registros_model->getJudicializacionr($id),
			'tipodemanifestaciones' => $this->Registros_model->getTipodemanifestaciones(),

		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
   	$this->load->view("app/registros/add",$data);
		$this->load->view("layouts/footer");
	}

	public function info($id){
		$data  = array(
			'registros' => $this->Registros_model->getRegistro($id),
			'manifestaciones' => $this->Registros_model->getManifestaciones($id),
			'agresor' => $this->Agresor_model->getAgresores($id),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/registros/info",$data);
		$this->load->view('layouts/footer');
	}

	public function edit($id){
		$data  = array(
			'registros' => $this->Registros_model->getRegistro($id),
			'manifestaciones' => $this->Registros_model->getManifestaciones($id),
			'agresor' => $this->Agresor_model->getAgresores($id),
			'estados' => $this->Periodistas_model->getEstados(),
			'motivodelasgresion' => $this->Registros_model->getMotivodelasgresion(),
			'tipoDeInvestigacion' => $this->Registros_model->getTipoDeInvestigacion(),
			'sinos' => $this->Registros_model->getSiNo(),
			'tipodemanifestaciones' => $this->Registros_model->getTipodemanifestaciones(),
			'perfiles' => $this->Registros_model->getPerfiles(),
			'Judicializacion' => $this->Registros_model->getJudicializacionr($id),
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
		//variables fuera del formulario  start //
		$id_datospersonales = $this->input->post("idperiodista");
		//variables fuera del formulario  end //

		//ubiucacion de la agrecions start//
		$fechaIncidente = $this->input->post("fechaIncidente");
		$id_estados = $this->input->post("estado");
		$municipio = trim(strtoupper($this->input->post("municipio")));
		$localidad = trim(strtoupper($this->input->post("localidad")));
		$latitud = $this->input->post("latitud");
		$longitud = $this->input->post("longitud");
		$relatoriaDelHecho = trim($this->input->post("relatoriaDelHecho"));
		//ubiucacion de la agrecions end//

		//tipo de violencia start//
		$tipoDeViolenciaPsicologica = $this->input->post("tipoDeViolenciaPsicologica");
		$tipodeViolenciaFisica = $this->input->post("tipodeViolenciaFisica");
		$tipoDeViolenciaPatrimonial = $this->input->post("tipoDeViolenciaPatrimonial");
		$tipodeViolenciaEconomica = $this->input->post("tipodeViolenciaEconomica");
		$tipoDeViolenciaSexual = $this->input->post("tipoDeViolenciaSexual");
		$tipoDeViolenciaCibernetica = $this->input->post("tipoDeViolenciaCibernetica");
		//tipo de violencia end//

		//modalidad de la violencia start//
		$modalidadViolenciaFamiliar = $this->input->post("modalidadViolenciaFamiliar");
		$modalidadViolenciaLaboral = $this->input->post("modalidadViolenciaLaboral");
		$modalidadViolenciaEnLaComunidad = $this->input->post("modalidadViolenciaEnLaComunidad");
		$modalidadViolenciaInstitucional = $this->input->post("modalidadViolenciaInstitucional");
		$modalidadViolenciaFeminicida = $this->input->post("modalidadViolenciaFeminicida");
		$modalidadDeViolenciaCibernetica = $this->input->post("modalidadDeViolenciaCibernetica");
		//modalidad de la violencia end//

		//atencion Recibida por CIMAC start//
		$cimacHaceAcompanamientoAnteElMecanismo = $this->input->post("cimacHaceAcompanamientoAnteElMecanismo");
		$queOtraOrganizacionLasAcompana = $this->input->post("queOtraOrganizacionLasAcompana");
		$atencionMedicaRecibida = $this->input->post("atencionMedicaRecibida");
		$atencionPsicologicaRecibida = $this->input->post("atencionPsicologicaRecibida");
		$atencionJuridicaRecibida = $this->input->post("atencionJuridicaRecibida");
		$ningunaAtencionRecibida = $this->input->post("ningunaAtencionRecibida");
		//atencion Recibida por CIMAC end//

		//Analisis start/
		$analisisDeContexto = $this->input->post("analisisDeContexto");
		$analisisDeRiesgo = $this->input->post("analisisDeRiesgo");
		$observaciones = $this->input->post("observaciones");
		//Analisis end//

		//Consecuencias start//
		$consecuenciaFueDespedida = $this->input->post("consecuenciaFueDespedida");
		$consecuenciasBajoPerfil = $this->input->post("consecuenciasBajoPerfil");
		$consecuenciasDesplazamiento = $this->input->post("consecuenciasDesplazamiento");
		$consecuenciasJudicializacion = $this->input->post("Judicializacion");
		// Consecuencias end //

		// Acciones de seguimiento start //
		$beneficiariaDelMecanismoDeProtecion = $this->input->post("beneficiariaDelMecanismoDeProtecion");
		$carpetaDeInvestigacionEnAlgunaProcuraduria = $this->input->post("carpetaDeInvestigacionEnAlgunaProcuraduria");
		$quejaAnteComisionDeDerechosHumanos = $this->input->post("quejaAnteComisionDeDerechosHumanos");
		$renavi = $this->input->post("renavi");
		$norenavi = $this->input->post("norenavi");
		$estasDeAcuedoConElMecanismoDeProteccion = $this->input->post("estasDeAcuedoConElMecanismoDeProteccion");
		$esasMedidasTePermitenSeguirHaciendoTuTrabajo = $this->input->post("esasMedidasTePermitenSeguirHaciendoTuTrabajo");
		$porQue = $this->input->post("porQue");
		$tenidoResultadosLaCarpetaDeInvestigacion = $this->input->post("tenidoResultadosLaCarpetaDeInvestigacion");
		$cuales = $this->input->post("cuales");
		$queAHechoLaComisionDeDerechosHumanos = $this->input->post("queAHechoLaComisionDeDerechosHumanos");
		// Acciones de seguimiento end //
		// Agresion  start //
		$motivodelasgresion = $this->input->post("motivodelasgresion");
		$tipoDeInvestigacion = $this->input->post("tipoDeInvestigacion");
		$sexoAgresor = $this->input->post("sexoAgresor");
		$tipoagresor = $this->input->post("tipoagresor");
		$nivel1 = $this->input->post("nivel1");
		$nivel2 = $this->input->post("nivel2");
		$nombreagresor = $this->input->post("nombreagresor");
		// Agresion  end //
		// Manifestacion de la violencia  start //
			$tipodemanifestacion = $this->input->post("tipodemanifestacion");
			$observacionesmanifestacion = $this->input->post("observacionesmanifestacion");

		// Manifestacion de la violencia  end //
		$config = array(
			array(
				'field' => 'fechaIncidente',
        'label' => 'fecha',
				'rules' => 'required'
			),
			array(
				'field' => 'estado',
        'label' => 'estado',
        'rules' => 'required'
      ),
      array(
      	'field' => 'municipio',
        'label' => 'municipio',
        'rules' => 'min_length[3]|max_length[30]'
      ),
			array(
      	'field' => 'localidad',
        'label' => 'localidad',
        'rules' => 'min_length[3]|max_length[50]'
      ),
			array(
      	'field' => 'latitud',
        'label' => 'latitud',
        'rules' => 'numeric|min_length[3]|max_length[50]'
      ),
			array(
      	'field' => 'longitud',
        'label' => 'longitud',
        'rules' => 'numeric|min_length[3]|max_length[50]'
      ),
			array(
      	'field' => 'tipodemanifestacion',
        'label' => 'tipo de manifestacion',
        'rules' => 'required'
      ),
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$data  = array(
				//variables fuera del formulario  start //
				'id_datospersonales' => $id_datospersonales,
				'id_usuario' => $this->session->userdata("id"),
				'estatus' => "1",
				'fechaRegistro' =>date("Y")."-".date("m")."-".date("d"),
				//variables fuera del formulario  end //

				//ubiucacion de la agrecions star//
				'fechaIncidente' => $fechaIncidente,
				'id_estados' =>$id_estados,
				'municipio' => $municipio,
				'localidad' => $localidad,
				'latitud' => $latitud,
				'longitud' => $longitud,
				'relatoriaDelHecho' => $relatoriaDelHecho,
				//ubiucacion de la agrecions end//

				//tipo de violencia star//
				'tipoDeViolenciaPsicologica' => $tipoDeViolenciaPsicologica,
				'tipodeViolenciaFisica' => $tipodeViolenciaFisica,
				'tipoDeViolenciaPatrimonial' => $tipoDeViolenciaPatrimonial,
				'tipodeViolenciaEconomica' => $tipodeViolenciaEconomica,
				'tipoDeViolenciaSexual' => $tipoDeViolenciaSexual,
				'tipoDeViolenciaCibernetica' => $tipoDeViolenciaCibernetica,
				//tipo de violencia end//

				//modalidad de la violencia star//
				'modalidadViolenciaFamiliar' => $modalidadViolenciaFamiliar,
				'modalidadViolenciaLaboral' => $modalidadViolenciaLaboral,
				'modalidadViolenciaEnLaComunidad' => $modalidadViolenciaEnLaComunidad,
				'modalidadViolenciaInstitucional' => $modalidadViolenciaInstitucional,
				'modalidadViolenciaFeminicida' => $modalidadViolenciaFeminicida,
				'modalidadDeViolenciaCibernetica' => $modalidadDeViolenciaCibernetica,
				//modalidad de la violencia end//

				//atencion Recibida por CIMAC stat//
				'cimacHaceAcompanamientoAnteElMecanismo' => $cimacHaceAcompanamientoAnteElMecanismo,
				'queOtraOrganizacionLasAcompana' => $queOtraOrganizacionLasAcompana,
				'atencionMedicaRecibida' => $atencionMedicaRecibida,
				'atencionPsicologicaRecibida' => $atencionPsicologicaRecibida,
				'atencionJuridicaRecibida' => $atencionJuridicaRecibida,
				'ningunaAtencionRecibida' => $ningunaAtencionRecibida,
				//atencion Recibida por CIMAC end//
				//Analisis start//
				'analisisDeContexto' => $analisisDeContexto,
				'analisisDeRiesgo' => $analisisDeRiesgo,
				'observaciones' => $observaciones,
				//Analisis end//
				//Consecuencias start//
				'consecuenciaFueDespedida' => $consecuenciaFueDespedida,
				'consecuenciasBajoPerfil' => $consecuenciasBajoPerfil,
				'id_consecuenciajudicializacion' => $consecuenciasJudicializacion,
				'consecuenciasDesplazamiento' => $consecuenciasDesplazamiento,
				//Consecuencias end//

				// Acciones de seguimiento start //
				'beneficiariaDelMecanismoDeProtecion' => $beneficiariaDelMecanismoDeProtecion,
				'carpetaDeInvestigacionEnAlgunaProcuraduria' => $carpetaDeInvestigacionEnAlgunaProcuraduria,
				'quejaAnteComisionDeDerechosHumanos' => $quejaAnteComisionDeDerechosHumanos,
				'id_renvi' => $renavi,
				'numeroregistrorenavi' => $norenavi,
				'estasDeAcuedoConElMecanismoDeProteccion' => $estasDeAcuedoConElMecanismoDeProteccion,
				'esasMedidasTePermitenSeguirHaciendoTuTrabajo' => $esasMedidasTePermitenSeguirHaciendoTuTrabajo,
				'porQue' => $porQue,
				'tenidoResultadosLaCarpetaDeInvestigacion' => $tenidoResultadosLaCarpetaDeInvestigacion,
				'cuales' => $cuales,
				'queAHechoLaComisionDeDerechosHumanos' => $queAHechoLaComisionDeDerechosHumanos,
				// Acciones de seguimiento end //

					// Agresion  start //
				'id_motivodelasgresion' => $motivodelasgresion,
				'id_tipoDeInvestigacion' => $tipoDeInvestigacion,
					// Agresion  end //
			);
			$datosincidente=$this->Registros_model->save('datosincidente',$data);
			$datosagresor = array(
				'id_sexo' => $sexoAgresor,
				'id_datosincidente' => $datosincidente,
				'id_tipoAgresor' => $tipoagresor,
				'id_nivel1' => $nivel1,
				'id_nivel2' => $nivel2,
				'nombre' => $nombreagresor,

			 );
			$datosmanifestacion = array(
				'id_datosincidente' => $datosincidente,
				'id_tipodemanifestacion' => $tipodemanifestacion,
				'observaciones' => $observacionesmanifestacion,
				'id_estatus' => 1
			);
			$agresorinsertado=$this->Registros_model->save('datosagresor',$datosagresor);
			$manifestacion=$this->Registros_model->save('datosmanifestacion',$datosmanifestacion);
			if ($datosincidente>0  && $agresorinsertado>0 && $manifestacion>0 ) {
				redirect(base_url()."app/registros/info/".$datosincidente);
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/usuarios/add");
			}
		}else {
			$this-> add($id_datospersonales);
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
