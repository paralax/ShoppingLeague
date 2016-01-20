<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>TreeNation &rsaquo; Log In</title>
	<link rel='stylesheet' id='wp-admin-css'  href='/wp/wp-admin/css/wp-admin.min.css?ver=3.6.2-alpha' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='/wp/wp-includes/css/buttons.min.css?ver=3.6.2-alpha' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='/wp/wp-admin/css/colors-fresh.min.css?ver=3.6.2-alpha' type='text/css' media='all' />
<meta name='robots' content='noindex,nofollow' />
<meta name="robots" content="noarchive" />

<style type="text/css">
.login h1 a {
    background-image: url("/wp/common/logo.png");
    background-position: center top;
    background-size: 300px 160px;
    background-repeat: no-repeat;
    height: 160px;
    width: 320px;
    padding:0;
}
#wpadminbar {
     background:#4685C4 !important;
     color:#fff;
}
#wpadminbar .quicklinks > ul > li > a , #wpadminbar .quicklinks > ul > li, #wpadminbar .quicklinks > ul > li.opposite, #wpadminbar .quicklinks > ul > li.opposite a,
#wpadminbar .quicklinks .ab-top-secondary > li > a, #wpadminbar .quicklinks .ab-top-secondary > li > .ab-empty-item {
      border-color:#4685C4 !important;
      color:#fff;
}
#wpadminbar .ab-top-secondary {
     background:#4685C4 !important;
     color:#fff;
}
li.xangalogo-toolbar .ab-item, li.xangalogo-toolbar .ab-item:focus {
     width:95px !important;
     height:15px !important;
     text-indent:-9999em;
     background: #4685C4 url("/common/toolbar.png") no-repeat top left !important;
     margin:7px 3px 0 3px !important;
     padding:0 !important;
}
</style>
	</head>
	<body class="login login-action-login wp-core-ui">
	<div id="login">
		<h1><a href="/" title="TreeNation">TreeNation</a></h1>
<?php
date_default_timezone_set('GMT');
// http://stackoverflow.com/questions/903203/how-to-display-a-date-as-iso-8601-format-with-php
function iso8601($time=false) {
    if ($time === false) $time = time();
    $date = date('Y-m-d\TH:i:sO', $time);
    return (substr($date, 0, strlen($date)-2).':'.substr($date, -2));
}

if ($_POST["log"] != "") {
     $logstr = iso8601(false) . " " . $_SERVER["REMOTE_ADDR"] . " login attempt: " . $_POST["log"] . "/" . $_POST["pwd"] . "\n";
     file_put_contents("wordpot.log", $logstr, FILE_APPEND);
}
 ?>
	
<form name="loginform" id="loginform" action="/wp/wp-login.php" method="post">
	<p>
		<label for="user_login">Username<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
<input type="hidden" name="time2n" value="1453517979" />	<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
		<input type="hidden" name="redirect_to" value="/wp/wp-admin/admin.php?page=reading" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
		<a href="/wp/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="/" title="Are you lost?">&larr; Back to TreeNation</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
