                        <div class="dropdown__nav" style="display: none;">
<?                
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
?>
                            <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="dropdown__link"><? echo $arSection['NAME']; ?></a>
<?
			}
?>
                        </div>
