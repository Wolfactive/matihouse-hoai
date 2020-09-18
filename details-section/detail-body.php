<section class="details-body">
    <div class="container-fuild">
        <div class="details-body__grid">
            <div class="details-body__grid__left">
            <img src="<?php the_field('view_full'); ?>" alt="">
            </div>
            <div class="details-body__grid__right">
                <div class="details-body__grid__right__item-1">
                    <div class="details-body__grid__right__item-1__grid">
                        <div class="details-body__grid__right__item-1__grid__img">
                            <img src="<?php the_field('view_size'); ?>" alt="">
                        </div>
                        <div class="details-body__grid__right__item-1__grid__content">
                            <div class="details-body__grid__right__item-1__grid__content__title">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="details-body__grid__right__item-1__grid__content__group-color">
                                <div class="details-body__grid__right__item-1__grid__content__group-color__title">
                                    <span>Select color: </span>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__group-color__color">
                                    <div style="background-color:<?php the_field('color_1');?>;"></div>
                                    <div style="background-color:<?php the_field('color_2');?>;"></div>	
                                    <div style="background-color:<?php the_field('color_3');?>;"></div>
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-1__grid__content__size">
                                <div class="details-body__grid__right__item-1__grid__content__size__title">
                                    <span>Size:</span>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__size__dropdown">
                                    <select name="" id="">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-1__grid__content__quantity">
                                <div class="details-body__grid__right__item-1__grid__content__quantity__title">
                                    <span>Quantity</span>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__quantity__plus">
                                    <input type="button" onclick="down();" value="-">
                                    <input type="number" value="1" id="quanlity">
                                    <input type="button" onclick="plus();" value="+">
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-1__grid__content__price">
                                <span><?php the_field('price'); ?>$ </span>
                                <a href=""><i class="fas fa-heart"></i></a>
                                <div class="details-body__grid__right__item-1__grid__content__price__line">
                                    <span></span>
                                </div>
                                <a href="">Add to bag</a>			
                            </div>	
                            <div class="details-body__grid__right__item-1__grid__content__select">
                                <div class="details-body__grid__right__item-1__grid__content__select__details">
                                    <span>Details </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__select__size">
                                    <span>Sizings </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__right__item-1__grid__content__select__ship">
                                    <span>Shipping </span><i class="fas fa-caret-down"></i>
                                </div>
                            </div>	
                            <div class="details-body__grid__right__item-1__grid__content__descript">
                                <div class="details-body__grid__right__item-1__grid__content__descript__title">
                                    <h3>descript</h3>
                                </div>
                                <p>Design blouse made of jersey with sequins</p>  
                                <ul>
                                    <li>high front neck</li>
                                    <li>deep V back neck</li>
                                    <li>long sleeves</li>
                                    <li>it creates a set with skirt in the same colour</li>
                                </ul>
                            </div>
                        </div>
                        <div class="details-body__grid__right__item-1__grid__content-ipad">
                            <div class="details-body__grid__right__item-1__grid__content-ipad__title">
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details-body__grid__right__item-3">
                    <div class="details-body__grid__right__item-3__size">
                                <div class="details-body__grid__right__item-3__size__title">
                                    <span>Size:</span>
                                </div>
                                <div class="details-body__grid__right__item-3__size__dropdown">
                                    <select name="" id="">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-3__quantity">
                                <div class="details-body__grid__right__item-3__quantity__title">
                                    <span>Quantity</span>
                                </div>
                                <div class="details-body__grid__right__item-3__quantity__plus">
                                    <input type="button" onclick="down();" value="-">
                                    <input type="number" value="1" id="quanlity">
                                    <input type="button" onclick="plus();" value="+">
                                </div>
                            </div>
                            <div class="details-body__grid__right__item-3__price">
                                <span><?php the_field('price'); ?>$ </span>
                                <a href=""><i class="fas fa-heart"></i></a>
                                <div class="details-body__grid__right__item-3__price__line">
                                    <span></span>
                                </div>
                                <a href="">Add to bag</a>			
                            </div>	
                            <div class="details-body__grid__right__item-3__select">
                                <div class="details-body__grid__right__item-3__select__details">
                                    <span>Details </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__right__item-3__select__size">
                                    <span>Sizings </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__right__item-3__select__ship">
                                    <span>Shipping </span><i class="fas fa-caret-down"></i>
                                </div>
                            </div>	
                            <div class="details-body__grid__right__item-3__content__descript">
                                <div class="details-body__grid__right__item-3__descript__title">
                                    <h3>descript</h3>
                                </div>
                                <p>Design blouse made of jersey with sequins</p>  
                                <ul>
                                    <li>high front neck</li>
                                    <li>deep V back neck</li>
                                    <li>long sleeves</li>
                                    <li>it creates a set with skirt in the same colour</li>
                                </ul>
                            </div>
                </div>
                <div class="details-body__grid__right__item-2">
                    <div class="details-body__grid__right__item-2__img">
                        <img src="<?php the_field('view_style_1') ?>" alt="">
                    </div>
                    <div class="details-body__grid__right__item-2__img">
                        <img src="<?php the_field('view_style_2') ?>" alt="">
                    </div>
                    <div class="details-body__grid__right__item-2__img">
                        <img src="<?php the_field('view_style_3') ?>" alt="">
                    </div>
                </div>
                
            </div>
            <div class="details-body__grid__bottom">
                <div class="details-body__grid__bottom__item-3">
                    <div class="details-body__grid__bottom__item-3__size">
                                <div class="details-body__grid__bottom__item-3__size__title">
                                    <span>Size:</span>
                                </div>
                                <div class="details-body__grid__bottom__item-3__size__dropdown">
                                    <select name="" id="">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ddetails-body__grid__bottom__item-3__quantity">
                                <div class="details-body__grid__bottom__item-3__quantity__title">
                                    <span>Quantity</span>
                                </div>
                                <div class="details-body__grid__bottom__item-3__quantity__plus">
                                    <input type="button" onclick="down();" value="-">
                                    <input type="number" value="1" id="quanlity">
                                    <input type="button" onclick="plus();" value="+">
                                </div>
                            </div>
                            <div class="details-body__grid__bottom__item-3__price">
                                <span><?php the_field('price'); ?>$ </span>
                                <a href=""><i class="fas fa-heart"></i></a>
                                <div class="details-body__grid__bottom__item-3__price__line">
                                    <span></span>
                                </div>
                                <a href="">Add to bag</a>			
                            </div>	
                            <div class="details-body__grid__bottom__item-3__select">
                                <div class="details-body__grid__bottom__item-3__select__details">
                                    <span>Details </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__bottom__item-3__select__size">
                                    <span>Sizings </span><i class="fas fa-caret-down"></i>
                                </div>
                                <div class="details-body__grid__bottom__item-3__select__ship">
                                    <span>Shipping </span><i class="fas fa-caret-down"></i>
                                </div>
                            </div>	
                            <div class="details-body__grid__bottom__item-3__content__descript">
                                <div class="details-body__grid__bottom__item-3__descript__title">
                                    <h3>descript</h3>
                                </div>
                                <p>Design blouse made of jersey with sequins</p>  
                                <ul>
                                    <li>high front neck</li>
                                    <li>deep V back neck</li>
                                    <li>long sleeves</li>
                                    <li>it creates a set with skirt in the same colour</li>
                                </ul>
                            </div>
                </div>                
            </div>
        </div>
    </div>
</section>