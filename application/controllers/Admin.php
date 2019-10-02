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
	
	public function paginas(){
    $this->data['menu_active'] = 'pages';
    $this->data['titulo'] = 'Pagina';
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_pagina');
    $crud->setSubject('Paginas', '');

		$crud->columns(['pagina', 'url', 'principal']);
    $crud->displayAs(['pagina' => 'Nome da Pagina','url' => 'Nome do Link', 'principal' => 'Pagina Principal']);
    $crud->uniqueFields(['pagina']);
    $crud->requiredFields(['pagina','url','principal']);
    $crud->unsetJquery();
    $output = $crud->render();
    
    if (isset($output->isJSONResponse) && $output->isJSONResponse) {
        header('Content-Type: application/json; charset=utf-8');
        echo $output->output;
        exit;
    }
    
    $this->data = array_merge($this->data, (array)$output);
	  $this->template->showLogged('dashboard/main/cadastro', $this->data);	
	}
  
  public function configuracao(){
    $this->data['menu_active'] = 'campos';
    $this->data['titulo'] = 'Configuração da Pagina';
    
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_pagina_valor');
    $crud->setSubject('Configuração da Pagina', '');

		$crud->columns(['id_pagina','campo','valor','ativo']);
    $crud->displayAs(['id_pagina' => 'Pagina','campo' => 'Parametro','valor' => 'Valor','ativo' => 'Ativo']);
    $crud->uniqueFields(['campo']);
    $crud->requiredFields(['id_pagina','campo','valor']);
    $crud->setRelation('id_pagina','tbl_pagina','pagina');
    $crud->unsetJquery();
    $output = $crud->render();
    
    if (isset($output->isJSONResponse) && $output->isJSONResponse) {
        header('Content-Type: application/json; charset=utf-8');
        echo $output->output;
        exit;
    }
    
    $this->data = array_merge($this->data, (array)$output);
	  $this->template->showLogged('dashboard/main/cadastro', $this->data);	
	}

}