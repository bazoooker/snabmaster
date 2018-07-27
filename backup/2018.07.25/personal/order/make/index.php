<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
$APPLICATION->IncludeComponent(
	"bitrix:sale.order.ajax", 
	"default", 
	array(
		"ALLOW_NEW_PROFILE" => "Y",
		"SHOW_PAYMENT_SERVICES_NAMES" => "Y",
		"SHOW_STORES_IMAGES" => "N",
		"PATH_TO_BASKET" => SITE_DIR."basket.php",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/orders/",
		"PATH_TO_PAYMENT" => SITE_DIR."payment.php",
		"PATH_TO_AUTH" => SITE_DIR."auth/",
		"PAY_FROM_ACCOUNT" => "N",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"COUNT_DELIVERY_TAX" => "N",
		"ALLOW_AUTO_REGISTER" => "Y",
		"SEND_NEW_USER_NOTIFY" => "N",
		"DELIVERY_NO_AJAX" => "Y",
		"DELIVERY_NO_SESSION" => "N",
		"TEMPLATE_LOCATION" => "popup",
		"DELIVERY_TO_PAYSYSTEM" => "p2d",
		"SET_TITLE" => "Y",
		"USE_PREPAYMENT" => "Y",
		"DISABLE_BASKET_REDIRECT" => "N",
		"DISPLAY_IMG_HEIGHT" => "75",
		"PRODUCT_COLUMNS" => array(
			0 => "PREVIEW_PICTURE",
			1 => "PROPERTY_EMARKET_PREVIEW_CH",
		),
		"PROP_1" => "",
		"COMPONENT_TEMPLATE" => "orders",
		"COMPATIBLE_MODE" => "Y",
		"USE_PRELOAD" => "Y",
		"PRODUCT_COLUMNS_VISIBLE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "PRICE_FORMATED",
		),
		"ADDITIONAL_PICT_PROP_2" => "-",
		"ADDITIONAL_PICT_PROP_3" => "-",
		"ADDITIONAL_PICT_PROP_6" => "-",
		"ADDITIONAL_PICT_PROP_7" => "-",
		"BASKET_IMAGES_SCALING" => "standard"
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
