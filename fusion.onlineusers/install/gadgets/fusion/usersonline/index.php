<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arGadgetParams["PATH_TO_LIST"] = (empty($arGadgetParams["PATH_TO_LIST"]))? "/company/usersonline.php":$arGadgetParams["PATH_TO_LIST"];

?>
<?$APPLICATION->IncludeComponent(
	"fusion:intranet.usersonline",
	"",
	Array(
		"PATH_TO_LIST" => $arGadgetParams["PATH_TO_LIST"],
	),
	false
);?>