<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index($slug = 'home')
	{
    
    	$this->data['slug'] = $slug;

		if (method_exists($this, $slug))
			$this->$slug();
	}

	private function home(){
		$this->template->addScriptWebapp('js/pagina_principal.js');
		$this->template->addCssWebapp('css/style/main-page.css');
		$this->template->show('pagina/main_page', $this->data);
	}
}