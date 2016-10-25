<?php
/*FlameCMS CHECK*/
defined('FlameCMS') OR exit('No script Cuddies');
Class Initiator{
	function init(){
		//$this->system();
		$this->setting_up();
	}
	function setting_up(){
		$sys=&get_inst();
		$sys->load->library(array(
			'System/Trigger'=>'trigger'
		));
		/*If config File Does not exists, Trigger Installer*/
		if(!file_exists(BASEPATH.'/config.php')){
			get_inst()->trigger->install();
		}
		/*Ignore CodeIgnither Configs (the are still Called, but, not used)*/
		else{
			require_once(BASEPATH.'/config.php');
			$this->configs();
		}
	}
	function configs(){
		/*Initiate The Configurations*/
		/*They will be in parent_child format, on the DB, so we can load "per parent" configuration*/
	}
	private function wind_configuration($configs){
		$confs=System::$configuration;
		/*
		**************************************
		** To Check:
		**************************************
		** The System configuration Table
		** The Servers Table
		** The Realms Table
		**************************************
		*/
		
		
		
		System::$configuration=$confs;
	}
}