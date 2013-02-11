<?php
/**
 * Настройки модуля fusion.onlineusers
 *
 * @author  Sergey Greznov s.greznov@efusion.ru
 * @since   14/01/2013
 *
 * @link    http://www.efusion.ru/
 */

/**
 * Идентификатор модуля
 */
$sModuleId  = 'fusion.onlineusers';

/**
 * Подключаем модуль (выполняем код в файле include.php)
 */
CModule::IncludeModule($sModuleId);

/**
 * Языковые константы (файл lang/ru/options.php)
 */
global $MESS;
IncludeModuleLangFile( __FILE__ );