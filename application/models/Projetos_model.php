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
      
      $id = '';
      if($this->db->insert('doador',$data))
        $id = $this->db->insert_id();
    } else {
      $id = $this->input->post('id_doador');
    }

    $this->finalizaDoacao($id);

    $json = [
      'status' => 'success',
      'titulo' => 'Sucesso',
      'menssage' => 'Sua doação foi realizada com sucesso!',
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
  
  public function getDoacaoPorRG($nr_rg_cpf){
    $q = "SELECT e.nome_entidade, b.nome_benef, t.descricao, i.id_movimento_item
            FROM tbl_movimento_item i
           INNER JOIN tbl_movimento m   ON m.id_movimento = i.id_movimento
           INNER JOIN tbl_tipo_doacao t ON t.id_tipo_doacao = i.id_tipo_doacao
           INNER JOIN tbl_doador d      ON d.id_doador = i.id_doador
           INNER JOIN tbl_beneficiado b ON b.id_beneficiado = m.id_beneficiado
           INNER JOIN tbl_entidade e    ON e.id_entidade = m.id_entidade
           WHERE d.nr_rg_cpf = '$nr_rg_cpf'
             AND i.situacao = 'Aberto'";
    $rows = $this->db->query($q)->result();
    
    if(!empty($rows)){
      $data = " 
        <table class='table table-sm'>
          <thead>
            <tr>
              <th scope='col'>Entidade</th>
              <th scope='col'>Benefeciário</th>
              <th scope='col'>Tipo Doação</th>
              <th scope='col'>Cancelar</th>
            </tr>
          </thead>
          <tbody>";
      foreach($rows as $row){
        $data .= 
        "<tr>
          <td>{$row->nome_entidade}</td>
          <td>{$row->nome_benef}</td>
          <td>{$row->descricao}</td>
          <td><input type='checkbox' id='chkCancelar' data-id_movimento_item='{$row->id_movimento_item}'></td>
        </tr>";
      }
      $data .= "</tbody>
        </table>";
      $json = [
        'status'   => 'success',
        'titulo'   => 'Sucesso',
        'menssage' => 'Doações!',
        'grid'   => $data
      ];
    } else {
      $json = [
        'status'   => 'warning',
        'titulo'   => 'Doações',
        'menssage' => 'Doações não foi encontrado para este RG.'
      ];
    }
    
    echo json_encode($json);
  }
  
  public function alteraSituacao(){
    $where = ['id_movimento_item' => $this->input->post('id_movimento_item')];
    $data = ['situacao' => $this->input->post('situacao')];
    $this->db->update('movimento_item', $data, $where);
  }
}