
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult['DETAIL_PICTURE']['WIDTH']<600) {
			$file=$arResult['DETAIL_PICTURE']['SRC'];
} else {
			$file=CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>600, 'height'=>600), BX_RESIZE_IMAGE_PROPORTIONAL_ALT , true); 
}
if(!$file['src']) $file['src']="/img/no-photo.png";


$resp= CIBlockElement::GetList(Array(), array("IBLOCK_ID" => $arResult['IBLOCK_ID'], "ID"=>$arResult['ID']));
	while($obs = $resp->GetNextElement()){
		$arProps = $obs->GetProperties();
		$arFields = $obs->GetFields();
}
?>




                    <h2><?=$arResult['NAME']?></h2>

                    <div class="product-list-controls">

<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
	"START_FROM" => "2",	// ����� ������, ������� � �������� ����� ��������� ������������� �������
		"PATH" => "",	// ����, ��� �������� ����� ��������� ������������� ������� (�� ���������, ������� ����)
		"SITE_ID" => "s1",	// C��� (��������������� � ������ ������������� ������, ����� DOCUMENT_ROOT � ������ ������)
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>


                        
                    </div>

                        <div class="product-detail">



                            <div class="product-detail__left">
                                <div class="product-detail__img" style="background-image: url(<?=$arResult['DETAIL_PICTURE']['SRC']?>);"></div>
                                <div class="product_fake section-margin">
                                    <div class="text-center">                                
                                        <div class="icon icon_help"></div>
                                        <p>����� ������ <br>� ������?</p>
                                        <a href="#" class="callbackbutton btn btn_outline">������ ������ ���������</a>
                                    </div>
                                </div>
                            </div>    



                            <div class="product-detail__right">

                                <div class="product-detail-heading">
                                    <div class="product-detail-heading__main-info">
                                        <div class="product-detail-heaading__price">
                                            <?=$arResult['PRICES']['�������']['PRINT_VALUE_VAT']?>
                                        </div>

                                        <div class="product-detail-heading__controls">
                                            <a href="#" id="<?=$arResult['ID']?>" name="<?=$arResult['NAME']?>" class="btn btn_add-to-cart">� �������</a>
                                            <a href="#" class="btn btn_one-click"  name="<?=$arResult['NAME']?>">
                                                <span>������ � 1 ����</span>
                                            </a>
                                        </div>                                
					<ul class=service-func>
						<li><a id=comparelink href="#" class="user-options__link user-options__compare" rel="<?=$arResult['ID']?>">�������� � ������ ���������</a>
						<li><a id=delaylink href="#" class="user-options__link user-options__postponed" rel="<?=$arResult['ID']?>">��������</a>
					</ul>
                                    </div>                                     

                                    <div class="product-detail-heading__logo" >
                                        <div class="product-logo" style="background-image: url(/img/icons/brands/makita.jpg);"></div>
                                    </div>

                                </div>

                                <div class="product-detail__text">
									<?
									if ($arResult['DETAIL_TEXT']) {
										echo $arResult['DETAIL_TEXT'];
									}else{
										echo $arResult['PREVIEW_TEXT'];
									}
									?>
                                </div>
                                <div class="product-detail__table">
                                    <table>
                                        <tr>
                                            <td>��� ��������������</td>
                                            <td>����������</td>
                                        </tr>
                                        <tr>
                                            <td>��� �������</td>
                                            <td>������</td>
                                        </tr>
                                        <tr>
                                            <td>����� ���</td>
                                            <td>1(220 �����)</td>
                                        </tr>
                                        <tr>
                                            <td>���������</td>
                                            <td>Robin Subaru EX17D</td>
                                        </tr>
                                        <tr>
                                            <td>����� ���������</td>
                                            <td>169 ���.��</td>
                                        </tr>
                                        <tr>
                                            <td>����� ���������</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>����� ������</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>��� ����������</td>
                                            <td>���������</td>
                                        </tr>
                                        <tr>
                                            <td>����� �������</td>
                                            <td>��-92</td>
                                        </tr>
                                        <tr>
                                            <td>����� ����</td>
                                            <td>12.8 �</td>
                                        </tr>
                                    </table>
                                </div>

                            </div> 




                        </div>






				



