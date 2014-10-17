<?php

defined('APPLICATION_PATH')||define('APPLICATION_PATH',realpath(dirname(__FILE__).'/../application'));

defined('APPLICATION_ENV')|| define('APPLICATION_ENV',(getenv('APPLICATION_ENV')?getenv('APPLICATION_ENV'):'production'));

set_include_path(implode(PATH_SEPERATOR,array(realpath(APPLICATION_PATH.'/../library'),get_include_path())));

require_once 'Zend/Application.php';

$application = new Zend_Application(APPLICATION_ENV,APPLICATION_PATH.'/configs/application.ini');

define('BASEURL','http://localhost/zendpro/public');

$application->bootstrap()->run();




?>