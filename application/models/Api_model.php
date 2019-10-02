<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {

    public function  __construct() {
        parent::__construct();
    }
    
    public function getPagina($slug) {
      if (empty($slug)) $query = $this->db->get_where('pagina');
      else $query = $this->db->get_where('pagina',['url' => $slug]);
      $result = $query->result();
      echo json_encode($result);
    }
    
    public function getPaginaCampos($slug) {
      $result = $this->db->select('tbl_pagina_valor.campo, tbl_pagina_valor.valor')
         ->from('tbl_pagina_valor')
         ->join('tbl_pagina', 'tbl_pagina.id_pagina = tbl_pagina_valor.id_pagina', 'inner')
         ->where('tbl_pagina.url', $slug)->get()->result();
      $index = [];
      foreach($result as $row){
        $index[$row->campo] = $row->valor;
      }
      echo json_encode($index);
    }
}