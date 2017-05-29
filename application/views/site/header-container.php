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
                                                <li class="first"><a href="customer/account/" title="My Account">My Account</a></li>
                                                <li><a href="wishlist/" title="My Wishlist">My Wishlist</a></li>
                                                <li class=" last"><a href="checkout/" title="Checkout" class="top-link-checkout">Checkout</a></li>
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
                                                                <li><a href="?___store=french&amp;___from_store=default"><span class="label dropdown-icon" style="background-image:url(skin/frontend/alosupermarket/default/images/flags/french.jpg);">French</span></a></li>
                                                                <li><a href="?___store=german&amp;___from_store=default"><span class="label dropdown-icon" style="background-image:url(skin/frontend/alosupermarket/default/images/flags/german.jpg);">German</span></a></li>
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
                                                                <li><a href="directory/currency/switch/currency/EUR/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvP19fX3N0b3JlPWRlZmF1bHQ,/">EUR</a></li>
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
                                            <form id="search_mini_form" action="catalogsearch/result/" method="get">
                                                <div class="form-search clearfix">
                                                    <input id="catsearch" type="hidden" name="cat" />
                                                    <select class="ddslick" id="cat" name="cat">
                                                        <option value="">All Categories</option>
                                                        <?=printMenuCategory('generateSelectMenuHTMLCategories')?>
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
                                                searchForm.initAutocomplete('catalogsearch/ajax/suggest/', 'search_autocomplete');
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
                                            <a title="My wishlist" href="wishlist/" target="_blank" class="btn-heart">wishlist</a>
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
                                                        <a href="" title="Magento Commerce" class="logo"><strong>Magento Commerce</strong><img class="img-responsive" src="skin/frontend/alosupermarket/default/images/logo.png" alt="Magento Commerce" /></a>
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
                                                                    <?=printMenuCategory('generateMenuHTMLCategories')?>
                                                                </ul>
                                                                <div class="all-cat"><span>All Categories</span><span style="display:none">Close</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="magicmenu clearfix">
                                                            <ul class="nav-desktop sticker">
                                                                <li class="level0 home"><a class="level-top" href=""><span class="icon fa fa-home"></span><span class="icon-text">Home</span></a>
                                                                    <div class="level-top-mega">
                                                                        <div><a href=""><span class="demo-home">Demo 1</span></a></div>
                                                                        <div><a href="?___store=english_2"><span class="demo-home">Demo 2</span></a></div>
                                                                        <div><a href="?___store=english_3"><span class="demo-home">Demo 3</span></a></div>
                                                                        <div><a href="?___store=english_4"><span class="demo-home">Demo 4</span></a></div>
                                                                        <div><a href="?___store=english_5"><span class="demo-home">Demo 5</span></a></div>
                                                                        <div><a href="?___store=english_6"><span class="demo-home">Demo 6</span></a></div>
                                                                    </div>
                                                                </li>
                                                                <li class="level0 cat  hasChild" data-options='{"menu_id":"3","cat_columns":"3","cat_proportions":"3","right_proportions":"1","left_proportions":null}'><a class="level-top" href="smartphone-table.html"><img class="img-responsive" alt="Smartphone & Table" src="http://alothemes.com/demo/supermarket/media/catalog/category//02.png"><span>Smartphone & Table 1</span><span class="boder-menu"></span></a>
                                                                    <div class="level-top-mega">
                                                                        <div class="content-mega">
                                                                            <div class="content-mega-horizontal">
                                                                                <ul class="level0 mage-column cat-mega">
                                                                                    <li class="children level1"><a href="smartphone-table/mobile-phones.html"><span>Mobile Phones</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phones/octa-core.html"><span>Octa Core</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phones/quad-core.html"><span>Quad Core</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phones/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phones/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phones/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phones/5-0-display.html"><span>5.0 Display</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="smartphone-table/phone-bags-cases.html"><span>Phone Bags & Cases</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="smartphone-table/phone-bags-cases/pouches.html"><span>Pouches</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/phone-bags-cases/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/phone-bags-cases/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/phone-bags-cases/leather-cases.html"><span>Leather Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/phone-bags-cases/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/phone-bags-cases/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="smartphone-table/mobile-phone-accessories.html"><span>Mobile Phone Accessories</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-accessories/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-accessories/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-accessories/mobile-phone-cables.html"><span>Mobile Phone Cables</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-accessories/chargers.html"><span>Chargers</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-accessories/holders-stands.html"><span>Holders & Stands</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-accessories/mobile-phone-lenses.html"><span>Mobile Phone Lenses</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="smartphone-table/mobile-phone-parts.html"><span>Mobile Phone Parts</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-parts/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-parts/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-parts/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-parts/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/mobile-phone-parts/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="smartphone-table/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="smartphone-table/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="smartphone-table/communication-equipment.html"><span>Communication Equipment</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="smartphone-table/communication-equipment/antennas-for-communications.html"><span>Antennas for Communications</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/communication-equipment/communication-cables.html"><span>Communication Cables</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/communication-equipment/fiber-optic-equipment.html"><span>Fiber Optic Equipment</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="smartphone-table/communication-equipment/fixed-wireless-terminals.html"><span>Fixed Wireless Terminals</span></a>
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
                                                                <li class="level0 cat  hasChild" data-options='{"menu_id":"6","cat_columns":"2","cat_proportions":"2","right_proportions":"2","left_proportions":null}'><a class="level-top" href="furniture.html"><img class="img-responsive" alt="Furniture" src="http://alothemes.com/demo/supermarket/media/catalog/category//10_2.png"><span>Furniture<span class="cat_label Sale">Sale</span></span><span class="boder-menu"></span></a>
                                                                    <div class="level-top-mega">
                                                                        <div class="content-mega">
                                                                            <div class="content-mega-horizontal">
                                                                                <ul class="level0 mage-column cat-mega">
                                                                                    <li class="children level1"><a href="furniture/handbags-formen-s.html"><span>Handbags Formen’s</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="furniture/handbags-formen-s/octa-core.html"><span>Octa Core</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/handbags-formen-s/quad-core.html"><span>Quad Core</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/handbags-formen-s/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/handbags-formen-s/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/handbags-formen-s/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/handbags-formen-s/5-0-display.html"><span>5.0 Display</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="furniture/accessories.html"><span>Accessories</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="furniture/accessories/pouches.html"><span>Pouches</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/accessories/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/accessories/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/accessories/leather-cases.html"><span>Leather Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/accessories/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/accessories/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="furniture/clothing-bags.html"><span>Clothing Bags</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="furniture/clothing-bags/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/clothing-bags/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/clothing-bags/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/clothing-bags/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="furniture/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="furniture/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="furniture/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
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
                                                                                                <div class="ajax_loading" style="display:none" data-url="magicproduct/index/ajax/">
                                                                                                    <img src="skin/frontend/alosupermarket/default/magiccart/plugin/images/loading.gif" alt="Loading..." />
                                                                                                </div>
                                                                                                <div class="content-products" data-margin="0" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>

                                                                                                    <div class="mage-magictabs mc-saleproduct">
                                                                                                        <ul class="flexisel-content products-grid saleproduct zoomOut play">

                                                                                                            <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class="item item-animate">
                                                                                                                <div class="per-product">
                                                                                                                    <div class="images-container">
                                                                                                                        <div class="product-hover">
                                                                                                                            <span class="sticker top-right"><span class="labelsale">-30%</span></span> <a href="catalog/product/view/id/14/s/smart-tv-lc-50n6000u-new/category/261/" title="Smart TV LC-50N6000U New" class="product-image">
                                    <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/0/10_1.jpg" width="235" height="270" alt="Smart TV LC-50N6000U New" />
                                    
                                                                            <span class="product-img-back">
                                            <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_10.jpg" width="235" height="270" alt="Smart TV LC-50N6000U New" />
                                        </span>
                                                                    </a>
                                                                                                                            <div class="link-view pull-left-none">
                                                                                                                                <a title="Quick View" href="magicshop/quickview/view/id/14" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View                                    </a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="products-textlink clearfix">
                                                                                                                            <h2 class="product-name">
                                                                                                                                <a href="catalog/product/view/id/14/s/smart-tv-lc-50n6000u-new/category/261/" title="Smart TV LC-50N6000U New">Smart TV LC-50N6000U New</a>
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
                                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvaGFuZGJhZ3MuaHRtbD9jb2xvcj01Jm1vZGU9bGlzdCZwcmljZT00MC0,/product/14/form_key/cPv7ZCDWDkada6aC/')"><span><span>Add to Cart</span></span></button>
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
                                                                <li class="level0 cat  hasChild" data-options='{"menu_id":"4","cat_columns":"3","cat_proportions":"3","right_proportions":"1","left_proportions":null}'><a class="level-top" href="handbags.html"><img class="img-responsive" alt="Handbags" src="http://alothemes.com/demo/supermarket/media/catalog/category//09_1.png"><span>Handbags</span><span class="boder-menu"></span></a>
                                                                    <div class="level-top-mega">
                                                                        <div class="content-mega">
                                                                            <div class="content-mega-horizontal">
                                                                                <ul class="level0 mage-column cat-mega">
                                                                                    <li class="children level1"><a href="handbags/industrial-supplies.html"><span>Industrial Supplies</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="handbags/industrial-supplies/all-industrial-supplies.html"><span>All Industrial Supplies</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/industrial-supplies/lab-scientific.html"><span>Lab & Scientific</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/industrial-supplies/janitorial.html"><span>Janitorial</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/industrial-supplies/sanitation-supplies.html"><span>Sanitation Supplies</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/industrial-supplies/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/industrial-supplies/5-0-display.html"><span>5.0 Display</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="handbags/car-motorbike.html"><span>Car & Motorbike<span class="cat_label New">New</span></span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="handbags/car-motorbike/all-cars-bikes.html"><span>All Cars & Bikes</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/car-motorbike/measure-inspect.html"><span>Measure & Inspect</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/car-motorbike/car-bike-care.html"><span>Car & Bike Care</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/car-motorbike/lubricants.html"><span>Lubricants</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="handbags/shop-for-bike.html"><span>Shop for Bike</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="handbags/shop-for-bike/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/shop-for-bike/helmets-gloves.html"><span>Helmets & Gloves</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/shop-for-bike/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/shop-for-bike/bike-parts.html"><span>Bike Parts</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/shop-for-bike/scarves.html"><span>Scarves</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/shop-for-bike/skirts.html"><span>Skirts</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="handbags/shop-for-car.html"><span>Shop for Car</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="handbags/shop-for-car/air-fresheners.html"><span>Air Fresheners</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/shop-for-car/car-parts.html"><span>Car Parts</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/shop-for-car/tyre-accessories.html"><span>Tyre Accessories</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/shop-for-car/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/shop-for-car/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="children level1"><a href="handbags/football.html"><span>Football</span></a>
                                                                                        <ul class="level1">
                                                                                            <li class="level2"><a href="handbags/football/coats-jackets.html"><span>Coats & Jackets</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/football/blouses-shirts.html"><span>Blouses & Shirts</span></a>
                                                                                            </li>
                                                                                            <li class="level2"><a href="handbags/football/tops-tees.html"><span>Tops & Tees</span></a>
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
                                                                            <li class="level1"><a href="smart-tvs-from-sharpusa.html"><span>Single product</span></a></li>
                                                                            <li class="level1"><a href="grouped-product.html"><span>Group product</span></a></li>
                                                                            <li class="level1"><a href="configurable-product.html"><span>Configurable product</span></a></li>
                                                                            <li class="level1"><a href="samsung-galaxy-smartphone.html"><span>Product with Related</span></a></li>
                                                                            <li class="level1"><a href="samsung-galaxy-smartphone.html"><span>Product with Upsell</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class='level0 ext  '><a class="level-top" href="contacts/"><span>Contact Us</span></a></li>
                                                                <li class='level0 ext  last'><a class="level-top" href="about-magento-demo-store/"><span>About Us</span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nav-mobile">
                                                            <h3 class="mobi-title">Categories</h3>
                                                            <ul>
                                                                <li class="level0"><a class="level-top" href="automovie-motorcyle.html"><img class="img-responsive" alt="Automovie & Motorcyle" src="http://alothemes.com/demo/supermarket/media/catalog/category//06.png"><span>Automovie & Motorcyle</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="electronics.html"><img class="img-responsive" alt="Electronics" src="http://alothemes.com/demo/supermarket/media/catalog/category//01.png"><span>Electronics</span><span class="boder-menu"></span></a>
                                                                    <ul class="level0">
                                                                        <li class="level1 hasChild"><a href="electronics/accessories.html"><span>Accessories</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="electronics/accessories/mobile.html"><span>Mobile</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="electronics/accessories/tablets.html"><span>Tablets</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="electronics/accessories/memory-cards.html"><span>Memory Cards</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="level1"><a href="electronics/swimming.html"><span>Swimming</span></a>
                                                                        </li>
                                                                        <li class="level1"><a href="electronics/computers-networking.html"><span>Computers & Networking</span></a>
                                                                        </li>
                                                                        <li class="level1"><a href="electronics/flashlights-lamps.html"><span>Flashlights & Lamps</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="fashion-accecssories.html"><img class="img-responsive" alt="Fashion & Accecssories" src="http://alothemes.com/demo/supermarket/media/catalog/category//08_1.png"><span>Fashion & Accecssories</span><span class="boder-menu"></span></a>
                                                                    <ul>
                                                                        <li><a href="fashion-accecssories/fashion-men-s.html"><span>Fashion Men’s</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-men-s/octa-core.html"><span>Octa Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-men-s/quad-core.html"><span>Quad Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-men-s/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-men-s/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-men-s/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-men-s/5-0-display.html"><span>5.0 Display</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="fashion-accecssories/accessories.html"><span>Accessories</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="fashion-accecssories/accessories/pouches.html"><span>Pouches</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/accessories/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/accessories/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/accessories/leather-cases.html"><span>Leather Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/accessories/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/accessories/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="fashion-accecssories/fashion-women-s.html"><span>Fashion Women’s</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-women-s/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-women-s/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-women-s/mobile-phone-cables.html"><span>Mobile Phone Cables</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-women-s/chargers.html"><span>Chargers</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-women-s/holders-stands.html"><span>Holders & Stands</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/fashion-women-s/mobile-phone-lenses.html"><span>Mobile Phone Lenses</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="fashion-accecssories/handbag-shoes.html"><span>Handbag & Shoes</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="fashion-accecssories/handbag-shoes/communications.html"><span>Communications</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/handbag-shoes/communication-cables.html"><span>Communication Cables</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/handbag-shoes/fiber-optic-equipment.html"><span>Fiber Optic Equipment</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="fashion-accecssories/handbag-shoes/fixed-wireless-terminals.html"><span>Fixed Wireless Terminals</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="smartphone-table.html"><img class="img-responsive" alt="Smartphone & Table" src="http://alothemes.com/demo/supermarket/media/catalog/category//02.png"><span>Smartphone & Table 2</span><span class="boder-menu"></span></a>
                                                                    <ul>
                                                                        <li><a href="smartphone-table/mobile-phones.html"><span>Mobile Phones</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="smartphone-table/mobile-phones/octa-core.html"><span>Octa Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phones/quad-core.html"><span>Quad Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phones/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phones/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phones/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phones/5-0-display.html"><span>5.0 Display</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="smartphone-table/phone-bags-cases.html"><span>Phone Bags & Cases</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="smartphone-table/phone-bags-cases/pouches.html"><span>Pouches</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/phone-bags-cases/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/phone-bags-cases/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/phone-bags-cases/leather-cases.html"><span>Leather Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/phone-bags-cases/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/phone-bags-cases/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="smartphone-table/mobile-phone-accessories.html"><span>Mobile Phone Accessories</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-accessories/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-accessories/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-accessories/mobile-phone-cables.html"><span>Mobile Phone Cables</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-accessories/chargers.html"><span>Chargers</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-accessories/holders-stands.html"><span>Holders & Stands</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-accessories/mobile-phone-lenses.html"><span>Mobile Phone Lenses</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="smartphone-table/mobile-phone-parts.html"><span>Mobile Phone Parts</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-parts/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-parts/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-parts/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-parts/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/mobile-phone-parts/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="smartphone-table/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="smartphone-table/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="smartphone-table/communication-equipment.html"><span>Communication Equipment</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="smartphone-table/communication-equipment/antennas-for-communications.html"><span>Antennas for Communications</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/communication-equipment/communication-cables.html"><span>Communication Cables</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/communication-equipment/fiber-optic-equipment.html"><span>Fiber Optic Equipment</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="smartphone-table/communication-equipment/fixed-wireless-terminals.html"><span>Fixed Wireless Terminals</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="furniture.html"><img class="img-responsive" alt="Furniture" src="http://alothemes.com/demo/supermarket/media/catalog/category//10_2.png"><span>Furniture<span class="cat_label Sale">Sale</span></span><span class="boder-menu"></span></a>
                                                                    <ul>
                                                                        <li><a href="furniture/handbags-formen-s.html"><span>Handbags Formen’s</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="furniture/handbags-formen-s/octa-core.html"><span>Octa Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/handbags-formen-s/quad-core.html"><span>Quad Core</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/handbags-formen-s/single-sim-card.html"><span>Single SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/handbags-formen-s/dual-sim-card.html"><span>Dual SIM Card</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/handbags-formen-s/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/handbags-formen-s/5-0-display.html"><span>5.0 Display</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="furniture/accessories.html"><span>Accessories</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="furniture/accessories/pouches.html"><span>Pouches</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/accessories/bumper-cases.html"><span>Bumper Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/accessories/waterproof-cases.html"><span>Waterproof Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/accessories/leather-cases.html"><span>Leather Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/accessories/aluminum-cases.html"><span>Aluminum Cases</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/accessories/rhinestone-cases.html"><span>Rhinestone Cases</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="furniture/clothing-bags.html"><span>Clothing Bags</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="furniture/clothing-bags/mobile-phone-lcds.html"><span>Mobile Phone LCDs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/clothing-bags/mobile-phone-batteries.html"><span>Mobile Phone Batteries</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/clothing-bags/mobile-phone-housings.html"><span>Mobile Phone Housings</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/clothing-bags/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="furniture/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="furniture/walkie-talkies/walkie-talkies.html"><span>Walkie-Talkies</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="furniture/walkie-talkies/walkie-talkie-accessories.html"><span>Walkie-Talkie Accessories</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="handbags.html"><img class="img-responsive" alt="Handbags" src="http://alothemes.com/demo/supermarket/media/catalog/category//09_1.png"><span>Handbags</span><span class="boder-menu"></span></a>
                                                                    <ul>
                                                                        <li><a href="handbags/industrial-supplies.html"><span>Industrial Supplies</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="handbags/industrial-supplies/all-industrial-supplies.html"><span>All Industrial Supplies</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/industrial-supplies/lab-scientific.html"><span>Lab & Scientific</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/industrial-supplies/janitorial.html"><span>Janitorial</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/industrial-supplies/sanitation-supplies.html"><span>Sanitation Supplies</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/industrial-supplies/3gb-ram.html"><span>3GB RAM</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/industrial-supplies/5-0-display.html"><span>5.0 Display</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="handbags/car-motorbike.html"><span>Car & Motorbike<span class="cat_label New">New</span></span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="handbags/car-motorbike/all-cars-bikes.html"><span>All Cars & Bikes</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/car-motorbike/measure-inspect.html"><span>Measure & Inspect</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/car-motorbike/car-bike-care.html"><span>Car & Bike Care</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/car-motorbike/lubricants.html"><span>Lubricants</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="handbags/shop-for-bike.html"><span>Shop for Bike</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="handbags/shop-for-bike/backup-battery-packs.html"><span>Backup Battery Packs</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/shop-for-bike/helmets-gloves.html"><span>Helmets & Gloves</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/shop-for-bike/screen-protectors.html"><span>Screen Protectors</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/shop-for-bike/bike-parts.html"><span>Bike Parts</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/shop-for-bike/scarves.html"><span>Scarves</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/shop-for-bike/skirts.html"><span>Skirts</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="handbags/shop-for-car.html"><span>Shop for Car</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="handbags/shop-for-car/air-fresheners.html"><span>Air Fresheners</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/shop-for-car/car-parts.html"><span>Car Parts</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/shop-for-car/tyre-accessories.html"><span>Tyre Accessories</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/shop-for-car/sim-card-tools.html"><span>SIM Card & Tools</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/shop-for-car/signal-boosters.html"><span>Signal Boosters</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="handbags/football.html"><span>Football</span></a>
                                                                            <ul class="level1">
                                                                                <li class="level2"><a href="handbags/football/coats-jackets.html"><span>Coats & Jackets</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/football/blouses-shirts.html"><span>Blouses & Shirts</span></a>
                                                                                </li>
                                                                                <li class="level2"><a href="handbags/football/tops-tees.html"><span>Tops & Tees</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="level0"><a class="level-top" href="health-beauty.html"><img class="img-responsive" alt="Health & Beauty" src="http://alothemes.com/demo/supermarket/media/catalog/category//10.png"><span>Health & Beauty</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="bags-shoe.html"><img class="img-responsive" alt="Bags & Shoe" src="http://alothemes.com/demo/supermarket/media/catalog/category//04.png"><span>Bags & Shoe</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="accessories.html"><img class="img-responsive" alt="Accessories" src="http://alothemes.com/demo/supermarket/media/catalog/category//07.png"><span>Accessories</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="televisions-monitor.html"><img class="img-responsive" alt="Televisions & Monitor" src="http://alothemes.com/demo/supermarket/media/catalog/category//05_1.png"><span>Televisions & Monitor</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="toy-hobbies.html"><img class="img-responsive" alt="Toy & Hobbies" src="http://alothemes.com/demo/supermarket/media/catalog/category//05.png"><span>Toy & Hobbies</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="computer-networking.html"><img class="img-responsive" alt="Computer & Networking" src="http://alothemes.com/demo/supermarket/media/catalog/category//09.png"><span>Computer & Networking</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="laptop-accessories.html"><img class="img-responsive" alt="Laptop & Accessories" src="http://alothemes.com/demo/supermarket/media/catalog/category//03.png"><span>Laptop & Accessories</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="sport-outdoors.html"><img class="img-responsive" alt="Sport & Outdoors" src="http://alothemes.com/demo/supermarket/media/catalog/category//08.png"><span>Sport & Outdoors</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="camera-lamp.html"><img class="img-responsive" alt="Camera & Lamp" src="http://alothemes.com/demo/supermarket/media/catalog/category//10_1.png"><span>Camera & Lamp</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="watch-shoes.html"><span>Watch & Shoes</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="smartphone.html"><span>SmartPhone</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="camera-usb.html"><span>Camera & USB</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="electrolux-furniture.html"><span>Electrolux & Furniture</span><span class="boder-menu"></span></a></li>
                                                                <li class="level0"><a class="level-top" href="sport.html"><span>Sport</span><span class="boder-menu"></span></a></li>
                                                                <li class='level0 ext  hasChild first'><span class="level-top"><span>Product Types<span class="cat_label Hot">Hot</span></span>
                                                                    </span>
                                                                    <div class="level-top-mega">
                                                                        <ul class="level0 dropdown">
                                                                            <li class="level1"><a href="smart-tvs-from-sharpusa.html"><span>Single product</span></a></li>
                                                                            <li class="level1"><a href="grouped-product.html"><span>Group product</span></a></li>
                                                                            <li class="level1"><a href="configurable-product.html"><span>Configurable product</span></a></li>
                                                                            <li class="level1"><a href="samsung-galaxy-smartphone.html"><span>Product with Related</span></a></li>
                                                                            <li class="level1"><a href="samsung-galaxy-smartphone.html"><span>Product with Upsell</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class='level0 ext  '><a class="level-top" href="contacts/"><span>Contact Us</span></a></li>
                                                                <li class='level0 ext  last'><a class="level-top" href="about-magento-demo-store/"><span>About Us</span></a></li>
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
                                                            <li class="first"><a href="customer/account/" title="My Account">My Account</a></li>
                                                            <li><a href="wishlist/" title="My Wishlist">My Wishlist</a></li>
                                                            <li class=" last"><a href="checkout/" title="Checkout" class="top-link-checkout">Checkout</a></li>
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