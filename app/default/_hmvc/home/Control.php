<?php

class Control{

	public function indexAction(){		
		
		$appDir = Suite_globals::get('app/dir');
		$appUrl = Suite_globals::get('app/url');
		$actionPath = Suite_globals::get('http/action');

		$baseJs = $appUrl . '_hmvc/'.$actionPath.'/_assets/js/home.js';
	
		return array(
			'register' => array(
				array('script'=>array('parameters'=>array('src'=>$baseJs,'type'=>'text/javascript'),'into'=>'footer','version'=>'1.11.3')),
			)
		);
	}	
}