<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // هنا يمكنك إضافة كود لإرسال البريد أو تخزين البيانات في قاعدة البيانات
    echo "شكرًا لتواصلك، $name. سنقوم بالرد على بريدك الإلكتروني قريبًا.";
}
?>
