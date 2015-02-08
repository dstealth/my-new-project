<html>
<head>
    <meta charset="UTF-8">
    <title>Д\з 1.4</title>
    <h1>Анкета для трудоустройства</h1><br>


</head>
<h2>Здравствуйте, <?php echo $_REQUEST["name"]?>!</h2>
    <br>Ваш IP-адрес: <?php echo $_SERVER['REMOTE_ADDR']?><br>
    Ваш браузер: <?php echo $_SERVER['HTTP_USER_AGENT']?><br>
<h3>Пожалуйста заполните анкету:</h3>
<body>
<form action="HW1_4Script2.php">
    Укажите ваш возраст: <input type="text" name="age" value=""><br>
    Если вы хотите узнать что мы можем вам предложить, нажмите <input type="submit" value="СЮДА!!!"><br></form>


</body>
</html>