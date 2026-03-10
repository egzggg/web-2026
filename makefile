# Makefile для сборки и запуска PrintName.cgi

# Имя исходника и бинарника
SRC = PrintName.pas
CGI = PrintName.cgi

# Порт FastCGI
PORT = 9001

.PHONY: all check_fcgi compile rename chmod run nginx

# Основная цель — собрать и подготовить CGI
all: compile rename chmod run nginx

# Перекомпиляция Pascal файла
compile: $(SRC)
	fpc -o$(CGI) $(SRC)

# Переименовать в .cgi, если нужно
rename:
	@if [ -f PrintName ]; then mv PrintName $(CGI); fi

# Сделать исполняемым
chmod:
	chmod +x $(CGI)

# Проверка и запуск fcgiwrap
run: check_fcgi
spawn-fcgi -p $(PORT) /opt/homebrew/Cellar/fcgiwrap/1.1.0/sbin/fcgiwrap &

# Проверка, запущен ли fcgiwrap
check_fcgi:
	@if lsof -i :$(PORT) > /dev/null; then \
		echo "fcgiwrap уже запущен на порту $(PORT)"; \
	else \
		echo "fcgiwrap не запущен, запустите его..."; \
	fi

# Перезапустить nginx
nginx:
	nginx -s reload