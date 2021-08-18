<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="catalog_main">
				<div class="catalog_list">
					<?
					foreach($arResult["ROWS"] as $arItems):?>
					<?foreach($arItems as $arElement):?>
						
							<?
							$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCT_ELEMENT_DELETE_CONFIRM')));
							?>
					<div class="catalog_item">
						<?if(is_array($arElement["DETAIL_PICTURE"])):?>
							<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img src="<?=$arElement["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" class="catalog_item-pic"></a>
						<?endif?>

						<div class="catalog_item-content">
							<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="catalog_item-title"><?=$arElement["NAME"]?></a>
							<div class="catalog_item-actions">
								<a href="#"><i class="fas fa-heart"></i></a>
								<a href="#"><img src="assets/img/compare.png" alt="" class="compare-icon"></a>
								<a href="#"><i class="fas fa-check"></i></a>
							</div>
							<div class="catalog_item-text"><?=$arElement["DETAIL_TEXT"]?></div>
							<br>
							<div class="dropdown_title">
								<div id="features_dropdown_title">
									<div id="features">
										<div class="features_title">Характеристики</div>
										
										<ul id="features_dropdown">
											<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
												<li><?=$arProperty["NAME"]?> - 
													<?if(is_array($arProperty["DISPLAY_VALUE"]))
														echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
													else
														echo $arProperty["DISPLAY_VALUE"];?>
											<?endforeach?></li>
											
										</ul>
									</div>
						
								</div>
							</div>
						</div>
						<div class="options">

						
							<?foreach($arElement["PRICES"] as $code=>$arPrice):?>
								<?if($arPrice["CAN_ACCESS"]):?>
									
								<div class="price"><?=$arPrice["PRINT_VALUE"]?></div>
								<?endif;?>
							<?endforeach;?>
							<div class="offers_wrapper">
								Оттенки
								<?
								
								if (isset($arElement['OFFERS']) && !empty($arElement['OFFERS']))
							{
								?>
								111
								<a href="<? echo $arElement['DETAIL_PAGE_URL']; ?>" class="bx_bt_button big shadow cart"><span></span><strong><?
										echo ('' != $arParams['MESS_BTN_DETAIL'] ? $arParams['MESS_BTN_DETAIL'] : GetMessage('CT_BCT_TPL_MESS_BTN_DETAIL'));
										?></strong></a>
								<?
							}
							else
							{
								if ($arItem['CAN_BUY'])
								{
									?>
									<a id="<? echo $arItemIDs['BUY_LINK']; ?>" href="javascript:void(0)" rel="nofollow" class="bx_bt_button big shadow cart"><span></span><strong><?
											if ($arParams['ADD_TO_BASKET_ACTION'] == 'BUY')
											{
												echo ('' != $arParams['MESS_BTN_BUY'] ? $arParams['MESS_BTN_BUY'] : GetMessage('CT_BCT_TPL_MESS_BTN_BUY'));
											}
											else
											{
												echo ('' != $arParams['MESS_BTN_ADD_TO_BASKET'] ? $arParams['MESS_BTN_ADD_TO_BASKET'] : GetMessage('CT_BCT_TPL_MESS_BTN_ADD_TO_BASKET'));
											}
											?></strong></a>
									<?
								}
								else
								{
									?>
									<span id="<? echo $arItemIDs['NOT_AVAILABLE_MESS']; ?>" class="bx_notavailable">
<?
echo ('' != $arParams['MESS_NOT_AVAILABLE'] ? $arParams['MESS_NOT_AVAILABLE'] : GetMessage('CT_BCT_TPL_MESS_PRODUCT_NOT_AVAILABLE'));
?>
			</span>
									<?
								}}?>
								<div class="offers">
									<span class="offers__item"><a href="#"><img src="assets/img/biege_min_1.jpg" alt=""></a></span>
									<span class="offers__item"><a href="#"><img src="assets/img/biege_min_2.jpg" alt=""></a></span>
									<span class="offers__item"><a href="#"><img src="assets/img/biege_min_3.jpg" alt=""></a></span>
								</div>

							</div>
