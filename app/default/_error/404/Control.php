<?php

class Control extends Model{

	function __construct(){
		
	}

	public function indexAction(){
		
		$appUrl = Suite_globals::get('app/url');

		$js = $appUrl . '_assets/js/default.js';
		
		
		return array(
			'replace'=>array(
				'{error}' => '404'
			)	
		);
	}
}