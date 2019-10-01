<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts_model extends CI_Model {

    public function  __construct() {
        parent::__construct();
    }

    public function inserirUsuario(){
    	$data = [
    		'id_usuario' => '',
    		'nome' => $this->input->post('nome'),
    		'email' => $this->input->post('email'),
    		'senha' => md5($this->input->post('senha')),
    		'Ativo' => 'Ativo',
    		'dt_cadastro' => date('Y-m-d H:i:s'),
            'cadastro_completo' => '0',
            'ver_cad_usuario' => '1',
            'imagem_perfil' => 'unknown-profile.jpg'
    	];

    	if ($this->db->insert('usuario', $data)) {
            $id_usuario = $this->db->insert_id();
			$this->db->update('usuario', ['id_usuario_pai' => $id_usuario], ['id_usuario' => $id_usuario]);
    		return $id_usuario;
    	} else {
    		return ['code' => $this->db->error()['code'], 'message' => $this->db->error()['message']];
    	}
    }

    public function inserirContrato(){
        $data = [
            'id_usuario' => $this->input->post('id_usuario'),
            'id_projeto' => $this->input->post('id_projeto'),
            'status'     => 'Ativo'
        ];

        $this->db->insert('contrato', $data);
        
        return $this->db->insert_id();
    }

    public function desativarContrato($id_projeto){
        $where = [
            'email' => $this->session->userdata("session_account")["email"],
            'id_projeto' => $id_projeto
        ];

        $data = [
            'status' => 'Desativado'
        ];

        $this->db->update('contrato', $data, $where);
    }

    public function updateNome($nome){
        $data = [
            'nome' => $nome,
        ];

        $condicao = [
            'email' => $this->session->userdata("session_account")["email"],
        ];

        return $this->db->update('usuario', $data, $condicao);
    }

    public function updateHashEmail($emailValido, $hashEmail = ""){
        $data = [
            'hash_email' => $hashEmail,
            'email_valid' => $emailValido
        ];

        $condicao = [
            'email' => $this->session->userdata("session_account")["email"],
        ];

        return $this->db->update('usuario', $data, $condicao);
    }

    public function updateContinuacao(){
        $super_usuario = $this->input->post('super_usuario');
        if(!strstr($this->input->post('super_usuario'), "@")){
            $super_usuario = "@".$this->input->post('super_usuario');
        }
        
        $data = [
            'dt_nascimento' => $this->input->post('dt_nascimento'),
            'celular' => $this->input->post('celular'),
            'sexo' => $this->input->post('sexo'),
            'super_usuario' => $super_usuario,
            'cadastro_completo' => '1',
        ];

        if($this->input->post('nome') !== null){
            $data['nome'] = $this->input->post('nome');
        }

        if($this->input->post('senha_new') !== null){
            $data['senha'] = md5($this->input->post('senha_new'));
        }

        $condicao = [
            'email' => $this->session->userdata("session_account")["email"],
        ];

        return $this->db->update('usuario', $data, $condicao);
    }

    public function saveSettingsProfile(){
        $data = [
            'compania' => $this->input->post('compania'),
            'biografia' => $this->input->post('biografia'),
            'contratacao' => $this->input->post('contratacao') == "on" ? "1":"0",
        ];


        $condicao = [
            'email' => $this->session->userdata("session_account")["email"],
        ];

        return $this->db->update('usuario', $data, $condicao);   
    }

    public function saveSettingsAvatar($imagem_perfil){
        $data = [
            'imagem_perfil' => $imagem_perfil,
        ];

        $condicao = [
            'email' => $this->session->userdata("session_account")["email"],
        ];

        return $this->db->update('usuario', $data, $condicao);   
    }

    public function saveSettingsProfileRedeSocial(){
        $data = [
            'url_linkedin' => $this->input->post('url_linkedin'),
            'url_facebook' => $this->input->post('url_facebook'),
            'url_twitter' => $this->input->post('url_twitter'),
            'url_github' => $this->input->post('url_github'),
        ];


        $condicao = [
            'email' => $this->session->userdata("session_account")["email"],
        ];

        return $this->db->update('usuario', $data, $condicao);   
    }

    public function getByEmail($email) {
        $query = $this->db->get_where('usuario', array('email' => $email));
        $result = $query->result_object();
        return empty($result) ? "" : $result[0];
    }

    public function getByHash($hash) {
        $query = $this->db->get_where('usuario', array('hash' => $hash));
        $result = $query->result_object();
        return empty($result) ? "" : $result[0];
    }

    public function getUsuarioBySubDomain($subdomain) {
        $query = $this->db->select(['id_usuario', 'nome', 'email', 'super_usuario', 'biografia', 'compania'])
                          ->from('usuario')
                          ->where(['super_usuario' => "@".$subdomain, 'ativo' => 'Ativo'])
                          ->get();
        $result = $query->row();
        return $result;
    }

    public function changeHash($id_usuario, $hash = "", $date = ""){
        return $this->db->update('usuario', ['hash' => $hash, 'dt_hash_exp' => $date], ['id_usuario' => $id_usuario]);
    }

    public function changeSenha($id_usuario, $senha){
        return $this->db->update('usuario', ['senha' => $senha], ['id_usuario' => $id_usuario]);
    }

    public function setByCookie($hash_cookie, $email) {
        $data = [
            'code_cookie_hash' => $hash_cookie,
        ];

        $condicao = [
            'email' => $email,
        ];

        return $this->db->update('usuario', $data, $condicao);
    }

    public function getByCookie($hash) {
        $query = $this->db->get_where('usuario', array('code_cookie_hash' => $hash));
        $result = $query->result_object();
        return empty($result) ? "" : $result[0];
    }

    public function existeSuperUsuario(){
        $condicao = [
            'super_usuario' => $this->input->post('super_usuario')
        ];
        $query = $this->db->get_where('usuario', $condicao);
        $row = $query->row();

        if (isset($row))
        {
            if($row->email == $this->session->userdata("session_account")["email"]){
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
}