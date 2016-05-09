<?php

$dir = basename(dirname(__FILE__));
if($dir != "zenmessage") {
	user_error('Directory name must be "zenmessage" (currently "'.$dir.'")',E_USER_ERROR);
}
