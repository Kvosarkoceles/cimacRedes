<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")){
			redirect(base_url());
		}
		$this->load->model("Periodistas_model");
		$this->load->model("Upload_model");
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
			$titulo='sin nombre';
		}
 		$subir = $this->Upload_model->subir($titulo,$imagen,$id);
 		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		//$this->load->view('', $data);
		$this->load->view('layouts/footer');

	 }

		function crearMiniatura($filename){
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'uploads/imagenes/'.$filename;
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['new_image']='uploads/imagenes/thumbs/';
				$config['thumb_marker']='';//captura_thumb.png
				$config['width'] = 150;
				$config['height'] = 150;
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
		}

		public function subirArchivo(){
		$config['upload_path'] = './uploads/archivos/';
				$config['allowed_types'] = 'pdf|xlsx|docx';
				$config['max_size'] = '20048';
				$this->load->library('upload',$config);
				if (!$this->upload->do_upload("fileImagen")) {
						$data['errorArch'] = $this->upload->display_errors();
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vupload',$data);
			$this->load->view('layout/footer');
				} else {

						$file_info = $this->upload->data();

						$titulo = $this->input->post('titImagen');
						$archivo = $file_info['file_name'];
						$subir = $this->mupload->subir($titulo,$archivo);
						$data['estado'] = "Archivo subido.";
						$data['archivo'] = $archivo;
			$data['error'] = "";
			$data['errorArch'] = "";

						$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vupload', $data);
			$this->load->view('layout/footer');

				}
		}

		public function downloads($name){

			 $data = file_get_contents('./uploads/archivos/'.$name);
			 force_download($name,$data);

	}


}
