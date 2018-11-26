<!DOCTYPE html>

<html>


<head>

    <title>Работа с базами данных</title>
</head>

<body>

<h1>Показ работы</h1>
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
    $result2 = mysqli_query( $link,  "select * FROM  Товар");
    $row2 = mysqli_fetch_row($result2);
    $balance2 = $row2[1];
    echo 'Кнопка нажата!';
}
?>
<hr>
<div>
    <form method="POST">
        <input type="submit" name="print_f" value="Нажмите" />
    </form>

</div>


</body>
</html>