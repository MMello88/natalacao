<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuracao_model extends CI_Model {

  public function  __construct() {
    parent::__construct();
  }
   
  public function getPaginaConfig($slug) {
    $result = $this->db->select('tbl_pagina_valor.campo, tbl_pagina_valor.valor')
       ->from('tbl_pagina_valor')
       ->join('tbl_pagina', 'tbl_pagina.id_pagina = tbl_pagina_valor.id_pagina', 'inner')
       ->where(['tbl_pagina.url' => $slug, 'tbl_pagina.ativo' => 'Ativo', 'tbl_pagina.configuracao' => 'Sim', 'tbl_pagina_valor.ativo' => 'Ativo'])->get()->result();
    $index = [];
    foreach($result as $row){
      $index[$row->campo] = $row->valor;
    }
    return $index;
  }
}