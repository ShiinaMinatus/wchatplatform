<?php


//error_reporting(E_ERROR | E_WARNING | E_PARSE);

/**
 * 路径定义
 */
defined('ROOT_DIR') or define('ROOT_DIR',  getcwd());

defined('WebSiteName') or define('WebSiteName', 'yajie_weixin_crm_new/wchatplatform');

//defined('WebSiteName') or define('WebSiteName', '/wchatplatform');

defined('Config') or define('Config', ROOT_DIR.'/Config');


defined('CONTROLLERS') or define('CONTROLLERS', ROOT_DIR.'/Controllers');

defined('Extends') or define('Extends', ROOT_DIR.'/Extends');

defined('PLUG') or define('PLUG', ROOT_DIR.'/Plug');

defined('INTERFACE') or define('INTERFACE', ROOT_DIR.'/interface');

defined('SmartyDir') or define('SmartyDir', ROOT_DIR.'/Config/Smarty');

defined('LOG_FILE_SIZE') or define('LOG_FILE_SIZE', 2097152); // 日志文件大小限制

defined('LOG_STATE') or define('LOG_STATE', 0);  // 是否开启日志  0为开启 1 为关闭

defined('URL_PATHINFO_DEPR') or define('URL_PATHINFO_DEPR', '/');

defined('URL_MODEL') or define('URL_MODEL', '0'); //url模式 0为默认模式  1 为 pathinfo模式

defined('LIB') or define('LIB', ROOT_DIR.'/Lib/'); 

defined('WebSiteUrl') or define('WebSiteUrl', 'http://' . $_SERVER['HTTP_HOST'] . '/' . WebSiteName);

defined("imageSrc")or define("imageSrc", "weixin_crm/giftImages/");

//defined('WebImageUrl') or define('WebImageUrl', 'http://' . $_SERVER['HTTP_HOST'] . '/'.imageSrc);
defined('WebImageUrl') or define('WebImageUrl', 'http://' . $_SERVER['HTTP_HOST'] . '/' . imageSrc);


defined('WebUploadUrl') or define('WebUploadUrl', 'http://' . $_SERVER['HTTP_HOST'] . '/weixin_crm/images/');

defined('WebSiteUrlPublic') or define('WebSiteUrlPublic', 'http://' . $_SERVER['HTTP_HOST'] . '/' . WebSiteName . '/public');


defined('URL_PATHINFO_FETCH') or define('URL_PATHINFO_FETCH', 'ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL');
/**
 * 关闭报错信息 把报错信息存储到错误文件中
 */
ini_set("display_errors",0);


//defined('APIURL') or define('APIURL', 'http://localhost/yajie_weixin_crm/weixin_api');

defined('APIURL') or define('APIURL', 'http://112.124.25.155/weixin_api');

defined('VAR_MODULE') or define('VAR_MODULE', 'a');

defined('VAR_ACTION') or define('VAR_ACTION', 'v');

defined('VAR_GROUP') or define('VAR_GROUP', 'g');

defined('VAR_CUSTOMIZE') or define('VAR_CUSTOMIZE', 'c');
?>
