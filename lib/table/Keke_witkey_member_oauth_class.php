<?php
class Keke_witkey_member_oauth_class{
	public $_db;
	public $_tablename;
	public $_dbop;
	public $_id;
	public $_bind_key;
	public $_cache_config = array ('is_cache' => 0, 'time' => 0 );
	public $_replace=0;
	public $_where;
	function  keke_witkey_member_oauth_class(){
	public function getId(){
	public function getBind_key(){
		return $this->_bind_key ;
	}
	public function setId($value){
	public function setBind_key($value){
		$this->_bind_key = $value;
	}
	public  function __set($property_name, $value) {
		$this->$property_name = $value;
	}
	public function __get($property_name) {
		if (isset ( $this->$property_name )) {
			return $this->$property_name;
		} else {
			return null;
		}
	}
	
		if(!is_null($this->_bind_key)){
			$data['bind_key']=$this->_bind_key;
		}
	
		if(!is_null($this->_bind_key)){
			$data['bind_key']=$this->_bind_key;
		}
	
	
	
}
?>