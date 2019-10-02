<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends MY_Controller {
	
	public function __construct(){
		
		parent::__construct();
	}

	public function validate_session_account(){
		if ($this->logged)
			echo json_encode(["code" => "1", "message" => "true"]);
		else
			echo json_encode(["code" => "3", "message" => "false"]);
	}
	
	public function validate_accounts(){
		$this->form_validation->set_rules('email', 'Usuário', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'Password', 'trim|required|min_length[6]');
		
		if ($this->form_validation->run() == TRUE) {
			$_usuario = $this->accounts->getByEmail($this->input->post('email'));
			if (!empty($_usuario)){
				if($this->input->post('email') == $_usuario->email){
					if(md5($this->input->post('senha')) == $_usuario->senha){
						$this->accounts->changeHash($_usuario->id_usuario);
						$this->session->set_userdata("session_account",["email" => $_POST['email'], "nome" => $_usuario->nome, "CadastroCompleto" => $_usuario->cadastro_completo, "id_usuario" => $_usuario->id_usuario, "id_usuario_pai" => $_usuario->id_usuario_pai]);
						if ($this->input->post('lembrar') == 'on'){
							$this->accounts->setByCookie($this->input->cookie("ci_session"), $_POST['email']);
						}
						echo json_encode(["code" => "1", "message" => "Usuário e Senha estão corretas"]);
					} else {
						echo json_encode(["code" => "2", "message" => "Senha inválida"]);
					}
				} else {
					echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
				}
			} else {
				echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function register_account(){
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_usuario.email]');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('resenha', 'Confirmar Senha', 'required|min_length[6]|matches[senha]');
		
		if ($this->form_validation->run() === TRUE){
			$return_id = $this->accounts->inserirUsuario();
			if(is_integer($return_id)){
				$this->session->set_userdata("session_account",["email" => $this->input->post('email'), "nome" => $this->input->post('nome'), "CadastroCompleto" => "0", "id_usuario" => $return_id, "id_usuario_pai" => $return_id]);
				$hash = md5(date('Y-m-d H:i:s'));
				$this->accounts->updateHashEmail("0",$hash);
				$this->sendemail->enviarHashEmailCadastroInicial($this->input->post('nome'), $this->input->post('email'), $hash);
				echo json_encode(["code" => "1", "message" => "Perfil cadastrado com sucesso!"]);
			} else {
				echo $return_id;
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function change_name(){
		$this->form_validation->set_rules('nome', 'Nome Completo', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() === TRUE){
			if (empty($this->accounts->getByEmail($this->input->post('email')))){
				echo json_encode(["code" => "3", "message" => "Cadastro não encontrado!"]);
			} else {
				if($this->accounts->updateNome($this->input->post('nome'))){
					echo json_encode(["code" => "1", "message" => "Alteração realizada com sucesso!"]);
				} else {
					echo json_encode(["code" => "2", "message" => "Tente novamente em alguns instantes. Obrigado!"]);
				}
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function validate_hash_email(){
		$this->form_validation->set_rules('hash_email', 'Chave de Segurança', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() === TRUE){
			$_usuario = $this->accounts->getByEmail($this->input->post('email'));
			if (empty($_usuario)){
				echo json_encode(["code" => "3", "message" => "Chave não foi encontrado"]);
			} else {
				if($_usuario->hash_email === $this->input->post("hash_email")){
					if($this->accounts->updateHashEmail("1")){
						echo json_encode(["code" => "1", "message" => "Chave de Segurança validado com sucesso!"]);
					} else {
						echo json_encode(["code" => "2", "message" => "Tente novamente em alguns instantes. Obrigado!"]);
					}
				} else {
					echo json_encode(["code" => "2", "message" => "Chave de Segurança inválida!"]);
				}
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function validate_cadastro(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('agreement', 'Acordo de Termos', 'trim|required');
		if ($this->form_validation->run() === TRUE){
			$_usuario = $this->accounts->getByEmail($this->input->post('email'));
			if ($_usuario->ativo == 'Ativo' && $_usuario->cadastro_completo == '1' && $_usuario->super_usuario !== ''
				&& $_usuario->hash_email == '' && $_usuario->email_valid == '1'){
				echo json_encode(["code" => "1", "message" => "Cadastro concluido com sucesso! <br/> Seja bem Vindo ao MatiLab."]);
			} else {
				echo json_encode(["code" => "4", "message" => "Seu cadastro precisa ser concluído para dar continuidade."]);
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}
	
	public function change_perfil(){
		$this->form_validation->set_rules('dt_nascimento', 'Data Nascimento', 'trim|required');
		$this->form_validation->set_rules('celular', 'Número Celular', 'trim|required');
		$this->form_validation->set_rules('sexo', 'Sexo', 'trim|required');
		$this->form_validation->set_rules('super_usuario', 'Super Usuário', 'trim|required');
		if($this->accounts->existeSuperUsuario()){
			echo json_encode(["code" => "2", "message" => "Super Usuário já existe! <br/>Por favor informe um outro Super Usuário"]);
			return;
		}

		if ($this->form_validation->run() === TRUE){
			if($this->input->post('senha_new') !== null){
				if($this->input->post('senha_old') !== null){
					if(!empty($this->input->post('senha_old')) && !empty($this->input->post('senha_new'))){
						if($this->input->post('senha_old') == $this->input->post('senha_new')){
							echo json_encode(["code" => "2", "message" => "A senha não pode ser iguais!"]);
							return;
						}
						
						if(strlen($this->input->post('senha_old')) <= 5){
							echo json_encode(["code" => "2", "message" => "O tamanho da senha Nova menor que 6."]);
							return;
						}

						if(strlen($this->input->post('senha_new')) <= 5){
							echo json_encode(["code" => "2", "message" => "O tamanho da senha Atual menor que 6."]);
							return;
						}
					} else {
						if (empty($this->input->post('senha_old')) && !empty($this->input->post('senha_new'))){
							echo json_encode(["code" => "2", "message" => "Informe a senha Atual!"]);
							return;
						}

						if (empty($this->input->post('senha_new')) && !empty($this->input->post('senha_old'))){
							echo json_encode(["code" => "2", "message" => "Informe a senha Nova!"]);
							return;
						}
					}
				} 
			}

			if($this->accounts->updateContinuacao()){
				$this->session->set_userdata("session_account",["email" => $this->account->email, "nome" => $this->account->nome, "CadastroCompleto" => "1", "id_usuario" => $this->account->id_usuario, "id_usuario_pai" => $this->account->id_usuario_pai]);
				echo json_encode(["code" => "1", "message" => "Perfil cadastrado com sucesso!"]);
			} else {
				echo json_encode(["code" => "2", "message" => "Tente novamente em alguns instantes. Obrigado!"]);
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}
	
	public function validate_forgot(){
		if (!$this->input->post('hash')) {
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			if ($this->form_validation->run() === TRUE) {
				$_usuario = $this->accounts->getByEmail($this->input->post('email'));
				if(!empty($_usuario)){
					$hash = md5(date('Y-m-d H:i:s'));
					$this->accounts->changeHash($_usuario->id_usuario, $hash, date_format(date_add(new DateTime("now"), date_interval_create_from_date_string('3 days')), 'Y-m-d'));
					$this->sendemail->enviarEmailRecuperarSenha($_usuario->nome, $_usuario->email, $hash);
					echo json_encode(["code" => "1", "message" => "Link de Recuperação da senha foi enviado em seu E-mail."]);
				} else {
					echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
				}
			} else {
				echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
			}
		} else {
			$this->form_validation->set_rules('hash', '', 'required');
			$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]');			

			if ($this->form_validation->run() === TRUE) {
				$_usuario = $this->accounts->getByHash($this->input->post('hash'));
				if(!empty($_usuario)){
					$this->accounts->changeHash($_usuario->id_usuario);
					$this->accounts->changeSenha($_usuario->id_usuario, md5($this->input->post('senha')));
					echo json_encode(["code" => "1", "message" => "Sua senha foi recuperada com sucesso!"]);
				} else {
					echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
				}
			} else {
				echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
			}
		}
	}

	public function save_settings_profile(){
		$this->form_validation->set_rules('compania', 'Nome da Compania', 'trim|required');
		$this->form_validation->set_rules('biografia', 'Biografia da Carreira', 'trim|required');
		if ($this->form_validation->run() === TRUE){
			$this->accounts->saveSettingsProfile();
			echo json_encode(["code" => "1", "message" => "Perfil alterado com sucesso!"]);
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function save_settings_profile_redesocial(){
		$this->accounts->saveSettingsProfileRedeSocial();
		echo json_encode(["code" => "1", "message" => "Rede Sociais alterado com sucesso!"]);
	}

	public function settings_upload_avatar()
	{
		$this->form_validation->set_rules('image', 'Selecione uma Imagem', 'trim|required');
		if ($this->form_validation->run() == TRUE)
		{
			$data = $_POST["image"];
			$image_settings = explode(";", $data);
			$settings_codeBase64 = $image_settings[1];
			$settings_extensao = $image_settings[0];
			$extensoes = ["jpg","jpeg","png"];
			$ext_arquivo = "";
			foreach ($extensoes as $ext) {
				if (strstr($settings_extensao, $ext)) {
					$ext_arquivo = $ext;
				}
			}
			if (!empty($ext_arquivo)) {
				$arrCodeBase64 = explode(",", $settings_codeBase64);
				$data = base64_decode($arrCodeBase64[1]);
				$imagem_perfil = uniqid(time()) . '.' . $ext_arquivo;
				$this->accounts->saveSettingsAvatar($imagem_perfil);
				if (@file_put_contents(APPPATH."../assets/looper/dist/assets/images/avatars/$imagem_perfil", $data)){
					if($this->account->imagem_perfil != "unknown-profile.jpg")
						unlink(APPPATH."../assets/looper/dist/assets/images/avatars/{$this->account->imagem_perfil}");
					echo json_encode(["code" => "1", "message" => "Imagem enviada com sucesso!", "img" => $imagem_perfil]);
				} else {
					echo json_encode(["code" => "2", "message" => "Erro ao gravar a imagem. Tente novamente em alguns instantes."]);
				}
			} else {
				echo json_encode(["code" => "2", "message" => "Você poderá enviar apenas arquivos *.jpg;*.jpeg;*.png"]);
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function logout_account(){
		$this->session->sess_destroy();
		$this->account = null;
	}
	
	public function login()
	{
		$this->template->addScriptWebapp('js/accounts.js');
		$this->template->show('accounts/accounts/auth-signin-v1', $this->data);
	}

	public function logout()
	{
		$this->logout_account();
		$this->template->show('accounts/logout/auth-signin-v2', $this->data);
	}

	public function forgot($hash = '')
	{
		if(!empty($hash)){
			$_usuario = $this->accounts->getByHash($hash);

			if(!empty($_usuario)){
				if ($_usuario->dt_hash_exp < date("Y-m-d")){
					$this->data['hash_msg'] = 'Sua solicitação para recuperar a senha expirou. <br/> Solicite novamente!';
					$hash = '';
				}
			} else {
				$this->data['hash_msg'] = 'Não existe solicitação para recuperar senha.';
				$hash = '';
			}
		}
		
		$this->data['hash'] = $hash;
		$this->load->view('accounts/forgot/auth-recovery-password', $this->data);
	}

	public function register()
	{
		$this->load->view('accounts/register/auth-signup', $this->data);
		
	}

	public function register_ativado()
	{
		$this->load->view('accounts/includes/header');
		$this->load->view('accounts/register/register_ativado');
		$this->load->view('accounts/includes/footer', $this->data);
	}

	public function continuar()
	{
		if ($this->logged){
			if ($this->account->cadastro_completo == "0"){
				$this->template->addScriptTemplate("bs-stepper.min.js","vendor/bs-stepper/js/",true, true);
				$this->template->addScriptTemplate("toastr.min.js","vendor/toastr/",true, true);
				$this->template->addScriptWebapp("toastr-steps.js");
				$this->template->addScriptWebapp("steps-cadastro.js");
				$this->template->addScriptWebapp("accounts.js");
				$this->template->addScriptWebapp("steps-email-valid.js");
				$this->template->showLoggedNoMenu('accounts/register/continuar', $this->data);
			} else redirect();
		} else redirect();
	}
}