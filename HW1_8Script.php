<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE >
<html>
<head>
    <meta charset="UTF-8">
    <title>Д\з 1.8</title>
</head>
<body>
<h3>Таблица умножения</h3>

<div>
    <?php if ($_REQUEST["cols"] && $_REQUEST["rows"] > 0) { ?>
        <table align="left" border="5" cellpadding="10" cellspacing="0">
            <caption><?php echo $_REQUEST["cols"] ?> столбцов на <?php echo $_REQUEST["rows"] ?> строк.</caption>
            <?php for ($r = 1; $r <= $_REQUEST ["cols"]; $r++) { ?>
                <tr align="center"><?php for ($c = 1; $c <= $_REQUEST["rows"]; $c++) { ?>
                        <?php if ($r == 1 || $c == 1) { ?>
                            <td bgcolor="#ff8c00"><b><?php echo $c * $r; ?></b> </td><?php
                        } elseif ($r == $c) { ?>
                            <td bgcolor="#b22222"><?php echo $c * $r; ?> </td><?php
                        } elseif ($c == $_REQUEST["rows"] || $r == $_REQUEST["cols"]) { ?>
                            <td bgcolor="#87ceeb"><?php echo $c * $r; ?> </td><?php
                        } else { ?>
                            <td bgcolor="#ffa07a"><?php echo $c * $r;
                        } ?></td>
                    <?php } ?></tr>
            <?php } ?>
        </table>

    <?php } else { ?>
        <h2>Вы ввели неправильные данные!!!<br>
            Количество столбцов и строк должно быть больше нуля.<br></h2>
    <?php } ?>
</div>
<div>
    <span>
    <?php if ($_REQUEST["2"]) { ?>
        Квадрат <?php echo $_REQUEST["num"] ?> равен <?php echo($_REQUEST["num"] * $_REQUEST["num"]) ?>.
    <?php } if ($_REQUEST["3"]) { ?>
        Куб <?php echo $_REQUEST["num"] ?> равен <?php echo($_REQUEST["num"] * $_REQUEST["num"] * $_REQUEST["num"]) ?>.
    <?php } if(!$_REQUEST["2"] && !$_REQUEST["3"]) { ?>
        Вы не выбрали ни одного из действий.
    <?php } ?>
        </span>
</div>



</body>
</html>

