<?php
require 'lib/url.php';
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
redirect("?pages=login");


