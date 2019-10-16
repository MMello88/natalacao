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
}