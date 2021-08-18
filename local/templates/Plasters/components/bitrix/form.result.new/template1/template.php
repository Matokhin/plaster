<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="request">

<?if ($arResult["isFormNote"] != "Y")
{
?>



	
				<div class="form_head">
					Заказать звонок
				</div>
				<?=$arResult["FORM_HEADER"]?>
				<form class="reguest_form">
					<input type="hidden" name="web_form_submit" value="Отправить">
					<?
					foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
					{
						if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
							{
								echo $arQuestion["HTML_CODE"];
							}
							else
							{
					
					?>
					<div class="form-control">
						<div class="form-info">
							<label for=""><?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?></label><br>
							<div class="form-input"><?=$arQuestion["HTML_CODE"]?></div>
						</div>
						
					</div>
					


<?}


		}
	} //endwhile
	
	?>
				<input class="show_button confirm form-info" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="Отправить" />
					<span class="drop_button close">Закрыть</span>


				</form>
				<div id="errorMess"></div>
				<?=$arResult["FORM_NOTE"]?>
			</div>

<?=$arResult["FORM_FOOTER"]?>


