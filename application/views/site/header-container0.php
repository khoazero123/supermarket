<div class="header-container header-color color">
				<?php if(isset($show_offer) && $show_offer==true) { ?>
                <!-- header-offer -->
                <div id="header-offer" class="top-banner">
                    <div class="bg-overlay"><span class="hidden">overlay</span></div>
                    <div class="container-offer">
                        <div class="promotion-offer">
                            <h2>future in your hand</h2>
                            <h3 class="des1">Enjoy the beautiful life with your family supply</h3>
                            <a href="#" class="des2">Wiew Now</a>
                            <span class="header-offer-close"><i class="fa fa-times"><span class="hidden">header-offer-close</span></i>
                            </span>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="header_full">
                    <div class="header">
                        <div class="header-top">
                            <div class="container">
                                <div class="row">
                                    <div class="top-left col-md-4 col-sm-12 col-xs-12">
                                        <p class="welcome-msg">Wellcome to Super Market </p>
                                        <ul class="top-links">
                                        <?php 
                                        if($user=User_helper::login()) {
                                            echo '<li>
                                                    <a href="customer/account/" title="My account">'.$user['displayname'].'</a>
                                                </li>
                                                <li><span class="or">or</span></li>
                                                <li class="logout">
                                                    <a href="customer/account/logout/" title="Sign out">Sign out</a>
                                                </li>';
                                        } else {
                                            echo '<li class="login"><a href="customer/account/login/" title="Sign in">Sign in</a></li>
                                            <li><span class="or">or</span></li>
                                            <li class="first">
                                                <a id="quick_sigup_link" style="positon:relative;" href="customer/account/create/" title="Register">Register</a>
                                            </li>';
                                            } ?>

                                        </ul>
                                    </div>
                                    <div class="top-right col-md-8 col-sm-12 col-xs-12">
                                        <div class="header-top-link">
                                            <ul class="links">
                                                <li class="first"><a href="http://alothemes.com/demo/supermarket/index.php/customer/account/" title="My Account">My Account</a></li>
                                                <li><a href="http://alothemes.com/demo/supermarket/index.php/wishlist/" title="My Wishlist">My Wishlist</a></li>
                                                <li class=" last"><a href="http://alothemes.com/demo/supermarket/index.php/checkout/" title="Checkout" class="top-link-checkout">Checkout</a></li>
                                            </ul>
                                            <div class="header-setting">
                                                <div class="settting-switcher">
                                                    <div class="top-form-language">

                                                        <div class="lang-switcher">
                                                            <ul class="label-title">
                                                                <li class="current"><span class="label dropdown-icon" style="background-image:url(skin/frontend/alosupermarket/default/images/flags/default.jpg);">English</span></li>
                                                            </ul>
                                                            <ul class="language-switcher dropdown">
                                                                <li class="current"><span class="label dropdown-icon" style="background-image:url(skin/frontend/alosupermarket/default/images/flags/default.jpg);">English</span></li>
                                                                <li><a href="http://alothemes.com/demo/supermarket/index.php/?___store=french&amp;___from_store=default"><span class="label dropdown-icon" style="background-image:url(skin/frontend/alosupermarket/default/images/flags/french.jpg);">French</span></a></li>
                                                                <li><a href="http://alothemes.com/demo/supermarket/index.php/?___store=german&amp;___from_store=default"><span class="label dropdown-icon" style="background-image:url(skin/frontend/alosupermarket/default/images/flags/german.jpg);">German</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="header-setting currency_top">
                                                <div class="settting-switcher">
                                                    <div class="dropdown-toggle">
                                                        <div class="text-setting">USD</div>
                                                    </div>
                                                    <div class="dropdown-switcher">


                                                        <div class="currency-switcher">
                                                            <div class="label-title">Currency</div>
                                                            <ul class="currency-switcher dropdown">
                                                                <li><a href="http://alothemes.com/demo/supermarket/index.php/directory/currency/switch/currency/EUR/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvP19fX3N0b3JlPWRlZmF1bHQ,/">EUR</a></li>
                                                                <li class="current">USD</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-content">
                            <div class="container">
                                <div class="row">
                                    <div class="content-logo col-md-3 col-sm-12 col-xs-12">
                                        <div class="header-logo">
                                            <a href="./" title="Magento Commerce" class="logo"><strong>Magento Commerce</strong><img class="img-responsive" src="skin/frontend/alosupermarket/default/images/logo.png" alt="Magento Commerce" /></a>
                                        </div>
                                    </div>
                                    <div class="content-seach col-md-6 col-sm-6 col-xs-12">
                                        <div class="header-search">
                                            <form id="search_mini_form" action="http://alothemes.com/demo/supermarket/index.php/catalogsearch/result/" method="get">
                                                <div class="form-search clearfix">
                                                    <input id="catsearch" type="hidden" name="cat" />
                                                    <select class="ddslick" id="cat" name="cat">
                                                        <option value="">All Categories</option>
                                                        <option value="201">Automovie & Motorcyle</option>
                                                        <option value="202">Electronics</option>
                                                        <option value="254">-Accessories</option>
                                                        <option value="258">-&nbsp;-Mobile</option>
                                                        <option value="259">-&nbsp;-Tablets</option>
                                                        <option value="260">-&nbsp;-Memory Cards</option>
                                                        <option value="255">-Swimming</option>
                                                        <option value="256">-Computers & Networking</option>
                                                        <option value="257">-Flashlights & Lamps</option>
                                                        <option value="212">Fashion & Accecssories</option>
                                                        <option value="315">-Fashion Men’s</option>
                                                        <option value="316">-&nbsp;-Octa Core</option>
                                                        <option value="317">-&nbsp;-Quad Core</option>
                                                        <option value="318">-&nbsp;-Single SIM Card</option>
                                                        <option value="319">-&nbsp;-Dual SIM Card</option>
                                                        <option value="320">-&nbsp;-3GB RAM</option>
                                                        <option value="321">-&nbsp;-5.0 Display</option>
                                                        <option value="322">-Accessories</option>
                                                        <option value="323">-&nbsp;-Pouches</option>
                                                        <option value="324">-&nbsp;-Bumper Cases</option>
                                                        <option value="325">-&nbsp;-Waterproof Cases</option>
                                                        <option value="326">-&nbsp;-Leather Cases</option>
                                                        <option value="327">-&nbsp;-Aluminum Cases</option>
                                                        <option value="328">-&nbsp;-Rhinestone Cases</option>
                                                        <option value="329">-Fashion Women’s</option>
                                                        <option value="330">-&nbsp;-Backup Battery Packs</option>
                                                        <option value="331">-&nbsp;-Screen Protectors</option>
                                                        <option value="332">-&nbsp;-Mobile Phone Cables</option>
                                                        <option value="333">-&nbsp;-Chargers</option>
                                                        <option value="334">-&nbsp;-Holders & Stands</option>
                                                        <option value="335">-&nbsp;-Mobile Phone Lenses</option>
                                                        <option value="336">-Handbag & Shoes</option>
                                                        <option value="337">-&nbsp;-Communications</option>
                                                        <option value="338">-&nbsp;-Communication Cables</option>
                                                        <option value="339">-&nbsp;-Fiber Optic Equipment</option>
                                                        <option value="340">-&nbsp;-Fixed Wireless Terminals</option>
                                                        <option value="204">Smartphone & Table</option>
                                                        <option value="214">-Mobile Phones</option>
                                                        <option value="220">-&nbsp;-Octa Core</option>
                                                        <option value="221">-&nbsp;-Quad Core</option>
                                                                                                        <option value="222">-&nbsp;-Single SIM Card</option>
                                                                                                        <option value="223">-&nbsp;-Dual SIM Card</option>
                                                                                                        <option value="224">-&nbsp;-3GB RAM</option>
                                                                                                        <option value="225">-&nbsp;-5.0 Display</option>
                                                                                                                                                    <option value="215">-Phone Bags & Cases</option>
                                                                                                <option value="226">-&nbsp;-Pouches</option>
                                                                                                        <option value="227">-&nbsp;-Bumper Cases</option>
                                                                                                        <option value="228">-&nbsp;-Waterproof Cases</option>
                                                                                                        <option value="229">-&nbsp;-Leather Cases</option>
                                                                                                        <option value="230">-&nbsp;-Aluminum Cases</option>
                                                                                                        <option value="231">-&nbsp;-Rhinestone Cases</option>
                                                                                                                                                    <option value="216">-Mobile Phone Accessories</option>
                                                                                                <option value="232">-&nbsp;-Backup Battery Packs</option>
                                                                                                        <option value="233">-&nbsp;-Screen Protectors</option>
                                                                                                        <option value="234">-&nbsp;-Mobile Phone Cables</option>
                                                                                                        <option value="235">-&nbsp;-Chargers</option>
                                                                                                        <option value="236">-&nbsp;-Holders & Stands</option>
                                                                                                        <option value="237">-&nbsp;-Mobile Phone Lenses</option>
                                                                                                                                                    <option value="217">-Mobile Phone Parts</option>
                                                                                                <option value="238">-&nbsp;-Mobile Phone LCDs</option>
                                                                                                        <option value="239">-&nbsp;-Mobile Phone Batteries</option>
                                                                                                        <option value="240">-&nbsp;-Mobile Phone Housings</option>
                                                                                                        <option value="241">-&nbsp;-Signal Boosters</option>
                                                                                                        <option value="242">-&nbsp;-SIM Card & Tools</option>
                                                                                                                                                    <option value="218">-Walkie-Talkies</option>
                                                                                                <option value="243">-&nbsp;-Walkie-Talkies</option>
                                                                                                        <option value="244">-&nbsp;-Walkie-Talkie Accessories</option>
                                                                                                                                                    <option value="219">-Communication Equipment</option>
                                                                                                <option value="245">-&nbsp;-Antennas for Communications</option>
                                                                                                        <option value="246">-&nbsp;-Communication Cables</option>
                                                                                                        <option value="247">-&nbsp;-Fiber Optic Equipment</option>
                                                                                                        <option value="248">-&nbsp;-Fixed Wireless Terminals</option>
                                                                                                                                                                                        <option value="285">Furniture</option>
                                                                                        <option value="286">-Handbags Formen’s</option>
                                                                                                <option value="287">-&nbsp;-Octa Core</option>
                                                                                                        <option value="288">-&nbsp;-Quad Core</option>
                                                                                                        <option value="289">-&nbsp;-Single SIM Card</option>
                                                                                                        <option value="290">-&nbsp;-Dual SIM Card</option>
                                                                                                        <option value="291">-&nbsp;-3GB RAM</option>
                                                                                                        <option value="292">-&nbsp;-5.0 Display</option>
                                                                                                                                                    <option value="293">-Accessories</option>
                                                                                                <option value="294">-&nbsp;-Pouches</option>
                                                                                                        <option value="295">-&nbsp;-Bumper Cases</option>
                                                                                                        <option value="296">-&nbsp;-Waterproof Cases</option>
                                                                                                        <option value="297">-&nbsp;-Leather Cases</option>
                                                                                                        <option value="298">-&nbsp;-Aluminum Cases</option>
                                                                                                        <option value="299">-&nbsp;-Rhinestone Cases</option>
                                                                                                                                                    <option value="300">-Clothing Bags</option>
                                                                                                <option value="301">-&nbsp;-Mobile Phone LCDs</option>
                                                                                                        <option value="302">-&nbsp;-Mobile Phone Batteries</option>
                                                                                                        <option value="303">-&nbsp;-Mobile Phone Housings</option>
                                                                                                        <option value="304">-&nbsp;-Signal Boosters</option>
                                                                                                                                                    <option value="306">-Walkie-Talkies</option>
                                                                                                <option value="307">-&nbsp;-Walkie-Talkies</option>
                                                                                                        <option value="308">-&nbsp;-Walkie-Talkie Accessories</option>
                                                                                                                                                                                        <option value="261">Handbags</option>
                                                                                        <option value="262">-Industrial Supplies</option>
                                                                                                <option value="263">-&nbsp;-All Industrial Supplies</option>
                                                                                                        <option value="274">-&nbsp;-Lab & Scientific</option>
                                                                                                        <option value="275">-&nbsp;-Janitorial</option>
                                                                                                        <option value="276">-&nbsp;-Sanitation Supplies</option>
                                                                                                        <option value="309">-&nbsp;-3GB RAM</option>
                                                                                                        <option value="310">-&nbsp;-5.0 Display</option>
                                                                                                                                                    <option value="264">-Car & Motorbike</option>
                                                                                                <option value="265">-&nbsp;-All Cars & Bikes</option>
                                                                                                        <option value="277">-&nbsp;-Measure & Inspect</option>
                                                                                                        <option value="278">-&nbsp;-Car & Bike Care</option>
                                                                                                        <option value="279">-&nbsp;-Lubricants</option>
                                                                                                                                                    <option value="266">-Shop for Bike</option>
                                                                                                <option value="311">-&nbsp;-Backup Battery Packs</option>
                                                                                                        <option value="267">-&nbsp;-Helmets & Gloves</option>
                                                                                                        <option value="312">-&nbsp;-Screen Protectors</option>
                                                                                                        <option value="280">-&nbsp;-Bike Parts</option>
                                                                                                        <option value="281">-&nbsp;-Scarves</option>
                                                                                                        <option value="282">-&nbsp;-Skirts</option>
                                                                                                                                                    <option value="268">-Shop for Car</option>
                                                                                                <option value="269">-&nbsp;-Air Fresheners</option>
                                                                                                        <option value="283">-&nbsp;-Car Parts</option>
                                                                                                        <option value="284">-&nbsp;-Tyre Accessories</option>
                                                                                                        <option value="313">-&nbsp;-SIM Card & Tools</option>
                                                                                                        <option value="314">-&nbsp;-Signal Boosters</option>
                                                                                                                                                    <option value="270">-Football</option>
                                                                                                <option value="271">-&nbsp;-Coats & Jackets</option>
                                                                                                        <option value="272">-&nbsp;-Blouses & Shirts</option>
                                                                                                        <option value="273">-&nbsp;-Tops & Tees</option>
                                                                                                                                                                                        <option value="205">Health & Beauty</option>
                                                                                                                            <option value="206">Bags & Shoe</option>
                                                                                                                            <option value="207">Accessories</option>
                                                                                                                            <option value="250">Televisions & Monitor</option>
                                                                                                                            <option value="208">Toy & Hobbies</option>
                                                                                                                            <option value="209">Computer & Networking</option>
                                                                                                                            <option value="210">Laptop & Accessories</option>
                                                                                                                            <option value="203">Sport & Outdoors</option>
                                                                                                                            <option value="211">Camera & Lamp</option>
                                                                                                                            <option value="213">Watch & Shoes</option>
                                                                                                                            <option value="249">SmartPhone</option>
                                                                                                                            <option value="251">Camera & USB</option>
                                                                                                                            <option value="252">Electrolux & Furniture</option>
                                                                                                                            <option value="253">Sport</option>
                                                                                                                    </select>
                                                    <div class="form-imput-serach">
                                                        <input id="search" type="text" name="q" class="input-text" placeholder="Search ..." />
                                                    </div>
                                                    <button type="submit" title="Search" class="button"><span><span><i class="lnr lnr-magnifier icons"></i><i class="seach-text">Search</i></span></span></button>
                                                    <div id="search_autocomplete" class="search-autocomplete"></div>
                                                </div>
                                            </form>
                                            <script type="text/javascript">
                                                //<![CDATA[
                                                var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search ...');
                                                searchForm.initAutocomplete('http://alothemes.com/demo/supermarket/index.php/catalogsearch/ajax/suggest/', 'search_autocomplete');
                                                jQuery('#search_mini_form .ddslick').ddslick({
                                                    width: 160,
                                                    onSelected: function(opt) {
                                                        jQuery('#search_mini_form #catsearch').val(opt.selectedData.value)
                                                    }
                                                });
                                                //]]>
                                            </script>
                                        </div>
                                    </div>

                                    <div class="content-cart col-md-3 col-sm-6 col-xs-12">
                                        <div class="tool-header">
                                            <a title="My wishlist" href="http://alothemes.com/demo/supermarket/index.php/wishlist/" target="_blank" class="btn-heart">wishlist</a>
                                        </div>
                                        <div class="miniCartWrap">
                                            <div class="mini-maincart">
                                                <div class="cartSummary toggle-tab">
                                                    <div class="crat-icon">
                                                        <span class="zero">0 </span>
                                                    </div>
                                                    <p class="mt-cart-title">Cart</p>
                                                    <div class="cart-header">
                                                        <p class="cart-tolatl">
                                                            <!--<span class="toltal"></span>-->
                                                            <span class="zero">0 items - </span>
                                                            <span><span class="price">$0.00</span></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mini-contentCart toggle-content">
                                                    <div class="block-content">
                                                        <p class="empty">You have no items in your shopping cart.</p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-bottom">
                            <div class="header-sticker">
                                <div class="container">
                                    <div class="border-bottom menu-mobile">
                                        <div class="row menu-mobile-none">
                                            <div class="header-config-bg col-xs-12 col-sm-12 col-md-12">
                                                <div class="header-wrapper-bottom">
                                                    <!-- Sticky Logo ICON ON MMENU -->
                                                    <div class="header-logo sticky-logo">
                                                        <a href="http://alothemes.com/demo/supermarket/index.php/" title="Magento Commerce" class="logo"><strong>Magento Commerce</strong><img class="img-responsive" src="skin/frontend/alosupermarket/default/images/logo.png" alt="Magento Commerce" /></a>
                                                    </div>
                                                    <div class="custom-menu">
                                                        <div class="vmagicmenu clearfix">
                                                            <div class="block-title block-title-vmagicmenu">
                                                                <strong>
                                                                    <span class="fa lnr lnr-menu"></span>
                                                                    <span class="vmagicmenu-subtitle">Categories</span>
                                                                </strong>
                                                            </div>
                                                            <div class="block-vmagicmenu-content">
                                                                <ul class="vmagicmenu-narrow clearfix">
                                                                    <li class="level0 cat first">
                                                                        <a class="level-top" href="automovie-motorcyle.html"><img class="img-responsive" alt="Automovie & Motorcyle" src="media/catalog/category//06.png"><span>Automovie & Motorcyle</span><span class="boder-menu"></span></a>
                                                                    </li>
                                                                    <li class="level0 cat  hasChild dropdown">
                                                                        <a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/electronics.html"><img class="img-responsive" alt="Electronics" src="media/catalog/category//01.png"><span>Electronics</span><span class="boder-menu"></span></a>
                                                                        <ul class="level0">
                                                                            <li class="level1 hasChild"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/accessories.html"><span>Accessories</span></a>
                                                                                <ul class="level1">
                                                                                    <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/accessories/mobile.html"><span>Mobile</span></a>
                                                                                    </li>
                                                                                    <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/accessories/tablets.html"><span>Tablets</span></a>
                                                                                    </li>
                                                                                    <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/accessories/memory-cards.html"><span>Memory Cards</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/swimming.html"><span>Swimming</span></a>
                                                                            </li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/computers-networking.html"><span>Computers & Networking</span></a>
                                                                            </li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/flashlights-lamps.html"><span>Flashlights & Lamps</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="level0 cat  hasChild" data-options='{"menu_id":"7","cat_columns":null,"cat_proportions":null,"right_proportions":null,"left_proportions":null}'><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories.html"><img class="img-responsive" alt="Fashion & Accecssories" src="media/catalog/category//08_1.png"><span>Fashion & Accecssories</span><span class="boder-menu"></span></a>
                                                                        <div class="level-top-mega">
                                                                            <div class="content-mega">
                                                                                <div class="content-mega-horizontal">
                                                                                    <ul class="level0 mage-column cat-mega">
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s.html"><span>Fashion Men’s</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/octa-core.html"><span>Octa Core</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/quad-core.html"><span>Quad Core</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/5-0-display.html"><span>5.0 Display</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories.html"><span>Accessories</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/pouches.html"><span>Pouches</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/leather-cases.html"><span>Leather Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s.html"><span>Fashion Women’s</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/mobile-phone-cables.html"><span>Mobile Phone Cables</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/chargers.html"><span>Chargers</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/holders-stands.html"><span>Holders & Stands</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/mobile-phone-lenses.html"><span>Mobile Phone Lenses</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes.html"><span>Handbag & Shoes</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes/communications.html"><span>Communications</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes/communication-cables.html"><span>Communication Cables</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes/fiber-optic-equipment.html"><span>Fiber Optic Equipment</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes/fixed-wireless-terminals.html"><span>Fixed Wireless Terminals</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                            <div class='mage-column mega-block-bottom'>
                                                                                                <div class="banner-menu banner-menu-bottom"><img class="img-responsive" src="media/wysiwyg/alothemes/static/banner-menu-bottom.jpg" alt="" /></div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="level0 cat  hasChild" data-options='{"menu_id":"3","cat_columns":"3","cat_proportions":"3","right_proportions":"1","left_proportions":null}'><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/smartphone-table.html"><img class="img-responsive" alt="Smartphone & Table" src="media/catalog/category//02.png"><span>Smartphone & Table</span><span class="boder-menu"></span></a>
                                                                        <div class="level-top-mega">
                                                                            <div class="content-mega">
                                                                                <div class="content-mega-horizontal">
                                                                                    <ul class="level0 mage-column cat-mega">
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones.html"><span>Mobile Phones</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/octa-core.html"><span>Octa Core</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/quad-core.html"><span>Quad Core</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/5-0-display.html"><span>5.0 Display</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases.html"><span>Phone Bags & Cases</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/pouches.html"><span>Pouches</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/leather-cases.html"><span>Leather Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories.html"><span>Mobile Phone Accessories</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/mobile-phone-cables.html"><span>Mobile Phone Cables</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/chargers.html"><span>Chargers</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/holders-stands.html"><span>Holders & Stands</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/mobile-phone-lenses.html"><span>Mobile Phone Lenses</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts.html"><span>Mobile Phone Parts</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment.html"><span>Communication Equipment</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/antennas-for-communications.html"><span>Antennas for Communications</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/communication-cables.html"><span>Communication Cables</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/fiber-optic-equipment.html"><span>Fiber Optic Equipment</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/fixed-wireless-terminals.html"><span>Fixed Wireless Terminals</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li></li>
                                                                                    </ul>
                                                                                    <div class='mage-column mega-block-right'>
                                                                                        <div class="banner-menu"><img class="img-responsive" src="media/wysiwyg/alothemes/static/banner-menu-right.jpg" alt="" /></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="level0 cat  hasChild" data-options='{"menu_id":"6","cat_columns":"2","cat_proportions":"2","right_proportions":"2","left_proportions":null}'><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/furniture.html"><img class="img-responsive" alt="Furniture" src="media/catalog/category//10_2.png"><span>Furniture<span class="cat_label Sale">Sale</span></span><span class="boder-menu"></span></a>
                                                                        <div class="level-top-mega">
                                                                            <div class="content-mega">
                                                                                <div class="content-mega-horizontal">
                                                                                    <ul class="level0 mage-column cat-mega">
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s.html"><span>Handbags Formen’s</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/octa-core.html"><span>Octa Core</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/quad-core.html"><span>Quad Core</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/5-0-display.html"><span>5.0 Display</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories.html"><span>Accessories</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/pouches.html"><span>Pouches</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/leather-cases.html"><span>Leather Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags.html"><span>Clothing Bags</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li></li>
                                                                                    </ul>
                                                                                    <div class='mage-column mega-block-right'>
                                                                                        <div class="menu-banner-sale">
                                                                                            <div class="menu-products-sale">
                                                                                                <div class="lmzmiancow magicproduct">
                                                                                                    <div class="block-title-tabs">
                                                                                                        <ul class="magictabs" data-ajax='{"limit":"1","productDelay":"500","widthImages":"235","heightImages":"270","timer":"0","action":["cart"]}'>
                                                                                                            <li class="item active loaded single" data-type="saleproduct"><span class="title">Sale Products</span></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="ajax_loading" style="display:none" data-url="http://alothemes.com/demo/supermarket/index.php/magicproduct/index/ajax/">
                                                                                                        <img src="skin/frontend/alosupermarket/default/magiccart/plugin/images/loading.gif" alt="Loading..." />
                                                                                                    </div>
                                                                                                    <div class="content-products" data-margin="0" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>

                                                                                                        <div class="mage-magictabs mc-saleproduct">
                                                                                                            <ul class="flexisel-content products-grid saleproduct zoomOut play">

                                                                                                                <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class="item item-animate">
                                                                                                                    <div class="per-product">
                                                                                                                        <div class="images-container">
                                                                                                                            <div class="product-hover">
                                                                                                                                <span class="sticker top-right"><span class="labelsale">-30%</span></span> <a href="http://alothemes.com/demo/supermarket/index.php/catalog/product/view/id/14/s/smart-tv-lc-50n6000u-new/category/261/" title="Smart TV LC-50N6000U New" class="product-image">
                                    <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/0/10_1.jpg" width="235" height="270" alt="Smart TV LC-50N6000U New" />
                                    
                                                                            <span class="product-img-back">
                                            <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_10.jpg" width="235" height="270" alt="Smart TV LC-50N6000U New" />
                                        </span>
                                                                    </a>
                                                                                                                                <div class="link-view pull-left-none">
                                                                                                                                    <a title="Quick View" href="http://alothemes.com/demo/supermarket/index.php/magicshop/quickview/view/id/14" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="products-textlink clearfix">
                                                                                                                                <h2 class="product-name">
                                                                                                                                    <a href="http://alothemes.com/demo/supermarket/index.php/catalog/product/view/id/14/s/smart-tv-lc-50n6000u-new/category/261/" title="Smart TV LC-50N6000U New">Smart TV LC-50N6000U New</a>
                                                                                                                                </h2>



                                                                                                                                <div class="price-box">

                                                                                                                                    <p class="old-price">
                                                                                                                                        <span class="price-label">Regular Price:</span>
                                                                                                                                        <span class="price" id="old-price-14">
                    $410.00                </span>
                                                                                                                                    </p>

                                                                                                                                    <p class="special-price">
                                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                                        <span class="price" id="product-price-14">
                    $290.00                </span>
                                                                                                                                    </p>


                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                            <div class="actions-no hover-box">
                                                                                                                                <div class="actions">
                                                                                                                                    <div class="actions-cart">
                                                                                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('http://alothemes.com/demo/supermarket/index.php/checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvaGFuZGJhZ3MuaHRtbD9jb2xvcj01Jm1vZGU9bGlzdCZwcmljZT00MC0,/product/14/form_key/cPv7ZCDWDkada6aC/')"><span><span>Add to Cart</span></span></button>
                                                                                                                                    </div>
                                                                                                                                    <ul class="add-to-links pull-left-none">

                                                                                                                                    </ul>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>


                                                                                                    </div>
                                                                                                    <!-- MAP -->
                                                                                                    <!-- MAP -->
                                                                                                </div>

                                                                                                <script type="text/javascript">
                                                                                                    jQuery(document).ready(function() {
                                                                                                        jQuery(".lmzmiancow").magicproduct({
                                                                                                            selector: ".lmzmiancow", // Selector product grid
                                                                                                        });
                                                                                                    });
                                                                                                </script>

                                                                                            </div>
                                                                                            <div class="banner-menu"><img class="img-responsive" src="media/wysiwyg/alothemes/static/banner-menu-right2.jpg" alt="" /></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="level0 cat  hasChild" data-options='{"menu_id":"4","cat_columns":"3","cat_proportions":"3","right_proportions":"1","left_proportions":null}'><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/handbags.html"><img class="img-responsive" alt="Handbags" src="http://alothemes.com/demo/supermarket/media/catalog/category//09_1.png"><span>Handbags</span><span class="boder-menu"></span></a>
                                                                        <div class="level-top-mega">
                                                                            <div class="content-mega">
                                                                                <div class="content-mega-horizontal">
                                                                                    <ul class="level0 mage-column cat-mega">
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies.html"><span>Industrial Supplies</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/all-industrial-supplies.html"><span>All Industrial Supplies</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/lab-scientific.html"><span>Lab & Scientific</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/janitorial.html"><span>Janitorial</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/sanitation-supplies.html"><span>Sanitation Supplies</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/5-0-display.html"><span>5.0 Display</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike.html"><span>Car & Motorbike<span class="cat_label New">New</span></span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/all-cars-bikes.html"><span>All Cars & Bikes</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/measure-inspect.html"><span>Measure & Inspect</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/car-bike-care.html"><span>Car & Bike Care</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/lubricants.html"><span>Lubricants</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike.html"><span>Shop for Bike</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/helmets-gloves.html"><span>Helmets & Gloves</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/bike-parts.html"><span>Bike Parts</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/scarves.html"><span>Scarves</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/skirts.html"><span>Skirts</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car.html"><span>Shop for Car</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/air-fresheners.html"><span>Air Fresheners</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/car-parts.html"><span>Car Parts</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/tyre-accessories.html"><span>Tyre Accessories</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football.html"><span>Football</span></a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football/coats-jackets.html"><span>Coats & Jackets</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football/blouses-shirts.html"><span>Blouses & Shirts</span></a>
                                                                                                </li>
                                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football/tops-tees.html"><span>Tops & Tees</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li></li>
                                                                                    </ul>
                                                                                    <div class='mage-column mega-block-right'>
                                                                                        <div class="banner-menu banner-menu-position"><img class="img-responsive" src="media/wysiwyg/alothemes/static/banner-menu-right3.png" alt="" /></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/health-beauty.html"><img class="img-responsive" alt="Health & Beauty" src="http://alothemes.com/demo/supermarket/media/catalog/category//10.png"><span>Health & Beauty</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/bags-shoe.html"><img class="img-responsive" alt="Bags & Shoe" src="http://alothemes.com/demo/supermarket/media/catalog/category//04.png"><span>Bags & Shoe</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/accessories.html"><img class="img-responsive" alt="Accessories" src="http://alothemes.com/demo/supermarket/media/catalog/category//07.png"><span>Accessories</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/televisions-monitor.html"><img class="img-responsive" alt="Televisions & Monitor" src="http://alothemes.com/demo/supermarket/media/catalog/category//05_1.png"><span>Televisions & Monitor</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/toy-hobbies.html"><img class="img-responsive" alt="Toy & Hobbies" src="http://alothemes.com/demo/supermarket/media/catalog/category//05.png"><span>Toy & Hobbies</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/computer-networking.html"><img class="img-responsive" alt="Computer & Networking" src="http://alothemes.com/demo/supermarket/media/catalog/category//09.png"><span>Computer & Networking</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/laptop-accessories.html"><img class="img-responsive" alt="Laptop & Accessories" src="http://alothemes.com/demo/supermarket/media/catalog/category//03.png"><span>Laptop & Accessories</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/sport-outdoors.html"><img class="img-responsive" alt="Sport & Outdoors" src="http://alothemes.com/demo/supermarket/media/catalog/category//08.png"><span>Sport & Outdoors</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/camera-lamp.html"><img class="img-responsive" alt="Camera & Lamp" src="http://alothemes.com/demo/supermarket/media/catalog/category//10_1.png"><span>Camera & Lamp</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/watch-shoes.html"><span>Watch & Shoes</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/smartphone.html"><span>SmartPhone</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/camera-usb.html"><span>Camera & USB</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat "><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/electrolux-furniture.html"><span>Electrolux & Furniture</span><span class="boder-menu"></span></a></li>
                                                                    <li class="level0 cat last"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/sport.html"><span>Sport</span><span class="boder-menu"></span></a></li>
                                                                </ul>
                                                                <div class="all-cat"><span>All Categories</span><span style="display:none">Close</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="magicmenu clearfix">
                                                            <ul class="nav-desktop sticker">
                                                                <li class="level0 home"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/"><span class="icon fa fa-home"></span><span class="icon-text">Home</span></a>
                                                                    <div class="level-top-mega">
                                                                        <div><a href="http://alothemes.com/demo/supermarket/index.php/"><span class="demo-home">Demo 1</span></a></div>
                                                                        <div><a href="http://alothemes.com/demo/supermarket/index.php/?___store=english_2"><span class="demo-home">Demo 2</span></a></div>
                                                                        <div><a href="http://alothemes.com/demo/supermarket/index.php/?___store=english_3"><span class="demo-home">Demo 3</span></a></div>
                                                                        <div><a href="http://alothemes.com/demo/supermarket/index.php/?___store=english_4"><span class="demo-home">Demo 4</span></a></div>
                                                                        <div><a href="http://alothemes.com/demo/supermarket/index.php/?___store=english_5"><span class="demo-home">Demo 5</span></a></div>
                                                                        <div><a href="http://alothemes.com/demo/supermarket/index.php/?___store=english_6"><span class="demo-home">Demo 6</span></a></div>
                                                                    </div>
                                                                </li>
                                                                <li class="level0 cat  hasChild" data-options='{"menu_id":"3","cat_columns":"3","cat_proportions":"3","right_proportions":"1","left_proportions":null}'><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/smartphone-table.html"><img class="img-responsive" alt="Smartphone & Table" src="http://alothemes.com/demo/supermarket/media/catalog/category//02.png"><span>Smartphone & Table</span><span class="boder-menu"></span></a>
                                                                    <div class="level-top-mega">
                                                                        <div class="content-mega">
                                                                            <div class="content-mega-horizontal">
                                                                                <ul class="level0 mage-column cat-mega">
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones.html"><span>Mobile Phones</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/octa-core.html"><span>Octa Core</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/quad-core.html"><span>Quad Core</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/5-0-display.html"><span>5.0 Display</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases.html"><span>Phone Bags & Cases</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/pouches.html"><span>Pouches</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/leather-cases.html"><span>Leather Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories.html"><span>Mobile Phone Accessories</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/mobile-phone-cables.html"><span>Mobile Phone Cables</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/chargers.html"><span>Chargers</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/holders-stands.html"><span>Holders & Stands</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/mobile-phone-lenses.html"><span>Mobile Phone Lenses</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts.html"><span>Mobile Phone Parts</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment.html"><span>Communication Equipment</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/antennas-for-communications.html"><span>Antennas for Communications</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/communication-cables.html"><span>Communication Cables</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/fiber-optic-equipment.html"><span>Fiber Optic Equipment</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/fixed-wireless-terminals.html"><span>Fixed Wireless Terminals</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li></li>
                                                                                </ul>
                                                                                <div class='mage-column mega-block-right'>
                                                                                    <div class="banner-menu"><img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/wysiwyg/alothemes/static/banner-menu-right.jpg" alt="" /></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="level0 cat  hasChild" data-options='{"menu_id":"6","cat_columns":"2","cat_proportions":"2","right_proportions":"2","left_proportions":null}'><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/furniture.html"><img class="img-responsive" alt="Furniture" src="http://alothemes.com/demo/supermarket/media/catalog/category//10_2.png"><span>Furniture<span class="cat_label Sale">Sale</span></span><span class="boder-menu"></span></a>
                                                                    <div class="level-top-mega">
                                                                        <div class="content-mega">
                                                                            <div class="content-mega-horizontal">
                                                                                <ul class="level0 mage-column cat-mega">
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s.html"><span>Handbags Formen’s</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/octa-core.html"><span>Octa Core</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/quad-core.html"><span>Quad Core</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/5-0-display.html"><span>5.0 Display</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories.html"><span>Accessories</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/pouches.html"><span>Pouches</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/leather-cases.html"><span>Leather Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags.html"><span>Clothing Bags</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li></li>
                                                                                </ul>
                                                                                <div class='mage-column mega-block-right'>
                                                                                    <div class="menu-banner-sale">
                                                                                        <div class="menu-products-sale">
                                                                                            <div class="lmzmiancow magicproduct">
                                                                                                <div class="block-title-tabs">
                                                                                                    <ul class="magictabs" data-ajax='{"limit":"1","productDelay":"500","widthImages":"235","heightImages":"270","timer":"0","action":["cart"]}'>
                                                                                                        <li class="item active loaded single" data-type="saleproduct"><span class="title">Sale Products</span></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div class="ajax_loading" style="display:none" data-url="http://alothemes.com/demo/supermarket/index.php/magicproduct/index/ajax/">
                                                                                                    <img src="http://alothemes.com/demo/supermarket/skin/frontend/alosupermarket/default/magiccart/plugin/images/loading.gif" alt="Loading..." />
                                                                                                </div>
                                                                                                <div class="content-products" data-margin="0" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>

                                                                                                    <div class="mage-magictabs mc-saleproduct">
                                                                                                        <ul class="flexisel-content products-grid saleproduct zoomOut play">

                                                                                                            <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class="item item-animate">
                                                                                                                <div class="per-product">
                                                                                                                    <div class="images-container">
                                                                                                                        <div class="product-hover">
                                                                                                                            <span class="sticker top-right"><span class="labelsale">-30%</span></span> <a href="http://alothemes.com/demo/supermarket/index.php/catalog/product/view/id/14/s/smart-tv-lc-50n6000u-new/category/261/" title="Smart TV LC-50N6000U New" class="product-image">
                                    <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/0/10_1.jpg" width="235" height="270" alt="Smart TV LC-50N6000U New" />
                                    
                                                                            <span class="product-img-back">
                                            <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_10.jpg" width="235" height="270" alt="Smart TV LC-50N6000U New" />
                                        </span>
                                                                    </a>
                                                                                                                            <div class="link-view pull-left-none">
                                                                                                                                <a title="Quick View" href="http://alothemes.com/demo/supermarket/index.php/magicshop/quickview/view/id/14" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View                                    </a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="products-textlink clearfix">
                                                                                                                            <h2 class="product-name">
                                                                                                                                <a href="http://alothemes.com/demo/supermarket/index.php/catalog/product/view/id/14/s/smart-tv-lc-50n6000u-new/category/261/" title="Smart TV LC-50N6000U New">Smart TV LC-50N6000U New</a>
                                                                                                                            </h2>



                                                                                                                            <div class="price-box">

                                                                                                                                <p class="old-price">
                                                                                                                                    <span class="price-label">Regular Price:</span>
                                                                                                                                    <span class="price" id="old-price-14">
                    $410.00                </span>
                                                                                                                                </p>

                                                                                                                                <p class="special-price">
                                                                                                                                    <span class="price-label">Special Price</span>
                                                                                                                                    <span class="price" id="product-price-14">
                    $290.00                </span>
                                                                                                                                </p>


                                                                                                                            </div>

                                                                                                                        </div>
                                                                                                                        <div class="actions-no hover-box">
                                                                                                                            <div class="actions">
                                                                                                                                <div class="actions-cart">
                                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('http://alothemes.com/demo/supermarket/index.php/checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvaGFuZGJhZ3MuaHRtbD9jb2xvcj01Jm1vZGU9bGlzdCZwcmljZT00MC0,/product/14/form_key/cPv7ZCDWDkada6aC/')"><span><span>Add to Cart</span></span></button>
                                                                                                                                </div>
                                                                                                                                <ul class="add-to-links pull-left-none">

                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>


                                                                                                </div>
                                                                                                <!-- MAP -->
                                                                                                <!-- MAP -->
                                                                                            </div>

                                                                                            <script type="text/javascript">
                                                                                                jQuery(document).ready(function() {
                                                                                                    jQuery(".lmzmiancow").magicproduct({
                                                                                                        selector: ".lmzmiancow", // Selector product grid
                                                                                                    });
                                                                                                });
                                                                                            </script>

                                                                                        </div>
                                                                                        <div class="banner-menu"><img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/wysiwyg/alothemes/static/banner-menu-right2.jpg" alt="" /></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="level0 cat  hasChild" data-options='{"menu_id":"4","cat_columns":"3","cat_proportions":"3","right_proportions":"1","left_proportions":null}'><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/handbags.html"><img class="img-responsive" alt="Handbags" src="http://alothemes.com/demo/supermarket/media/catalog/category//09_1.png"><span>Handbags</span><span class="boder-menu"></span></a>
                                                                    <div class="level-top-mega">
                                                                        <div class="content-mega">
                                                                            <div class="content-mega-horizontal">
                                                                                <ul class="level0 mage-column cat-mega">
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies.html"><span>Industrial Supplies</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/all-industrial-supplies.html"><span>All Industrial Supplies</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/lab-scientific.html"><span>Lab & Scientific</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/janitorial.html"><span>Janitorial</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/sanitation-supplies.html"><span>Sanitation Supplies</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/5-0-display.html"><span>5.0 Display</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike.html"><span>Car & Motorbike<span class="cat_label New">New</span></span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/all-cars-bikes.html"><span>All Cars & Bikes</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/measure-inspect.html"><span>Measure & Inspect</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/car-bike-care.html"><span>Car & Bike Care</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/lubricants.html"><span>Lubricants</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike.html"><span>Shop for Bike</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/helmets-gloves.html"><span>Helmets & Gloves</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/bike-parts.html"><span>Bike Parts</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/scarves.html"><span>Scarves</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/skirts.html"><span>Skirts</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car.html"><span>Shop for Car</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/air-fresheners.html"><span>Air Fresheners</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/car-parts.html"><span>Car Parts</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/tyre-accessories.html"><span>Tyre Accessories</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football.html"><span>Football</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football/coats-jackets.html"><span>Coats & Jackets</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football/blouses-shirts.html"><span>Blouses & Shirts</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football/tops-tees.html"><span>Tops & Tees</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li></li>
                                                                                </ul>
                                                                                <div class='mage-column mega-block-right'>
                                                                                    <div class="banner-menu banner-menu-position"><img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/wysiwyg/alothemes/static/banner-menu-right3.png" alt="" /></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class='level0 ext  hasChild first'><span class="level-top"><span>Product Types<span class="cat_label Hot">Hot</span></span>
                                                                    </span>
                                                                    <div class="level-top-mega">
                                                                        <ul class="level0 dropdown">
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/smart-tvs-from-sharpusa.html"><span>Single product</span></a></li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/grouped-product.html"><span>Group product</span></a></li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/configurable-product.html"><span>Configurable product</span></a></li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/samsung-galaxy-smartphone.html"><span>Product with Related</span></a></li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/samsung-galaxy-smartphone.html"><span>Product with Upsell</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class='level0 ext  '><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/contacts/"><span>Contact Us</span></a></li>
                                                                <li class='level0 ext  last'><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/about-magento-demo-store/"><span>About Us</span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nav-mobile">
                                                            <h3 class="mobi-title">Categories</h3>
                                                            <ul>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/automovie-motorcyle.html"><img class="img-responsive" alt="Automovie & Motorcyle" src="http://alothemes.com/demo/supermarket/media/catalog/category//06.png"><span>Automovie & Motorcyle</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/electronics.html"><img class="img-responsive" alt="Electronics" src="http://alothemes.com/demo/supermarket/media/catalog/category//01.png"><span>Electronics</span><span class="boder-menu"></span></a>
                                                                    <ul class="level0">
                                                                        <li class="level1 hasChild"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/accessories.html"><span>Accessories</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/accessories/mobile.html"><span>Mobile</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/accessories/tablets.html"><span>Tablets</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/accessories/memory-cards.html"><span>Memory Cards</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/swimming.html"><span>Swimming</span></a>
                                                                        </li>
                                                                        <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/computers-networking.html"><span>Computers & Networking</span></a>
                                                                        </li>
                                                                        <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/electronics/flashlights-lamps.html"><span>Flashlights & Lamps</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories.html"><img class="img-responsive" alt="Fashion & Accecssories" src="http://alothemes.com/demo/supermarket/media/catalog/category//08_1.png"><span>Fashion & Accecssories</span><span class="boder-menu"></span></a>
                                                                    <ul>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s.html"><span>Fashion Men’s</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/octa-core.html"><span>Octa Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/quad-core.html"><span>Quad Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-men-s/5-0-display.html"><span>5.0 Display</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories.html"><span>Accessories</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/pouches.html"><span>Pouches</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/leather-cases.html"><span>Leather Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/accessories/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s.html"><span>Fashion Women’s</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/mobile-phone-cables.html"><span>Mobile Phone Cables</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/chargers.html"><span>Chargers</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/holders-stands.html"><span>Holders & Stands</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/fashion-women-s/mobile-phone-lenses.html"><span>Mobile Phone Lenses</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes.html"><span>Handbag & Shoes</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes/communications.html"><span>Communications</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes/communication-cables.html"><span>Communication Cables</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes/fiber-optic-equipment.html"><span>Fiber Optic Equipment</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/fashion-accecssories/handbag-shoes/fixed-wireless-terminals.html"><span>Fixed Wireless Terminals</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/smartphone-table.html"><img class="img-responsive" alt="Smartphone & Table" src="http://alothemes.com/demo/supermarket/media/catalog/category//02.png"><span>Smartphone & Table</span><span class="boder-menu"></span></a>
                                                                    <ul>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones.html"><span>Mobile Phones</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/octa-core.html"><span>Octa Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/quad-core.html"><span>Quad Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phones/5-0-display.html"><span>5.0 Display</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases.html"><span>Phone Bags & Cases</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/pouches.html"><span>Pouches</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/leather-cases.html"><span>Leather Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/phone-bags-cases/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories.html"><span>Mobile Phone Accessories</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/mobile-phone-cables.html"><span>Mobile Phone Cables</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/chargers.html"><span>Chargers</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/holders-stands.html"><span>Holders & Stands</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-accessories/mobile-phone-lenses.html"><span>Mobile Phone Lenses</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts.html"><span>Mobile Phone Parts</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/mobile-phone-parts/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment.html"><span>Communication Equipment</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/antennas-for-communications.html"><span>Antennas for Communications</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/communication-cables.html"><span>Communication Cables</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/fiber-optic-equipment.html"><span>Fiber Optic Equipment</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/smartphone-table/communication-equipment/fixed-wireless-terminals.html"><span>Fixed Wireless Terminals</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/furniture.html"><img class="img-responsive" alt="Furniture" src="http://alothemes.com/demo/supermarket/media/catalog/category//10_2.png"><span>Furniture<span class="cat_label Sale">Sale</span></span><span class="boder-menu"></span></a>
                                                                    <ul>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s.html"><span>Handbags Formen’s</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/octa-core.html"><span>Octa Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/quad-core.html"><span>Quad Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/handbags-formen-s/5-0-display.html"><span>5.0 Display</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories.html"><span>Accessories</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/pouches.html"><span>Pouches</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/leather-cases.html"><span>Leather Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/accessories/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags.html"><span>Clothing Bags</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/clothing-bags/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/furniture/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/furniture/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/handbags.html"><img class="img-responsive" alt="Handbags" src="http://alothemes.com/demo/supermarket/media/catalog/category//09_1.png"><span>Handbags</span><span class="boder-menu"></span></a>
                                                                    <ul>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies.html"><span>Industrial Supplies</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/all-industrial-supplies.html"><span>All Industrial Supplies</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/lab-scientific.html"><span>Lab & Scientific</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/janitorial.html"><span>Janitorial</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/sanitation-supplies.html"><span>Sanitation Supplies</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/industrial-supplies/5-0-display.html"><span>5.0 Display</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike.html"><span>Car & Motorbike<span class="cat_label New">New</span></span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/all-cars-bikes.html"><span>All Cars & Bikes</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/measure-inspect.html"><span>Measure & Inspect</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/car-bike-care.html"><span>Car & Bike Care</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/car-motorbike/lubricants.html"><span>Lubricants</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike.html"><span>Shop for Bike</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/helmets-gloves.html"><span>Helmets & Gloves</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/bike-parts.html"><span>Bike Parts</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/scarves.html"><span>Scarves</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-bike/skirts.html"><span>Skirts</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car.html"><span>Shop for Car</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/air-fresheners.html"><span>Air Fresheners</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/car-parts.html"><span>Car Parts</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/tyre-accessories.html"><span>Tyre Accessories</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/shop-for-car/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football.html"><span>Football</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football/coats-jackets.html"><span>Coats & Jackets</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football/blouses-shirts.html"><span>Blouses & Shirts</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="http://alothemes.com/demo/supermarket/index.php/handbags/football/tops-tees.html"><span>Tops & Tees</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/health-beauty.html"><img class="img-responsive" alt="Health & Beauty" src="http://alothemes.com/demo/supermarket/media/catalog/category//10.png"><span>Health & Beauty</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/bags-shoe.html"><img class="img-responsive" alt="Bags & Shoe" src="http://alothemes.com/demo/supermarket/media/catalog/category//04.png"><span>Bags & Shoe</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/accessories.html"><img class="img-responsive" alt="Accessories" src="http://alothemes.com/demo/supermarket/media/catalog/category//07.png"><span>Accessories</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/televisions-monitor.html"><img class="img-responsive" alt="Televisions & Monitor" src="http://alothemes.com/demo/supermarket/media/catalog/category//05_1.png"><span>Televisions & Monitor</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/toy-hobbies.html"><img class="img-responsive" alt="Toy & Hobbies" src="http://alothemes.com/demo/supermarket/media/catalog/category//05.png"><span>Toy & Hobbies</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/computer-networking.html"><img class="img-responsive" alt="Computer & Networking" src="http://alothemes.com/demo/supermarket/media/catalog/category//09.png"><span>Computer & Networking</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/laptop-accessories.html"><img class="img-responsive" alt="Laptop & Accessories" src="http://alothemes.com/demo/supermarket/media/catalog/category//03.png"><span>Laptop & Accessories</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/sport-outdoors.html"><img class="img-responsive" alt="Sport & Outdoors" src="http://alothemes.com/demo/supermarket/media/catalog/category//08.png"><span>Sport & Outdoors</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/camera-lamp.html"><img class="img-responsive" alt="Camera & Lamp" src="http://alothemes.com/demo/supermarket/media/catalog/category//10_1.png"><span>Camera & Lamp</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/watch-shoes.html"><span>Watch & Shoes</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/smartphone.html"><span>SmartPhone</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/camera-usb.html"><span>Camera & USB</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/electrolux-furniture.html"><span>Electrolux & Furniture</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/sport.html"><span>Sport</span><span class="boder-menu"></span></a></li>
                                                                <li class='level0 ext  hasChild first'><span class="level-top"><span>Product Types<span class="cat_label Hot">Hot</span></span>
                                                                    </span>
                                                                    <div class="level-top-mega">
                                                                        <ul class="level0 dropdown">
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/smart-tvs-from-sharpusa.html"><span>Single product</span></a></li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/grouped-product.html"><span>Group product</span></a></li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/configurable-product.html"><span>Configurable product</span></a></li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/samsung-galaxy-smartphone.html"><span>Product with Related</span></a></li>
                                                                            <li class="level1"><a href="http://alothemes.com/demo/supermarket/index.php/samsung-galaxy-smartphone.html"><span>Product with Upsell</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class='level0 ext  '><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/contacts/"><span>Contact Us</span></a></li>
                                                                <li class='level0 ext  last'><a class="level-top" href="http://alothemes.com/demo/supermarket/index.php/about-magento-demo-store/"><span>About Us</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CART ICON ON MMENU -->
                                        <div class="shopping-cart-box-ontop">
                                            <div class="miniCartWrap shopping-cart-box-ontop-content">
                                                <div class="mini-maincart">
                                                    <div class="cartSummary toggle-tab">
                                                        <div class="crat-icon">
                                                            <span class="zero">0 </span>
                                                        </div>
                                                        <p class="mt-cart-title">Cart</p>
                                                        <div class="cart-header">
                                                            <p class="cart-tolatl">
                                                                <!--<span class="toltal"></span>-->
                                                                <span class="zero">0 items - </span>
                                                                <span><span class="price">$0.00</span></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="mini-contentCart toggle-content">
                                                        <div class="block-content">
                                                            <p class="empty">You have no items in your shopping cart.</p>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="header-setting header-setting-icon">
                                            <div class="settting-switcher">
                                                <div class="dropdown-toggle">
                                                    <div class="text-setting">Links</div>
                                                </div>
                                                <div class="dropdown-switcher">
                                                    <div class="header-top-link">
                                                        <ul class="links">
                                                            <li class="first"><a href="http://alothemes.com/demo/supermarket/index.php/customer/account/" title="My Account">My Account</a></li>
                                                            <li><a href="http://alothemes.com/demo/supermarket/index.php/wishlist/" title="My Wishlist">My Wishlist</a></li>
                                                            <li class=" last"><a href="http://alothemes.com/demo/supermarket/index.php/checkout/" title="Checkout" class="top-link-checkout">Checkout</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>