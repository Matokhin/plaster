<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<div class="subscribe"  id="subscribe-form">
<?
$frame = $this->createFrame("subscribe-form", false)->begin();
?>
		
	<form action="<?=$arResult["FORM_ACTION"]?>" class="subscribe_form">
		<div class="form_inner">
			<input type="text" name="sf_EMAIL" class="subscribe_text" value="<?=$arResult["EMAIL"]?>" title="<?=GetMessage("subscr_form_email_title")?>" placeholder="Оставьте свой e-mail">
		</div>
		<input type="submit" name="OK" class="subscribe_button" value="<?=GetMessage("subscr_form_button")?>">
	</form>
<?
$frame->beginStub();
?>
	<form action="<?=$arResult["FORM_ACTION"]?>" class="subscribe_form">
		<div class="form_inner">
			<input type="text" name="sf_EMAIL" class="subscribe_text" value="" title="<?=GetMessage("subscr_form_email_title")?>" placeholder="Оставьте свой e-mail">
		</div>
		<input type="submit" name="OK" class="subscribe_button" value="<?=GetMessage("subscr_form_button")?>">
	</form>
<?
$frame->end();
?>
</div>

