<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		if(isset($this->subdomain_account)){
			print_r($this->subdomain_account);
		} else {
			$this->template->show('main_page', $this->data);
			
			//$this->template->show('welcome_message', $this->data);
		}
	}
}