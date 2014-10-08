<?php namespace D3Catalyst\Caching;

class Caching
{
	// Apuntador para phpfastcache
	private $pfc = NULL;

	// Constructor
	public function __construct(){
		\phpFastCache::setup("storage","files");
		\phpFastCache::setup("path", storage_path() . '/cache/'); 
		$this->pfc = \phpFastCache();
	}

	// Llamada de funcion no estatica
	public function __call($func, $params) {
		if(method_exists($this->pfc,$func)) {
			return call_user_func_array(array($this->pfc,$func),$params);
		} else {
			return "La funcion no existe en phpfastcache";
		}
    }

}