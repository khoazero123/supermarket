<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Supermarket</title>
<base href="<?php echo base_url(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="Default Description" />
<meta name="keywords" content="Magento, Varien, E-commerce" />
<meta name="robots" content="INDEX,FOLLOW" />
<link rel="icon" href="skin/frontend/alosupermarket/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="skin/frontend/alosupermarket/default/favicon.ico" type="image/x-icon" />
<!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = 'js/blank.html';
    var BLANK_IMG = 'js/spacer.gif';
//]]>
</script>
<![endif]-->
<!--<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'/>-->
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="js/calendar/calendar-win2k-1.css" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/plugin/fontawesome/css/font-awesome.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/plugin/webfont/css/simple-line-icons.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/plugin/fonticon/linearicons/css/demo.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/plugin/css/bootstrap/bootstrap.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/plugin/css/jquery.bxslider.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/base/default/css/widgets.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/blog/css/blog.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/plugin/css/magicaccordion.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/magicmenu/css/magicmenu.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/plugin/css/jquery.fancybox.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/magicshop/css/ajaxcart.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/magicshop/css/quickview.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/magicsocial/css/magicsocial.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/plugin/css/animate.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/magiccart/magicslider/css/magicslider.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/css/print.css" media="print" />
<script type="text/javascript" src="js/prototype/prototype.js"></script>
<script type="text/javascript" src="js/lib/ccard.js"></script>
<script type="text/javascript" src="js/prototype/validation.js"></script>
<script type="text/javascript" src="js/scriptaculous/builder.js"></script>
<script type="text/javascript" src="js/scriptaculous/effects.js"></script>
<script type="text/javascript" src="js/scriptaculous/dragdrop.js"></script>
<script type="text/javascript" src="js/scriptaculous/controls.js"></script>
<script type="text/javascript" src="js/scriptaculous/slider.js"></script>
<script type="text/javascript" src="js/varien/js.js"></script>
<script type="text/javascript" src="js/varien/form.js"></script>
<script type="text/javascript" src="js/varien/menu.js"></script>
<script type="text/javascript" src="js/mage/translate.js"></script>
<script type="text/javascript" src="js/mage/cookies.js"></script>
<script type="text/javascript" src="js/magiccart/jquery.min.js"></script>
<script type="text/javascript" src="js/magiccart/jquery.noconflict.js"></script>
<script type="text/javascript" src="js/magiccart/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="js/magiccart/plugin/jquery.bxslider.js"></script>
<script type="text/javascript" src="js/magiccart/plugin/jquery.ddslick.js"></script>
<script type="text/javascript" src="js/magiccart/plugin/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/magiccart/jquery.alothemes.js"></script>
<script type="text/javascript" src="js/magiccart/magicproduct.js"></script>
<script type="text/javascript" src="js/magiccart/plugin/jquery.meanmenu.hack.js"></script>
<script type="text/javascript" src="js/magiccart/magicaccordion.js"></script>
<script type="text/javascript" src="js/magiccart/magicmenu.js"></script>
<script type="text/javascript" src="js/magiccart/plugin/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/magiccart/quickview.js"></script>
<script type="text/javascript" src="js/magiccart/ajaxcart.js"></script>
<script type="text/javascript" src="js/varien/product.js"></script>
<script type="text/javascript" src="js/varien/configurable.js"></script>
<script type="text/javascript" src="js/calendar/calendar.js"></script>
<script type="text/javascript" src="js/calendar/calendar-setup.js"></script>
<script type="text/javascript" src="js/mage/captcha.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/lib/modernizr.custom.min.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/lib/selectivizr.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/lib/matchMedia.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/lib/matchMedia.addListener.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/lib/enquire.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/app.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/lib/imagesloaded.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/configurableswatches/product-media.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/configurableswatches/swatches-list.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/configurableswatches/swatches-product.js"></script>
<script type="text/javascript" src="skin/frontend/alosupermarket/default/js/lib/elevatezoom/jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="skin/frontend/base/default/js/bundle.js"></script>
<link href="http://alothemes.com/demo/supermarket/index.php/blog/rss/index/store_id/1/" title="Blog" rel="alternate" type="application/rss+xml" />
<!--[if lt IE 9]>
<script type="text/javascript" src="js/magiccart/bootstrap/html5shiv.js"></script>
<script type="text/javascript" src="js/magiccart/bootstrap/respond.min.js"></script>
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="js/magiccart/elegantfont/lte-ie7.js"></script>
<script type="text/javascript" src="js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="skin/frontend/base/default/js/ie6.js"></script>
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/css/styles-ie.css" media="all" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="skin/frontend/alosupermarket/default/css/responsive.css" media="all" />

