# curso_php_25
- Abrir vscode na pasta /var/www/html
   - file -> open folder
-  Entrar no github vai em `code` copia o link para clonar
   - vscode treminal -> novo treminal
     - `git clone` link github
- abrir vscode na pasta do projeto|repositorio /var/www/html/php_curso_25
     - vai em terminal `sudo service apache2 start` -> para ativar o apache2 ( localhost )
       - `loacalhost/curso_php_25` No navegador

- # passo a passo do GIT para salvar no GitHub:

  
  - `git add .` O comando `git add` “adicionar conteúdo” (propor uma mudança qualquer, seja ela alterar, adicionar ou remover um conteúdo) de um arquivo local ao índice ou staging area, que terá a mudança confirmada, posteriormente, com o comando git commit, e finalmente enviada ao repositório remoto pelo git push.
  
  - `git commit -m` O comando `git commit` é uma das funções principais do Git. O uso prévio do comando git add é necessário para selecionar as alterações que serão preparadas para o 
  próximo commit. Em seguida, git commit é usado para criar um instantâneo das alterações preparadas ao longo de uma linha do tempo do histórico de projetos Git.
  
  - `git push` Um dos comando essencial no Git é o `git push`. Este comando é fundamental para enviar seus commits locais para um repositório remoto, permitindo que você compartilhe seu trabalho com outros colaboradores ou faça backup das suas alterações em um servidor remoto. 


## Tema de casa  

## Conflito no Readme

Configurar MariaDB:

CREATE USER 'user1'@localhost IDENTIFIED BY 'password1';

GRANT ALL PRIVILEGES ON . TO 'user1'@localhost IDENTIFIED BY 'password1';

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server.