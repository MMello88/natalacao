<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projetos_model extends CI_Model {

  public function  __construct() {
      parent::__construct();
  }

  public function getProjetos($id = ''){
    if(!empty($id)) return $this->db->get_where('projeto', ['id_projeto' => $id, 'ativo' => 'Ativo'])->row();
    else return $this->db->get_where('projeto', ['ativo' => 'Ativo'])->result();
  }
  
  public function getProjetoMenus($id_projeto){
    $menus = $this->db->order_by('ordem')->get_where('projeto_menu', ['id_projeto' => $id_projeto, 'ativo' => 'Ativo', 'id_projeto_pai' => null])->result();
    foreach ($menus as $key => $menu) {
      $menus[$key]->submenu = $this->db->order_by('ordem')->get_where('projeto_menu', ['id_projeto_pai' => $menu->id_projeto_menu, 'ativo' => 'Ativo'])->result();
    }
    return $menus;
  }

  public function getPaginaCampos($slug) {
    $result = $this->db->select('tbl_pagina_valor.campo, tbl_pagina_valor.valor')
       ->from('tbl_pagina_valor')
       ->join('tbl_pagina', 'tbl_pagina.id_pagina = tbl_pagina_valor.id_pagina', 'inner')
       ->where(['tbl_pagina.url' => $slug, 'tbl_pagina.ativo' => 'Ativo', 'tbl_pagina.configuracao' => 'Não', 'tbl_pagina_valor.ativo' => 'Ativo'])->get()->result();
    $index = [];
    foreach($result as $row){
      $index[$row->campo] = $row->valor;
    }
    return $index;
  }

  public function getEntidades(){
    return $this->db->get_where('tbl_entidade',['ativo' => 'Ativo'])->result();
  }

  public function getBeneficiado($id){
    return $this->db->get_where('tbl_beneficiado',['ativo' => 'Ativo', 'id_beneficiado' => $id])->row();
  }

  public function getMovimentos(){
    $entidades = $this->getEntidades();
    foreach ($entidades as $key1 => $entidade) {      
      $movs = $this->db->get_where('tbl_movimento', ['id_entidade' => $entidade->id_entidade])->result();
      foreach ($movs as $key => $mov) {
        $movs[$key]->benefeciado = $this->getBeneficiado($mov->id_beneficiado);
      }
      $entidades[$key1]->beneficiados = $movs;
    }
    return $entidades;
  }

  public function getTipoDoacao(){
    return $this->db->get_where('tipo_doacao')->result();
  }
  
  /* funções da Tela de doação */
  public function insertCart(){
    $data = [
      'id_sessions' => $_SESSION['__ci_last_regenerate'],
      'id_movimento' => $this->input->post('id_movimento'),
      'id_tipo_doacao' => $this->input->post('id_tipo_doacao')
    ];
    if (empty($this->db->get_where('cart',$data)->row())){
      $this->db->insert('cart',$data);
    
      $count = count($this->getCarts());
      $json = [
        'status' => 'success',
        'titulo' => 'Sucesso',
        'menssage' => 'Inserido no carrinho',
        'cart' => ['total' => $count]
      ];
      
      echo json_encode($json);
    } else {
      
      $count = count($this->getCarts());
      $json = [
        'status' => 'success',
        'titulo' => 'Realizado',
        'menssage' => 'Já existe item no carrinho',
        'cart' => ['total' => $count]
      ];
      
      echo json_encode($json);
    }
  }
  
  public function getCarts(){
    return $this->db->get_where('cart',['id_sessions' => $_SESSION['__ci_last_regenerate']])->result();
  }

  public function hasCarts(){
    $count = count($this->getCarts());
    $json = [
      'status' => 'success',
      'titulo' => 'Tem carrinho',
      'menssage' => 'Total do carrinho',
      'cart' => ['total' => $count]
    ];
    
    echo json_encode($json);
  }
  
  public function deleteCart(){
    $data = [
      'id_sessions' => $_SESSION['__ci_last_regenerate'],
      'id_movimento' => $this->input->post('id_movimento'),
      'id_tipo_doacao' => $this->input->post('id_tipo_doacao')
    ];
    $this->db->delete('cart',$data);
    
    $count = count($this->getCarts());
    $json = [
      'status' => 'success',
      'titulo' => 'Sucesso',
      'menssage' => 'Deletado do carrinho',
      'cart' => ['total' => $count]
    ];
    
    echo json_encode($json);
  }
  
  public function finalizaDoacao($id_doador){
    $carts = $this->getCarts();
    foreach($carts as $cart){
      $data = [
        'id_doador' => $id_doador,
        'id_movimento' => $cart->id_movimento,
        'id_tipo_doacao' => $cart->id_tipo_doacao
      ];
      
      $this->db->insert('movimento_item',$data);
    }
    
    $this->db->delete('cart',['id_sessions' => $_SESSION['__ci_last_regenerate']]);    
  }
  
  public function getDoador($nr_rg_cpf){
    return $this->db->get_where('doador',['nr_rg_cpf' => $nr_rg_cpf])->row();
  }
  
  public function insertDoador(){
    if(empty($this->input->post('id_doador'))){
      $data = [
        'nome_doador' => $this->input->post('nome_doador'),
        'nr_rg_cpf' => $this->input->post('nr_rg_cpf'),
        'email' => $this->input->post('email'),
        'telefone' => $this->input->post('telefone')
      ];
      
      $id = $this->db->insert('doador',$data);
    } else {
      $id = $this->input->post('id_doador');
    }

    $this->finalizaDoacao($id);

    $json = [
      'status' => 'success',
      'titulo' => 'Sucesso',
      'menssage' => 'Sua doação realizada com sucesso!',
    ];
    
    echo json_encode($json);
  }

  public function getDoadorPorRG($nr_rg_cpf){
    $doador = $this->getDoador($nr_rg_cpf);
    $json = [
      'status' => 'success',
      'titulo' => 'Sucesso',
      'menssage' => 'Busca de doador realizada com sucesso!',
      'doador' => $doador
    ];
    
    echo json_encode($json);
  }
}