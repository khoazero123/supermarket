<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['customer/account'] = 'account';
$route['customer/account/login'] = 'account/login';
$route['customer/account/loginPost']['POST'] = 'account/doLogin';
$route['customer/account/logout'] = 'account/logout';
$route['customer/account/forgotpassword'] = 'account/forgotpassword';
$route['customer/account/create'] = 'account/create';
$route['customer/account/createPost'] = 'account/doCreate';
$route['customer/account/logoutSuccess'] = 'account/logout';
$route['customer/account/edit'] = 'account/edit';

$route['magicshop/quickview/view/id/(:num)'] = 'product/quickview/$1';


$route['checkout/cart'] = 'cart';

$route['checkout/cart/add/(:num)']['POST'] = 'cart/add/$1';
$route['checkout/cart/add/uenc/(:any)/product/(:num)/form_key/(:any)'] = 'cart/add/$1';

$route['checkout/cart/updatePost']['POST'] = 'cart/update';
$route['checkout/cart/delete/id/(:num)']['GET'] = 'cart/delete/$1';
$route['checkout/cart/estimatePost']['POST'] = 'cart/estimate';
$route['checkout/cart/couponPost']['POST'] = 'cart/coupon';

$route['checkout/cart/configure/id/(:num)']['GET'] = 'cart';

$route['wishlist/index/add/product/(:num)']['GET'] = 'product/addWishlist/$1';
$route['wishlist/index/add/product/(:num)/form_key/(:any)'] = 'product/addWishlist/$1';

$route['catalog/product_compare/add/product/(:num)']['GET'] = 'catalog/add/$1';
$route['catalog/product_compare/add/product/(:num)/uenc/(:any)/form_key/(:any)'] = 'catalog/add/$1';

$route['pandore'] = 'brand/pandore';
$route['ebay'] = 'brand/ebay';
$route['electrolux'] = 'brand/electrolux';
$route['ariston'] = 'brand/ariston';
$route['panasonic'] = 'brand/panasonic';
$route['singer'] = 'brand/singer';
$route['pandora2'] = 'brand/pandora2';

$route['newsletter/subscriber/new']['POST'] = 'newsletter';
$route['magiccategory/index/ajax'] = 'category/ajax';

$route['sendfriend/product/send/id/(:num)/cat_id/(:num)'] = 'category/ajax';
$route['tag/index/save/product/(:num)/uenc/(:any)'] = 'category/ajax';

$route['(:any)/(:any).html'] = 'product/view/$1/$2';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
