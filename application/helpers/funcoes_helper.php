<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function tira_acento_espaco($variavel){
	$procurar 	= array('à','ã','â','é','ê','í','ó','ô','õ','ú','ü','ç',);
	$substituir = array('a','a','a','e','e','i','o','o','o','u','u','c',);
	$variavel = strtolower($variavel);
	$variavel	= str_replace($procurar, $substituir, $variavel);
	$variavel = htmlentities($variavel);
    $variavel = preg_replace("/&(.)(acute|cedil|circ|ring|tilde|uml);/", "$1", $variavel);
    $variavel = preg_replace("/([^a-z0-9]+)/", "_", html_entity_decode($variavel));
    return trim($variavel, "_");
}

function base_url_webapp($uri = '', $protocol = NULL) {
	$CI =& get_instance();

	$uri = 'assets/webapp/' . $uri;

	return $CI->config->base_url($uri, $protocol);
}

function nome_projeto(){
  return "Natal em Ação";
}

function is_set($array, $param){
  return isset($array[$param]) ? $array[$param] : "";
}