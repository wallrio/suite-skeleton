<?php

class _Control extends _Model{
	function __construct(){

	}
	public function control($args){

		$appUrl = Suite_globals::get('app/url');
		
		$defaultCss = $appUrl . '_assets/css/default.css';
		$menuCss = $appUrl . '_assets/css/menu.css';
		$menuFooterCss = $appUrl . '_assets/css/menu-footer.css';
		$responsibleCss = $appUrl . '_assets/css/responsible.css';
		$styleCss = $appUrl . '_assets/css/style.css';

		$defaultJs = $appUrl . '_assets/js/default.js';

		return array(
			'replace'=>array(
				'{suite:version}' => suite_version
			),			
			'register'=>array(
				array('link'=>array('parameters'=>array('href'=>$responsibleCss,'rel'=>'stylesheet'),'into'=>'head')),								
				array('link'=>array('parameters'=>array('href'=>$defaultCss,'rel'=>'stylesheet'),'into'=>'head')),								
				array('link'=>array('parameters'=>array('href'=>$menuCss,'rel'=>'stylesheet'),'into'=>'head')),								
				array('link'=>array('parameters'=>array('href'=>$menuFooterCss,'rel'=>'stylesheet'),'into'=>'head')),								
				array('link'=>array('parameters'=>array('href'=>$styleCss,'rel'=>'stylesheet'),'into'=>'head')),								
				array('script'=>array('parameters'=>array('src'=>$defaultJs),'into'=>'head')),
			)		
		);
	}

}