<div class="main-container col1-layout content-color color">
                <div class="breadcrumbs">
                    <div class="container">
                        <ul>
                            <li class="home">
                                <a href="./" title="Go to Home Page">Home</a>

                            </li>
                            <li class="category<?=$product['category']['id']?>">
                                <a href="<?=$product['category']['slug']?>.html" title=""><?=$product['category']['name']?></a>

                            </li>
                            <li class="product">
                                <strong><?=$product['name']?></strong>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-main col-lg-12">
                                <script type="text/javascript">
                                    var optionsPrice = new Product.OptionsPrice([]);
                                </script>
                                <div id="messages_product_view"></div>
                                <div class="product-view">
                                    <div class="product-essential">
                                        <div class="row">
                                            <form action="checkout/cart/add/<?=$product['id']?>" method="post" id="product_addtocart_form">
                                                <input name="form_key" type="hidden" value="FHb1gk4EfpwwxYrU" />
                                                <div class="no-display">
                                                    <input type="hidden" name="product" value="<?=$product['id']?>" />
                                                    <input type="hidden" name="related_product" id="related-products-field" value="" />
                                                </div>
                                                <div class="product-img-box clearfix col-md-5 col-sm-5 col-xs-12">
                                                    <div class="product-img-content">
                                                        <div class="product-image product-image-zoom">
                                                            <div class="product-image-gallery">
                                                                <span class="sticker top-right"><span class="labelsale">-72%</span></span> <img id="image-main" class="gallery-image visible img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/600x710.4/9df78eab33525d08d6e5fb8d27136e95/5/_/5_34.jpg" alt="Fusce nec facilisi" title="Fusce nec facilisi" />

                                                                <img id="image-0" class="gallery-image" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/5/_/5_34.jpg" data-zoom-image="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/5/_/5_34.jpg" />
                                                                <img id="image-1" class="gallery-image" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/4/_/4_36.jpg" data-zoom-image="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/4/_/4_36.jpg" />
                                                                <img id="image-2" class="gallery-image" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/2/_/2_23.jpg" data-zoom-image="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/2/_/2_23.jpg" />
                                                                <img id="image-3" class="gallery-image" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/7/_/7_19.jpg" data-zoom-image="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/7/_/7_19.jpg" />
                                                                <img id="image-4" class="gallery-image" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/8/_/8_15.jpg" data-zoom-image="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/8/_/8_15.jpg" />
                                                                <img id="image-5" class="gallery-image" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/6/_/6_26.jpg" data-zoom-image="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/6/_/6_26.jpg" />
                                                            </div>
                                                        </div>

                                                        <div class="more-views">
                                                            <h2>More Views</h2>
                                                            <ul class="product-image-thumbs">
                                                                <li>
                                                                    <a class="thumb-link" href="#" title="" data-image-index="0">
                <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/thumbnail/146x163/9df78eab33525d08d6e5fb8d27136e95/5/_/5_34.jpg"
                      alt="" />
            </a>
                                                                </li>
                                                                <li>
                                                                    <a class="thumb-link" href="#" title="" data-image-index="1">
                <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/thumbnail/146x163/9df78eab33525d08d6e5fb8d27136e95/4/_/4_36.jpg"
                      alt="" />
            </a>
                                                                </li>
                                                                <li>
                                                                    <a class="thumb-link" href="#" title="" data-image-index="2">
                <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/thumbnail/146x163/9df78eab33525d08d6e5fb8d27136e95/2/_/2_23.jpg"
                      alt="" />
            </a>
                                                                </li>
                                                                <li>
                                                                    <a class="thumb-link" href="#" title="" data-image-index="3">
                <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/thumbnail/146x163/9df78eab33525d08d6e5fb8d27136e95/7/_/7_19.jpg"
                      alt="" />
            </a>
                                                                </li>
                                                                <li>
                                                                    <a class="thumb-link" href="#" title="" data-image-index="4">
                <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/thumbnail/146x163/9df78eab33525d08d6e5fb8d27136e95/8/_/8_15.jpg"
                      alt="" />
            </a>
                                                                </li>
                                                                <li>
                                                                    <a class="thumb-link" href="#" title="" data-image-index="5">
                <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/thumbnail/146x163/9df78eab33525d08d6e5fb8d27136e95/6/_/6_26.jpg"
                      alt="" />
            </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="product-shop col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product-shop-content">
                                                        <div class="product-name">
                                                            <h1><?=$product['name']?></h1>
                                                        </div>
                                                        <p class="no-rating"><a href="review/product/list/id/46/category/207/#review-form">Be the first to review this product</a></p>

                                                        <div class="product-type-data">



                                                            <div class="price-box">

                                                                <p class="old-price">
                                                                    <span class="price-label">Regular Price:</span>
                                                                    <span class="price" id="old-price-46">
                    $890.00                </span>
                                                                </p>

                                                                <p class="special-price">
                                                                    <span class="price-label">Special Price</span>
                                                                    <span class="price" id="product-price-46">
                    $250.00                </span>
                                                                </p>


                                                            </div>


                                                            <p class="availability in-stock">Availability: <span>In stock</span></p>
                                                        </div>

                                                        <div class="short-description">
                                                            <h2>Short Description</h2>
                                                            <div class="std">
                                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                            </div>
                                                        </div>



                                                        <div class="add-to-box">

                                                            <div class="product-qty">
                                                                <label for="qty">Qty:</label>
                                                                <div class="custom-qty">
                                                                    <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" />
                                                                    <div class="btn-plus">

                                                                        <button type="button" class="increase items" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
					<i class="fa fa-caret-up"></i>
				</button>

                                                                        <button type="button" class="reduced items" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty > 1 ) result.value--;return false;">
					<i class="fa fa-caret-down"></i>
				</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="add-to-cart">
                                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="productAddToCartForm.submit(this)">
			<span>
				<span class="view-cart">Add to Cart</span>
			</span>
		</button>
                                                            </div>


                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a href="wishlist/index/add/product/<?=$product['id']?>/form_key/FHb1gk4EfpwwxYrU/" rel="tooltip" title="Add to Wishlist" onclick="productAddToCartForm.submitLight(this, this.href); return false;" class="link-wishlist">
            <i class="lnr lnr-heart icons"></i>
            <span>Wishlist</span>
        </a>
                                                                </li>
                                                                <li>
                                                                    <a href="catalog/product_compare/add/product/<?=$product['id']?>/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvYWNjZXNzb3JpZXMvZnVzY2UtbmVjLWZhY2lsaXNpLmh0bWw,/form_key/FHb1gk4EfpwwxYrU/" class="link-compare" title="Add to Compare">
            <i class="lnr lnr-sync icons"></i>
            <span>Compare</span>
        </a>
                                                                </li>
                                                            </ul>


                                                        </div>



                                                        <div class="form-share clearfix">
                                                            <p class="print">
                                                                <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                                            </p>
                                                            <p class="email-friend">
                                                                <a href="sendfriend/product/send/id/<?=$product['id']?>/cat_id/<?=$product['category']['id']?>/">
                                 <i class="fa fa-envelope-o"></i>
                                  Email to a Friend                                 </a>
                                                            </p>
                                                        </div>

                                                        <div class="addit">
                                                            <div class="alo-social-links clearfix">
                                                                <div class="so-facebook so-social-share">
                                                                    <div id="fb-root"></div>
                                                                    <div class="fb-like" data-href="<?=$product['category']['slug']?>/<?=$product['slug']?>.html" data-send="false" data-layout="button_count" data-width="20" data-show-faces="false"></div>
                                                                </div>
                                                                <div class="so-twitter so-social-share">
                                                                    <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-dnt="true">Tweet</a>
                                                                </div>
                                                                <div class="so-plusone so-social-share">
                                                                    <div class="g-plusone" data-size="medium"></div>
                                                                    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                                                                </div>
                                                                <div class="so-linkedin so-social-share">
                                                                    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                                                                    <script type="IN/Share" data-counter="right"></script>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <script type="text/javascript">
                                            //<![CDATA[
                                            var productAddToCartForm = new VarienForm('product_addtocart_form');
                                            productAddToCartForm.submit = function(button, url) {
                                                if (this.validator.validate()) {
                                                    var form = this.form;
                                                    var oldUrl = form.action;

                                                    if (url) {
                                                        form.action = url;
                                                    }
                                                    var e = null;
                                                    try {
                                                        this.form.submit();
                                                    } catch (e) {}
                                                    this.form.action = oldUrl;
                                                    if (e) {
                                                        throw e;
                                                    }

                                                    if (button && button != 'undefined') {
                                                        button.disabled = true;
                                                    }
                                                }
                                            }.bind(productAddToCartForm);

                                            productAddToCartForm.submitLight = function(button, url) {
                                                if (this.validator) {
                                                    var nv = Validation.methods;
                                                    delete Validation.methods['required-entry'];
                                                    delete Validation.methods['validate-one-required'];
                                                    delete Validation.methods['validate-one-required-by-name'];
                                                    // Remove custom datetime validators
                                                    for (var methodName in Validation.methods) {
                                                        if (methodName.match(/^validate-datetime-.*/i)) {
                                                            delete Validation.methods[methodName];
                                                        }
                                                    }

                                                    if (this.validator.validate()) {
                                                        if (url) {
                                                            this.form.action = url;
                                                        }
                                                        this.form.submit();
                                                    }
                                                    Object.extend(Validation.methods, nv);
                                                }
                                            }.bind(productAddToCartForm);
                                            (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=115245961994281";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                            ! function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (!d.getElementById(id)) {
                                                    js = d.createElement(s);
                                                    js.id = id;
                                                    js.src = "//platform.twitter.com/widgets.js";
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }
                                            }(document, "script", "twitter-wjs");
                                            //]]>
                                        </script>
                                    </div>
                                    <div class="product-wapper-tab clearfix">
                                        <div class="product-collateral">
                                            <div class="box-collateral box-description">
                                                <h2>Description</h2>
                                                <h2>Details</h2>
                                                <div class="std">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
                                                </div>
                                            </div>
                                            <div class="box-collateral box-reviews">
                                                <h2>Reviews</h2>


                                                <div class=" box-reviews" id="customer-reviews">
                                                    <div class="form-add">
                                                        <h2>Write Your Own Review</h2>
                                                        <form action="review/product/post/id/<?=$product['id']?>/" method="post" id="review-form">
                                                            <input name="form_key" type="hidden" value="FHb1gk4EfpwwxYrU" />
                                                            <fieldset>
                                                                <h3>You're reviewing: <span>Fusce nec facilisi</span></h3>
                                                                <h4>How do you rate this product? <em class="required">*</em></h4>
                                                                <span id="input-message-box"></span>
                                                                <table class="data-table" id="product-review-table">
                                                                    <col />
                                                                    <col width="1" />
                                                                    <col width="1" />
                                                                    <col width="1" />
                                                                    <col width="1" />
                                                                    <col width="1" />
                                                                    <thead>
                                                                        <tr>
                                                                            <th>&nbsp;</th>
                                                                            <th><span class="nobr">1 star</span></th>
                                                                            <th><span class="nobr">2 stars</span></th>
                                                                            <th><span class="nobr">3 stars</span></th>
                                                                            <th><span class="nobr">4 stars</span></th>
                                                                            <th><span class="nobr">5 stars</span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Quality</th>
                                                                            <td class="value"><input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio" /></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Price</th>
                                                                            <td class="value"><input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio" /></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Value</th>
                                                                            <td class="value"><input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio" /></td>
                                                                            <td class="value"><input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio" /></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <input type="hidden" name="validate_rating" class="validate-rating" value="" />
                                                                <script type="text/javascript">
                                                                    decorateTable('product-review-table')
                                                                </script>
                                                                <ul class="form-list">
                                                                    <li>
                                                                        <label for="nickname_field" class="required"><em>*</em>Nickname</label>
                                                                        <div class="input-box">
                                                                            <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="" />
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <label for="summary_field" class="required"><em>*</em>Summary of Your Review</label>
                                                                        <div class="input-box">
                                                                            <input type="text" name="title" id="summary_field" class="input-text required-entry" value="" />
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <label for="review_field" class="required"><em>*</em>Review</label>
                                                                        <div class="input-box">
                                                                            <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </fieldset>
                                                            <div class="buttons-set">
                                                                <button type="submit" title="Submit Review" class="button"><span><span>Submit Review</span></span></button>
                                                            </div>
                                                        </form>
                                                        <script type="text/javascript">
                                                            //<![CDATA[
                                                            var dataForm = new VarienForm('review-form');
                                                            Validation.addAllThese(
                                                                [
                                                                    ['validate-rating', 'Please select one of each of the ratings above', function(v) {
                                                                        var trs = $('product-review-table').select('tr');
                                                                        var inputs;
                                                                        var error = 1;

                                                                        for (var j = 0; j < trs.length; j++) {
                                                                            var tr = trs[j];
                                                                            if (j > 0) {
                                                                                inputs = tr.select('input');

                                                                                for (i in inputs) {
                                                                                    if (inputs[i].checked == true) {
                                                                                        error = 0;
                                                                                    }
                                                                                }

                                                                                if (error == 1) {
                                                                                    return false;
                                                                                } else {
                                                                                    error = 1;
                                                                                }
                                                                            }
                                                                        }
                                                                        return true;
                                                                    }]
                                                                ]
                                                            );
                                                            //]]>
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-collateral box-tags">
                                                <h2>Product Tags</h2>
                                                <form id="addTagForm" action="tag/index/save/product/<?=$product['id']?>/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvYWNjZXNzb3JpZXMvZnVzY2UtbmVjLWZhY2lsaXNpLmh0bWw,/" method="get">
                                                    <div class="form-add">
                                                        <label for="productTagName">Add Your Tags:</label>
                                                        <div class="input-box">
                                                            <input type="text" class="input-text required-entry" name="productTagName" id="productTagName" />
                                                        </div>
                                                        <button type="button" title="Add Tags" class="button" onclick="submitTagForm()">
                <span>
                    <span>Add Tags</span>
                </span>
            </button>
                                                    </div>
                                                </form>
                                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                                <script type="text/javascript">
                                                    //<![CDATA[
                                                    var addTagFormJs = new VarienForm('addTagForm');

                                                    function submitTagForm() {
                                                        if (addTagFormJs.validator.validate()) {
                                                            addTagFormJs.form.submit();
                                                        }
                                                    }
                                                    //]]>
                                                </script>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <script type="text/javascript">
                                    var lifetime = 3600;
                                    var expireAt = Mage.Cookies.expires;
                                    if (lifetime > 0) {
                                        expireAt = new Date();
                                        expireAt.setTime(expireAt.getTime() + lifetime * 1000);
                                    }
                                    Mage.Cookies.set('external_no_cache', 1, expireAt);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>