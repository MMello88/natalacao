<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

	protected $CI;

	protected $data = [];
	
	public $view = null;

  public function __construct()
  {
    $this->CI =& get_instance();
    $this->arrJSExt = [];
    $this->data['arrCss'] = [];
  }

  public function show($view, $vars = array(), $return = FALSE)
  {
    $this->setJS();
    $this->CI->load->model('Configuracao_model', 'cfg');
    $this->data['head'] = $this->CI->cfg->getPaginaConfig('cabecalho');
    $this->data['foot'] = $this->CI->cfg->getPaginaConfig('rodape');
    $this->data['pages'] = $this->CI->cfg->getPaginas();
    $this->data = array_merge($this->data, $vars);
    $this->CI->load->view('pagina/comuns/header', $this->data);
    $this->CI->load->view($view, $this->data, $return);
    $this->CI->load->view('pagina/comuns/footer', $this->data);
  }

  public function showLogged($view, $vars = array(), $return = FALSE)
  {
    $this->data = array_merge($this->data, $vars);
    $this->setJS();
    $this->CI->load->view('dashboard/comuns/dasboard_header', $this->data);
    $this->CI->load->view($view, $this->data, $return);
    if($this->view !== null)
      $this->CI->load->view($this->view, $this->data, $return);
    $this->CI->load->view('dashboard/comuns/dasboard_footer', $this->data);
    $this->view = null;
  }

  private function setJS(){
    $this->data['arrJS'] = [];
    
    array_push($this->data['arrJS'], base_url_webapp("js/componentes/bootstrap/jquery.min.js"));
    array_push($this->data['arrJS'], base_url_webapp("js/componentes/bootstrap/bootstrap.bundle.min.js"));
    array_push($this->data['arrJS'], base_url_webapp("js/componentes/bootstrap/bootstrap.min.js"));
    
    foreach($this->arrJSExt as $js)
      array_push($this->data['arrJS'], $js);
    
  }

	public function addScriptWebapp($js){
		array_push($this->arrJSExt, base_url_webapp("$js"));
	}

  public function addCssWebapp($css){
    array_push($this->data['arrCss'], base_url_webapp("$css"));
  }
}
