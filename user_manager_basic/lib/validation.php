<?php

#Kiểm tra định dạng username

function is_Username($username) {
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (preg_match($pattern, $username)) {
        return true;
    }return false;
}

#Kiểm tra định dạng password

function is_Password($password) {
    $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (preg_match($pattern, $password)) {
        return true;
    }return false;
}

#Hiển thị lỗi của form

function form_error($label_field) {
    global $error;
    if (isset($error[$label_field])) {
        echo $error[$label_field];
    }
}
