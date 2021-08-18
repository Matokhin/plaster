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
<section class="section-news">
		<h2 class="main-title title-news">Новости</h2>
		<div class="news">
			<?if (!empty($arResult)):
				foreach ($arResult["ITEMS"] as $key => $item): 

				?>
				<div class="news__item">
				<a href="#" class="news__item-link"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="news__item-img"></a>
				
					<div class="news__item-info">
						<div class="new-date"><?=$item["ACTIVE_FROM"]?></div>
						<a href="#" class="title-link"><div class="new-title"><?=$item["PREVIEW_TEXT"]?></div></a>
						<div class="new-text"><?=$item["DETAIL_TEXT"]?></div>
					</div>
				</div>
			    <?
				endforeach;
			endif;
			?>
			<a href="#" class="all_news">Все новости</a>
		</div>
	</section>