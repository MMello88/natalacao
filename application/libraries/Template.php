<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

	protected $CI;

	protected $data;
	
	public $view = null;

    public function __construct()
    {
      $this->CI =& get_instance();
      $this->data['arrJSExt'] = [];
    }

    public function show($view, $vars = array(), $return = FALSE)
    {
    	$this->CI->load->view($view, $vars, $return);
    }

    public function showLogged($view, $vars = array(), $return = FALSE)
    {
      $this->data = array_merge($this->data, $vars);
      $this->setJS();
      $this->CI->load->view('dashboard/comuns/header', $this->data);
      $this->CI->load->view('dashboard/comuns/navbar', $this->data);
      $this->CI->load->view('dashboard/comuns/menu', $this->data);
      $this->CI->load->view($view, $this->data, $return);
      if($this->view !== null)
        $this->CI->load->view($this->view, $this->data, $return);
      $this->CI->load->view('dashboard/comuns/footer', $this->data);
      $this->view = null;
    }
	
    public function showLoggedNoMenu($view, $vars = array(), $return = FALSE)
    {
      $this->data = array_merge($this->data, $vars);
      $this->setJS();
      $this->CI->load->view('dashboard/comuns/header', $this->data);
      $this->CI->load->view('dashboard/comuns/navbar', $this->data);
      $this->CI->load->view('dashboard/comuns/menu', $this->data);
      $this->CI->load->view($view, $this->data, $return);
      $this->CI->load->view('dashboard/comuns/footer', $this->data);
    }

    public function showAdmin($view, $vars = array(), $return = FALSE)
    {
    	$this->CI->load->view($view, $vars, $return);
    }

	private function setJS(){
		$this->data['arrJS'] = [];
		
		array_push($this->data['arrJS'], base_url_webapp("js/componentes/bootstrap/jquery.min.js"));
    array_push($this->data['arrJS'], base_url_webapp("js/componentes/bootstrap/bootstrap.bundle.min.js"));
		array_push($this->data['arrJS'], base_url_webapp("js/componentes/bootstrap/bootstrap.min.js"));
			
		
    /*if(isset($this->data['main_submenu']->submenu->output)){
			foreach($this->data['main_submenu']->submenu->output->js_files as $file)
			   array_push($this->data['arrJS'], "$file");

		}*/
		
		foreach($this->data['arrJSExt'] as $js)
			array_push($this->data['arrJS'], $js);
		
	}

	public function addScriptWebapp($js, $dir = ""){
		array_push($this->data['arrJSExt'], base_url_webapp_js("$dir$js"));
	}
}