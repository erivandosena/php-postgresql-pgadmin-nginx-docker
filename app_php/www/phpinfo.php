<?php

/**
  * Mostra todas as informações do PHP
  *
  * Informações completas do phpinfo e informações de módulos.
  *
  * @category Info
  * @package Script simpels
  * @author Erivando Sena <erivandosena@gmail.com>
  * @copyright 1997-2005 The PHP Group
  * @license http://www.php.net/license/3_01.txt Licença PHP 3.01
  */

// Mostra todas as informações, usa o padrão INFO_ALL
phpinfo();

// Mostra apenas informações dos módulos.
// phpinfo(8) mostra um resultado identico.
phpinfo(INFO_MODULES);

?>
