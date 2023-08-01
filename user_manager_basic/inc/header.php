<?php
require 'lib/system.php';
require 'lib/url.php';
require 'lib/validation.php';

$page = !empty($_GET['pages']) ? $_GET['pages'] : 'home';
if (!is_Login() && $page != "login") {
    redirect("?pages=login");
}
?>
<html>
    <head>
        <title>title</title>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <a href="" id="logo">LEANH</a>
                <div id="user-login">
                    <p>Xin chào <strong><?php user_login() ?></strong>(<a href="?pages=logout">Thoát</a>)</p>
                </div>
                <ul id="main-menu">
                    <li><a href="?pages=home">Trang Chủ</a></li>
                    <li><a href="?pages=about">Giới Thiệu</a></li>
                    <li><a href="?pages=product">Sản Phẩm</a></li>
                    <li><a href="?pages=news">Tin Tức</a></li>
                    <li><a href="?pages=contact">Liên Hệ</a></li>
                </ul>
            </div>

