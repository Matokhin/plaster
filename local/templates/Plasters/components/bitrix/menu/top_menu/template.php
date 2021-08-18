<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header_menu">
				<nav class="nav">
					<ul class="nav_wrap">

						<? foreach ($arResult as $key => $arItem):
							if(!empty($arItem['TEXT'])): ?>
								<? if($arItem['DEPTH_LEVEL'] == 2) {continue;} ?>
							<li class="nav__link"><a href="<?= $arItem['LINK']; ?>"><?= $arItem['TEXT']; ?></a>
								<? if(!empty($arItem['subitems'])): ?>
									<div class="nav__inner-wrap">
										<ul class="nav__inner">
									<? foreach ($arItem['subitems'] as $subItem): ?>
									
											<a class="nav__link-inner" href="<?= $subItem['LINK']; ?>"><?= $subItem['TEXT']; ?></a>
										
									<? endforeach; ?>
									</ul>
									</div>
								<? endif; ?>
								
							</li>

						<? endif; ?>
						<? endforeach; ?>
						<!-- <li class="nav__link"><a href="#">Каталог</a>
							<ul class="nav__inner">
								<li class="nav__link-inner"><a href="#">Жидкие обои</a></li>
								<li class="nav__link-inner"><a href="#">Сопутствующие товары</a></li>
								<li class="nav__link-inner"><a href="#">Декоративная штукатурка</a></li>
								<li class="nav__link-inner"><a href="#">Фасадная штукатурка</a></li>
							</ul>
						</li>
						<li class="nav__link"><a href="#">Где купить</a></li>
						<li class="nav__link"><a href="#">Информация</a></li>
						<li class="nav__link"><a href="#">Стать партнером</a></li>
						<li class="nav__link"><a href="#">О компании</a></li>
						<li class="nav__link"><a href="#">Контакты</a></li> -->
					</ul>
				</nav>
				<img class="comparison" src="<?= SITE_TEMPLATE_PATH . '/assets/img/compare.png'?>" alt="">
				<br>
			</div>
<?endif?>