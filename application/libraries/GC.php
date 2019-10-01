<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include(APPPATH . 'libraries/GroceryCrudEnterprise/autoload.php');
use GroceryCrud\Core\GroceryCrud;

class GC {

	protected $CI;

    protected $data;
	
	protected $tabela;
    
    public $crud;

    public $output;

    public function __construct()
    {
        $this->CI =& get_instance();
        //$this->CI->output->enable_profiler(TRUE);
    }
	
    private function _getDbData() {
        $db = [];
        include(APPPATH . 'config/database.php');
        return [
            'adapter' => [
                'driver' => 'Pdo_Mysql',
                'host'     => $db['default']['hostname'],
                'database' => $db['default']['database'],
                'username' => $db['default']['username'],
                'password' => $db['default']['password'],
                'charset' => 'utf8'
            ]
        ];
    }
	
	private function _getGroceryCrudEnterprise($bootstrap = true, $jquery = true) {
        $db = $this->_getDbData();
        $config = include(APPPATH . 'config/gcrud-enteprise.php');
        $groceryCrud = new GroceryCrud($config, $db);
        return $groceryCrud;
    }
    
    public function get($tabela){		
        $this->crud = $this->_getGroceryCrudEnterprise();
        $this->crud->setTable($tabela->tabela);
        $this->crud->setSubject($tabela->subject, '');

		$this->crud->columns($columns);
        $this->crud->displayAs($displayAs);
        $this->crud->addFields($addFields);
        $this->crud->editFields($editFields);
        $this->crud->readFields($readFields);
        $this->crud->uniqueFields($uniqueFields);
        $this->crud->readOnlyFields($readOnlyFields);
        $this->crud->requiredFields($requiredFields);
        $this->crud->setTexteditor($setTexteditor);
        $this->crud->where([$tabela->tabela.'.id_usuario_pai' => $this->CI->session->userdata('session_account')['id_usuario_pai']]);
        
        //$this->crud->unsetJquery();

        return $this;
    }

    public function render(){
        $this->output = $this->crud->render();
        
        if (isset($this->output->isJSONResponse) && $this->output->isJSONResponse) {
            header('Content-Type: application/json; charset=utf-8');
            echo $this->output->output;
            exit;
        }

        return $this;
    }
}