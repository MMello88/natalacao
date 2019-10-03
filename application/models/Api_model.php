<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {

    public function  __construct() {
        parent::__construct();
    }
    
    public function getPagina($slug) {
      if (empty($slug)) echo json_encode($this->db->get_where('pagina')->result());
      else echo json_encode($this->db->get_where('pagina',['url' => $slug])->row());
    }
    
    public function getPaginaCampos($slug) {
      $result = $this->db->select('tbl_pagina_valor.campo, tbl_pagina_valor.valor')
         ->from('tbl_pagina_valor')
         ->join('tbl_pagina', 'tbl_pagina.id_pagina = tbl_pagina_valor.id_pagina', 'inner')
         ->where(['tbl_pagina.url' => $slug, 'tbl_pagina.ativo' => 'Ativo' , 'tbl_pagina_valor.ativo' => 'Ativo'])->get()->result();
      $index = [];
      foreach($result as $row){
        $index[$row->campo] = $row->valor;
      }
      echo json_encode($index);
    }
    
    public function getProjetos($id = ''){
      echo json_encode($this->db->get_where('projeto', ['ativo' => 'Ativo'])->result());
    }
    
    public function getProjetoMenus($id_projeto){
      echo json_encode($this->db->order_by('ordem')->get_where('projeto_menu', ['id_projeto' => $id_projeto, 'ativo' => 'Ativo'])->result());
    }
}