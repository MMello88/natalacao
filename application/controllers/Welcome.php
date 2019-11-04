<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index($slug = 'home')
	{
    
    	$this->data['slug'] = $slug;

		if (method_exists($this, $slug))
			$this->$slug();
		else
			show_404();
	}

	private function home(){
		$this->template->addScriptWebapp('js/pagina_principal.js');
		$this->template->addCssWebapp('css/style/main-page.css');
		$this->data['home'] = $this->projetos->getPaginaCampos('#home');
		$this->data['doacao'] = $this->projetos->getPaginaCampos('#doacao');
		$this->data['sobre'] = $this->projetos->getPaginaCampos('#sobre');

		$this->template->show('pagina/main_page', $this->data);
	}

	private function doar(){
    $this->template->addScriptWebapp('js/doar.js');
		$this->template->addCssWebapp('css/style/main-page.css');
		$this->data['doar'] = $this->projetos->getPaginaCampos('doar');
		$this->data['movimentos'] = $this->projetos->getMovimentos();
		$this->data['tipos'] = $this->projetos->getTipoDoacao();
    $carts = $this->projetos->getCarts();
    $this->data['carts'] = $carts;
    $this->data['countCart'] = count($carts);
		$this->template->show('pagina/doar', $this->data);
	}
}