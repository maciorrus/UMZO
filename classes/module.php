<?php

require_once './config/db.php';

abstract class module{
	
	protected $settings;
	
	protected function __construct($id) {
		
		$db = new DB();
		$settings_saved = $db->query("SELECT module_settings.settings, active_modules.position FROM module_settings INNER JOIN active_modules ON active_modules.id = module_settings.active_module_id WHERE module_settings.active_module_id = $id", null);
		
		if(count($settings_saved) == 0){
			unset ($this->settings);
		}else{
			$this->settings['position'] = $settings_saved[0]['position'];
			$config = explode(";", $settings_saved[0]['settings']);
			foreach ($config as $conf){
				$row = explode("=", $conf);
				if($this->settings[$row[0]]==null){
					$this->settings[$row[0]] = $row[1];
				}else{
					$this->settings[$row[0]] = $this->settings[$row[0]].";".$row[1];
				}
			}
		}
			
		$this->settings['id'] = $id;
	}
	
	abstract function print_out();
	abstract public function valid_positions();
	
}

class module_creator{
	
	private $module_list;
	
	public function __contruct(){
		
		$this->module_list = null;
		
	}
	
	public function add($s, $constructor){
		
		$this->module_list[$s] = $constructor;
		
	}
	
	public function create($class_name,$x){
		
		return $this->module_list[$class_name]->create($x);
		
	}
}

