<?php 
 
// Database configuration    
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'u685429824_myhealthxdiet'); 
define('DB_PASSWORD', 'myhealthxdiet@sTyajit@123'); 
define('DB_NAME', 'u685429824_myhealthxdiet'); 
 
// Google API configuration 
define(
	'GOOGLE_CLIENT_ID', '1079931727369-3ugqirugj0f4sv99n6ftgf1trbd06n1i.apps.googleusercontent.com'
); 
define('GOOGLE_CLIENT_SECRET', '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'); 
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar'); 
define('REDIRECT_URI', 'https://myhealthxdiet.com/Calender/google_calendar_event_sync.php'); 
 
// Start session 
if(!session_id()) session_start(); 
 
// Google OAuth URL 
echo $googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=1079931727369-3ugqirugj0f4sv99n6ftgf1trbd06n1i.apps.googleusercontent.com&access_type=online'; 
 die();
?>