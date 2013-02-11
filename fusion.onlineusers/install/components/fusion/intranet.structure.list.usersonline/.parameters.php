<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CModule::IncludeModule('intranet');

$arComponentParameters = array(
	'PARAMETERS' => array(

		'NAME_TEMPLATE' => array(
			'TYPE' => 'LIST',
			'NAME' => GetMessage('INTR_ISL_PARAM_NAME_TEMPLATE'),
			'VALUES' => CComponentUtil::GetDefaultNameTemplates(),
			'MULTIPLE' => 'N',
			'ADDITIONAL_VALUES' => 'Y',
			'DEFAULT' => "",
			'PARENT' => 'BASE',
		),

		'SHOW_ERROR_ON_NULL' => array(
			'TYPE' => 'CHECKBOX',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'Y',
			'NAME' => GetMessage('INTR_ISL_PARAM_SHOW_ERROR_ON_NULL'),
			'PARENT' => 'BASE'
		),

		'USERS_PER_PAGE' => array(
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => '10',
			'NAME' => GetMessage('INTR_ISL_PARAM_USERS_PER_PAGE'),
			'PARENT' => 'BASE'
		),
		'NAV_TITLE' => array(
			'TYPE' => 'STRING',
			'MULTIPLE' => 'N',
			'DEFAULT' => GetMessage('INTR_ISL_PARAM_NAV_TITLE_DEFAULT'),
			'NAME' => GetMessage('INTR_ISL_PARAM_NAV_TITLE'),
			'PARENT' => 'BASE'
		),
		'SHOW_NAV_TOP' => array(
			'TYPE' => 'CHECKBOX',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'Y',
			'NAME' => GetMessage('INTR_ISL_PARAM_SHOW_NAV_TOP'),
			'PARENT' => 'BASE'
		),
		'SHOW_NAV_BOTTOM' => array(
			'TYPE' => 'CHECKBOX',
			'MULTIPLE' => 'N',
			'DEFAULT' => 'Y',
			'NAME' => GetMessage('INTR_ISL_PARAM_SHOW_NAV_BOTTOM'),
			'PARENT' => 'BASE'
		),
	),
);

?>