<!DOCTYPE html>
<html lang="en-GB">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Log In &lsaquo; University website &#8212; WordPress</title>
	<meta name="robots" content="noindex, nofollow, noarchive">
<link rel="stylesheet" id="dashicons-css" href="./wp-includes/css/dashicons.min.css?ver=6.1.1" type="text/css" media="all">
<link rel="stylesheet" id="buttons-css" href="./wp-includes/css/buttons.min.css?ver=6.1.1" type="text/css" media="all">
<link rel="stylesheet" id="forms-css" href="./wp-admin/css/forms.min.css?ver=6.1.1" type="text/css" media="all">
<link rel="stylesheet" id="l10n-css" href="./wp-admin/css/l10n.min.css?ver=6.1.1" type="text/css" media="all">
<link rel="stylesheet" id="login-css" href="./wp-admin/css/login.min.css?ver=6.1.1" type="text/css" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
	<link rel="icon" href="./wp-content/uploads/2023/01/cropped-508970-32x32.png" sizes="32x32">
<link rel="icon" href="./wp-content/uploads/2023/01/cropped-508970-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="./wp-content/uploads/2023/01/cropped-508970-180x180.png">
<meta name="msapplication-TileImage" content="./wp-content/uploads/2023/01/cropped-508970-270x270.png">
	</head>
	<body class="login no-js login-action-login wp-core-ui  locale-en-gb">
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div id="login">
		<h1><a href="https://en-gb.wordpress.org/">Powered by WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="http://university/wp-login.php" method="post">
			<p>
				<label for="user_login">Username or Email Address</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Password</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Remember Me</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In">
									<input type="hidden" name="redirect_to" value="http://university/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a href="./?action=lostpassword">Lost your password?</a>			</p>
					<script type="text/javascript">function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }</script>
				<p id="backtoblog">
			<a href="./index.html">&larr; Go to University website</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">Language</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="en_GB" lang="en" selected data-installed="1">English (UK)</option>
<option value="ru_RU" lang="ru" data-installed="1">Русский</option></select>
					
					
					
						<input type="submit" class="button" value="Change">

					</form>
				</div>
				<script type="text/javascript" src="./wp-includes/js/jquery/jquery.min.js?ver=3.6.1" id="jquery-core-js"></script>
<script type="text/javascript" src="./wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script type="text/javascript" id="zxcvbn-async-js-extra">
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"http://university/wp-includes/js/zxcvbn.min.js"};
/* ]]> */
</script>
<script type="text/javascript" src="./wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script type="text/javascript" src="./wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="./wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" src="./wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
<script type="text/javascript" src="./wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">wp.i18n.setLocaleData( { 'text directionu0004ltr': [ 'ltr' ] } );</script>
<script type="text/javascript" id="password-strength-meter-js-extra">
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type="text/javascript" id="password-strength-meter-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-11-10 21:58:00+0000","generator":"GlotPress/4.0.0-alpha.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"en_GB"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code."]}},"comment":{"reference":"wp-admin/js/password-strength-meter.js"}} );</script>
<script type="text/javascript" src="./wp-admin/js/password-strength-meter.min.js?ver=6.1.1" id="password-strength-meter-js"></script>
<script type="text/javascript" src="./wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"/wp-admin/admin-ajax.php"}};
/* ]]> */
</script>
<script type="text/javascript" src="./wp-includes/js/wp-util.min.js?ver=6.1.1" id="wp-util-js"></script>
<script type="text/javascript" id="user-profile-js-extra">
/* <![CDATA[ */
var userProfileL10n = {"user_id":"0","nonce":"786cd1f528"};
/* ]]> */
</script>
<script type="text/javascript" id="user-profile-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2022-11-10 21:58:00+0000","generator":"GlotPress/4.0.0-alpha.3","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"en_GB"},"Your new password has not been saved.":["Your new password has not been saved."],"Show":["Show"],"Hide":["Hide"],"Confirm use of weak password":["Confirm use of weak password"],"Hide password":["Hide password"],"Show password":["Show password"]}},"comment":{"reference":"wp-admin/js/user-profile.js"}} );</script>
<script type="text/javascript" src="./wp-admin/js/user-profile.min.js?ver=6.1.1" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>