<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
	public function __construct(){
		parent::__construct(TRUE);
	}

	public function index($slug = "")
	{
		if(empty($this->data['main_submenu']->submenu->tabela)){
			if (method_exists($this, $slug)){
				$this->$slug();
			}
		}
		$this->template->showLogged('dashboard/main/layout-main', $this->data);
	}

	public function templates(){ 
	    $this->template->addCssTemplate("photoswipe.css", "photoswipe/");
	    $this->template->addCssTemplate("default-skin.css", "photoswipe/photoswipe-skin/");
	    $this->template->addCssTemplate("plyr.css", "plyr/");
		$this->template->addScriptTemplateComponente("photoswipe.js","vendor/photoswipe/");
	    $this->template->addScriptTemplateComponente("photoswipe-ui-default.min.js","vendor/photoswipe/");
	    $this->template->addScriptTemplateComponente("plyr.js","vendor/plyr/");
	    $this->template->addScriptTemplate("photoswipe-demo.js","javascript/pages/");
	    $this->template->addScriptWebapp('template.js');
	    $this->template->showLogged('restrita/templates', $this->data);
	}
	
	public function pageIndex(){

		$crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('tbl_pagina_principal');
        $crud->setSubject('Pagina Principal', '');

		$crud->columns(['parametro','valor']);
        $crud->displayAs(['parametro' => 'Parametro','valor' => 'Valor']);
        $crud->uniqueFields(['parametro']);
        $crud->requiredFields(['parametro','valor']);
        $crud->setTexteditor(['valor']);
        $crud->unsetJquery();
        $output = $crud->render();
        
        if (isset($output->isJSONResponse) && $output->isJSONResponse) {
            header('Content-Type: application/json; charset=utf-8');
            echo $output->output;
            exit;
        }
        

        $this->data = array_merge($this->data, (array)$output);
	    $this->template->showLogged('dashboard/main/page_index', $this->data);	
	}

}