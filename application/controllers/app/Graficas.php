<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graficas extends CI_Controller {
	public function __construct(){

		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
	 	$this->load->library('form_validation');
		$this->load->model("Registros_model");
		$this->load->model("Periodistas_model");
		$this->load->model("Informe_model");
	}
	public function index(){
		$data  = array(
		'años' => $this->Registros_model->getYears(),
		'informe' => $this->Informe_model->getMotivoAgresion('2019'),
	//	'informe' => $this->Informe_model->getCantidadEstados('2019'),
			//'permisos' => $this->permisos,
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("informes/basic",$data);

		$this->load->view("layouts/footer");
		//	$this->load->view("informes/index");

	}
	public function getTotal(){
		$year = $this->input->post("year");
		$resultados = $this->Informe_model->getCantidadTotal($year);
		echo json_encode($resultados);
	}
	public function getData(){
		$year = $this->input->post("year");
		$resultados = $this->Registros_model->getCantidad($year);
		echo json_encode($resultados);
	}
	public function getDataEstados(){
		$year = $this->input->post("year");
		$resultados = $this->Informe_model->getCantidadEstados($year);
		echo json_encode($resultados);
	}
	public function getDataEdades(){
		$year = $this->input->post("year");
		$resultados = $this->Informe_model->getCantidadEdades($year);
		echo json_encode($resultados);
	}
	public function getDataTipodeMedio(){
		$year = $this->input->post("year");
		$resultados = $this->Informe_model->getCantidadTipodeMedio($year);
		echo json_encode($resultados);
	}
	public function getDataCargoMedio(){
		$year = $this->input->post("year");
		$resultados = $this->Informe_model->getCargoMedio($year);
		echo json_encode($resultados);
	}
	public function getDataFuente(){
		$year = $this->input->post("year");
		$resultados = $this->Informe_model->getFuente($year);
		echo json_encode($resultados);
	}
	public function getDataMotivoAgresion(){
		$year = $this->input->post("year");
		$resultados = $this->Informe_model->getMotivoAgresion($year);
		echo json_encode($resultados);
	}
}
