# curso_php_25
- Abrir vscode na pasta /var/www/html
   - file -> open folder
-  Entrar no github vai em `code` copia o link para clonar
   - vscode treminal -> novo treminal
     - `git clone` link github
- abrir vscode na pasta do projeto|repositorio /var/www/html/php_curso_25
     - vai em terminal `sudo service apache2 start` -> para ativar o apache2 ( localhost )
       - `loacalhost/curso_php_25` No navegador

## Tema de casa  

## Conflito no Readme

# Configurar MariaDB:

SHOW DATABASES;

CREATE DATABASE IF NOT EXISTS curso_php_25;

USE curso_php_25;

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

FLUSH PRIVILEGES;

SELECT User FROM mysql.user;


https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server.