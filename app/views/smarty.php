<?php
class SmartyView extends View {
	function __construct(&$controller) {
		parent::__construct($controller);
		$this->smarty = &new Smarty();
		$this->ext = ".tpl";
		$this->smarty->plugins_dir[] = VIEWS . "smarty_plugins" . DS;
		$this->smarty->compile_dir = TMP . "smarty" . DS . "compile" . DS;
		$this->smarty->cached_dir = TMP . "smarty" . DS . "cache" . DS;
		$this->smarty->error_reporting = "E_ALL";
		$this->smarty->debugging = true;
	}

	
}
?>