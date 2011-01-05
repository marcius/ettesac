<?php
$dir = dirname(__FILE__);
$yiifwpath_115 = $dir . '/../../yii-1.1.5.r2654';
$yiifwpath = (getenv('YII_FW_PATH') ? getenv('YII_FW_PATH') : $yiifwpath_115);
defined('YII_DEBUG') or define('YII_DEBUG', true);

#must be included before Yii to define YII_DEBUG, YII_TRACE_LEVEL
$configMain = require($dir . '/protected/config/main.php');
$configServer = (getenv('APPLICATION_ENV') 
        ? include($dir . '/protected/config/server_' . getenv('APPLICATION_ENV') . '.php')
        : array()
        );
  
require_once($yiifwpath . '/framework/yii.php'); # defined in config/server.*.php or via Apache
$config = CMap::mergeArray($configMain, $configServer);

function xlog($msg,$level=CLogger::LEVEL_INFO,$category='application')
	{
	if(false===is_string($msg))
		$msg=var_export($msg,true);
	Yii::log($msg,$level,$category);
	}  

Yii::createWebApplication($config)->run();
