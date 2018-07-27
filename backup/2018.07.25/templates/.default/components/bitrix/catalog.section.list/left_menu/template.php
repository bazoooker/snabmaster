                <ul class="catalog-nav">
<?                
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
?>
                    <li class="dropdown"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="catalog-nav__link"><? echo $arSection['NAME']; ?></a>
	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"left_sub_menu",
		array(
			"ADD_SECTIONS_CHAIN" => "Y",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COUNT_ELEMENTS" => "N",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "",
			"SECTION_CODE" => "",
			"SECTION_FIELDS" => array(
				0 => "",
				1 => "",
			),
			"SECTION_ID" => $arSection['ID'],
			"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
			"SECTION_USER_FIELDS" => array(
				0 => "",
				1 => "",
			),
			"SHOW_PARENT_NAME" => "Y",
			"TOP_DEPTH" => "1",
			"VIEW_MODE" => "LIST",
			"COMPONENT_TEMPLATE" => "left_menu"
		),
		false
	);?>

			</li>
<?
			}
?>


		</ul>
