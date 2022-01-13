<?php

const DS = DIRECTORY_SEPARATOR;
define("ROOT_PATH" , dirname(__DIR__).DS);
const APP = ROOT_PATH . 'app' . DS;
const CORE = APP . 'core' . DS;
const CONFIG = APP . 'config' . DS;
const CONTROLLERS = APP . 'controllers' . DS;
const MODELS = APP . 'models' . DS;
const VIEWS = APP . 'views' . DS;
const LIBS = APP . 'libs' . DS;
const UPLOADS = ROOT_PATH . 'public' . DS . 'uploads' . DS;

require_once (CONFIG.'Config.php');
// autoload for all classes
$modules = [ROOT_PATH , APP , CORE , VIEWS , CONTROLLERS , MODELS  , CONFIG . LIBS];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload' , false);

