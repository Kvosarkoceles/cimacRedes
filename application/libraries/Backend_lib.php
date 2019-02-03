<?php
	
	class Backend_lib	{
		
		private $CI;

		public function __construct(){
			$this->CI = & get_instance();
		}

		public function control(){
			if (!$this->CI->session->userdata("login")) {
				redirect(base_url());			
			}
			$url=$this->CI->uri->segment(1);
			#if ($this->CI->uri->segment(7)) {
			#	$url=$this->CI->uri->segment(1)."/".$this->CI->uri->segment(2)."/".$this->CI->uri->segment(3)."/".$this->CI->uri->segment(4)."/".$this->CI->uri->segment(5)."/".$this->CI->uri->segment(6)."/".$this->CI->uri->segment(7);
			#}
			#if ($this->CI->uri->segment(6)) {
			#	$url=$this->CI->uri->segment(1)."/".$this->CI->uri->segment(2)."/".$this->CI->uri->segment(3)."/".$this->CI->uri->segment(4)."/".$this->CI->uri->segment(5)."/".$this->CI->uri->segment(6);
			#}
			#if ($this->CI->uri->segment(5)) {
			#	$url=$this->CI->uri->segment(1)."/".$this->CI->uri->segment(2)."/".$this->CI->uri->segment(3)."/".$this->CI->uri->segment(4)."/".$this->CI->uri->segment(5);
			#}
			#if ($this->CI->uri->segment(4)) {
			#	$url=$this->CI->uri->segment(1)."/".$this->CI->uri->segment(2)."/".$this->CI->uri->segment(3)."/".$this->CI->uri->segment(4);
			#}
			#if ($this->CI->uri->segment(3)) {
			#	$url=$this->CI->uri->segment(1)."/".$this->CI->uri->segment(2)."/".$this->CI->uri->segment(3);
			#}
			if ($this->CI->uri->segment(2)) {
				$url=$this->CI->uri->segment(1)."/".$this->CI->uri->segment(2);
			}

			$infomenu = $this->CI->Backend_model->getID($url);

			$permisos = $this->CI->Backend_model->getPermisos($infomenu->id_indice,$this->CI->session->userdata("rol"));

			if ($permisos->acceso == 0) {
				redirect(base_url().directorio."/".contactos);
			}else{
				return $permisos; 
			}

		}
	}