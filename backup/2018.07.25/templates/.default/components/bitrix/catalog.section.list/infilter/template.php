						<?
						if ($arResult['SECTIONS']) {
							# code...
						
						?>



                            <div class="filter-category filter-category_opened">
                                <div class="filter-category__name">Уточните выбор</div>
                                <div class="filter-category__content">

















								<?
								foreach ($arResult['SECTIONS'] as &$arSection){
									?>

                                    <label for="five" class="fancy-checkbox">
<a href="<? echo $arSection["SECTION_PAGE_URL"]; ?>"><? echo $arSection["NAME"];?></a>  &nbsp; <sup><? echo $arSection["ELEMENT_CNT"]; ?></sup>
                                    </label>




										
<?
								}

								?>
                                </div>
                            </div>
						<?}?>


