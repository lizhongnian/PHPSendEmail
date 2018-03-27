<?php
require_once 'Email.class.php';
$title = "测试邮件发送功能";
$content = "脚踏实地，坚持学习！";
$to = "zqunor@foxmail.com";

$res = Email::sendMail($title, $content, $to);
if ($res) {
echo '邮件发送成功！';
} else {
echo "邮件发送失败！";
}