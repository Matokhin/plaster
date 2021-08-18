<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? use Bitrix\Main\Page\Asset; ?>
<!DOCTYPE html>
<html>
<head>
	<? $APPLICATION->ShowHead(); ?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/style.css'); ?>
	<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/app.js'); ?>
	<? Asset::getInstance()->addString('<link rel="stylesheet" type="text/css" href="https:/cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>'); ?>
	<? Asset::getInstance()->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>'); ?>
	<? Asset::getInstance()->addString('<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>'); ?>
	

	</head>
<body>
	<div class="bg"></div>
	<div class="bg_auth"></div>
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<header class="header">
		<div class="container">
			<div class="header__top">
				<div class="info">
					<span class="call"><img class="phone" src="<?= SITE_TEMPLATE_PATH . '/assets/img/phone-call.png'?>" alt="">88008888888</span>
					<span class="order"> Заказать звонок</span>
				</div>
				<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
					"FORGOT_PASSWORD_URL" => "/user/",	// Страница забытого пароля
					"PROFILE_URL" => "/user/profile.php",	// Страница профиля
					"REGISTER_URL" => "/user/registration.php",	// Страница регистрации
					"SHOW_ERRORS" => "N",	// Показывать ошибки
				),
				false
				);?>
			</div>
			<br>
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"COMPONENT_TEMPLATE" => "top_menu",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "subtop",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
			<div class="search">
	<div class="search__title">
		<form action="<?=$arResult["FORM_ACTION"]?>">
			<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
				);?>
			<?else:?>
			<input class="search__title-text"  name="q" value="" type="text" placeholder="Поиск по сайту"><?endif;?>
			<input class="search__title-submit" name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>">
		</form>
	</div>
</div>
		</div>
	</header>

	<div class="main">
	<div class="container">
		<h2 class="main-title">
			Официальный сайт Международного производителя декоративной штукатурки TEST SITE
		</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new", 
	"template1", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "result_edit.php",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "result_list.php",
		"SEF_FOLDER" => "",
		"SEF_MODE" => "Y",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"WEB_FORM_ID" => "1",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?>




	