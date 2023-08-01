<?php

require 'data/users.php';

#Kiểm tra thông tin đăng nhập

function check_Login($username, $password) {
    global $list_users;
    foreach ($list_users as $user) {
        if ($username == $user['username'] && md5($password) == $user['password']) {
            return true;
        }
    }
    return false;
}

#Kiểm tra trạng thái login được lưu trong Session

function is_Login() {
    if (isset($_SESSION['is_login'])) {
        return true;
    }
    return false;
}

#Lấy tên đăng nhập

function user_login() {
    if (is_Login()) {
        echo $_SESSION['user_login'];
    } else {
        echo "Admin";
    }
}
