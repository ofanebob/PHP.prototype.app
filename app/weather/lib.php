<?php

/**
 * Load lib php function
 *
 * @since v1.0
 * @author Ofan Ebob
 * @copyright 2014 Ofan Ebob Studio Web & Design
 */

define('BASEDIR', dirname(__FILE__));

require_once(BASEDIR.'/../../loader.php');

$libs = array(	'array.convert',
				'curl',
				'wu.forecast',
				'color.temp',
				'daynight.io'
			);

return Libs::loader_3rd($libs);
?>