<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
                    <div class="product-list product-list_narrow">
<?


	foreach ($arResult['ITEMS'] as $key => $arItem){
		$file=CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>300, 'height'=>240), BX_RESIZE_IMAGE_PROPORTIONAL_ALT , true); 
		if(!$file['src']) $file['src']="/img/no-photo.png";
			

		$resp= CIBlockElement::GetList(Array(), array("IBLOCK_ID" => $arItem['IBLOCK_ID'], "ID"=>$arItem['ID']));
		while($obs = $resp->GetNextElement()){
			$arProps = $obs->GetProperties();
			$arFields = $obs->GetFields();
		}
//	print_r($arItem['PRICES']);
//	print_r($arProps);
?>


                        <div class="product product_33">
                            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="product__img" style="background-image: url(<?=$file['src']?>);"></a>
                            <p class="product__name"><?=$arItem['NAME']?></p>
                            <p class="product__price"><?=$arItem['PRICES']['ќптова€']['PRINT_VALUE_VAT']?></p>
                            <div class="product__controls">
                                <a href="#" id="<?=$arItem['ID']?>" class="btn btn_add-to-cart">в корзину</a>
                                <a href="#" class="btn btn_one-click">  
                                    <span> упить в 1 клик</span>
                                </a>
                            </div>
<!--
                            <div class="product__params">
                                <span class="product-param">220¬</span>
                                <span class="product-param">3.5к¬т</span>
                            </div>
-->
                        </div>


<?
	}
?>


                    </div>


<? echo $arResult["NAV_STRING"]; ?>
