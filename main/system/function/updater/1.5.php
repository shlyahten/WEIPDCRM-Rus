<?php
if(!defined('IN_DCRM')) exit('Access Denied');
if($current_version == '1.5.15.3.8' or $current_version == '1.5' ){
	define('ORIG_CONF_PATH', ROOT.'manage/include/');
	define('NEW_CONF_PATH', ROOT.'system/config/');
	// Copy config file
	copy(ORIG_CONF_PATH.'autofill.inc.php', NEW_CONF_PATH.'autofill.inc.php');
	copy(ORIG_CONF_PATH.'config.inc.php', NEW_CONF_PATH.'config.inc.php');
	copy(ORIG_CONF_PATH.'connect.inc.php', NEW_CONF_PATH.'connect.inc.php');
	copy(ORIG_CONF_PATH.'gnupg.inc.php', NEW_CONF_PATH.'gnupg.inc.php');
	if(file_exists(ORIG_CONF_PATH.'release.save'))
		copy(ORIG_CONF_PATH.'release.save', NEW_CONF_PATH.'release.save');
	// Chmod
	if ( file_exists(NEW_CONF_PATH.'config.inc.php') && file_exists(NEW_CONF_PATH.'autofill.inc.php') && file_exists(NEW_CONF_PATH.'connect.inc.php') && file_exists(NEW_CONF_PATH.'gnupg.inc.php') ){
		chmod(NEW_CONF_PATH.'autofill.inc.php', 0666 );
		chmod(NEW_CONF_PATH.'config.inc.php', 0666 );
		chmod(NEW_CONF_PATH.'connect.inc.php', 0666 );
		chmod(NEW_CONF_PATH.'gnupg.inc.php', 0666 );
		if(file_exists(NEW_CONF_PATH.'release.save'))
			chmod(NEW_CONF_PATH.'release.save', 0666 );
	}
	deldir(ORIG_CONF_PATH);
	deldir(ROOT.'init/');
	deldir(ROOT.'lang/');
	update_final('1.6.15.3.12');
}