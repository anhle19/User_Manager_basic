<?php
require 'lib/system.php';
require 'lib/url.php';
require 'lib/validation.php';

if (isset($_POST['btn-login'])) {
    $error = array();

    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống Tên đăng nhập";
    } else {
        if (!is_Username($_POST['username'])) {
            $error['username'] = "Không đúng định dạng";
        } else {
            $username = $_POST['username'];
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống Mật khẩu";
    } else {
        if (!is_Password($_POST['password'])) {
            $error['password'] = "Không đúng định dạng";
        } else {
            $password = $_POST['password'];
        }
    }

    if (empty($error)) {
        if (check_Login($username, $password)) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            redirect('?pages=home');
        } else {
            $error['account'] = "Tên đăng nhập hoặc Mật khẩu không chính xác";
        }
    }
}
?>

<html>
    <head>
        <title>Trang đăng nhập</title>
        <link href="public/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page_title">ĐĂNG NHẬP</h1>
            <form id="form-login" action="" method="POST">
                <input id="username" type="text" name="username" placeholder="Username" />
                <p class="error"><?php form_error('username'); ?></p>
                <input id="password" type="password" name="password" placeholder="Password"/>
                <p class="error"><?php form_error('password'); ?></p>
                <input id="btn-login" type="submit" name="btn-login" value="Đăng nhập"/>
                <p class="error"><?php form_error('account'); ?></p>
            </form>
            <a id="lost-pass" href="">Quên mật khẩu?</a>
        </div>

    </body>
</html>




