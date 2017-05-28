<?php

/*
 * Suite Framework
 * ================
 * suite.wallrio.com
 *
 * This file is part of the Suite Core.
 *
 * Wallace Rio <wallacerio@wallrio.com>
 * 
 */


if (version_compare(phpversion(), '5.3.0', '<'))
	require dirname(__FILE__).'/libs/wallrio/suite/Suite.php';
else
	require 'vendor/autoload.php';

echo Suite::load();




