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
<div class="articles_wrapper">
	<div class="container">
		<section class="section-articles">
		<div class="articles">
			<?if (!empty($arResult)):
				foreach ($arResult["ITEMS"] as $key => $item): 
				?>
				<div class="articles__item">
					<img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="articles__img">
					<div class="articles__info">
						<h2 class="article_title"><?=$item["PREVIEW_TEXT"]?></h2>
						<div class="article_text"><?=$item["DETAIL_TEXT"]?></div>
					</div>
					<div class="clearfix"></div>
				</div>
			    <?
				endforeach;
			endif;
			?>
		</div>
	</section>
	</div>
	
</div>