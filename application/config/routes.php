<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['customer/account'] = 'account';
$route['customer/account/login'] = 'account/login';
$route['customer/account/loginPost']['POST'] = 'account/doLogin';
$route['customer/account/logout'] = 'account/logout';
$route['customer/account/forgotpassword'] = 'account/forgotpassword';
$route['customer/account/changeforgotten'] = 'account/forgotpassword';
$route['customer/account/forgotpasswordpost'] = 'account/forgotpasswordPost';
$route['customer/account/resetpassword'] = 'account/resetpassword';
$route['customer/account/resetpasswordpost'] = 'account/resetpassword';
$route['customer/account/create'] = 'account/create';
$route['customer/account/createpost'] = 'account/createPost';
$route['customer/account/logoutSuccess'] = 'account/logout';
$route['customer/account/edit'] = 'account/edit';
$route['customer/account/editPost']['POST'] = 'account/editPost';

$route['admin'] = 'Admin/Product';
$route['admin/product'] = 'Admin/Product';
$route['admin/product/(:any).php'] = 'Admin/Product/index/$1';
$route['admin/product/delete/(:num)'] = 'Admin/Product/deleteProduct/$1';
$route['admin/product/image/upload'] = 'Admin/Product/uploadImage';
$route['admin/product/image/delete/(:num)'] = 'Admin/Product/deleteImage/$1';
$route['admin/product/image/update/(:num)'] = 'Admin/Product/updateImage/$1';


$route['admin/category'] = 'Admin/Category';
$route['admin/category/(:any).php'] = 'Admin/Category/index/$1';
$route['admin/category/image/upload'] = 'Admin/Category/uploadImage';
$route['admin/category/image/delete/(:num)'] = 'Admin/Category/deleteImage/$1';


$route['customer/address'] = 'account/login';
$route['sales/order/history'] = 'account/login';
$route['sales/billing_agreement'] = 'account/login';
$route['sales/recurring_profile'] = 'account/login';
$route['review/customer'] = 'account/login';
$route['tag/customer'] = 'account/login';
$route['wishlist'] = 'account/login';
$route['oauth/customer_token'] = 'account/login';
$route['newsletter/manage'] = 'account/login';
$route['downloadable/customer/products'] = 'account/login';



$route['magicshop/quickview/view/id/(:num)'] = 'product/quickview/$1';


$route['checkout/cart'] = 'cart';

$route['checkout/cart/add/(:num)']['POST'] = 'cart/add/$1';
$route['checkout/cart/add/uenc/(:any)/product/(:num)/form_key/(:any)'] = 'cart/add/$1';

$route['magicshop/ajax'] = 'cart/addAjax';
$route['magicshop/ajax/index'] = 'cart/addAjax';

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
$route['magiccategory/index/ajax'] = 'product/listAjax';
$route['magiccategory/index/ajax2'] = 'product/listAjax2';


$route['sendfriend/product/send/id/(:num)/cat_id/(:num)'] = 'category/ajax';
$route['tag/index/save/product/(:num)/uenc/(:any)'] = 'category/ajax';

$route['directory/currency/switch/currency/EUR/uenc/(:any)'] = 'category/ajax';


$route['product/(:any)-(:num).html'] = 'product/view/$2';

$route['category/(:any)-(:num).html'] = 'product/list//$2';
$route['category/(:any).html'] = 'product/list//$1';

$route['(:any)/(:any)-(:num).html'] = 'product/view/$3';
$route['(:any)/(:any).html'] = 'product/view/$2/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
