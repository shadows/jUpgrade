<?php
/**
 * jUpgrade
 *
 * @author      Matias Aguirre
 * @email       maguirre@matware.com.ar
 * @url         http://www.matware.com.ar
 * @license     GNU/GPL
 */

define( '_JEXEC', 1 );
define( 'JPATH_BASE', dirname(__FILE__) );
define( 'DS', DIRECTORY_SEPARATOR );

require_once ( JPATH_BASE .DS.'defines.php' );
require_once ( JPATH_LIBRARIES .DS.'joomla'.DS.'methods.php' );
require_once ( JPATH_LIBRARIES .DS.'joomla'.DS.'factory.php' );
require_once ( JPATH_LIBRARIES .DS.'joomla'.DS.'import.php' );
require_once ( JPATH_LIBRARIES .DS.'joomla'.DS.'error'.DS.'error.php' );
require_once ( JPATH_LIBRARIES .DS.'joomla'.DS.'base'.DS.'object.php' );
require_once ( JPATH_ADMINISTRATOR .DS.'components'.DS.'com_jupgrade'.DS.'helpers'.DS.'install.php' );
require_once ( JPATH_ADMINISTRATOR .DS.'components'.DS.'com_jupgrade'.DS.'helpers'.DS.'configuration.php' );
require(JPATH_ROOT.DS."configuration.php");

$jconfig = new JConfig();
$jconfig->dbprefix = "j16_";

if (JInstallationModelConfiguration::_createConfiguration($jconfig) > 0 ) {
	return 0;
}else{
	return 1;
}
?>