<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php"); 

CModule::IncludeModule("sale");
CModule::IncludeModule("catalog");
			  
Add2BasketByProductID(
  $_GET['id'], 
  $_GET['count']
);


  // $arBasketItems = array();
		// 		         $dbBasketItems = CSaleBasket::GetList(
		// 		                 array(
		// 		                         "NAME" => "ASC",
		// 		                         "ID" => "ASC"
		// 		                     ),
		// 		                 array(
		// 		                         "FUSER_ID" => CSaleBasket::GetBasketUserID(),
		// 		                         "LID" => SITE_ID,
		// 		                         "ORDER_ID" => "NULL"
		// 		                     ),
		// 		                 false,
		// 		                 false,
		// 		                 array("ID", "QUANTITY", "PRICE")
		// 		             );
		// 		         while ($arItems = $dbBasketItems->Fetch())
		// 		         {
		// 		             if (strlen($arItems["CALLBACK_FUNC"]) > 0)
		// 		             {
		// 		                 CSaleBasket::UpdatePrice($arItems["ID"],
		// 		                                          $arItems["QUANTITY"]);
		// 		                 $arItems = CSaleBasket::GetByID($arItems["ID"]);
		// 		             }
		// 		             $arBasketItems[] = $arItems;
		// 		         }

          // Выведем актуальную корзину для текущего пользователя
$arBasketItems = array();

$dbBasketItems = CSaleBasket::GetList(
        array(
                "NAME" => "ASC",
                "ID" => "ASC"
            ),
        array(
                "FUSER_ID" => CSaleBasket::GetBasketUserID(),
                "LID" => SITE_ID,
                "ORDER_ID" => "NULL",
                "DELAY" => "N",
                "CAN_BUY" => "Y"
            ),
        false,
        false,
        array("ID", "CALLBACK_FUNC", "MODULE", 
              "PRODUCT_ID", "QUANTITY", "DELAY", 
              "CAN_BUY", "PRICE", "WEIGHT")
    );
while ($arItems = $dbBasketItems->Fetch())
{
    if (strlen($arItems["CALLBACK_FUNC"]) > 0)
    {
        CSaleBasket::UpdatePrice($arItems["ID"], 
                                 $arItems["CALLBACK_FUNC"], 
                                 $arItems["MODULE"], 
                                 $arItems["PRODUCT_ID"], 
                                 $arItems["QUANTITY"]);
        $arItems = CSaleBasket::GetByID($arItems["ID"]);
    }

    $arBasketItems[] = $arItems;
    // print_r($arItems);
}




				         $summ = 0.00;
				         foreach ($arBasketItems as $bascet) {

				            $summ = $summ + $bascet["PRICE"]*$bascet["QUANTITY"];
				            }
				      
				      $summa = number_format($summ, 0, '.', ' ');
?>
<span class=basket__contents><?=count($arBasketItems)?> товаров</span><span class=basket__price><?echo number_format($summ, 0, '.', ' ');?> руб.</span>
<?
   ?>
  