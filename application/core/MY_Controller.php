<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include(APPPATH . 'libraries/GroceryCrudEnterprise/autoload.php');
use GroceryCrud\Core\GroceryCrud;

class MY_Controller extends CI_Controller {

	public $data = [];
	public $logged = false;
	public $account;
	public $session_account;

	public function __construct($onlyLogged = FALSE) {
		
		parent::__construct();
		
		if (!$this->isLogged()){
			$this->logged = false;
		} else {
			$this->logged = true;
		}
		
		if (!$this->logged){
			$this->logged = $this->hasCookie();
		}

		if ($this->logged){
			$this->data["_usuario"] = $this->account;
		}
				
		if($onlyLogged){
			if(!$this->logged) redirect();
		}
	}

	public function isLogged(){
		if ($this->session->userdata("session_account")){
			$this->session_account = (object)$this->session->userdata("session_account");
			$this->account = $this->accounts->getByEmail($this->session_account->email);
			if (empty($this->account))
				return false;
			return true;
		}
		return false;
	}

	public function hasCookie(){
		$hash = $this->input->cookie('ci_session');
		if ($hash){
			$usuario = $this->accounts->getByCookie($hash);
			if (empty($usuario)){
				return false;
			} else {
				$this->session->set_userdata("session_account",["email" => $usuario->email, "nome" => $usuario->nome, "CadastroCompleto" => $usuario->cadastro_completo, "id_usuario" => $_usuario->id_usuario]);
				$this->session_account = (object)$this->session->userdata("session_account");
				return true;
			}
		}
		return false;
	}
}