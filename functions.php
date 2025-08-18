<?php

if (!defined('IS_DEV')) {
	define('IS_DEV', false);
}

require_once 'include/vendor/lightncandy/loader.php';

if (is_admin()) {
	require_once 'include/vendor/class-tgm-plugin-activation.php';
}

function startsWith($haystack, $needle)
{
	$length = strlen($needle);

	return (substr($haystack, 0, $length) === $needle);
}


function endsWith($haystack, $needle)
{
	$length = strlen($needle);
	if ($length == 0) {
		return true;
	}

	return (substr($haystack, -$length) === $needle);
}


require_once 'include/wp/SimpleAdminNotice.php';
require_once 'include/wp/TransientCache.php';
require_once 'include/wp/AbstractSite.php';
require_once 'include/wp/AbstractSiteModel.php';
require_once 'include/wp/WPMenuBuilder.php';

require_once 'include/wp/HandlebarsRenderer.php';

require_once 'include/utils/getVar.php';
require_once 'include/utils/getFilesRecursive.php';

require_once 'include/io/decoders/IDecoder.php';
require_once 'include/io/decoders/JSONDecoder.php';
require_once 'include/io/encoders/IEncoder.php';
require_once 'include/io/encoders/JSONEncoder.php';

require_once 'include/io/JSONResponse.php';
require_once 'include/net/HTTPHeaders.php';
require_once 'include/net/URL.php';
require_once 'include/net/Session.php';

require_once 'include/TemplateFunctions.php';

if (!function_exists('l')) {
	function l( string $msg ): void {
		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			error_log( $msg );
		}
	}
}

function kettutesti_log_messages( string ...$message ): void {
	error_log( implode( PHP_EOL, $message ) );
}

require_once 'include/SiteModel.php';
require_once 'include/Site.php';


global $site;
$site = new Site(IS_DEV);
