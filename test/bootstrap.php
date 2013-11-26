<?php

// disable Yii error handling logic
defined('YII_ENABLE_EXCEPTION_HANDLER') or define('YII_ENABLE_EXCEPTION_HANDLER',false);
defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER',false);
$yiit = realpath(__DIR__.'/../../lib/yii-1.1.13/yii.php');

//$config = realpath(__DIR__.'/../config/'.strtolower(APPLICATION_ENV).'/test.php');

require_once($yiit);
//require_once(__DIR__.'/WebTestCase.php');

Yii::createWebApplication();
