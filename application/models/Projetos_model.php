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
      return $this->db->order_by('ordem')->get_where('projeto_menu', ['id_projeto' => $id_projeto, 'ativo' => 'Ativo'])->result();
    }
}