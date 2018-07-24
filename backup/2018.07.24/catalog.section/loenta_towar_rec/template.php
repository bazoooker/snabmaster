<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>














	<div class="swiper-holder">

			<div class="swiper-container recommendation-container">
				<div class="swiper-wrapper recommendation-wrapper view-grid">


<?
foreach ($arResult["ITEMS"] as $arItem) {
	// $arItem['img']=CFile::GetPath($arItem["DETAIL_PICTURE"]);
// print_r($arItem['IBLOCK_SECTION_ID']);
$res = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
if($ar_res = $res->GetNext())
  // echo $ar_res['CODE'];
$arItem['URL']='catalog/'.$ar_res['CODE']."/".$arItem['CODE']."/";
// $el=CIBlock::ReplaceDetailUrl($arItem['ID']); 
// print_r($el);
// exit();
	if ($arItem['MIN_PRICE']['VALUE']=='') {
		$arItem['MIN_PRICE']['VALUE']=0;
	}
?>
													<a class="swiper-slide showcase-item" href="/<?=$arItem['URL']?>">

										<div class="item-part part-info">
											<div class="item-element element-photo">
												<div class="item-photo-holder">
													<div class="item-photo" style="background-image: url(<?=$arItem['DETAIL_PICTURE']['SRC']?>);"></div>
												</div>
											</div>

											<div class="item-element element-name">
												<div class="item-name">
													<?=$arItem['NAME']?>
												</div>
											</div>
										</div>

										<div class="item-part part-buy ">
											<div class="item-element element-price">
												<div class="item-price">
													<span class="price-value"><?=$arItem['MIN_PRICE']['VALUE']?></span>
													<span class="price-unit">руб.</span>
												</div>
											</div>

											<div class="item-element element-action">
												<div class="button button-small button-buy">
													<div class="button-text">Купить</div>
												</div>
											</div>
										</div>

									</a>	



<?
}
?>





			</div>

		</div>

		<div class="swiper-button-prev swiper-button recommendation-button-prev"></div>
		<div class="swiper-button-next swiper-button recommendation-button-next"></div>

	</div>






