mv PrintName PrintName.cgi - Переименовать в .cgi
chmod +x PrintName.cgi - Сделать исполняемым
lsof -i :9001 - Проверить, запущен ли fcgiwrap (FastCGI)
spawn-fcgi -p 9001 /opt/homebrew/Cellar/fcgiwrap/1.1.0/sbin/fcgiwrap & - если е запущен
nginx -s reload - перезапустить NGINX

fpc -oPrintName.cgi PrintName.pas - при перекомпилировании, изменении файла
