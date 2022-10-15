<html lang="en">
<head>
<title>Hello world page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Таблица пользователей данного продукта</h1>
<table>
    <tr><th>Id</th><th>Name</th><th>Surname</th></tr>
<?php
$mysqli = new mysqli("db", "root", "mysql2022", "rschir"); //подключение к бд
$result = $mysqli->query("SELECT * FROM users"); //sql-запрос для получения всех пользователей
foreach ($result as $row){ 
    echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['surname']}</td></tr>"; //выводит данные в html-страничку
} 
?>
</table>
<?php
phpinfo(); //вся инфа от текущей сборки php
?>
</body>
</html>