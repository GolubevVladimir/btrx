<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Простой компонент-71");
?><?$APPLICATION->IncludeComponent(
	"exam2:simplecomp.exam.71", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PRODUCTS_IBLOCK_ID" => "2",
		"CLASSIF_IBLOCK_ID" => "7",
		"TEMPLATE" => "",
		"PROPERTY_CODE" => "FIRMA",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>