<?php

// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Le casette di Lulu',
    'theme' => 'ellabullis',
    'language' => 'it',
    'sourceLanguage' => 'en',
    'preload' => array('log'),
    //'preload' => array('log', 'ELangHandler'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.extensions.yiidebugtb.*',
    ),
    'modules' => array(
    // uncomment the following to enable the Gii tool
    /*
      'gii'=>array(
      'class'=>'system.gii.GiiModule',
      'password'=>'Enter Your Password Here',
      ),
     */
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        /*
          'urlManager' => array(
          'class' => 'application.extensions.langhandler.ELangCUrlManager',
          'urlFormat' => 'path',
          'showScriptName' => false,
          'rules' => array(
          '<lang:(en|it|it_it|de)>/<_c>/<_a>/' => '<_c>/<_a>',
          //'<lang:(en|it|de)>/<_c>/<_a>/*' => '<_c>/<_a>/',
          //'<lang:a-z{2}_a-z{2,}>/<_m>/<_c>/<_a>' => '<_m>/<_c>/<_a>'
          ),
          ),
         */
        // uncomment the following to enable URLs in path-format

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
        ),
        // uncomment the following to use a MySQL database
        /*
          'db'=>array(
          'connectionString' => 'mysql:host=localhost;dbname=testdrive',
          'emulatePrepare' => true,
          'username' => 'root',
          'password' => '',
          'charset' => 'utf8',
          ),
         */
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                /* 'filter' => 'CLogFilter', */
                /* 'levels' => 'error, warning', */
                ),
                array(
                    'class' => 'XWebDebugRouter',
                    'config' => 'alignLeft, opaque, runInDebug, fixedPos',
                    'levels' => 'error, warning, trace, profile, info'
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        'ELangHandler' => array(
            'class' => 'application.extensions.langhandler.ELangHandler',
            'languages' => array('en', 'it', 'it_it', 'de', 'es', 'fr'),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);