<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>




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
                    
                    <div class="swiper-button-next products-slider-btn-next scp3next"></div>
                    <div class="swiper-button-prev products-slider-btn-prev scp3prev"></div>
                </div>

            </section>