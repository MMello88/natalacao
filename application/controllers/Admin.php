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
    if($this->session->userdata('projeto') !== null){
      $this->data['titulo'] = 'Selecionar Projeto';
      //busca para colocar na grid
      $this->template->showLogged('dashboard/main/layout-main', $this->data);
    }
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
    
    $this->output($crud);    
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
    
    $this->output($crud);
	}

	public function projeto(){
    $this->data['titulo'] = 'Projetos';
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_projeto');
    $crud->setSubject('Projetos', '');

		$crud->columns(['projeto', 'ativo']);
    $crud->displayAs(['projeto' => 'Nome do Projeto','ativo' => 'Ativo']);
    $crud->requiredFields(['projeto','ativo']);
    
    $this->output($crud);
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
    
    $this->output($crud);	
	}

  public function projetos($id = ''){
    if(!empty($id)){
      $this->session->set_userdata('projeto', $this->projetos->getProjetos($id));
      redirect("admin/");
    } else {
      $this->data['titulo'] = 'Selecionar Projeto';
      $this->template->addScriptWebapp('js/projetos.js');
      $this->template->addCssWebapp('css/style/projetos.css');
      $this->template->showLogged('dashboard/main/layout-main', $this->data);
    }
  }
  
  public function movimento(){
    $this->data['titulo'] = 'Movimentação';

		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_movimento');
    $crud->setSubject($this->data['titulo'], '');
    
    $crud->columns(['id_entidade','id_beneficiado','dt_periodo']);
    $crud->displayAs(['id_entidade' => 'Entidade','id_beneficiado' => 'Beneficiado']);
    
    $crud->setRelation('id_entidade','tbl_entidade','nome_fantasia');
    $crud->setRelation('id_beneficiado','tbl_beneficiado','nome_benef');
    
    $crud->setActionButton('Itens', 'fa fa-user', function ($row) {
        return base_url('/admin/movItem/' . $row->id_movimento);
    }, true);

    $crud->unsetAdd();
    $crud->unsetEdit();
    $crud->unsetRead();
    $crud->unsetDelete();
    $crud->setRead();
    
    $this->output($crud);
  }
  
  public function movItem($where = ''){
    $this->data['titulo'] = 'Item da Movimentação';
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_movimento_item');
    $crud->setSubject($this->data['titulo'], '');
    
    $crud->columns(['id_movimento','id_tipo_doacao','id_doador']);
    $crud->displayAs(['id_tipo_doacao' => 'Tipo de Doação','id_doador' => 'Doador']);
    
    $crud->setRelation('id_doador','tbl_doador','nome_doador');
    $crud->setRelation('id_tipo_doacao','tbl_tipo_doacao','tipo');
    
    $crud->unsetEdit();
    $crud->unsetDelete();
    
    if(!empty($where))
      $crud->where(['id_movimento' => $where]);
    $this->output($crud);
  }
  
  public function entidade(){
    $this->data['titulo'] = 'Entidade - Instituição';
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_entidade');
    $crud->setSubject('Entidade', '');
    
    $crud->columns(['nome_entidade','nome_fantasia', 'endereco', 'numero', 'telefone', 'complemento', 'ativo']);
    $crud->displayAs(['nome_entidade' => 'Nome','nome_fantasia' => 'Nome Fantasia', 'endereco' => 'Endereço', 'numero' => 'Nr', 'telefone' => 'Telefone', 'complemento' => 'Complemento', 'ativo' => 'Ativo']);
    
    $this->output($crud);
  }
  
  public function beneficiado(){
    $this->data['titulo'] = 'Beneficiado';
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_beneficiado');
    $crud->setSubject('Beneficiado', '');
    
    $crud->columns(['id_entidade', 'nome_benef','nr_rg_cpf', 'endereco', 'numero', 'telefone', 'complemento', 'caracteristicas', 'ativo']);
    $crud->displayAs(['id_entidade' => 'Entidade','nome_benef' => 'Nome','nr_rg_cpf' => 'RG', 'endereco' => 'Endereço', 'numero' => 'Nr', 'telefone' => 'Telefone', 'complemento' => 'Complemento', 'caracteristicas' => 'Caracteristicas', 'ativo' => 'Ativo']);
    $crud->uniqueFields(['nr_rg_cpf']);
    $crud->requiredFields(['caracteristicas']);
    $crud->setRelation('id_entidade','tbl_entidade','nome_entidade');
    
    $crud->callbackAfterInsert(function ($stateParameters) {
      $this->db->insert('tbl_movimento', ['id_entidade' => $stateParameters->data['id_entidade'], 'id_beneficiado' => $stateParameters->insertId, 'dt_periodo' => date("Y") . '-12-25']);
      return $stateParameters;
    });
    
    $this->output($crud);
  }
  
  public function doador(){
    $this->data['titulo'] = 'Doador';
    
		$crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_doador');
    $crud->setSubject('Doador', '');
    
    $crud->columns(['nome_doador','nr_rg_cpf', 'telefone', 'email']);
    $crud->displayAs(['nome_doador' => 'Nome','nr_rg_cpf' => 'RG', 'telefone' => 'Telefone', 'email' => 'Email']);
    $crud->uniqueFields(['nr_rg_cpf']);
    
    $this->output($crud);
  }
  
  public function tipo(){
    $this->data['titulo'] = 'Tipos de Doações';
    
    $crud = $this->_getGroceryCrudEnterprise();
    $crud->setTable('tbl_tipo_doacao');
    $crud->setSubject('Tipo de Doação', '');
    
    $crud->columns(['tipo', 'descricao']);
    $crud->displayAs(['tipo' => 'Tipo','descricao' => 'Descrição']);
    $crud->uniqueFields(['tipo']);
    
    $this->output($crud);
  }

  private function output($crud){
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