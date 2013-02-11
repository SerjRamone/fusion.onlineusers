<?php
/**
 * Инсталляция модуля serjramon
 *
 * @author  Sergey Greznov — Fusion LLC
 * @since   14/01/2013
 *
 * @link    http://www.efusion.ru/
 */

/**
 * Подключаем языковые константы
 */
global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang) - 18);
@include(GetLangFileName($strPath2Lang . "/lang/", "/install/index.php"));
IncludeModuleLangFile($strPath2Lang . "/install/index.php");

class COnlineusers extends CModule {

	public $MODULE_ID = 'fusion.onlineusers';
	public $MODULE_VERSION = '1.0.0';
	public $MODULE_VERSION_DATE = '2013-01-14 09:00:00';
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;

	public $PARTNER_NAME = 'Веб-интегратор Fusion';
	public $PARTNER_URI = 'http://www.efusion.ru/';

	/**
	 * Инициализация модуля для страницы "Управление модулями"
	 */
	public function COnlineusers() {
		$this -> MODULE_NAME = GetMessage('AUTHORIZE_BM_MODULE_NAME');
		$this -> MODULE_DESCRIPTION = GetMessage('AUTHORIZE_BM_MODULE_DESC');
	}

	/**
	 * Устанавливаем модуль
	 */
	public function DoInstall() {
		if (!$this -> InstallFiles()) {
			return false;
		}

		RegisterModule($this -> MODULE_ID);
	}

	/**
	 * Удаляем модуль
	 */
	public function DoUninstall() {
		if (!$this -> UnInstallFiles()) {
			return false;
		}
		UnRegisterModule($this -> MODULE_ID);
	}

	/**
	 * Копируем файлы административной части
	 *
	 * @return bool
	 */
	public function InstallFiles() {
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/" . $this -> MODULE_ID . "/install/components/fusion", $_SERVER["DOCUMENT_ROOT"] . "/bitrix/components/fusion", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/" . $this -> MODULE_ID . "/install/gadgets/fusion", $_SERVER["DOCUMENT_ROOT"] . "/bitrix/gadgets/fusion", true, true);
		return true;
	}

	/**
	 * Удаляем файлы административной части
	 *
	 * @return bool
	 */
	public function UnInstallFiles() {
		DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"] . "/bitrix/components/fusion");
		DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"] . "/bitrix/gadgets/fusion");
		return;
	}

}
?>