<?if($arResult["bDisplayPrices"]):?>
			<tr valign="top">
			<?foreach($arItems as $arElement):?>
			<?if(is_array($arElement)):?>
				<td width="<?=$arResult["TD_WIDTH"]?>" class="data-cell">
				<?foreach($arElement["PRICES"] as $code=>$arPrice):?>
					<?if($arPrice["CAN_ACCESS"]):?>
						<p><?=$arResult["PRICES"][$code]["TITLE"];?>:&nbsp;&nbsp;
						<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
							<s><?=$arPrice["PRINT_VALUE"]?></s> <span class="catalog-price"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?></span>
						<?else:?>
							<span class="catalog-price"><?=$arPrice["PRINT_VALUE"]?></span>
						<?endif?>
						</p>
					<?endif;?>
				<?endforeach;?>
				<?if(is_array($arElement["PRICE_MATRIX"])):?>
				<table cellpadding="0" cellspacing="0" border="0" width="100%" class="data-table">
				<thead>
				<tr>
					<?if(count($arElement["PRICE_MATRIX"]["ROWS"]) >= 1 && ($arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
						<td><?=GetMessage("CATALOG_QUANTITY") ?></td>
					<?endif;?>
					<?foreach($arElement["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
						<td><?=$arType["NAME_LANG"] ?></td>
					<?endforeach?>
				</tr>
				</thead>
				<?foreach ($arElement["PRICE_MATRIX"]["ROWS"] as $ind => $arQuantity):?>
				<tr>
					<?if(count($arElement["PRICE_MATRIX"]["ROWS"]) > 1 || count($arElement["PRICE_MATRIX"]["ROWS"]) == 1 && ($arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
						<th nowrap>
						<?if(IntVal($arQuantity["QUANTITY_FROM"]) > 0 && IntVal($arQuantity["QUANTITY_TO"]) > 0)
								echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_FROM_TO")));
							elseif(IntVal($arQuantity["QUANTITY_FROM"]) > 0)
								echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], GetMessage("CATALOG_QUANTITY_FROM"));
							elseif(IntVal($arQuantity["QUANTITY_TO"]) > 0)
								echo str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_TO"));
							?>
						</th>
					<?endif;?>
					<?foreach($arElement["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
						<td>
							<?if($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"] < $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"])
								echo '<s>'.FormatCurrency($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]).'</s> <span class="catalog-price">'.FormatCurrency($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"], $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"])."</span>";
							else
								echo '<span class="catalog-price">'.FormatCurrency($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"])."</span>";
							?>&nbsp;
						</td>
					<?endforeach?>
				</tr>
				<?endforeach?>
				</table>
				<?endif?>
				</td>
			<?endif;?>
			<?endforeach?>
			</tr>
		<?endif;?>
							<div class="counter">
								
								<div class="counter_minus">
									 -
								</div>
				               <span><input class="counter_input" type="text" value="1"></span>
				               <div class="counter_plus">
									 <span>+</span>
								</div>
				      		</div>
				      		<?if($arResult["bDisplayButtons"]):?>
							
							<?foreach($arItems as $arElement):?>
							<div class="buy">
							<?if(is_array($arElement)):?>
								<td>
								<?if($arParams["DISPLAY_COMPARE"]):?>
									<noindex><a href="<?echo $arElement["COMPARE_URL"]?>" rel="nofollow"><?echo GetMessage("CATALOG_COMPARE")?></a>&nbsp;</noindex>
								<?endif?>
								<?if($arElement["CAN_BUY"]):?>
									<input class="buy_button" name="buy" type="button" value="<?= GetMessage("CATALOG_BUY") ?>" OnClick="window.location='<?echo CUtil::JSEscape($arElement["DETAIL_PAGE_URL"])."#buy"?>'" />
								<?elseif((count($arResult["PRICES"]) > 0) || is_array($arElement["PRICE_MATRIX"])):?>
									<?=GetMessage("CATALOG_NOT_AVAILABLE")?>
								<?endif?>
								</td>
							<?endif;?>
							</div>
							<?endforeach?>
							
						<?endif;?>
							
								
							
						</div>
					</div>
					<?endforeach?>
					<?endforeach?>
				</div>
			</div>