<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '/demo/supermarket';
Mage.Cookies.domain   = '.alothemes.com';
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
optionalZipCountries = ["HK","IE","MO","PA"];
//]]>
</script>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" media="all" />
<style type="text/css">*, body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{ font-size: 13px; font-family: Lato;}.header-color a{color:#666666;}.header-color a:hover{color:#ff8c00;}.header .header-top .label-title, .text-setting, .text-setting:after, .header .header-top .label-title:after,.header .top-form-language .label{color:#666666;}.magicmenu .nav-desktop .level0 .level-top-mega,.magicmenu .nav-desktop .level0.dropdown > .level0,.magicmenu .nav-desktop .level0.dropdown .hasChild ul,.magicmenu .nav-desktop .level0.dropdown .hasChild ul{ background-color:#ffffff; border-color:#dfdfdf;}.magicmenu .nav-desktop .level0 .level-top{color:#ffffff;}.magicmenu .nav-desktop .level0.over > a, .magicmenu .nav-desktop .level0.active > a, .magicmenu .nav-desktop .level0.active > a span.icon-text, .magicmenu .nav-desktop .level0 > a:hover, .magicmenu .nav-desktop .level0 > a.icon-text:hover{color:#ffffff; background-color:transparent;}.magicmenu .nav-desktop .level0 .level-top-mega .children .level-3 a{color:#888888;}.magicmenu .nav-desktop .level0 .level-top-mega .children a, .magicmenu .nav-desktop p,.magicmenu .nav-desktop .level0.dropdown .level1 a,.magicmenu .nav-desktop .level0.home .level-top-mega div a{color:#888888;}.magicmenu .nav-desktop .level0 .level-top-mega .children a:hover,.magicmenu .nav-desktop .level0.dropdown .level1 a:hover,.magicmenu .nav-desktop .level0.home .level-top-mega div a:hover{color:#ff8c00; background-color:transparent;}.cartSummary span,.cartSummary .mt-cart-title{color:#555555;}.cartSummary span.price{color:#444444;}.crat-icon .zero,.crat-icon .item{color:#ffffff; background-color:#ff8400;}.mini-maincart .mini-contentCart{ background-color:#f5f5f5; border-color:#dfdfdf;}.mini-contentCart .block-content .block-subtitle{color:#333333; background-color:#dfdfdf;}.mini-contentCart .item .product-details .product-name a{color:#333333;}.mini-contentCart .item .product-details .product-name a:hover{color:#ff8c00;}.header-top{ background-color:#ececec;}.header-content{ background-color:#ffffff;}.header-bottom{ background-color:#666666;}.header .currency_top .dropdown-switcher, .header .top-form-language .language-switcher, .header .header-setting .dropdown-switcher{ background-color:#ffffff; border-color:#bbbbbb;}.header .links li a, .currency_top li a, .currency_top li.current{color:#333333;}.currency_top li a:hover, .currency_top li a:focus{ background-color:#f5f5f5;}.header .form-search button.button{color:#ffffff; background-color:#ff8400;}.header .form-search{ border-color:#dfdfdf;}.header-container-fixed{ background-color:#666666;}.magicmenu .nav-desktop .level0 .level-top-mega .children.level1 > a{color:#333333;}.magicmenu .nav-desktop .level0 .cat_label, .mean-container .mean-nav ul li a span.cat_label{ background-color:#009966;}.top-banner h2,.top-banner h3{color:#ffffff;}.top-banner .promotion-offer a{color:#ffffff; background-color:#ff8400;}.top-banner .header-offer-close{color:#aca7ee; background-color:transparent;}.top-banner .header-offer-close:hover{color:#ffffff; background-color:#ff8400;}.top-links li a{color:#ff8400;}.header-setting{ border-color:#ff8400;}.header .form-search button.button:hover{color:#ffffff; background-color:#ff8400;}.mini-contentCart .actions a{color:#333333; background-color:#dfdfdf;}.mini-contentCart .actions a.checkout{color:#ffffff; background-color:#ff8400;}.mini-contentCart .actions a:hover{color:#ffffff; background-color:#ff8400;}.cart .data-table .btn-remove2, .mini-contentCart a.btn-remove{color:#ffffff; background-color:#333333;}.cart .data-table .btn-remove2:hover, .mini-contentCart a.btn-remove:hover{color:#ffffff; background-color:#ff8400;}.block .block-title strong span{color:#333333;}.block .block-title strong span{color:#333333;}.sorter .view-mode label, .sorter .limiter label, .sorter .sort-by label, .pager .amount{color:#333333;}.sorter .sort-by select, .limiter select{color:#333333;}.sorter .view-mode strong, .sorter .view-mode a{color:#333333; background-color:#b0b0b0; border-color:#b0b0b0;}.sorter .view-mode a.active,.sorter .view-mode a:hover{color:#ffffff; background-color:#ff8400; border-color:#ff8400;}.pager .pages li,.pager .pages li a{color:#333333; background-color:#ffffff; border-color:#dfdfdf;}.pager .pages .current,.pager .pages li:hover,.pager .pages li a:hover{color:#ff8400; background-color:#ffffff; border-color:#dfdfdf;}.vmagicmenu .block-title{ background-color:#3e3e3e;}.vmagicmenu .block-title span{color:#ffffff;}.vmagicmenu .level0 .level-top{color:#333333;}.header-container-fixed .vmagicmenu .block-title{ background-color:#3e3e3e;}.vmagicmenu .block-vmagicmenu-content{ background-color:#ffffff; border-color:#dfdfdf;}.vmagicmenu .level0 .level-top-mega, .vmagicmenu .vmagicmenu-narrow .level0.dropdown > .level0,.magicmenu .nav-desktop .level0.dropdown .hasChild ul, .vmagicmenu .vmagicmenu-narrow .level0.dropdown .hasChild ul{ background-color:#ffffff; border-color:#dfdfdf;}.vmagicmenu .level0.hasChild .level-top::after{color:#666666;}.vmagicmenu .level0:hover, .vmagicmenu .level0.active{color:#ff8400; background-color:#ffffff;}.vmagicmenu .level0:hover .level-top::after, .vmagicmenu .level0:hover .level-top{color:#ff8400;}.vmagicmenu .level0 .level-top-mega .children.level1 > a{color:#333333; border-color:#dfdfdf;}.vmagicmenu .level0 .level-top-mega .children a,.vmagicmenu .vmagicmenu-narrow .level0.dropdown .level1 a{color:#888888;}.vmagicmenu .level0 .level-top-mega .children a:hover,.vmagicmenu .vmagicmenu-narrow .level0.dropdown .level1 a:hover{color:#ff8400;}.mean-container{ background-color:#666666;}.mean-container .mean-nav .mobi-title{color:#ffffff;}.mean-container a.meanmenu-reveal{color:#ffffff;}.mean-container .mean-nav > ul{ background-color:#666666;}.mean-container .mean-nav ul li a,.mean-container .mean-nav ul li span.level-top{color:#ffffff; border-color:#888888;}.mean-container .mean-nav ul li a:hover,.mean-container .mean-nav ul li span.level-top:hover{color:#ffffff; background-color:#333333;}.all-cat span{color:#ffffff; background-color:#ff8400;}.magictabs{ border-color:#dfdfdf;}.magictabs .item .title{color:#333333;}.magictabs .item.active .title,.magictabs .item:hover .title{color:#ffffff; background-color:#ff8400;}.cat-view-all{color:#666666; border-color:transparent;}.cat-view-all:hover{color:#ff8400; border-color:#ff8400;}.item .actions-cart .button.btn-cart{color:#ffffff; background-color:#ff8400; border-color:#ff8400;}.item .actions-cart .button.btn-cart:hover{color:#ffffff; background-color:#ff8400; border-color:#ff8400;}.item .actions-no .add-to-links a{color:#333333; background-color:#ffffff; border-color:#dfdfdf;}.item .actions-no .add-to-links a:hover{color:#ffffff; background-color:#ff8400; border-color:#ff8400;}.link-view a{color:#ffffff; background-color:#fca53c;}.link-view a:hover{color:#ffffff; background-color:#fca53c;}.products-list .item .button.btn-cart{color:#333333; background-color:#ffffff; border-color:#dbdbdb;}.products-list .item .button.btn-cart:hover{color:#ffffff; background-color:#ff8400; border-color:#ff8400;}.product-view .add-to-cart button.button{color:#ffffff; background-color:#ff8400;}.product-view .add-to-cart button.button:hover{color:#ffffff; background-color:#ff8400;}.product-view .product-shop .add-to-links a .icons{color:#333333; background-color:#ffffff; border-color:#dfdfdf;}.product-view .product-shop .add-to-links a:hover .icons{color:#ffffff; background-color:#ff8400; border-color:#ff8400;}.product-view .product-img-box .more-views li img{ border-color:#dfdfdf;}.product-view .product-img-box .more-views li img:hover{ border-color:#ff8400;}.product-view .product-img-box .more-views .bx-wrapper .bx-controls-direction a{color:#333333; background-color:#dddddd;}.product-view .product-img-box .more-views .bx-wrapper .bx-controls-direction a:hover{color:#ffffff; background-color:#ff8400;}.product-view .toggle-tabs .item{ background-color:#ffffff; border-color:#dfdfdf;}.product-view .toggle-tabs .item span{color:#333333;}.product-view .toggle-tabs .item.active, .product-view .toggle-tabs .item:hover{ background-color:#ff8400;}.product-view .toggle-tabs .item.active span, .product-view .toggle-tabs .item:hover span{color:#ffffff;}.product-view .product-shop .availability span{color:#ff8400;}.footer .block-content-statick li a{color:#666666;}.footer .block-content-statick li a:hover,.trademark-help span{color:#ff8c00;}.footer-color .block-footer-top{ background-color:#ffffff;}.footer-color .block-footer-bottom{ background-color:#ffffff;}.footer-color .block-footer-copyright{ background-color:#ffffff;}.footer .collapsible p,.trademark-help p{color:#333333;}.footer address{color:#333333;}.footer-menu-list li a{color:#333333;}.footer-menu-list li a:hover{color:#ff8c00;}.footer address a.active{color:#ff5555;}.block-subscribe input.input-text{color:#333333; background-color:#ffffff; border-color:#dddddd;}.block-subscribe .actions button.button{color:#ffffff; background-color:#ff3366; border-color:#888888;}.block-subscribe .actions button.button:hover{color:#ffffff; background-color:#ff5555; border-color:#ff5555;}.footer .block-title,.trademark-text-tit,.trademark-list-top #payment-methods{color:#333333;}body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{color:#666666;}body a{color:#333333;}body a:hover{color:#ff8400;}body{ background-color:#ffffff;}.labelnew{color:#ffffff; background-color:#009966;}.labelsale{color:#ffffff; background-color:#ff6600;}button.button{color:#333333; background-color:#dbdbdb; border-color:#dbdbdb;}button.button:hover{color:#ffffff; background-color:#ff8400; border-color:#ff8400;}button.button.btn-checkout{color:#333333; background-color:#dbdbdb; border-color:#dbdbdb;}button.button.btn-checkout:hover{color:#ffffff; background-color:#ff8400; border-color:#ff8400;}.bx-wrapper .bx-controls-direction a{color:#333333; background-color:#f5f5f5; border-color:#dfdfdf;}.bx-wrapper .bx-controls-direction a:hover{color:#ffffff; background-color:#666666; border-color:#666666;}#backtotop{color:#ffffff; background-color:#ff8400;}#backtotop:hover{color:#ffffff; background-color:#333333;}.block-tags .block-content a{color:#666666; background-color:transparent; border-color:#dfdfdf;}.block-tags .block-content a:hover{color:#ffffff; background-color:#ff8c00; border-color:#ff8c00;}#popup-newsletter .form-subscribe-header label{color:#666666;}#popup-newsletter .block-content .promotions{color:#333333;}#popup-newsletter .block-content input.input-text{color:#333333; background-color:#ffffff; border-color:#dfdfdf;}#popup-newsletter .block-content button.button{color:#ffffff; background-color:#ff8400; border-color:#ff8400;}#popup-newsletter .block-content button.button:hover{color:#ffffff; background-color:#333333; border-color:#333333;}#popup-newsletter .subscribe-bottom{color:#333333;}.fancybox-close{ background-color:#333333;}.fancybox-close:hover{ background-color:#ff8400;}.slide-block{ background-color:#f6f6f6;}.play .caption1{color:#333333;}.play .caption2{color:#666666;}.magicslider .text-slide .btn-shop{color:#ffffff; background-color:#3e3e3e;}.magicslider .text-slide .btn-shop:hover{color:#ffffff; background-color:#ff8400;}.magicslider .text-slide.text-slide2 .btn-shop, .magicslider .text-slide.text-slide3 .btn-shop{color:#ffffff; background-color:#d41c4f;}.magicslider .text-slide.text-slide2 .btn-shop:hover, .magicslider .text-slide.text-slide3 .btn-shop:hover{color:#ffffff; background-color:#d41c4f;}.magicslider .bx-wrapper .bx-controls-direction a{color:#333333; background-color:#f5f5f5; border-color:#dfdfdf;}.magicslider .bx-wrapper .bx-controls-direction a:hover{color:#ffffff; background-color:#666666; border-color:#666666;}.magicslider .bx-wrapper .bx-pager.bx-default-pager a{ background-color:transparent; border-color:#ffffff;}.magicslider .bx-wrapper .bx-pager .bx-pager-item a:hover, .magicslider .bx-wrapper .bx-pager .bx-pager-item a.active{ background-color:transparent; border-color:#ff8400;}.cate-box .cate-link{color:#333333; border-color:#ffffff;}.cate-box .cate-link:hover{color:#ff8400; border-color:#ff8400;}.service .service-item{ background-color:#ffffff; border-color:#dfdfdf;}.service .service-item h3{color:#333333;}.service .service-item .info p{color:#666666;}.service .service-item .info a{color:#3366cc; border-color:transparent;}.service .service-item .info a:hover{color:#ff8400; border-color:#ff8400;}.box-content .block-content-right .shop-now{color:#ffffff; background-color:#ff8400;}.box-content .block-content-right .shop-now:hover{color:#ffffff; background-color:#ff8400;}</style>
<script type="text/javascript"> Themecfg = {"general":{"enabled":"1","jquery":"1","ajaxloading":"http:\/\/alothemes.com\/demo\/supermarket\/skin\/frontend\/alosupermarket\/default\/images\/opc-ajax-loader.gif","baseUrl":"http:\/\/alothemes.com\/demo\/supermarket\/index.php\/"},"home":"\n            ","list":{"mobile":"1","portrait":"2","landscape":"2","tablet":"3","desktop":"3","visibleItems":"4","padding":"15","widthImages":"235","heightImages":"270","height_images":"250","width_images":"200"},"detail":{"imageWidth":"600","zoomWidth":"500","zoomHeight":"700","zoomInner":"1","lightBox":"1","slide":"1","vertical":"0","auto":"0","controls":"1","pager":"0","slideMargin":"15","slideWidth":"146","portrait":"3","landscape":"3","tablet":"3","desktop":"3","visibleItems":"3","relatedSlide":"horizontal","relatedLimit":"10","upsellSlide":"horizontal","upsellLimit":"10","inforTabs":"1","activeTab":"box-description","showTitle":"1","adjustX":"10","adjustY":"0","thumbWidth":"146","thumbHeight":"163","thumbSlide":"horizontal","speed":"1000","pause":"100","imageHeight":""},"related":{"slide":"1","vertical":"0","auto":"0","controls":"1","pager":"0","speed":"1000","pause":"100","slideMargin":"18","slideWidth":"235","portrait":"1","landscape":"2","tablet":"3","desktop":"4","visibleItems":"5"},"upsell":{"slide":"1","vertical":"0","auto":"0","controls":"1","pager":"0","speed":"1000","pause":"100","slideMargin":"18","slideWidth":"235","portrait":"1","landscape":"2","tablet":"3","desktop":"4","visibleItems":"5"},"crosssell":{"slide":"1","vertical":"0","auto":"0","controls":"1","pager":"0","speed":"1000","pause":"100","slideMargin":"18","slideWidth":"235","portrait":"1","landscape":"2","tablet":"3","desktop":"4","visibleItems":"5"},"labels":{"newLabel":"1","newText":"New","saleLabel":"1","saleText":"Sale","salePercent":"1"},"timer":{"enabled":"1","titleColor":"","timerColor":"","caption":"1","captionColor":""},"color":{"page_color":"#777777","page_background":"#ffffff","link_color":"#777777","link_color_hover":"#ffa800","link_color_active":"#ffa800","button_color":"#ffffff","button_color_hover":"#ffffff","button_background":"#434343","button_background_hover":"#ffa800","labelnew_color":"#ffffff","labelnew_background":"#ffa800","labelsale_color":"#ffffff","labelsale_background":"#ee3434"},"newsletter":{"enabled":"1","firstOnly":"0","timeDelay":"5000","autoClose":"0","timeClose":"10000","width":"570","height":"290","overlayColor":"#353535","background_color":"#ffffff","background_image":"default\/popup.png"},"categorysearch":{"enabled":"1","select_category_on_category_pages":"0","show_subcategories":"1","subcategories_level":"3","indentation_text":"-"},"checkout":{"crosssellsSlide":"1"}}</script>
<script type="text/javascript">
    var DisplayFormat = "<div class='timer-day box'><span class='day'>%%D%%</span><span class='title'>Days</span></div><div class='timer-hour box'><span class='hour'>%%H%%</span><span class='title'>Hrs</span></div><div class='timer-min box'><span class='min'>%%M%%</span><span class='title'>Mins</span></div><div class='timer-sec box'><span class='sec'>%%S%%</span><span class='title'>Secs</span></div>";
var alo_timer_layoutcaption = '<div class="timer-box"><span class="day">%%D%%</span><span class="title">Days</span></div><div class="timer-box"><span class="hour">%%H%%</span><span class="title">Hrs</span></div><div class="timer-box"><span class="min">%%M%%</span><span class="title">Mins</span></div><div class="timer-box"><span class="sec">%%S%%</span><span class="title">Secs</span></div>';
var startMcTimer = "05/24/17 01:01:30 AM";
</script>
<!--Dynamic style changes goes here-->
<style type="text/css">
    .timer-heading{
        color:#;
/*      font-size: 18px;
        font-weight:bold;
        padding-top:15px;
        clear: both;*/
    }
    .timer-view{color: #;}
    .timerdate{color: #;}
</style>
<script type="text/javascript">
    //<![CDATA[
        if (typeof MC == 'undefined') MC = {};
        MC.Quickview = {"dialogWidth":"800","zoomWidth":"265","zoomHeight":"265","vertical":"1"};

                
            jQuery(document).ready(function($) {
                jQuery(document).magiccart({"url":"http:\/\/alothemes.com\/demo\/supermarket\/index.php\/magicshop\/ajax\/index\/","updateUrl":"http:\/\/alothemes.com\/demo\/supermarket\/index.php\/checkout\/cart\/updatePost\/","src_image_progress":"http:\/\/alothemes.com\/demo\/supermarket\/skin\/frontend\/alosupermarket\/default\/magiccart\/magicshop\/images\/loading.gif","error":" \u2191 This is a required field.","isProductView":0});
            });
            //]]
</script>

<script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script></head>
<body class="<?=isset($class_body) ? $class_body : 'cms-index-index cms-demo1'?>">
<div class="social-icons right" style="margin-top: 100px">
                                                                                                                                                                                                            
    </div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.social-icons .social-icon').mouseenter(function () {
            $(this).stop();
            $(this).animate({width: '160'}, 500, 'swing', function () {
            });
        });
        $('.social-icons .social-icon').mouseleave(function () {
            $(this).stop();
            $(this).animate({width: '43'}, 500, 'swing', function () {
            });
        });        
    }); 
</script>
<div class="wrapper">
        <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br />
                    You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
            </div>
        </div>
    </noscript>
    <div class="page">
