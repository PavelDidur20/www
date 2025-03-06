<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.news",
	"",
	Array(
		"IBLOCK_TYPE" => "news",
		"ID" => "-",
		"SITE_ID" => "s1",
		"SORT_BY" => "ACTIVE_FROM",
		"SORT_ORDER" => "DESC"
	)
);?><br>
 <br>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("",""),
		"IBLOCKS" => array(),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?><br>
	<br>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?><br>
	<br>
</p>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>