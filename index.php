<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовый раздел");
?><?$APPLICATION->IncludeComponent(
	"domrftest:dmrftest",
	"",
	Array(
		"AJAX_MODE" => "Y",
		"CACHE_PERIOD" => "0",
		"HLBCODE" => 2,
		"IBLOCK_CODE" => "somenews",
		"TITLE" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>