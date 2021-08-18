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
$this->setFrameMode(true);
?>
<div class="slider" id="slider"> 
	<?if (!empty($arResult)):
		foreach ($arResult["ITEMS"] as $key => $item): 

		?>
			<div class="slider__item">
				<img class="slider__item-img" src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="">
			</div>
	    <?
		endforeach;
	endif;
	?>
</div>