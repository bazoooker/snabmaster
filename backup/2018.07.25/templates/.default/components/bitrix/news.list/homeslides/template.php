<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	<?foreach($arResult["ITEMS"] as $arItem):?>

                        <div class="swiper-slide hero__slide" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);">
                            <div class="container">
                                <a class="hero__cta" href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>">
                                    <span class="hero__duration"><?=$arItem['PROPERTIES']['SMALL_TEXT']['VALUE']?></span>
                                    <p class="hero__offer1"><?=$arItem['PROPERTIES']['MID_TEXT']['VALUE']?></p>
                                    <p class="hero__offer2"><?=$arItem['PROPERTIES']['BIG_TEXT']['VALUE']?></p>
                                    <div class="swiper-pagination swiper-pagination-hero"></div>
                                </a>
                            </div>

                        </div>
	<?endforeach;?>
