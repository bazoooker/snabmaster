<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);"><a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>"></a></div>
                            </div>
	<?endforeach;?>
