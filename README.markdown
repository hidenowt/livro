# CodeIgniter Framework PHP

Construa websites rapidamente com orientação a objetos, MVC e PHP. O [Livro](http://novatec.com.br/livros/codeigniter/).

## Ativando o display_errors e o error_reporting
Basta ir em /etc/php5/apache2/php.ini e modificar duas linhas.
``
error_reporting = E_ALL & ~E_NOTICE
display_errors  = On
``
E reiniciar o servidor apache.

## Criando um .htaccess para seu projeto novo do codeigniter
``
#Para não permitir o acesso ao ficheiro .htaccess vamos colocá-lo com permissões:644. E, adicionar o seguinte:
<Files .htaccess>
order allow,deny
deny from all
</Files>
 
#Nao permitir o Directory Listing:
Options -Indexes
 
#Remove o índex.php do URL - url friendly:
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
 
RewriteRule ^(.+)$ index.php?$1 [L]
 
#Nao permitir hotlinking:
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^http://(www\.)?mysite.com/.*$ [NC]
RewriteRule \.(gif|jpg|js|css|png|jpeg|swf)$ - [F,NC,L]
</IfModule>

#Alterando alguns valores do php o p php_value e o php_flag
php_value    error_reporting    6135
php_flag     display_errors     on
``
