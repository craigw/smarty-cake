<?php
class SampleController extends AppController {

	var $name = 'Sample';
	var $uses = null;

	public function index() {
		return "Hi!";
	}
}
?>