<!-- Вывод IP-адреса и браузера пользователя -->
<html>
<head>
    <meta charset="utf-8">
    <title>IP-адрес и браузер</title>
</head>
<body>
Ваш IP-адрес: <?= $_SERVER['REMOTE_ADDR']?><br>
Ваш браузер: <?= $_SERVER['HTTP_USER_AGENT']?>
</body>
</html>