<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("������ ������");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.payment",
	"",
Array()
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>