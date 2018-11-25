<!DOCTYPE html>

<html>


<head>

    <title>Работа с базами данных</title>
</head>

<body>

<h1>Показ работы</h1>
<?
error_reporting(E_ALL);
mb_internal_encoding("UTF-8");
$link  =  mysqli_connect( '80.93.177.12',  "admin_nrsmsf",  'database',  'admin_database' );
if (  !$link  )  die("Error");

mysqli_select_db("admin_database");


printf(mysqli_fetch_row(mysqli_query( $link,  "SELECT * FROM Товар WHERE `Код_товара` = 1")));
?>

</body>
</html>