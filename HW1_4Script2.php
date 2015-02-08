<?php
header("Content-Type: text/html; charset=utf-8");?>
<h1><?php if($_REQUEST["age"]>=18 && $_REQUEST["age"]<=59):{?>Вам еще работать и работать на вашей текущей работе!!!<?php ;?></h1>
<h1><?php }elseif($_REQUEST["age"]>59 && $_REQUEST["age"]<123):{ ?>Вам пора на пенсию. Дайте дорогу молодым!!!<?php ;?></h1>
<h1><?php }elseif($_REQUEST["age"]>0 && $_REQUEST["age"]<18):{ ?>Вам еще рано трудоустраиваться!!!<?php ;?></h1>
<h1><?php }else:{ ?> Неверно заполненное поле с вашим возрастом.<?php ;?></h1>
<?php } endif;?>