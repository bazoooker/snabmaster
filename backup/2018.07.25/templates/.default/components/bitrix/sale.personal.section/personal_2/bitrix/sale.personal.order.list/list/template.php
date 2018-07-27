<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
?>

<div class="data">
<h1>Мои заказы</h1>
<?
//	print_r($arResult);
?>
			<?
			$bNoOrder = true;
			foreach($arResult["ORDER_BY_STATUS"] as $key => $val)
			{
				$bShowStatus = true;
				foreach($val as $vval)
				{
					$bNoOrder = false;
					if($bShowStatus)
					{
					?>
						<div class="order-status-title"><?echo GetMessage("STPOL_STATUS")?> <span class="order-note-green">&laquo;<?=$arResult["INFO"]["STATUS"][$key]["NAME"] ?>&raquo;</span></div>
						<small><?=$arResult["INFO"]["STATUS"][$key]["DESCRIPTION"] ?></small>
					<?
					}
					$bShowStatus = false;
					?>
					
					<div class="sale_personal_order_list">
						<div class="user-order-info">
							<div class="user-order-title">
								<div class="user-order-label">
									<?echo GetMessage("STPOL_ORDER_NO")?>
									<!--a title="<?echo GetMessage("STPOL_DETAIL_ALT")?>" href="<?=$vval["ORDER"]["URL_TO_DETAIL"] ?>"><?=$vval["ORDER"]["ACCOUNT_NUMBER"]?></a -->
									<?=$vval["ORDER"]["ACCOUNT_NUMBER"]?>
								</div>
								<div class="user-order-note">
								<span class="order-note-gray">
										<?echo GetMessage("STPOL_FROM")?>
										<?= $vval["ORDER"]["DATE_INSERT"]; ?>
									</span> 
								</div>
							</div>

							<?
							if ($vval["ORDER"]["CANCELED"] == "Y")
								echo GetMessage("STPOL_CANCELED")."<br>";
							?>

							<div class="user-order-price">
								<div class="user-order-label">
									<?echo GetMessage("STPOL_SUM")?>
								</div>
								<div class="user-order-note">
									<span class="order-note-black"><?=$vval["ORDER"]["FORMATED_PRICE"]?></span>
								</div>
							</div>
<!--
							<?if($vval["ORDER"]["PAYED"]=="Y")
								echo GetMessage("STPOL_PAYED_Y");
							else
								echo GetMessage("STPOL_PAYED_N");
							?>
							<?if(IntVal($vval["ORDER"]["PAY_SYSTEM_ID"])>0)
								echo GetMessage("P_PAY_SYS").$arResult["INFO"]["PAY_SYSTEM"][$vval["ORDER"]["PAY_SYSTEM_ID"]]["NAME"]?>
-->
							<div class="user-order-status">
								<div class="user-order-label">
									<?echo GetMessage("STPOL_STATUS_T")?>
								</div>
								<div class="user-order-note">
									<span class="order-note-green"><?=$arResult["INFO"]["STATUS"][$vval["ORDER"]["STATUS_ID"]]["NAME"]?></span>
									<!-- <span class="order-note-gray">
										<?echo GetMessage("STPOL_STATUS_FROM")?>
										<?=$vval["ORDER"]["DATE_STATUS"];?>
									</span> -->
									<?
									if ($vval["ORDER"]['STATUS_ID']=="N") {
										?>
											<div class="oplata">
												<a class="btn btn_primary-color button-group-item zoom-button-order" href="/personal/order/make/?ORDER_ID=<?=$vval["ORDER"]["ACCOUNT_NUMBER"]?>&oplata=da">Оплатить заказ</a>
											</div>
											<div class="stick"></div>
										<?
									}
									// print_r($vval["ORDER"]['STATUS_ID']);
									?>
									
								</div>
							</div>
<!--
							<?if(IntVal($vval["ORDER"]["DELIVERY_ID"])>0)
							{
								echo "<b>".GetMessage("P_DELIVERY")."</b>".$arResult["INFO"]["DELIVERY"][$vval["ORDER"]["DELIVERY_ID"]]["NAME"];
							}
							elseif (strpos($vval["ORDER"]["DELIVERY_ID"], ":") !== false)
							{
								echo "<b>".GetMessage("P_DELIVERY")."</b>";
								$arId = explode(":", $vval["ORDER"]["DELIVERY_ID"]);
								echo $arResult["INFO"]["DELIVERY_HANDLERS"][$arId[0]]["NAME"]." (".$arResult["INFO"]["DELIVERY_HANDLERS"][$arId[0]]["PROFILES"][$arId[1]]["TITLE"].")";
							}
							?>
-->
						</div>

						<div class="user-order-list">

							<!--
							<a href="javascript:" class="user-order-list-link"><?echo GetMessage("STPOL_CONTENT")?></a>
							-->

							<div class="user-order-list-link"><?echo GetMessage("STPOL_CONTENT")?></div>

							<table class="sale_personal_order_list_table user-order-table">
<!--
								<tr>
									<td width="100%">
										<b><?echo GetMessage("STPOL_CONTENT")?></b>
									</td>
									<td width="0%">&nbsp;</td>
								</tr>
-->
								<?
								foreach ($vval["BASKET_ITEMS"] as $vvval)
								{
									$measure = (isset($vvval["MEASURE_TEXT"])) ? $vvval["MEASURE_TEXT"] :GetMessage("STPOL_SHT");
									?>
									<tr>
										<td class="user-order-item-name" width="100%">

											<?
											if (strlen($vvval["DETAIL_PAGE_URL"]) > 0)
												echo "<a href=\"".$vvval["DETAIL_PAGE_URL"]."\">";
											echo $vvval["NAME"];
											if (strlen($vvval["DETAIL_PAGE_URL"]) > 0)
												echo "</a>";
											?>
										</td>
										<td class="user-order-item-quantity" width="0%" nowrap><?= $vvval["QUANTITY"] ?> <?=$measure?></td>
									</tr>
									<?
								}
								?>
								<tr class="items-footer">
									<td colspan="2"></td>
								</tr>
							</table>
						</div>

						<!-- tr>
							<td align="right">
								<a title="<?= GetMessage("STPOL_DETAIL_ALT") ?>" href="<?=$vval["ORDER"]["URL_TO_DETAIL"]?>"><?= GetMessage("STPOL_DETAILS") ?></a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a title="<?= GetMessage("STPOL_REORDER") ?>" href="<?=$vval["ORDER"]["URL_TO_COPY"]?>"><?= GetMessage("STPOL_REORDER1") ?></a>
								<?if ($vval["ORDER"]["CAN_CANCEL"] == "Y"):?>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a title="<?= GetMessage("STPOL_CANCEL") ?>" href="<?=$vval["ORDER"]["URL_TO_CANCEL"]?>"><?= GetMessage("STPOL_CANCEL") ?></a>
								<?endif;?>
							</td>
						</tr -->

					</div>
				<?
				}
				?>

				<?
			}

			if ($bNoOrder)
			{
				?>
				<div class="user-notice">
					<p>
						<font class="errortext">
							<?echo GetMessage("STPOL_NO_ORDERS")?>
							<br>
						</font>
					</p>
				</div>
			<?
			}
			?>
</div>