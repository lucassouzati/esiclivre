<?php
/**********************************************************************************
 Sistema e-SIC Livre: sistema de acesso a informação baseado na lei de acesso.
 
 Copyright (C) 2014 Prefeitura Municipal do Natal
 
 Este programa é software livre; você pode redistribuí-lo e/ou
 modificá-lo sob os termos da Licença GPL2.
***********************************************************************************/

error_reporting(E_ERROR);

define("SISTEMA_NOME", "Lei de Acesso"); //nome do sistema para exibição em lugares diversos
define("SISTEMA_CODIGO", "ldarestrito"); //codigo para definição da lista de sessão do sistema


define("MAIL_HOST", "criartecnologia.com.br");
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "dbesiclivre");

define("SITELNK", "localhost/esiclivre/");	//endereço principal do site http://seudominio

define("URL_BASE_SISTEMA", "localhost/esiclivre/");	//endereço principal do site

//caminho para arquivo da classes do projeto de lei de acesso
define("DIR_CLASSES_LEIACESSO","/var/www/esiclivre/class");

?>
