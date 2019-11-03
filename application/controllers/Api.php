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
  
  /* funções da Tela de doação */
  public function finalizaDoacao(){
    $this->projetos->finalizaDoacao();
  }
  
  public function createDoador(){
    if($this->input->post()){
      $this->projetos->insertDoador();
    }
  }
  
  public function getDoador(){
    $this->projetos->getDoador();
  }
  
  public function createCart(){
    if($this->input->post()){
      $this->projetos->insertCart();
    }
  }
  
  public function getCarts(){
    $this->projetos->getCarts();
  }
  
  public function deleteCart(){
    if($this->input->post()){
      $this->projetos->deleteCart();
    }
  }

  public function hasCarts(){
    $this->projetos->hasCarts();
  }

  public function buscaRG($rg){
    $this->projetos->getDoadorPorRG($rg); 
  }
}