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
    $this->data['arrJSComponente'] = [];
    $this->data['arrCssTemp'] = [];
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
	
    public function showLoggedGC($view, $vars = array(), $return = FALSE)
    {
    	$this->CI->load->view($view, $vars, $return);	
    }

    public function showAdmin($view, $vars = array(), $return = FALSE)
    {
    	$this->CI->load->view($view, $vars, $return);
    }

	private function setJS(){
		$this->data['arrJS'] = [];
    $this->data['arrCss'] = [];
		
		
		array_push($this->data['arrJS'], base_url_template_vendor("jquery/jquery.min.js"));
		array_push($this->data['arrJS'], base_url_template_vendor("bootstrap/js/popper.min.js"));
		array_push($this->data['arrJS'], base_url_template_vendor("bootstrap/js/bootstrap.min.js"));
			
		
    if(isset($this->data['main_submenu']->submenu->output)){
			foreach($this->data['main_submenu']->submenu->output->js_files as $file)
			   array_push($this->data['arrJS'], "$file");

		} 
		
		//<!-- BEGIN PLUGINS JS -->
		array_push($this->data['arrJS'], base_url_template_vendor("pace/pace.min.js"));
		array_push($this->data['arrJS'], base_url_template_vendor("stacked-menu/stacked-menu.min.js"));
		//array_push($this->data['arrJS'], base_url_template_vendor("perfect-scrollbar/perfect-scrollbar.min.js"));
		array_push($this->data['arrJS'], base_url_template_vendor("parsleyjs/parsley.min.js"));
		array_push($this->data['arrJS'], base_url_template_vendor("text-mask/vanillaTextMask.js"));
		array_push($this->data['arrJS'], base_url_template_vendor("text-mask/addons/textMaskAddons.js"));

    foreach($this->data['arrJSComponente'] as $js)
			array_push($this->data['arrJS'], $js);
		//<!-- BEGIN THEME JS -->
		array_push($this->data['arrJS'], base_url_template_javascript("theme.min.js"));
		
		foreach($this->data['arrJSExt'] as $js)
			array_push($this->data['arrJS'], $js);
    
		foreach($this->data['arrCssTemp'] as $css)
			array_push($this->data['arrCss'], $css);
		
	}

	public function addScriptWebapp($js, $dir = ""){
		array_push($this->data['arrJSExt'], base_url_webapp_js("$dir$js"));
	}

	public function addScriptTemplate($js, $dir){
		array_push($this->data['arrJSExt'], base_url_template("$dir$js"));
	}
  
	public function addScriptTemplateComponente($js, $dir){
		array_push($this->data['arrJSComponente'], base_url_template("$dir$js"));
	}
  
  public function addCssTemplate($css, $dir){
    array_push($this->data['arrCssTemp'], base_url_template_vendor("$dir$css"));
  }
}