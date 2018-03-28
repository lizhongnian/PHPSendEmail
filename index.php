<?php
require_once 'Email.class.php';
$title = "定时学习提醒";
$content = "一天只有24个小时，你利用的程度决定了你和别人的差距！如果不希望总是比别人差，那就从现在开始努力！！现在！现在！现在！否则，就不要抱怨生活....";
$to = "zqunor@foxmail.com";

$res = Email::sendMail($title, $content, $to);
if ($res) {
echo '邮件发送成功！';
} else {
echo "邮件发送失败！";
}