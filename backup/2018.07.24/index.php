<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 

            <section class="hero">

                <div class="swiper-container swiper-container-hero">
                    <div class="swiper-wrapper">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"homeslides", 
	array(
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
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "-",
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
		"PROPERTY_CODE" => array(
			0 => "BIG_TEXT",
			1 => "SMALL_TEXT",
			2 => "MID_TEXT",
			3 => "LINK",
			4 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "homeslides"
	),
	false
);?>

                        <!-- div class="swiper-slide hero__slide" style="background-image: url(/img/bg/bg-hero.jpg);">
                            <div class="container">
                                <div class="hero__cta">
                                    <span class="hero__duration">С 1 арпеля по 30 июля 2018</span>
                                    <p class="hero__offer1">Спецпредложение</p>
                                    <p class="hero__offer2">STIHL</p>
                                    <div class="swiper-pagination swiper-pagination-hero"></div>
                                </div>
                            </div>

                        </div>


                        <div class="swiper-slide hero__slide" style="background-image: url(/img/bg/bg-hero.jpg);">
                            <div class="container">
                                <div class="hero__cta">
                                    <span class="hero__duration">С 1 арпеля по 30 июля 2018</span>
                                    <p class="hero__offer1">Спецпредложение</p>
                                    <p class="hero__offer2">STIHL</p>
                                    <div class="swiper-pagination swiper-pagination-hero"></div>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-slide hero__slide" style="background-image: url(/img/bg/bg-hero.jpg);">
                            <div class="container">
                                <div class="hero__cta">
                                    <span class="hero__duration">С 1 арпеля по 30 июля 2018</span>
                                    <p class="hero__offer1">Спецпредложение</p>
                                    <p class="hero__offer2">STIHL</p>
                                    <div class="swiper-pagination swiper-pagination-hero"></div>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-slide hero__slide" style="background-image: url(/img/bg/bg-hero.jpg);">
                            <div class="container">
                                <div class="hero__cta">
                                    <span class="hero__duration">С 1 арпеля по 30 июля 2018</span>
                                    <p class="hero__offer1">Спецпредложение</p>
                                    <p class="hero__offer2">STIHL</p>
                                    <div class="swiper-pagination swiper-pagination-hero"></div>
                                </div>
                            </div>

                        </div -->
                        
                    </div>
                    
                </div>
                    
            </section>









            <section class="section-padding">

                <div class="container">
                    <h2 class="offset-25">Специальные предложения</h2>

                    
                    <div class="product-list">

                        <div class="product product_fake product_25">
                            <div class="text-center">                                
                                <div class="icon icon_help"></div>
                                <p>Нужна помощь <br/>в выборе?</p>
                                <a href="#" class="callbackbutton btn btn_outline">Задать вопрос менеджеру</a>
                            </div>
                        </div>
<?
	include($_SERVER['DOCUMENT_ROOT']."/include/specials.php");
