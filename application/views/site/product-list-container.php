<div class="main-container col2-left-layout ">
                <div class="breadcrumbs">
                    <div class="container">
                        <ul>
                            <li class="home">
                                <a href="" title="Go to Home Page">Home</a>

                            </li>
                            <li class="category204">
                                <strong><?=$category['name']?></strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-main col-lg-9 col-md-9 col-sm-9 col-xs-12 content-color color f-right">
                                <div class="page-title category-title">
                                    <h1><?=$category['name']?></h1>
                                </div>


                                <p class="category-image"><img src="http://alothemes.com/demo/supermarket/media/catalog/category/GridProducts_1.jpg" alt="<?=$category['name']?>" title="<?=$category['name']?>" /></p>
                                <div class="category-description std">
                                    Cooler Smartphone, Modular Mid Tower Chassis </div>

                                <style type="text/css">
                                    @media (min-width: 0px) and (max-width: 360px) {
                                        .category-products .products-grid>li {
                                            padding: 0 15px;
                                            width: 100%
                                        }
                                        .category-products .products-grid>li:nth-child(1n+1) {
                                            clear: left;
                                        }
                                    }

                                    @media (min-width: 361px) and (max-width: 479px) {
                                        .category-products .products-grid>li {
                                            padding: 0 15px;
                                            width: 50%
                                        }
                                        .category-products .products-grid>li:nth-child(2n+1) {
                                            clear: left;
                                        }
                                    }

                                    @media (min-width: 480px) and (max-width: 639px) {
                                        .category-products .products-grid>li {
                                            padding: 0 15px;
                                            width: 50%
                                        }
                                        .category-products .products-grid>li:nth-child(2n+1) {
                                            clear: left;
                                        }
                                    }

                                    @media (min-width: 640px) and (max-width: 767px) {
                                        .category-products .products-grid>li {
                                            padding: 0 15px;
                                            width: 33.333333333%
                                        }
                                        .category-products .products-grid>li:nth-child(3n+1) {
                                            clear: left;
                                        }
                                    }

                                    @media (min-width: 768px) and (max-width: 991px) {
                                        .category-products .products-grid>li {
                                            padding: 0 15px;
                                            width: 33.333333333%
                                        }
                                        .category-products .products-grid>li:nth-child(3n+1) {
                                            clear: left;
                                        }
                                    }

                                    @media (min-width: 992px) and (max-width: 1199px) {
                                        .category-products .products-grid>li {
                                            padding: 0 15px;
                                            width: 25%
                                        }
                                        .category-products .products-grid>li:nth-child(4n+1) {
                                            clear: left;
                                        }
                                    }

                                    @media (min-width: 1200px) {
                                        .category-products .products-grid>li {
                                            padding: 0 15px;
                                            width: 25%
                                        }
                                        .category-products .products-grid>li:nth-child(4n+1) {
                                            clear: left;
                                        }
                                    }
                                </style>
                                <div class="category-products">
                                    <div class="toolbar">
                                        <div class="sorter">
                                            <p class="view-mode">
                                                <label>View as:</label>
                                                <a href="javascript:void(0)" title="Grid" class="grid active">
                                                                                        <i class="fa fa-th"></i>
                                                        </a>
                                                <a href="category/<?=$category['slug']?>.html?mode=list" title="List" class="list">
                                                                                        <i class="fa fa-th-list"></i>
                                                        </a>
                                            </p>
                                            <div class="sort-by">
                                                <label>Sort By</label>
                                                <select onchange="setLocation(this.value)">
                                                    <option value="category/<?=$category['slug']?>.html?dir=asc&amp;order=position" selected="selected">
                                Position                            </option>
                                                    <option value="category/<?=$category['slug']?>.html?dir=asc&amp;order=name">
                                Name                            </option>
                                                    <option value="category/<?=$category['slug']?>.html?dir=asc&amp;order=price">
                                Price                            </option>
                                            </select>
                                                <a href="smartphone-table.html?dir=desc&amp;order=position" title="Set Descending Direction"><img src="skin/frontend/alosupermarket/default/images/i_asc_arrow.gif" alt="Set Descending Direction" class="v-middle" /></a>
                                            </div>
                                            <div class="limiter">
                                                <label>Show</label>
                                                <select onchange="setLocation(this.value)">
                                                    <option value="category/<?=$category['slug']?>.html?limit=16" selected="selected">
                                16                            </option>
                                                    <option value="category/<?=$category['slug']?>.html?limit=28">
                                28                            </option>
                                                    <option value="category/<?=$category['slug']?>.html?limit=36">
                                36                            </option>
                                            </select> </div>
                                            <div class="pager">




                                                <div class="pages">
                                                    <strong>Page:</strong>
                                                    <ol>



                                                        <li class="current">1</li>
                                                        <li><a href="category/<?=$category['slug']?>.html?p=2">2</a></li>




                                                        <li class="bor-none">
                                                            <a class="next i-next" href="category/<?=$category['slug']?>.html?p=2" title="Next">
                    <span>Next</span>
                                            <i class="fa fa-angle-right"></i>
                                    </a>
                                                        </li>
                                                    </ol>

                                                </div>


                                            </div>
                                        </div>

                                    </div>


                                    <ul class="products-grid row products-grid--max-3-col">
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/the-best-android-phone.html" title="The Best Android Phone" class="product-image">
                                <img id="product-collection-image-1" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/_/1.jpg" width="235" height="270"
                                     alt="The Best Android Phone" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/2/_/2.jpg" width="235" height="270" alt="The Best Android Phone" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/1" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/the-best-android-phone.html" title="The Best Android Phone">The Best Android Phone</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-1">
                                            <span class="price">$45.00</span> </span>

                                                        </div>

                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lc/product/1/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/1/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/1/uenc/aHR0cDovL2Fsb3RoZW1/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/wireless-ip-camera-720p.html" title="Wireless IP Camera 720P" class="product-image">
                                <img id="product-collection-image-16" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/2/_/2_7.jpg" width="235" height="270"
                                     alt="Wireless IP Camera 720P" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/3/_/3_9.jpg" width="235" height="270" alt="Wireless IP Camera 720P" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/16" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/wireless-ip-camera-720p.html" title="Wireless IP Camera 720P">Wireless IP Camera 720P</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-16">
                                            <span class="price">$350.00</span> </span>

                                                        </div>

                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/16/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/16/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/16/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/camera-ip-wifi-okisa.html" title="Camera IP Wifi OKISA" class="product-image">
                                <img id="product-collection-image-15" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/_/1_5.jpg" width="235" height="270"
                                     alt="Camera IP Wifi OKISA" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_11.jpg" width="235" height="270" alt="Camera IP Wifi OKISA" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/15" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/camera-ip-wifi-okisa.html" title="Camera IP Wifi OKISA">Camera IP Wifi OKISA</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-15">
                                            <span class="price">$50.00</span> </span>

                                                        </div>

                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/15/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/15/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/15/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <span class="sticker top-right"><span class="labelsale">-30%</span></span> <a href="smartphone-table/smart-tv-lc-50n6000u-new.html" title="Smart TV LC-50N6000U New" class="product-image">
                                <img id="product-collection-image-14" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/0/10_1.jpg" width="235" height="270"
                                     alt="Smart TV LC-50N6000U New" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_10.jpg" width="235" height="270" alt="Smart TV LC-50N6000U New" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/14" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/smart-tv-lc-50n6000u-new.html" title="Smart TV LC-50N6000U New">Smart TV LC-50N6000U New</a></h2>



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
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/14/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/14/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/14/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <span class="sticker top-right"><span class="labelsale">-45%</span></span> <a href="smartphone-table/sharp-50-class-aquos-4k.html" title="Sharp 50&quot; Class AQUOS 4K " class="product-image">
                                <img id="product-collection-image-13" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/9/_/9_5.jpg" width="235" height="270"
                                     alt="Sharp 50&quot; Class AQUOS 4K " />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/_/1_4.jpg" width="235" height="270" alt="Sharp 50&quot; Class AQUOS 4K " />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/13" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/sharp-50-class-aquos-4k.html" title="Sharp 50&quot; Class AQUOS 4K ">Sharp 50&quot; Class AQUOS 4K </a></h2>



                                                        <div class="price-box">

                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price" id="old-price-13">
                    $450.00                </span>
                                                            </p>

                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price" id="product-price-13">
                    $250.00                </span>
                                                            </p>


                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/13/category/204/'; return false;">1 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/13/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/13/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/13/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/ultra-hd-2160p-120hz-smart.html" title=" Ultra HD 2160p 120Hz Smart" class="product-image">
                                <img id="product-collection-image-12" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/8/_/8_6.jpg" width="235" height="270"
                                     alt=" Ultra HD 2160p 120Hz Smart" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_9.jpg" width="235" height="270" alt=" Ultra HD 2160p 120Hz Smart" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/12" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/ultra-hd-2160p-120hz-smart.html" title=" Ultra HD 2160p 120Hz Smart"> Ultra HD 2160p 120Hz Smart</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-12">
                                            <span class="price">$170.00</span> </span>

                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/12/category/204/'; return false;">1 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/12/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/12/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/12/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <span class="sticker top-left"><span class="labelnew">New</span></span> <a href="smartphone-table/sharp-ultral-smart-tv-58d.html" title="Sharp Ultral Smart TV 58D" class="product-image">
                                <img id="product-collection-image-11" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/7/_/7_7.jpg" width="235" height="270"
                                     alt="Sharp Ultral Smart TV 58D" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/_/1_3.jpg" width="235" height="270" alt="Sharp Ultral Smart TV 58D" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/11" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/sharp-ultral-smart-tv-58d.html" title="Sharp Ultral Smart TV 58D">Sharp Ultral Smart TV 58D</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-11">
                                            <span class="price">$50.00</span> </span>

                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/11/category/204/'; return false;">1 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/11/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/11/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/11/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/ultra-hd-120hz-smart-led-tv.html" title="Ultra HD 120Hz Smart LED TV" class="product-image">
                                <img id="product-collection-image-10" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/6/_/6_6.jpg" width="235" height="270"
                                     alt="Ultra HD 120Hz Smart LED TV" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/3/_/3_7.jpg" width="235" height="270" alt="Ultra HD 120Hz Smart LED TV" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/10" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/ultra-hd-120hz-smart-led-tv.html" title="Ultra HD 120Hz Smart LED TV">Ultra HD 120Hz Smart LED TV</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-10">
                                            <span class="price">$20.00</span> </span>

                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/10/category/204/'; return false;">1 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/10/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/10/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/10/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/sharp-58-ultra-hd-lcd-tv.html" title="Sharp 58&quot; Ultra HD LCD TV" class="product-image">
                                <img id="product-collection-image-9" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_7.jpg" width="235" height="270"
                                     alt="Sharp 58&quot; Ultra HD LCD TV" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/2/12.jpg" width="235" height="270" alt="Sharp 58&quot; Ultra HD LCD TV" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/9" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/sharp-58-ultra-hd-lcd-tv.html" title="Sharp 58&quot; Ultra HD LCD TV">Sharp 58&quot; Ultra HD LCD TV</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-9">
                                            <span class="price">$160.00</span> </span>

                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/9/category/204/'; return false;">2 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/9/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/9/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/9/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <span class="sticker top-left"><span class="labelnew">New</span></span> <a href="smartphone-table/sharp-lc-60ud27u-60-inch.html" title="Sharp LC-60UD27U 60-Inch" class="product-image">
                                <img id="product-collection-image-8" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/4/_/4_5.jpg" width="235" height="270"
                                     alt="Sharp LC-60UD27U 60-Inch" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/_/1_2.jpg" width="235" height="270" alt="Sharp LC-60UD27U 60-Inch" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/8" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/sharp-lc-60ud27u-60-inch.html" title="Sharp LC-60UD27U 60-Inch">Sharp LC-60UD27U 60-Inch</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-8">
                                            <span class="price">$150.00</span> </span>

                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:40%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/8/category/204/'; return false;">1 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/8/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/8/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/8/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/sharp-aquos-70-4k.html" title="Sharp AQUOS 70&quot; 4K " class="product-image">
                                <img id="product-collection-image-7" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/3/_/3_4.jpg" width="235" height="270"
                                     alt="Sharp AQUOS 70&quot; 4K " />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/2/_/2_3.jpg" width="235" height="270" alt="Sharp AQUOS 70&quot; 4K " />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/7" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/sharp-aquos-70-4k.html" title="Sharp AQUOS 70&quot; 4K ">Sharp AQUOS 70&quot; 4K </a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-7">
                                            <span class="price">$50.00</span> </span>

                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/7/category/204/'; return false;">1 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/7/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/7/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/7/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/sharp-lc80uh30u-80inch.html" title="Sharp LC80UH30U 80Inch" class="product-image">
                                <img id="product-collection-image-6" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/2/_/2_2.jpg" width="235" height="270"
                                     alt="Sharp LC80UH30U 80Inch" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_5.jpg" width="235" height="270" alt="Sharp LC80UH30U 80Inch" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/6" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/sharp-lc80uh30u-80inch.html" title="Sharp LC80UH30U 80Inch">Sharp LC80UH30U 80Inch</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-6">
                                            <span class="price">$250.00</span> </span>

                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/6/category/204/'; return false;">1 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/6/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/6/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/6/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/smart-tvs-from-sharpusa.html" title="Smart TVs from SharpUSA" class="product-image">
                                <img id="product-collection-image-5" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/_/1_1.jpg" width="235" height="270"
                                     alt="Smart TVs from SharpUSA" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_4.jpg" width="235" height="270" alt="Smart TVs from SharpUSA" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/5" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/smart-tvs-from-sharpusa.html" title="Smart TVs from SharpUSA">Smart TVs from SharpUSA</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-5">
                                            <span class="price">$50.00</span> </span>

                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/5/category/204/'; return false;">1 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/5/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/5/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/5/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/samsung-galaxy-smartphone.html" title="Samsung Galaxy Smartphone" class="product-image">
                                <img id="product-collection-image-4" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/4/_/4_3.jpg" width="235" height="270"
                                     alt="Samsung Galaxy Smartphone" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/5/_/5_3.jpg" width="235" height="270" alt="Samsung Galaxy Smartphone" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/4" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/samsung-galaxy-smartphone.html" title="Samsung Galaxy Smartphone">Samsung Galaxy Smartphone</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-4">
                                            <span class="price">$150.00</span> </span>

                                                        </div>

                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href='review/product/list/id/4/category/204/'; return false;">1 Review(s)</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/4/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/4/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/4/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/apple-iphone-6-64gb-silver.html" title="Apple iPhone 6 - 64GB - Silver" class="product-image">
                                <img id="product-collection-image-3" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/3/_/3_2.jpg" width="235" height="270"
                                     alt="Apple iPhone 6 - 64GB - Silver" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/4/_/4_2.jpg" width="235" height="270" alt="Apple iPhone 6 - 64GB - Silver" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/3" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/apple-iphone-6-64gb-silver.html" title="Apple iPhone 6 - 64GB - Silver">Apple iPhone 6 - 64GB - Silver</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-3">
                                            <span class="price">$50.00</span> </span>

                                                        </div>

                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/3/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/3/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/3/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" item">
                                            <div class="category-products-grid">
                                                <div class="images-container">
                                                    <div class="product-hover">
                                                        <a href="smartphone-table/martphone-and-tablet.html" title="martphone And Tablet" class="product-image">
                                <img id="product-collection-image-2" class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/2/_/2_1.jpg" width="235" height="270"
                                     alt="martphone And Tablet" />
                             
                                                                    <span class="product-img-back">
                                        <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/3/_/3_1.jpg" width="235" height="270" alt="martphone And Tablet" />
                                    </span>
                                                             </a>
                                                        <div class="link-view pull-left-none">
                                                            <a title="Quick View" href="magicshop/quickview/view/id/2" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info products-textlink clearfix">
                                                        <h2 class="product-name"><a href="smartphone-table/martphone-and-tablet.html" title="martphone And Tablet">martphone And Tablet</a></h2>



                                                        <div class="price-box">
                                                            <span class="regular-price" id="product-price-2">
                                            <span class="price">$50.00</span> </span>

                                                        </div>

                                                    </div>
                                                    <div class="actions-no hover-box">
                                                        <div class="actions">
                                                            <div class="show-box show-box-category">
                                                                <div class="actions-cart">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left-none" onclick="setLocation('checkout/cart/add/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/product/2/form_key/dURnHXt7Oa3omYvm/')"><span><span>Add to Cart</span></span></button>
                                                                </div>
                                                                <ul class="add-to-links pull-left-none">
                                                                    <li class="pull-left-none pull-wishlist"><a href="wishlist/index/add/product/2/form_key/dURnHXt7Oa3omYvm/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                                                    <li class="pull-left-none pull-compare"><a href="catalog/product_compare/add/product/2/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/form_key/dURnHXt7Oa3omYvm/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <script type="text/javascript">
                                        decorateGeneric($$('ul.products-grid'), ['odd', 'even', 'first', 'last'])
                                    </script>

                                    <div class="toolbar-bottom">
                                        <div class="toolbar">
                                            <div class="sorter">
                                                <p class="view-mode">
                                                    <label>View as:</label>
                                                    <a href="javascript:void(0)" title="Grid" class="grid active">
                                                                                        <i class="fa fa-th"></i>
                                                        </a>
                                                    <a href="smartphone-table.html?mode=list" title="List" class="list">
                                                                                        <i class="fa fa-th-list"></i>
                                                        </a>
                                                </p>
                                                <div class="sort-by">
                                                    <label>Sort By</label>
                                                    <select onchange="setLocation(this.value)">
                                                    <option value="smartphone-table.html?dir=asc&amp;order=position" selected="selected">
                                Position                            </option>
                                                    <option value="smartphone-table.html?dir=asc&amp;order=name">
                                Name                            </option>
                                                    <option value="smartphone-table.html?dir=asc&amp;order=price">
                                Price                            </option>
                                            </select>
                                                    <a href="smartphone-table.html?dir=desc&amp;order=position" title="Set Descending Direction"><img src="http://alothemes.com/demo/supermarket/skin/frontend/alosupermarket/default/images/i_asc_arrow.gif" alt="Set Descending Direction" class="v-middle" /></a>
                                                </div>
                                                <div class="limiter">
                                                    <label>Show</label>
                                                    <select onchange="setLocation(this.value)">
                                                    <option value="smartphone-table.html?limit=16" selected="selected">
                                16                            </option>
                                                    <option value="smartphone-table.html?limit=28">
                                28                            </option>
                                                    <option value="smartphone-table.html?limit=36">
                                36                            </option>
                                            </select> </div>
                                                <div class="pager">




                                                    <div class="pages">
                                                        <strong>Page:</strong>
                                                        <ol>



                                                            <li class="current">1</li>
                                                            <li><a href="smartphone-table.html?p=2">2</a></li>




                                                            <li class="bor-none">
                                                                <a class="next i-next" href="smartphone-table.html?p=2" title="Next">
                    <span>Next</span>
                                            <i class="fa fa-angle-right"></i>
                                    </a>
                                                            </li>
                                                        </ol>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <script type="text/javascript">
                                    $j(document).on('product-media-loaded', function() {
                                        ConfigurableMediaImages.init('small_image');
                                        ConfigurableMediaImages.setImageFallback(1, $j.parseJSON('{"option_labels":[],"small_image":{"1":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/1\/_\/1.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(16, $j.parseJSON('{"option_labels":[],"small_image":{"16":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/2\/_\/2_7.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(15, $j.parseJSON('{"option_labels":[],"small_image":{"15":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/1\/_\/1_5.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(14, $j.parseJSON('{"option_labels":[],"small_image":{"14":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/1\/0\/10_1.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(13, $j.parseJSON('{"option_labels":[],"small_image":{"13":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/9\/_\/9_5.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(12, $j.parseJSON('{"option_labels":[],"small_image":{"12":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/8\/_\/8_6.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(11, $j.parseJSON('{"option_labels":[],"small_image":{"11":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/7\/_\/7_7.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(10, $j.parseJSON('{"option_labels":[],"small_image":{"10":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/6\/_\/6_6.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(9, $j.parseJSON('{"option_labels":[],"small_image":{"9":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/5\/_\/5_7.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(8, $j.parseJSON('{"option_labels":[],"small_image":{"8":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/4\/_\/4_5.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(7, $j.parseJSON('{"option_labels":[],"small_image":{"7":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/3\/_\/3_4.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(6, $j.parseJSON('{"option_labels":[],"small_image":{"6":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/2\/_\/2_2.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(5, $j.parseJSON('{"option_labels":[],"small_image":{"5":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/1\/_\/1_1.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(4, $j.parseJSON('{"option_labels":[],"small_image":{"4":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/4\/_\/4_3.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(3, $j.parseJSON('{"option_labels":[],"small_image":{"3":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/3\/_\/3_2.jpg"},"base_image":[]}'));
                                        ConfigurableMediaImages.setImageFallback(2, $j.parseJSON('{"option_labels":[],"small_image":{"2":"http:\/\/alothemes.com\/demo\/supermarket\/media\/catalog\/product\/cache\/1\/small_image\/9df78eab33525d08d6e5fb8d27136e95\/2\/_\/2_1.jpg"},"base_image":[]}'));
                                        $j(document).trigger('configurable-media-images-init', ConfigurableMediaImages);
                                    });
                                </script>

                            </div>
                            <div class="col-left sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12 left-color color f-left">
                                <div class="anav-container">
                                    <div class="block block-anav">
                                        <div class="block-title">
                                            <strong><span>Categories</span></strong>
                                        </div>
                                        <ul class="nav-accordion">
                                            <?=$this->mycategory->printMenuCategory('generateNavHTMLCategories')?>
                                        </ul>
                                        <div class="all-cat"><span>All Categories</span><span style="display:none">Close</span></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                        (function(selector) {
                                            var $content = $(selector);
                                            var $accordion = $content.find('.nav-accordion');
                                            var catplus = $accordion.find('>.level0:hidden');
                                            if (!catplus.length) $content.find('.all-cat').hide();
                                            else $content.find('.all-cat').click(function(event) {
                                                $(this).children().toggle();
                                                catplus.slideToggle('slow');
                                            });
                                        })('.anav-container');
                                    });
                                </script>
                                <script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                        $(".nav-accordion").magicaccordion({
                                            accordion: true,
                                            speed: 400,
                                            closedSign: 'collapse',
                                            openedSign: 'expand',
                                            easing: 'easeInOutQuad'
                                        });
                                    });
                                </script>

                                <div class="block block-layered-nav block-layered-nav--no-filters">
                                    <div class="block-title">
                                        <strong><span>Shop By</span></strong>
                                    </div>
                                    <div class="block-content toggle-content1">
                                        <p class="block-subtitle block-subtitle--filter">Filter</p>
                                        <div id="narrow-by-list">



                                            <dl class="narrow-by">
                                                <dt>Price</dt>
                                                <dt class="toggle-tab mobile" style="display:none"></dt>
                                                <dd class="Price toggle-content">
                                                    <ol>
                                                        <li>
                                                            <a href="smartphone-table.html?price=-100">
                <span class="price">$0.00</span> - <span class="price">$99.99</span>            </a>
                                                            <span class="count">(9)</span>
                                                        </li>
                                                        <li>
                                                            <a href="smartphone-table.html?price=100-200">
                <span class="price">$100.00</span> - <span class="price">$199.99</span>            </a>
                                                            <span class="count">(4)</span>
                                                        </li>
                                                        <li>
                                                            <a href="smartphone-table.html?price=200-300">
                <span class="price">$200.00</span> - <span class="price">$299.99</span>            </a>
                                                            <span class="count">(4)</span>
                                                        </li>
                                                        <li>
                                                            <a href="smartphone-table.html?price=300-">
                <span class="price">$300.00</span> and above            </a>
                                                            <span class="count">(1)</span>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>


                                            <dl class="narrow-by">
                                                <dt>Manufacturer</dt>
                                                <dt class="toggle-tab mobile" style="display:none"></dt>
                                                <dd class="Manufacturer toggle-content">
                                                    <ol class="configurable-swatch-list">
                                                        <li>
                                                            <a href="smartphone-table.html?manufacturer=19" class="swatch-link">
                            <span class="swatch-label">
                                            Appo                                    </span>
                                    <span class="count">(2)</span>
                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="smartphone-table.html?manufacturer=13" class="swatch-link">
                            <span class="swatch-label">
                                            LG                                    </span>
                                    <span class="count">(5)</span>
                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="smartphone-table.html?manufacturer=20" class="swatch-link">
                            <span class="swatch-label">
                                            Samsung                                    </span>
                                    <span class="count">(2)</span>
                                            </a>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>


                                            <dl class="narrow-by">
                                                <dt>Color</dt>
                                                <dt class="toggle-tab mobile" style="display:none"></dt>
                                                <dd class="Color toggle-content">
                                                    <ol class="configurable-swatch-list">
                                                        <li style="line-height: 25px;">
                                                            <a href="smartphone-table.html?color=3" class="swatch-link has-image">
                            <span class="swatch-label" style="height:23px; width:23px;">
                                            <img src="http://alothemes.com/demo/supermarket/media/catalog/swatches/1/21x21/media/black.png" alt="Black" title="Black" width="21" height="21" />
                                    </span>
                                    <span class="count">Black(2)</span>
                                            </a>
                                                        </li>
                                                        <li style="line-height: 25px;">
                                                            <a href="smartphone-table.html?color=4" class="swatch-link has-image">
                            <span class="swatch-label" style="height:23px; width:23px;">
                                            <img src="http://alothemes.com/demo/supermarket/media/catalog/swatches/1/21x21/media/blue.png" alt="Blue" title="Blue" width="21" height="21" />
                                    </span>
                                    <span class="count">Blue(1)</span>
                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="smartphone-table.html?color=8" class="swatch-link">
                            <span class="swatch-label">
                                            Gray                                    </span>
                                    <span class="count">(2)</span>
                                            </a>
                                                        </li>
                                                        <li style="line-height: 25px;">
                                                            <a href="smartphone-table.html?color=5" class="swatch-link has-image">
                            <span class="swatch-label" style="height:23px; width:23px;">
                                            <img src="http://alothemes.com/demo/supermarket/media/catalog/swatches/1/21x21/media/red.png" alt="Red" title="Red" width="21" height="21" />
                                    </span>
                                    <span class="count">Red(2)</span>
                                            </a>
                                                        </li>
                                                        <li style="line-height: 25px;">
                                                            <a href="smartphone-table.html?color=9" class="swatch-link has-image">
                            <span class="swatch-label" style="height:23px; width:23px;">
                                            <img src="http://alothemes.com/demo/supermarket/media/catalog/swatches/1/21x21/media/silver.png" alt="silver" title="silver" width="21" height="21" />
                                    </span>
                                    <span class="count">silver(2)</span>
                                            </a>
                                                        </li>
                                                    </ol>
                                                </dd>
                                            </dl>

                                        </div>
                                        <script type="text/javascript">
                                            decorateDataList('narrow-by-list')
                                        </script>
                                    </div>
                                </div>


                                <div class="currency-switcher">
                                    <div class="label-title">Currency</div>
                                    <ul class="currency-switcher dropdown">
                                        <li><a href="directory/currency/switch/currency/EUR/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvc21hcnRwaG9uZS10YWJsZS5odG1s/">EUR</a></li>
                                        <li class="current">USD</li>
                                    </ul>
                                </div>
                                <div class="block block-list block-compare">
                                    <div class="block-title">
                                        <strong><span>Compare Products                    </span></strong>
                                    </div>
                                    <div class="block-content">
                                        <p class="empty">You have no items to compare.</p>
                                    </div>
                                </div>
                                <div class="block left-module block-custom-left">
                                    <div class="foiuqsslix magicproduct mage-custom">
                                        <div class="block-title-tabs">
                                            <ul class="magictabs" data-ajax='{"limit":"3","productDelay":"","widthImages":"235","heightImages":"270","timer":"0","action":["review"]}'>
                                                <li class="item active loaded single" data-type="bestseller"><span class="title">Bestseller</span></li>
                                            </ul>
                                        </div>
                                        <div class="ajax_loading" style="display:none" data-url="magicproduct/index/ajax/">
                                            <img src="skin/frontend/alosupermarket/default/magiccart/plugin/images/loading.gif" alt="Loading..." />
                                        </div>
                                        <div class="content-products" data-margin="10" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>

                                            <div class="mage-magictabs mc-bestseller">
                                                <ul class="flexisel-content products-grid bestseller zoomOut play">

                                                    <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class="item item-animate">
                                                        <div class="per-product clearfix">
                                                            <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="product-hover">
                                                                    <a href="catalog/product/view/id/1/s/the-best-android-phone/category/202/" title="The Best Android Phone" class="product-image">
                                    <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/_/1.jpg" width="235" height="270" alt="The Best Android Phone" />
                                </a>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="catalog/product/view/id/1/s/the-best-android-phone/category/202/" title="The Best Android Phone">The Best Android Phone</a>
                                                                </h2>



                                                                <div class="price-box">
                                                                    <span class="regular-price" id="product-price-1">
                                            <span class="price">$45.00</span> </span>

                                                                </div>


                                                                <div class="actions">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class="item item-animate">
                                                        <div class="per-product clearfix">
                                                            <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="product-hover">
                                                                    <a href="catalog/product/view/id/2/s/martphone-and-tablet/category/202/" title="martphone And Tablet" class="product-image">
                                    <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/2/_/2_1.jpg" width="235" height="270" alt="martphone And Tablet" />
                                </a>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="catalog/product/view/id/2/s/martphone-and-tablet/category/202/" title="martphone And Tablet">martphone And Tablet</a>
                                                                </h2>



                                                                <div class="price-box">
                                                                    <span class="regular-price" id="product-price-2">
                                            <span class="price">$50.00</span> </span>

                                                                </div>


                                                                <div class="actions">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class="item item-animate">
                                                        <div class="per-product clearfix">
                                                            <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="product-hover">
                                                                    <a href="electronics/tier-pricing-product.html" title="Tier Pricing Product" class="product-image">
                                    <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/0/10_8.jpg" width="235" height="270" alt="Tier Pricing Product" />
                                </a>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="electronics/tier-pricing-product.html" title="Tier Pricing Product">Tier Pricing Product</a>
                                                                </h2>



                                                                <div class="price-box">

                                                                    <p class="old-price">
                                                                        <span class="price-label">Regular Price:</span>
                                                                        <span class="price" id="old-price-43">
                    $432.00                </span>
                                                                    </p>

                                                                    <p class="special-price">
                                                                        <span class="price-label">Special Price</span>
                                                                        <span class="price" id="product-price-43">
                    $250.00                </span>
                                                                    </p>


                                                                </div>


                                                                <div class="actions">
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
                                            jQuery(".foiuqsslix").magicproduct({
                                                selector: ".foiuqsslix", // Selector product grid
                                            });
                                        });
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>