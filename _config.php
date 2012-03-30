<?php

$dir = basename(dirname(__FILE__));
if($dir != "zenmessage") {
	user_error('Directory name must be "zenmessage" (currently "'.$dir.'")',E_USER_ERROR);
}

// Add this line to your site if you want to use the default css

//Requirements::css('zenmessage/css/zenmessage.css');