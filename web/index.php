<?php

$dir = dirname(__FILE__);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

$yiifwpath_115 = $dir . '/../../yii-1.1.5.r2654';
$yiifwpath = (getenv('YII_FW_PATH') ? getenv('YII_FW_PATH') : $yiifwpath_115);

$environment = (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'prod');

$configMain = include $dir . '/protected/config/main.php';
#must be included before Yii to define YII_DEBUG, YII_TRACE_LEVEL
$configServer = include $dir . '/protected/config/server_' . $environment . '.php';

require_once($yiifwpath . '/framework/yii.php'); # defined in config/server.*.php or via Apache
$config = CMap::mergeArray($configMain, $configServer);

Yii::createWebApplication($config)->run();
/*


  # Used only for including corresponding
  # server configuration file,
  # can be predefined by Apache
  # (SetEnv APPLICATION_ENV "production")
  # ['local' | 'dev' | 'production']
  defined('APPLICATION_ENV') or define('APPLICATION_ENV','local');


  $configMain = include dirname(__FILE__).'/protected/config/main.php';
  #must be included before Yii to define YII_DEBUG, YII_TRACE_LEVEL
  $configServer = include dirname(__FILE__)
  .'/protected/config/server.'
  .APPLICATION_ENV
  .'.php';

  require_once(YII_INCLUDE_PATH); # defined in config/server.*.php or via Apache
  $config = CMap::mergeArray($configMain,$configServer);





  $dir=dirname(__FILE__);
  $localconf=require($dir.'/protected/config/dev.php');

  // Yii is in my php include path...
  require_once('yii-1.0.10/yii.php');
  require_once($dir.'/protected/helpers/globals.php');

  $config=CMap::mergeArray(require($dir.'/protected/config/main.php'),$localconf);
  Yii::createWebApplication($config)->run();
 *
 */