<?php
/**********************************************************************************
 Sistema e-SIC Livre: sistema de acesso a informa��o baseado na lei de acesso.
 
 Copyright (C) 2014 Prefeitura Municipal do Natal
 
 Este programa � software livre; voc� pode redistribu�-lo e/ou
 modific�-lo sob os termos da Licen�a GPL2.
***********************************************************************************/

error_reporting(E_ERROR);

define("SISTEMA_NOME", "Lei de Acesso"); //nome do sistema para exibi��o em lugares diversos
define("SISTEMA_CODIGO", "ldarestrito"); //codigo para defini��o da lista de sess�o do sistema


define("MAIL_HOST", "criartecnologia.com.br");
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "dbesiclivre");

define("SITELNK", "localhost/esiclivre/");	//endere�o principal do site http://seudominio

define("URL_BASE_SISTEMA", "localhost/esiclivre/");	//endere�o principal do site

//caminho para arquivo da classes do projeto de lei de acesso
define("DIR_CLASSES_LEIACESSO","/var/www/esiclivre/class");

?>
