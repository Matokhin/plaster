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
<section class="section-partitions">
		<h2 class="main-title title-partitions">
			Примеры интерьеров
		</h2>
		<div class="partitions">
			<?if (!empty($arResult)):
				foreach ($arResult["ITEMS"] as $key => $item): 

				?>
				<a href="#" class="partitions__item">
				<img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="partitions__img">
			</a>	
			    <?
				endforeach;
			endif;
			?>
		</div>
</section>