

<?php

session_start();
ob_start();
$page = !empty($_GET['pages']) ? $_GET['pages'] : 'home';
$path = "pages/{$page}.php";
if (file_exists($path)) {
    require $path;
} else {
    get_404();
}
?>


