<?php 

	class AppModel extends Model {
		var $actsAs = array('Containable');
		
		function getEnumValues($table, $field = NULL){
			if($field != NULL){
				return $this->query("SHOW COLUMNS FROM '$table' LIKE '$field'");
			}
			else 
				debug($this->query("SHOW COLUMNS FROM $table WHERE type LIKE 'enum%'")); die;
				return null;
		}
	}
	


?>