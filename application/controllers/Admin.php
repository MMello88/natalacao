<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
    public $projeto;

	public function __construct(){
	   parent::__construct(TRUE);
        if($this->session->userdata('projeto') !== null){
            $this->projeto = $this->session->userdata('projeto');
            $this->data['projeto'] = $this->projeto;
            $this->data['menus'  ] = $this->projetos->getProjetoMenus($this->projeto->id_projeto);
        }
	}

	public function index($slug = "")
	{
    if($this->session->userdata('projeto') !== null)
      $this->template->showLogged('dashboard/main/layout-main', $this->data);
    else
      redirect("admin/projetos");
	}
	
	public function paginas(){
    $this->data['titulo'] = 'Pagina';
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_pagina');
    $crud->setSubject('Paginas', '');

		$crud->columns(['pagina', 'principal', 'configuracao','ativo', 'ordem']);
    $crud->displayAs(['pagina' => 'Nome da Pagina','url' => 'Nome do Link', 'principal' => 'Pagina Principal', 'configuracao' => 'Configuração', 'ativo' => 'Ativo', 'ordem' => 'Ordem']);
    $crud->uniqueFields(['pagina']);
    $crud->requiredFields(['pagina','url','principal','configuracao','ativo', 'ordem']);
    $crud->defaultOrdering('ordem', 'asc');
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
  
  public function configuracao($where = ''){
    $this->data['titulo'] = 'Configuração da Pagina';
    
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_pagina_valor');
    $crud->setSubject('Configuração da Pagina', '');

		$crud->columns(['id_pagina','campo','valor','ativo']);
    $crud->displayAs(['id_pagina' => 'Pagina','campo' => 'Parametro','valor' => 'Valor','ativo' => 'Ativo']);
    $crud->requiredFields(['id_pagina','campo','valor']);
    $crud->setRelation('id_pagina','tbl_pagina','pagina');

    if(!empty($where))
      $crud->where(['id_pagina' => $where]);
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

	public function projeto(){
    $this->data['titulo'] = 'Projetos';
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_projeto');
    $crud->setSubject('Projetos', '');

		$crud->columns(['projeto', 'ativo']);
    $crud->displayAs(['projeto' => 'Nome do Projeto','ativo' => 'Ativo']);
    $crud->requiredFields(['projeto','ativo']);
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

	public function menu(){
    $this->data['titulo'] = 'Menus do Projeto';
    
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_projeto_menu');
    $crud->setSubject('Menus', '');

		$crud->columns(['id_projeto','menu','url','id_projeto_pai','ativo','ordem']);
    $crud->displayAs(['id_projeto' => 'Projeto','menu' => 'Nome do Menu','url' => 'Link','ativo' => 'Ativo', 'ordem' => 'Ordem', 'id_projeto_pai' => 'Menu Pai']);
    $crud->requiredFields(['id_projeto','menu','ativo','ordem']);
    $crud->setRelation('id_projeto','tbl_projeto','projeto');
    $crud->setRelation('id_projeto_pai','tbl_projeto_menu','menu');
    $crud->defaultOrdering(['id_projeto' => 'asc', 'ordem' => 'asc']);
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

  public function projetos($id = ''){
    if(!empty($id)){
      $this->session->set_userdata('projeto', $this->projetos->getProjetos($id));
      redirect("admin/");
    } else {
      $this->template->addScriptWebapp('js/projetos.js');
      $this->template->addCssWebapp('css/style/projetos.css');
      $this->template->showLogged('dashboard/main/layout-main', $this->data);
    }
  }
}