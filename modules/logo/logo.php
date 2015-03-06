<?php

require_once './config/db.php';
require_once './classes/module.php';

class logo_module extends module{
	
	public function __construct($id = null) {
		if($id != null){
			parent:: __construct($id);
			$this->settings['id'] = $id;
		}
	}
	
	public function set_img($img_name){
		
		$this->settings['img'] = $img_name;
		$db = new DB();
		$db->query("UPDATE module_settings SET img = $img_name WHERE id = $id", null);
		
	}
	
	public function print_out(){
		
		$styles = '';
		if($this->settings['style']!= null) $styles = $this->settings['style'].';';
		
		echo '<img src="img/gallery/'.$this->settings['img'].'" class="logo" style="'.$styles.'" />';
		
	}
	
	public function valid_positions(){
		
		return array('top', 'top_left', 'top_right', 'top_2nd');
		
	}
	
	function create($x){
		
		return new logo_module($x);
		
	}
	
}

$module_creator->add('logo', new logo_module()); 
?>