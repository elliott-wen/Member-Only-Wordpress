<?php
/*
Plugin Name: Member-Only-Wordpess
Plugin URI: http://www.wenjiaqi.tk
Description: A plugin make you website only accessible by the member, changing your wordpress into private blog.
Version: 1.0
Author: MPhil Wen
Author URI: http://www.wenjiaqi.tk
*/

/**
 * Notify Everyone when update occors.
*/

$enableACL=true;
if($enableACL){	require_once('acl.php');}

?>