?>			
                        <!-- div class="product product_25">
                            <a href="#" class="product__img" style="background-image: url(/img/bg/bg-product.jpg);"></a>
                            <p class="product__name">Генератор бензиновый Makita EG 241 A</p>
                            <p class="product__price">37 390 руб.</p>
                            <div class="product__controls">
                                <a href="#" class="btn btn_add-to-cart">в корзину</a>
                                <a href="#" class="btn btn_one-click">  
                                    <span>Купить в 1 клик</span>
                                </a>
                            </div>

                            <div class="product__params">
                                <span class="product-param">220В</span>
                                <span class="product-param">3.5кВт</span>
                            </div>
                        </div>

                        <div class="product product_25">
                            <a href="#" class="product__img" style="background-image: url(/img/bg/bg-product.jpg);"></a>
                            <p class="product__name">Генератор бензиновый Makita EG 241 A</p>
                            <p class="product__price">37 390 руб.</p>
                            <div class="product__controls">
                                <a href="#" class="btn btn_add-to-cart">в корзину</a>
                                <a href="#" class="btn btn_one-click">  
                                    <span>Купить в 1 клик</span>
                                </a>
                            </div>

                            <div class="product__params">
                                <span>220В</span>
                                <span>3.5кВт</span>
                            </div>
                        </div>

                        <div class="product product_25">
                            <a href="#" class="product__img" style="background-image: url(/img/bg/bg-product.jpg);"></a>
                            <p class="product__name">Генератор бензиновый Makita EG 241 A</p>
                            <p class="product__price">37 390 руб.</p>
                            <div class="product__controls">
                                <a href="#" class="btn btn_add-to-cart">в корзину</a>
                                <a href="#" class="btn btn_one-click">  
                                    <span>Купить в 1 клик</span>
                                </a>
                            </div>

                            <div class="product__params">
                                <span class="product-param">220В</span>
                                <span class="product-param">3.5кВт</span>
                            </div>
                        </div-->
                    </div>

                </div>
            </section>


            <section class="section-padding section-margin bg-gray-grad">
                <div class="container">
                    <h2>С нами выгодно!</h2>

                    <div class="flex-row">
                        <div class="col-3 feature">
                            <div class="feature__icon" style="background-image: url(/img/icons/i-advantage-1.png);"></div>       
                            <p class="feature__name">Собственный склад</p>
                            <span class="feature__desc">90% того, что вы видите, можем отгрузить сегодня</span>
                        </div>
                        <div class="col-3 feature">
                            <div class="feature__icon" style="background-image: url(/img/icons/i-advantage-2.png);"></div>  
                            <p class="feature__name">Официальное дилерство</p>
                            <span class="feature__desc">Дает нам возможность продавать Вам товар по выгодной цене</span>
                        </div>
                        <div class="col-3 feature">
                            <div class="feature__icon" style="background-image: url(/img/icons/i-advantage-3.png);"></div>  
                            <p class="feature__name">Снабжение под ключ</p>
                            <span class="feature__desc">Наша специализация - полное снабжение объектов</span>
                        </div>
                        <div class="col-3 feature">
                            <div class="feature__icon" style="background-image: url(/img/icons/i-advantage-4.png);"></div>  
                            <p class="feature__name">Экспертиза</p>
                            <span class="feature__desc">Наши 10 лет опыта - гарантия правильного выбора</span>
                        </div>
                    </div>
                </div>
            </section>



            <section class="brands-slider section-padding section-margin">
                <div class="container">
                     <!-- Swiper -->
                    <div class="swiper-container swiper-container-brands">
                        <div class="swiper-wrapper">

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"homelogos", 
	array(
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
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "-",
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
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "homelogos"
	),
	false
);?>



                            <!-- div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/husquarna.jpg);"></div>
                            </div>

                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/makita.jpg);"></div>
                            </div>

                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/milwaukee.jpg);"></div>
                            </div>

                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/stil.jpg);"></div>
                            </div>

                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/viking.jpg);"></div>
                            </div> 

                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/husquarna.jpg);"></div>
                            </div>

                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/makita.jpg);"></div>
                            </div>

                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/milwaukee.jpg);"></div>
                            </div>

                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/stil.jpg);"></div>
                            </div>

                            <div class="swiper-slide slide-brands">
                                <div class="brand-holder" style="background-image: url(/img/icons/brands/viking.jpg);"></div>
                            </div -->                           

                        </div>
                    </div>
                    
                    <!-- Add Arrows -->
                    <div class="swiper-button-next brands-slider-btn-next"></div>
                    <div class="swiper-button-prev brands-slider-btn-prev"></div>
                </div>
            </section>

            <section class="products bg-gray-grad section-padding">


                <div class="container tab-new tab-home">
                    <div class="products__tab-links section-margin">
                        <a href="" class="active" id="new">Новинки</a>
                        <a href="" id="hits">Лидеры продаж</a>
                        <a href="" id="specs">Акции</a>
                    </div>
                    <div class="swiper-container swiper-container-products scp1">
                        <div class="swiper-wrapper">

<?
	include($_SERVER['DOCUMENT_ROOT']."/include/tab-novelty.php");
?>			


                        </div>
                    </div>
                    
                    <!-- Add Arrows -->
                    <div class="swiper-button-next products-slider-btn-next scp1next"></div>
                    <div class="swiper-button-prev products-slider-btn-prev scp1prev"></div>
                </div>

                <div class="container tab-hits tab-home">
                    <div class="products__tab-links section-margin">
                        <a href="" id="new">Новинки</a>
                        <a href="" class="active" id="hits">Лидеры продаж</a>
                        <a href="" id="specs">Акции</a>
                    </div>
                    <div class="swiper-container swiper-container-products scp2">
                        <div class="swiper-wrapper">

<?
	include($_SERVER['DOCUMENT_ROOT']."/include/tab-leader.php");
?>			


                        </div>
                    </div>
                    
                    <!-- Add Arrows -->
                    <div class="swiper-button-next products-slider-btn-next scp2next"></div>
                    <div class="swiper-button-prev products-slider-btn-prev scp2prev"></div>
                </div>

                <div class="container tab-specs tab-home">
                    <div class="products__tab-links section-margin">
                        <a href="" id="new">Новинки</a>
                        <a href="" id="hits">Лидеры продаж</a>
                        <a href="" class="active" id="specs">Акции</a>
                    </div>
                    <div class="swiper-container swiper-container-products scp3">
                        <div class="swiper-wrapper">

<?
	include($_SERVER['DOCUMENT_ROOT']."/include/tab-action.php");
?>			


                        </div>
                    </div>
                    
                    <!-- Add Arrows -->
                    <div class="swiper-button-next products-slider-btn-next scp3next"></div>
                    <div class="swiper-button-prev products-slider-btn-prev scp3prev"></div>
                </div>

            </section>






<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>