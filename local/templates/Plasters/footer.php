<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	</div>
	</div>
	<footer class="footer">
		<div class="container">
			<div class="footer_inner">
				<?$APPLICATION->IncludeComponent("bitrix:subscribe.form", "template1", Array(
					"CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"PAGE" => "#SITE_DIR#about/subscr_edit.php",	// Страница редактирования подписки (доступен макрос #SITE_DIR#)
					"SHOW_HIDDEN" => "N",	// Показать скрытые рубрики подписки
					"USE_PERSONALIZATION" => "Y",	// Определять подписку текущего пользователя
				),
				false
			);?>
				<div class="contacts">
					<div class="footer_call"><img class="phone footer_phone" src="<?= SITE_TEMPLATE_PATH . '/assets/img/phone-call.png' ?>" alt="">88008888888</div><br>
					<div class="call_request">Заказать звонок</div>
				</div>
			</div>
			
		</div>
	</footer>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>
</html>