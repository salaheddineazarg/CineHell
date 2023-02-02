<?php


define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname("CINEHALL-BE").DS);
define("controller",ROOT_PATH.'CONTROLLER'.DS);
define("model",ROOT_PATH.'MODEL'.DS);
define("view",ROOT_PATH.'VIEW'.DS);

define('BURL',"http://localhost/CINEHALL-BE/");
require (ROOT_PATH.'/model/database.php');

$modules = [ROOT_PATH,controller,model,view];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');

new routing();
?>