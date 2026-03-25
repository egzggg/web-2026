mv PrintName PrintName.cgi - Переименовать в .cgi
chmod +x PrintName.cgi - Сделать исполняемым
lsof -i :9001 - Проверить, запущен ли fcgiwrap (FastCGI)
spawn-fcgi -p 9001 /opt/homebrew/Cellar/fcgiwrap/1.1.0/sbin/fcgiwrap & - если е запущен
nginx -s reload - перезапустить NGINX

fpc -oPrintName.cgi PrintName.pas - при перекомпилировании, изменении файла




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>Всем привет</div>
  <div>Версия PHP: <?php print phpversion(); ?></div>
</body>
</html>


<?php
$year = $_POST['year'];

if ($year <= 30000) {
    if ($year % 4 == 0 or $year % 400 ==0) {
        echo "$year весокосный год";
    } else {
        echo "$year не весокосный год";
    } 
}else {
    echo "год больше 30000";
}
?>
