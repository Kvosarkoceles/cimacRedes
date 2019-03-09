<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")){
			redirect(base_url());
		}
		$this->load->model("Periodistas_model");
		$this->load->model("Archivos_model");
	}
	public function add($id){
		$data = array('periodista' => $this->Periodistas_model->getPeriodista($id));
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/archivos/add",$data);
		$this->load->view("layouts/footer");
	}
	public function subirImagen($id) {
		$mi_archivo = 'archivo_imagen';
		$config['upload_path'] = "./assets/uploads/periodista/imagenes";
		if ($this->input->post("titulo_imagen")==="") {
			$config['file_name'] = $this->input->post("id_periodista")."-imagen";
		} else {
			$config['file_name'] = $this->input->post("id_periodista")."-".$this->input->post("titulo_imagen");
		}
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = "50000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_archivo)) {
			//*** ocurrio un error
			$data['uploadError'] = $this->upload->display_errors();
			$this->load->view('layouts/header');
			$this->load->view('layouts/aside');
			$this->load->view('app/archivos/add',$data);
			$this->load->view('layouts/footer');
		}
		$file_info = $this->upload->data();
		$titulo = $this->input->post('titulo_imagen');
		$imagen = $file_info['file_name'];
		if ($titulo==="") {
			$titulo='sin_nombre';
		}
		$this->foto_redimencionar($imagen);
		//	$this->foto_vistaprevia($imagen);
		$datosImagen = array(
			'titulo' => $titulo,
			'ruta' => $imagen,
			'descripcion' => $this->input->post("descripcion_imagen"),
			'id_periodista' => $this->input->post("id_periodista"),
			'fechaRegistro' => date("Y")."-".date("m")."-".date("d"),
			'id_usuario' => $this->session->userdata("id"),
			'id_estatus' => 1,
 		);
			//	$subir = $this->Archivos_model->subir($titulo,$imagen,$id);
		if ($this->Archivos_model->subirImagenPeriodista($datosImagen)) {
				redirect(base_url()."app/periodistas/info/".$id);
		}else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."app/archivos/add/".$id);
		}
	}
	public function addArchivo($id){
		$data = array('periodista' => $this->Periodistas_model->getPeriodista($id));
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("app/archivos/addArchivo",$data);
		$this->load->view("layouts/footer");
	}
	private function foto_redimencionar($imagen) {
		$configthumbs['image_library'] = 'gd2';
	 	$configthumbs['source_image'] = './assets/uploads/periodista/imagenes/'.$imagen;
	 	$configthumbs['new_image'] = './assets/uploads/periodista/imagenes/thumbs/'.$imagen;
	 	$configthumbs['maintain_ratio'] = TRUE;
		$configthumbs['width'] = 30;
		$configthumbs['height'] =30;
		$this->load->library('image_lib', $configthumbs);
	 	if (!$this->image_lib->resize()) {
	 		echo $this->image_lib->display_errors();
	 	}
	}
	public function subirArchivo($id){
		$config['upload_path'] = './assets/uploads/periodista/archivos';
		$config['allowed_types'] = 'pdf|xlsx|docx|doc';
		$config['max_size'] = '20048';
		if ($this->input->post("titulo_documento")==="") {
			$config['file_name'] = $this->input->post("id_periodista")."-archivo";
		} else {
			$config['file_name'] = $this->input->post("id_periodista")."-".$this->input->post("titulo_documento");
		}
		$this->load->library('upload',$config);
		if (!$this->upload->do_upload("archivo_documento")) {
			//*** ocurrio un error
			$data['uploadError'] = $this->upload->display_errors();
			$this->load->view('layouts/header');
			$this->load->view('layouts/aside');
			$this->load->view('app/archivos/addArchivo',$data);
			$this->load->view('layouts/footer');
		/*	$data['errorArch'] = $this->upload->display_errors();
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vupload',$data);
			$this->load->view('layout/footer');*/
		} else {
			$file_info = $this->upload->data();
			$titulo = $this->input->post('titulo_documento');
			$archivo = $file_info['file_name'];
			if ($titulo==="") {
				$titulo='sin_nombre';
			}
			//$subir = $this->mupload->subir($titulo,$archivo);
		//	$data['estado'] = "Archivo subido.";
		//	$data['archivo'] = $archivo;
		//	$data['error'] = "";
			//$data['errorArch'] = "";


			$datosArchivo = array(
				'titulo' => $titulo,
				'ruta' => $archivo,
				'descripcion' => $this->input->post("descripcion_documento"),
				'id_periodista' => $this->input->post("id_periodista"),
				'fechaRegistro' => date("Y")."-".date("m")."-".date("d"),
				'id_usuario' => $this->session->userdata("id"),
				'id_estatus' => 1,
	 		);
				//	$subir = $this->Archivos_model->subir($titulo,$imagen,$id);
			if ($this->Archivos_model->subirArchivoPeriodista($datosArchivo)) {
					redirect(base_url()."app/periodistas/info/".$id);
			}else{
					$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."app/archivos/addArchivo/".$id);
			}
			//$this->load->view('layout/header');
			//$this->load->view('layout/menu');
			//$this->load->view('vupload', $data);
			//$this->load->view('layout/footer');
		}
	}
	public function downloads($name){
		$data = file_get_contents('./assets/uploads/periodista/archivos/'.$name);
			force_download($name,$data);


	}

	public function deleteArchivo($id){
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Archivos_model->delete($id,$data);
		header('Location:' . getenv('HTTP_REFERER'));
	}
	public function deleteImagen($id){

	
		$data  = array(
			'id_estatus' => "0",
		);
		$this->Archivos_model->deleteImagen($id,$data);
		//	redirect(base_url()."app/periodistas/edit/$id_periodista");
		header('Location:' . getenv('HTTP_REFERER'));
	}
}//cierre de clase Archivos
