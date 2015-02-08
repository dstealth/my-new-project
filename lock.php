<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Усоверш. скрипт блокировки сервера</title>
</head>

<body>
<?if (!isset($_REQUEST['doGo'])) {?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>">
Имя: <input type="text" name="login" value=""><br>
Пароль: <input type="password" name="password" value=""><br>
<input type="submit" name="doGo" value="Нажмите кнопку!">
</form>
<?} else {
    if ($_REQUEST['login']=="root" && $_REQUEST['password']=="12Z"){
        echo "Доступ открыт для пользователя $_REQUEST['login']";
        // Команда блокировки рабочей станции (работает в NT системах)
        system("rundll32.exe user32.dll, LockWorkStation");
    }else {
        echo "Доступ закрыт!";
    }
}?>

</body>
</html>
