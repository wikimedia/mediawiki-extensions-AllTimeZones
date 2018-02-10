<?php
/**
 * AllTimeZones - this extension lets you put dates in all timezones in a page
 *
 * To activate this extension, add the following into your LocalSettings.php file:
 * require_once('$IP/extensions/AllTimeZones.php');
 *
 * @ingroup Extensions
 * @author Nischay Nahata <nischayn22@gmail.com>
 * @link https://www.mediawiki.org/wiki/Extension:AllTimeZones
 */

/**
 * Protect against register_globals vulnerabilities.
 * This line must be present before any global variable is referenced.
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'AllTimeZones' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['AllTimeZones'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the AllTimeZones extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the AllTimeZones extension requires MediaWiki 1.25+' );
}
