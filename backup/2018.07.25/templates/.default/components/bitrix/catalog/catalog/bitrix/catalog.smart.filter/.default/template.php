<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>



                        <div class="filters section-margin">
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"infilter",
			array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"SECTION_ID" => $arParams["SECTION_ID"],
				"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
				"CACHE_TYPE" => $arParams["CACHE_TYPE"],
				"CACHE_TIME" => $arParams["CACHE_TIME"],
				"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
				"COUNT_ELEMENTS" => "Y",
				"TOP_DEPTH" => 1,
				"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
				"VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
				"SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
				"HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
				"ADD_SECTIONS_CHAIN" => "N"
			),
			$component,
			array("HIDE_ICONS" => "Y")
		);?>

                            <!-- div class="filter-category filter-category_opened">
                                <div class="filter-category__name">Производитель</div>
                                <div class="filter-category__content">
                                    <label for="one" class="fancy-checkbox">
                                        <input id="one" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        aurora
                                    </label>

                                    <label for="two" class="fancy-checkbox">
                                        <input id="two" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        Quattro
                                    </label>

                                    <label for="three" class="fancy-checkbox">
                                        <input id="three" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        einhell
                                    </label>

                                    <label for="four" class="fancy-checkbox">
                                        <input id="four" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        fubag
                                    </label>

                                    <label for="five" class="fancy-checkbox">
                                        <input id="five" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        интерскол
                                    </label>

                                    <label for="six" class="fancy-checkbox">
                                        <input id="six" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        кратон
                                    </label>
                                </div>
                            </div -->

                            <div class="filter-category">
                                <div class="filter-category__name">Тип двигателя</div>
                                <div class="filter-category__content" style="display: none;">
                                    <label for="aa" class="fancy-checkbox">
                                        <input id="aa" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        бензиновый
                                    </label>

                                    <label for="ss" class="fancy-checkbox">
                                        <input id="ss" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        электрический
                                    </label>
                                </div>
                            </div>

                            <!-- div class="filter-category">
                                <div class="filter-category__name">Тип компрессора</div>
                                <div class="filter-category__content" style="display: none;">
                                    <label for="dd" class="fancy-checkbox">
                                        <input id="dd" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        винтовой
                                    </label>

                                    <label for="ff" class="fancy-checkbox">
                                        <input id="ff" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        прошневой масляный
                                    </label>

                                    <label for="gg" class="fancy-checkbox">
                                        <input id="gg" type="checkbox" checked="checked">
                                        <span class="fancy-checkbox__checkmark"></span>
                                        поршневой безмасляный
                                    </label>

                                </div>
                            </div -->
 

                            <div class="text-center">
                                <a href="#" class="btn btn_metal">Подобрать</a>
                            </div>
                            
                        </div>


                        <div class="product_fake section-margin">
                            <div class="text-center">                                
                                <div class="icon icon_help"></div>
                                <p>Нужна помощь <br>в выборе?</p>
                                <a href="#" class="callbackbutton btn btn_outline">Задать вопрос менеджеру</a>
                            </div>
                        </div>



		<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
			<?foreach($arResult["HIDDEN"] as $arItem):?>
			<input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
			<?endforeach;
			//not prices
			foreach($arResult["ITEMS"] as $key=>$arItem)
			{
				if(
					empty($arItem["VALUES"])
					|| isset($arItem["PRICE"])
				)
					continue;

				if (
					$arItem["DISPLAY_TYPE"] == "A"
					&& (
						$arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0
					)
				)
					continue;
				?>
							<div class="section sectionfilter">
								<div class="title"><?=$arItem["NAME"]?></div>
								<div class="contents">

						<?
						$arCur = current($arItem["VALUES"]);
						switch ($arItem["DISPLAY_TYPE"])
						{
							case "G"://CHECKBOXES_WITH_PICTURES
								?>
								<?foreach ($arItem["VALUES"] as $val => $ar):?>
									<input
										style="display: none"
										type="checkbox"
										name="<?=$ar["CONTROL_NAME"]?>"
										id="<?=$ar["CONTROL_ID"]?>"
										value="<?=$ar["HTML_VALUE"]?>"
										<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
									/>
									<?
									$class = "";
									if ($ar["CHECKED"])
										$class.= " active";
									if ($ar["DISABLED"])
										$class.= " disabled";
									?>
									<label for="<?=$ar["CONTROL_ID"]?>" data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx_filter_param_label dib<?=$class?>" onclick="smartFilter.keyup(BX('<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')); BX.toggleClass(this, 'active');">
										<span class="bx_filter_param_btn bx_color_sl">
											<?if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])):?>
											<span class="bx_filter_btn_color_icon" style="background-image:url('<?=$ar["FILE"]["SRC"]?>');"></span>
											<?endif?>
										</span>
									</label>
								<?endforeach?>
								<?
								break;
							case "H"://CHECKBOXES_WITH_PICTURES_AND_LABELS
								?>
								<?foreach ($arItem["VALUES"] as $val => $ar):?>
									<input
										style="display: none"
										type="checkbox"
										name="<?=$ar["CONTROL_NAME"]?>"
										id="<?=$ar["CONTROL_ID"]?>"
										value="<?=$ar["HTML_VALUE"]?>"
										<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
									/>
									<?
									$class = "";
									if ($ar["CHECKED"])
										$class.= " active";
									if ($ar["DISABLED"])
										$class.= " disabled";
									?>
									<label for="<?=$ar["CONTROL_ID"]?>" data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx_filter_param_label<?=$class?>" onclick="smartFilter.keyup(BX('<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')); BX.toggleClass(this, 'active');">
										<span class="bx_filter_param_btn bx_color_sl">
											<?if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])):?>
												<span class="bx_filter_btn_color_icon" style="background-image:url('<?=$ar["FILE"]["SRC"]?>');"></span>
											<?endif?>
										</span>
										<span class="bx_filter_param_text" title="<?=$ar["VALUE"];?>"><?=$ar["VALUE"];?><?
										if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
											?> (<span data-role="count_<?=$ar["CONTROL_ID"]?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
										endif;?></span>
									</label>
								<?endforeach?>
								<?
								break;
							case "P"://DROPDOWN
								$checkedItemExist = false;
								?>
								<div class="bx_filter_select_container">
									<div class="bx_filter_select_block" onclick="smartFilter.showDropDownPopup(this, '<?=CUtil::JSEscape($key)?>')">
										<div class="bx_filter_select_text" data-role="currentOption">
											<?
											foreach ($arItem["VALUES"] as $val => $ar)
											{
												if ($ar["CHECKED"])
												{
													echo $ar["VALUE"];
													$checkedItemExist = true;
												}
											}
											if (!$checkedItemExist)
											{
												echo GetMessage("CT_BCSF_FILTER_ALL");
											}
											?>
										</div>
										<div class="bx_filter_select_arrow"></div>
										<input
											style="display: none"
											type="radio"
											name="<?=$arCur["CONTROL_NAME_ALT"]?>"
											id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
											value=""
										/>
										<?foreach ($arItem["VALUES"] as $val => $ar):?>
											<input
												style="display: none"
												type="radio"
												name="<?=$ar["CONTROL_NAME_ALT"]?>"
												id="<?=$ar["CONTROL_ID"]?>"
												value="<? echo $ar["HTML_VALUE_ALT"] ?>"
												<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
											/>
										<?endforeach?>
										<div class="bx_filter_select_popup" data-role="dropdownContent" style="display: none;">
											<ul>
												<li>
													<label for="<?="all_".$arCur["CONTROL_ID"]?>" class="bx_filter_param_label" data-role="label_<?="all_".$arCur["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape("all_".$arCur["CONTROL_ID"])?>')">
														<? echo GetMessage("CT_BCSF_FILTER_ALL"); ?>
													</label>
												</li>
											<?
											foreach ($arItem["VALUES"] as $val => $ar):
												$class = "";
												if ($ar["CHECKED"])
													$class.= " selected";
												if ($ar["DISABLED"])
													$class.= " disabled";
											?>
												<li>
													<label for="<?=$ar["CONTROL_ID"]?>" class="bx_filter_param_label<?=$class?>" data-role="label_<?=$ar["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')"><?=$ar["VALUE"]?></label>
												</li>
											<?endforeach?>
											</ul>
										</div>
									</div>
								</div>
								<?
								break;
							case "R"://DROPDOWN_WITH_PICTURES_AND_LABELS
								?>
								<div class="bx_filter_select_container">
									<div class="bx_filter_select_block" onclick="smartFilter.showDropDownPopup(this, '<?=CUtil::JSEscape($key)?>')">
										<div class="bx_filter_select_text" data-role="currentOption">
											<?
											$checkedItemExist = false;
											foreach ($arItem["VALUES"] as $val => $ar):
												if ($ar["CHECKED"])
												{
												?>
													<?if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])):?>
														<span class="bx_filter_btn_color_icon" style="background-image:url('<?=$ar["FILE"]["SRC"]?>');"></span>
													<?endif?>
													<span class="bx_filter_param_text">
														<?=$ar["VALUE"]?>
													</span>
												<?
													$checkedItemExist = true;
												}
											endforeach;
											if (!$checkedItemExist)
											{
												?><span class="bx_filter_btn_color_icon all"></span> <?
												echo GetMessage("CT_BCSF_FILTER_ALL");
											}
											?>
										</div>
										<div class="bx_filter_select_arrow"></div>
										<input
											style="display: none"
											type="radio"
											name="<?=$arCur["CONTROL_NAME_ALT"]?>"
											id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
											value=""
										/>
										<?foreach ($arItem["VALUES"] as $val => $ar):?>
											<input
												style="display: none"
												type="radio"
												name="<?=$ar["CONTROL_NAME_ALT"]?>"
												id="<?=$ar["CONTROL_ID"]?>"
												value="<?=$ar["HTML_VALUE_ALT"]?>"
												<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
											/>
										<?endforeach?>
										<div class="bx_filter_select_popup" data-role="dropdownContent" style="display: none">
											<ul>
												<li style="border-bottom: 1px solid #e5e5e5;padding-bottom: 5px;margin-bottom: 5px;">
													<label for="<?="all_".$arCur["CONTROL_ID"]?>" class="bx_filter_param_label" data-role="label_<?="all_".$arCur["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape("all_".$arCur["CONTROL_ID"])?>')">
														<span class="bx_filter_btn_color_icon all"></span>
														<? echo GetMessage("CT_BCSF_FILTER_ALL"); ?>
													</label>
												</li>
											<?
											foreach ($arItem["VALUES"] as $val => $ar):
												$class = "";
												if ($ar["CHECKED"])
													$class.= " selected";
												if ($ar["DISABLED"])
													$class.= " disabled";
											?>
												<li>
													<label for="<?=$ar["CONTROL_ID"]?>" data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx_filter_param_label<?=$class?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')">
														<?if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])):?>
															<span class="bx_filter_btn_color_icon" style="background-image:url('<?=$ar["FILE"]["SRC"]?>');"></span>
														<?endif?>
														<span class="bx_filter_param_text">
															<?=$ar["VALUE"]?>
														</span>
													</label>
												</li>
											<?endforeach?>
											</ul>
										</div>
									</div>
								</div>
								<?
								break;
							case "K"://RADIO_BUTTONS
								?>
								<label class="bx_filter_param_label" for="<? echo "all_".$arCur["CONTROL_ID"] ?>">
									<span class="bx_filter_input_checkbox">
										<input
											type="radio"
											value=""
											name="<? echo $arCur["CONTROL_NAME_ALT"] ?>"
											id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
											onclick="smartFilter.click(this)"
										/>
										<span class="bx_filter_param_text"><? echo GetMessage("CT_BCSF_FILTER_ALL"); ?></span>
									</span>
								</label>
								<?foreach($arItem["VALUES"] as $val => $ar):?>
									<label data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx_filter_param_label" for="<? echo $ar["CONTROL_ID"] ?>">
										<span class="bx_filter_input_checkbox <? echo $ar["DISABLED"] ? 'disabled': '' ?>">
											<input
												type="radio"
												value="<? echo $ar["HTML_VALUE_ALT"] ?>"
												name="<? echo $ar["CONTROL_NAME_ALT"] ?>"
												id="<? echo $ar["CONTROL_ID"] ?>"
												<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
												onclick="smartFilter.click(this)"
											/>
											<span class="bx_filter_param_text" title="<?=$ar["VALUE"];?>"><?=$ar["VALUE"];?><?
											if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
												?> (<span data-role="count_<?=$ar["CONTROL_ID"]?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
											endif;?></span>
										</span>
									</label>
								<?endforeach;?>
								<?
								break;
							case "U"://CALENDAR
								?>
								<div class="bx_filter_parameters_box_container_block"><div class="bx_filter_input_container bx_filter_calendar_container">
									<?$APPLICATION->IncludeComponent(
										'bitrix:main.calendar',
										'',
										array(
											'FORM_NAME' => $arResult["FILTER_NAME"]."_form",
											'SHOW_INPUT' => 'Y',
											'INPUT_ADDITIONAL_ATTR' => 'class="calendar" placeholder="'.FormatDate("SHORT", $arItem["VALUES"]["MIN"]["VALUE"]).'" onkeyup="smartFilter.keyup(this)" onchange="smartFilter.keyup(this)"',
											'INPUT_NAME' => $arItem["VALUES"]["MIN"]["CONTROL_NAME"],
											'INPUT_VALUE' => $arItem["VALUES"]["MIN"]["HTML_VALUE"],
											'SHOW_TIME' => 'N',
											'HIDE_TIMEBAR' => 'Y',
										),
										null,
										array('HIDE_ICONS' => 'Y')
									);?>
								</div></div>
								<div class="bx_filter_parameters_box_container_block"><div class="bx_filter_input_container bx_filter_calendar_container">
									<?$APPLICATION->IncludeComponent(
										'bitrix:main.calendar',
										'',
										array(
											'FORM_NAME' => $arResult["FILTER_NAME"]."_form",
											'SHOW_INPUT' => 'Y',
											'INPUT_ADDITIONAL_ATTR' => 'class="calendar" placeholder="'.FormatDate("SHORT", $arItem["VALUES"]["MAX"]["VALUE"]).'" onkeyup="smartFilter.keyup(this)" onchange="smartFilter.keyup(this)"',
											'INPUT_NAME' => $arItem["VALUES"]["MAX"]["CONTROL_NAME"],
											'INPUT_VALUE' => $arItem["VALUES"]["MAX"]["HTML_VALUE"],
											'SHOW_TIME' => 'N',
											'HIDE_TIMEBAR' => 'Y',
										),
										null,
										array('HIDE_ICONS' => 'Y')
									);?>
								</div></div>
								<?
								break;
							default://CHECKBOXES
								?>
								<?foreach($arItem["VALUES"] as $val => $ar):?>
									<label data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx_filter_param_label <? echo $ar["DISABLED"] ? 'disabled': '' ?>" for="<? echo $ar["CONTROL_ID"] ?>">
										<span class="bx_filter_input_checkbox">
											<input
												type="checkbox"
												value="<? echo $ar["HTML_VALUE"] ?>"
												name="<? echo $ar["CONTROL_NAME"] ?>"
												id="<? echo $ar["CONTROL_ID"] ?>"
												<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
												onclick="$('#set_filter').click();smartFilter.click(this);"
											/>
											<span class="bx_filter_param_text" title="<?=$ar["VALUE"];?>"><?=$ar["VALUE"];?><?
											if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
												?> (<span data-role="count_<?=$ar["CONTROL_ID"]?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
											endif;?></span>
										</span>
									</label>
								<?endforeach;?>
						<?
						}
						?>
						</div>
						<div class=clear></div>
						</div>
			<?
			}
			?>
							<div class="section" style="display:none">
								<div class="title">&nbsp;</div>
								<div class="contents">
									<input class="bx_filter_search_button" type="submit" id="set_filter" name="set_filter" value="Фильтровать" />
									<input class="bx_filter_search_reset" type="submit" id="del_filter" name="del_filter" value="Снять фильтр" />
								</div>
								<div class=clear></div>
							</div>





		</form>
