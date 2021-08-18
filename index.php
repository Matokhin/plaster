<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Plasters");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"designs",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "designs",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "news",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_TEXT",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"articles", 
	array(
		"COMPONENT_TEMPLATE" => "articles",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?><br>

</div>
	<div class="container">
	<section class="section_tabs">
		<div class="tabs">
			<ul class="tabs__caption">
				<li class="active">Хит</li>
				<li>Советуем</li>
				<li>Новинка</li>
			</ul>
			<div class="tabs__content active">
				<div class="tabs__content-item">
					<a href="#" class="item_link">
						<div class="stickers">
							<div class="sticker_hit"></div>
							<div class="sticker_recommended"></div>
						</div>
						<div class="like_icons">
							<div class="compare_item_button">
								<span class="compare_item to"></span>
								<span class="compare_item in added"></span>
							</div>
						</div>
							<img src="assets/img/zhidkie_oboi_silk_plaster_zhidkie_oboi_ekolayn_ecoline.jpg" alt="" class="item_img"></a><br>
					<a href="#" class="item_title">Жидкие обои Эколайн (Ecoline)</a>
					<div class="item_price">от 1 441 руб. /уп.</div>
					<div class="item_button"><a href="#" class="button_link">Подробнее</a></div>
				</div>
				<div class="tabs__content-item">
					<a href="#" class="item_link">
						<div class="stickers">
							<div class="sticker_hit"></div>
							<div class="sticker_recommended"></div>
						</div>
						<div class="like_icons">
							<div class="compare_item_button">
								<span class="compare_item to"></span>
								<span class="compare_item in added"></span>
							</div>
						</div>
							<img src="assets/img/zhidkie_oboi_silk_plaster_zhidkie_oboi_ekolayn_ecoline.jpg" alt="" class="item_img"></a><br>
							<div class="item_info">
								<a href="#" class="item_title">Жидкие обои Эколайн (Ecoline)</a>
								<div class="item_price">от 1 441 руб. /уп.</div>
								<div class="item_button"><a href="#" class="button_link">Подробнее</a></div>
							</div>
					
				</div>
				<div class="tabs__content-item">
					<a href="#" class="item_link">
						<div class="stickers">
							<div class="sticker_hit"></div>
							<div class="sticker_recommended"></div>
						</div>
						<div class="like_icons">
							<div class="compare_item_button">
								<span class="compare_item to"></span>
								<span class="compare_item in added"></span>
							</div>
						</div>
							<img src="assets/img/zhidkie_oboi_silk_plaster_zhidkie_oboi_ekolayn_ecoline.jpg" alt="" class="item_img"></a><br>
					<a href="#" class="item_title">Жидкие обои Эколайн (Ecoline)</a>
					<div class="item_price">от 1 441 руб. /уп.</div>
					<div class="item_button"><a href="#" class="button_link">Подробнее</a></div>
				</div>
			</div>
			<div class="tabs__content">
				<div class="tabs__content-item">
					<a href="#" class="item_link">
						<div class="stickers">
							<div class="sticker_hit"></div>
							<div class="sticker_recommended"></div>
						</div>
						<div class="like_icons">
							<div class="compare_item_button">
								<span class="compare_item to"></span>
								<span class="compare_item in added"></span>
							</div>
						</div>
							<img src="assets/img/zhidkie_oboi_silk_plaster_zhidkie_oboi_ekolayn_ecoline.jpg" alt="" class="item_img"></a><br>
					<a href="#" class="item_title">Жидкие обои Эколайн2 (Ecoline)</a>
					<div class="item_price">от 1 441 руб. /уп.</div>
					<div class="item_button"><a href="#" class="button_link">Подробнее</a></div>
				</div>
				<div class="tabs__content-item">
					<a href="#" class="item_link">
						<div class="stickers">
							<div class="sticker_hit"></div>
							<div class="sticker_recommended"></div>
						</div>
						<div class="like_icons">
							<div class="compare_item_button">
								<span class="compare_item to"></span>
								<span class="compare_item in added"></span>
							</div>
						</div>
							<img src="assets/img/zhidkie_oboi_silk_plaster_zhidkie_oboi_ekolayn_ecoline.jpg" alt="" class="item_img"></a><br>
					<a href="#" class="item_title">Жидкие обои Эколайн2 (Ecoline)</a>
					<div class="item_price">от 1 441 руб. /уп.</div>
					<div class="item_button"><a href="#" class="button_link">Подробнее</a></div>
				</div>
				<div class="tabs__content-item">
					<a href="#" class="item_link">
						<div class="stickers">
							<div class="sticker_hit"></div>
							<div class="sticker_recommended"></div>
						</div>
						<div class="like_icons">
							<div class="compare_item_button">
								<span class="compare_item to"></span>
								<span class="compare_item in added"></span>
							</div>
						</div>
							<img src="assets/img/zhidkie_oboi_silk_plaster_zhidkie_oboi_ekolayn_ecoline.jpg" alt="" class="item_img"></a><br>
					<a href="#" class="item_title">Жидкие обои Эколайн2 (Ecoline)</a>
					<div class="item_price">от 1 441 руб. /уп.</div>
					<div class="item_button"><a href="#" class="button_link">Подробнее</a></div>
				</div>
			</div>
			<div class="tabs__content">
				<div class="tabs__content-item">
					<a href="#" class="item_link">
						<div class="stickers">
							<div class="sticker_hit"></div>
							<div class="sticker_recommended"></div>
						</div>
						<div class="like_icons">
							<div class="compare_item_button">
								<span class="compare_item to"></span>
								<span class="compare_item in added"></span>
							</div>
						</div>
							<img src="assets/img/zhidkie_oboi_silk_plaster_zhidkie_oboi_ekolayn_ecoline.jpg" alt="" class="item_img"></a><br>
					<a href="#" class="item_title">Жидкие обои Эколайн3 (Ecoline)</a>
					<div class="item_price">от 1 441 руб. /уп.</div>
					<div class="item_button"><a href="#" class="button_link">Подробнее</a></div>
				</div>
				<div class="tabs__content-item">
					<a href="#" class="item_link">
						<div class="stickers">
							<div class="sticker_hit"></div>
							<div class="sticker_recommended"></div>
						</div>
						<div class="like_icons">
							<div class="compare_item_button">
								<span class="compare_item to"></span>
								<span class="compare_item in added"></span>
							</div>
						</div>
							<img src="assets/img/zhidkie_oboi_silk_plaster_zhidkie_oboi_ekolayn_ecoline.jpg" alt="" class="item_img"></a><br>
					<a href="#" class="item_title">Жидкие обои Эколайн3 (Ecoline)</a>
					<div class="item_price">от 1 441 руб. /уп.</div>
					<div class="item_button"><a href="#" class="button_link">Подробнее</a></div>
				</div>
				<div class="tabs__content-item">
					<a href="#" class="item_link">
						<div class="stickers">
							<div class="sticker_hit"></div>
							<div class="sticker_recommended"></div>
						</div>
						<div class="like_icons">
							<div class="compare_item_button">
								<span class="compare_item to"></span>
								<span class="compare_item in added"></span>
							</div>
						</div>
							<img src="assets/img/zhidkie_oboi_silk_plaster_zhidkie_oboi_ekolayn_ecoline.jpg" alt="" class="item_img"></a><br>
					<a href="#" class="item_title">Жидкие обои Эколайн3 (Ecoline)</a>
					<div class="item_price">от 1 441 руб. /уп.</div>
					<div class="item_button"><a href="#" class="button_link">Подробнее</a></div>
				</div>
			</div>
		</div>
	</section>
	</div>
	</div>
<? if(isset($_GET['test'])) {
	function open($num, $doors) {
	 $cases = array(2, 0, 1, 1, 1, 2);

    return $num . " " . $doors[($num % 100 > 4 && $num % 100 < 20) ? 2 : $cases[min($num % 10, 5)]];
}

echo open(3, array('человек просит', 'человека просят', 'человек просят'));
} ?>
	

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>