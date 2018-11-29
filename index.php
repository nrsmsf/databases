<!DOCTYPE html>

<html lang="ru">


<head>

    <title>Работа с базами данных</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body{
            background: url('http://nrsmsf.ru/database/databases/purple-gradient-2560x1600.jpg') no-repeat center fixed;
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
        }
    </style>
</head>

<body>

<h1>Дополнительная самостоятельная работа по дисициплине "Базы данных"</h1>
<h2>Выполнил студент группы БИ2-2 Нерсесян Андрей</h2>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
mb_internal_encoding("UTF-8");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$link  =  mysqli_connect( '80.93.177.12',  "admin_nrsmsf",  'database',  'admin_database' );
if (  !$link  )  die("Error");
mysqli_set_charset($link, "utf8");
$result2 = mysqli_query( $link,  "select * FROM Фирма WHERE `id` = 0");
$row2 = mysqli_fetch_row($result2);
$balance2 = $row2[1];

echo "Товар 1: {$balance2} <br><br> ";

# Если кнопка нажата
if( isset( $_POST['print_f'] ) )
{
        $result3 = mysqli_query( $link,  "select * FROM  Товар");
        while ($row = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
            echo "{$row["Марка"]} <br>";

        }
    echo "Выполнился запрос 'SELECT * FROM  Товар'<br>";

}
?>
<hr>
<div>
    <form method="POST">
        <input type="submit" name="print_f" value="Вывести все данные таблицы 'Товар'" />
    </form>

</div>


</body>
</html>