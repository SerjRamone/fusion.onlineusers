<?php
/**
 * Инсталляция модуля fusion.onlineusers
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


class fusion_onlineusers extends CModule {

	public $MODULE_ID = 'fusion.onlineusers';
	public $MODULE_VERSION;			// see version.php
	public $MODULE_VERSION_DATE;	// see version.php
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;

	public $PARTNER_NAME = 'Веб-интегратор Fusion';
	public $PARTNER_URI = 'http://www.efusion.ru/';

	/**
	 * Инициализация модуля для страницы "Управление модулями"
	 */
	public function fusion_onlineusers() {

		$path = str_replace('\\', '/', __FILE__);
		$path = substr($path, 0, strlen($path) - strlen('/index.php'));

		$arModuleVersion = array();
		include($path."/version.php");

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

		$this->MODULE_NAME = GetMessage('FUSION_MODULE_NAME');
		$this->MODULE_DESCRIPTION = GetMessage('FUSION_MODULE_DESC');
	}

	/**
	 * Устанавливаем модуль
	 */
	public function DoInstall() {

		if(!CModule::IncludeModule('im')){
			return false;
		}

		if (!$this->InstallFiles()) {
			return false;
		}

		RegisterModule($this->MODULE_ID);
	}

	/**
	 * Удаляем модуль
	 */
	public function DoUninstall() {
		if (!$this->UnInstallFiles()) {
			return false;
		}
		UnRegisterModule($this->MODULE_ID);
	}

	/**
	 * Копируем файлы административной части
	 *
	 * @return bool
	 */
	public function InstallFiles() {
		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/" . $this -> MODULE_ID . "/install/components/fusion",
			$_SERVER["DOCUMENT_ROOT"] . "/bitrix/components/fusion", true, true);

		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/" . $this -> MODULE_ID . "/install/gadgets/fusion",
			$_SERVER["DOCUMENT_ROOT"] . "/bitrix/gadgets/fusion", true, true);

		return true;
	}

	/**
	 * Удаляем файлы административной части
	 *
	 * @return bool
	 */
	public function UnInstallFiles() {
		DeleteDirFilesEx("/bitrix/components/fusion");
		DeleteDirFilesEx("/bitrix/gadgets/fusion");
		return true;
	}

}
?>