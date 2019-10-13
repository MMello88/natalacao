<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MY_Controller {

	public function getPagina($slug = '')
	{
    	$this->api->getPagina($slug);
	}
  
	public function getPaginaCampos($slug)
	{
    	$this->api->getPaginaCampos($slug);
	}
  
	public function getProjetos(){
		$this->api->getProjetos();
	}
}