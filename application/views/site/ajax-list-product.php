<div class="mage-magictabs mc-249">
    <ul class="flexisel-content products-grid 249 zoomOut play">
    <?php 
    foreach ($products as $item) {
        echo '<li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class="item item-animate">
            <div class="per-product">
                <span class="sticker top-right"><span class="labelsale">-43%</span></span>
                <div class="images-container">
                    <div class="product-hover">
                        <a href="smartphone/tier-pricing-product.html" title="'.$item['name'].'" class="product-image">
                            <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/1/0/10_8.jpg" width="235" height="270" alt="'.$item['name'].'" />
                            <span class="product-img-back">
                                <img class="img-responsive" src="http://alothemes.com/demo/supermarket/media/catalog/product/cache/1/small_image/235x270/9df78eab33525d08d6e5fb8d27136e95/2/_/2_21.jpg" width="235" height="270" alt="'.$item['name'].'" />
                            </span>
                        </a>
                        <div class="link-view">
                            <a title="Quick View" href="magicshop/quickview/view/id/'.$item['id'].'" class="link-quickview"><i class="lnr lnr-magnifier icons"></i>Quick View</a>
                        </div>
                    </div>
                    <div class="products-textlink clearfix">
                        <h2 class="product-name">
                            <a href="smartphone/tier-pricing-product.html" title="'.$item['name'].'">'.$item['name'].'</a>
                        </h2>
                        <div class="price-box">
                            <p class="old-price">
                                <span class="price-label">Regular Price:</span>
                                <span class="price" id="old-price-'.$item['id'].'">$432.00</span>
                            </p>
                            <p class="special-price">
                                <span class="price-label">Special Price</span>
                                <span class="price" id="product-price-'.$item['id'].'">$250.00</span>
                            </p>
                        </div>
                    </div>
                    <div class="actions-no hover-box">
                        <div class="actions clearfix">
                            <div class="show-box">
                                <div class="actions-cart">
                                    <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation(\'checkout/cart/add/uenc/aHR0cDovL2Fsb3RoLw,,/product/'.$item['id'].'/form_key/SsExLZ63ZUJ4bYPy/\')"><span><span>Add to Cart</span></span></button>
                                </div>
                                <ul class="add-to-links">
                                    <li class="pull-left-no pull-wishlist"><a href="wishlist/index/add/product/'.$item['id'].'/form_key/SsExLZ63ZUJ4bYPy/" title="Add to Wishlist" class="link-wishlist"><i class="lnr lnr-heart icons"></i>Add to Wishlist</a></li>
                                    <li class="pull-right-no pull-compare"><span class="separator">|</span> <a href="catalog/product_compare/add/product/'.$item['id'].'/uenc/aHR0cDovL2Fsb3RoZW1lcy5jb20vZGVtby9zdXBlcm1hcmtldC9pbmRleC5waHAvbWFnaWNjYXRlZ29yeS9pbmRleC9hamF4Lw,,/form_key/SsExLZ63ZUJ4bYPy/" title="Add to Compare" class="link-compare"><i class="lnr lnr-sync icons"></i>Add to Compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </li>';
        } ?>

    </ul>
</div>