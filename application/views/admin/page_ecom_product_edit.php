<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- eCommerce Product Edit Header -->
    <div class="content-header">
    <?php 
    if(isset($alert)) {
        echo '<div class="block">
            <div class="alert alert-'.(isset($alert['type']) ? $alert['type'] : 'success').' alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-check-circle"></i> '.(isset($alert['title']) ? $alert['title'] : 'Success').'</h4> '.$alert['message'].'
            </div>
        </div> ';
    }
    ?>
        <!-- <ul class="nav-horizontal text-center">
            <li>
                <a href="page_ecom_dashboard.php"><i class="fa fa-bar-chart"></i> Dashboard</a>
            </li>
            <li>
                <a href="page_ecom_orders.php"><i class="gi gi-shop_window"></i> Orders</a>
            </li>
            <li>
                <a href="page_ecom_order_view.php"><i class="gi gi-shopping_cart"></i> Order View</a>
            </li>
            <li>
                <a href="page_ecom_products.php"><i class="gi gi-shopping_bag"></i> Products</a>
            </li>
            <li class="active">
                <a href="page_ecom_product_edit.php"><i class="gi gi-pencil"></i> Product Edit</a>
            </li>
            <li>
                <a href="page_ecom_customer_view.php"><i class="gi gi-user"></i> Customer View</a>
            </li>
        </ul> -->
    </div>
    <!-- END eCommerce Product Edit Header -->

    <!-- Product Edit Content -->
    <div class="row">
        <div class="col-lg-6">
            <!-- General Data Block -->
            <div class="block">
                <!-- General Data Title -->
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>General</strong> Data</h2>
                </div>
                <!-- END General Data Title -->

                <!-- General Data Content -->
                <form action="page_ecom_product_edit.php?<?=$_SERVER['QUERY_STRING']?>" method="post" class="form-horizontal form-bordered" onsubmit="">
                    <!-- <div class="form-group">
                        <label class="col-md-3 control-label" for="product-id">PID</label>
                        <div class="col-md-9">
                            <input type="text" id="product-id" name="product-id" class="form-control" value="6825">
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Name</label>
                        <div class="col-md-9">
                            <input type="text" id="product-name" name="product-name" value="<?=@$product['name']?>" class="form-control" placeholder="Enter product name.." required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-description">Description</label>
                        <div class="col-md-9">
                            <!-- CKEditor, you just need to include the plugin (see at the bottom of this page) and add the class 'ckeditor' to your textarea -->
                            <!-- More info can be found at http://ckeditor.com -->
                            <textarea id="product-description" name="product-description" class="ckeditor"><?=@$product['description']?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-short-description">Short Description</label>
                        <div class="col-md-9">
                            <textarea id="product-short-description" name="product-short-description" class="form-control" rows="3"><?=@$product['short_description']?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-category">Category</label>
                        <div class="col-md-8">
                            <!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->
                            <select id="product-category" name="product-category" class="select-chosen" data-placeholder="Choose Category.." style="width: 250px;">
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                <?php 
                                echo printMenuCategory('generateSelectMenuHTMLCategories',$product['category_id']);
                                /*foreach ($categorys as $category) {
                                    echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                                }*/
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-price">Price</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                <input type="text" id="product-price" name="product-price" value="<?=@$product['price']?>" class="form-control" placeholder="0,00">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Condition</label>
                        <div class="col-md-9">
                            <label class="radio-inline" for="product-condition-new">
                                <input type="radio" id="product-condition-new" name="product-condition" value="100" checked> New 100%
                            </label>
                            <label class="radio-inline" for="product-condition-used">
                                <input type="radio" id="product-condition-used" name="product-condition" value="99"> Used
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Published?</label>
                        <div class="col-md-9">
                            <label class="switch switch-primary">
                                <input type="checkbox" id="product-status" name="product-status" checked><span></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END General Data Content -->
            </div>
            <!-- END General Data Block -->
        </div>
        <div class="col-lg-6">
            <!-- Meta Data Block -->
            <!-- <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-google"></i> <strong>Meta</strong> Data</h2>
                </div>
                <form action="page_ecom_product_edit.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-meta-title">Meta Title</label>
                        <div class="col-md-9">
                            <input type="text" id="product-meta-title" name="product-meta-title" class="form-control" placeholder="Enter meta title..">
                            <div class="help-block">55 Characters Max</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-meta-keywords">Meta Keywords</label>
                        <div class="col-md-9">
                            <input type="text" id="product-meta-keywords" name="product-meta-keywords" class="form-control" placeholder="keyword1, keyword2, keyword3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-meta-description">Meta Description</label>
                        <div class="col-md-9">
                            <textarea id="product-meta-description" name="product-meta-description" class="form-control" rows="6" placeholder="Enter meta description.."></textarea>
                            <div class="help-block">115 Characters Max</div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
            </div> -->
            <!-- END Meta Data Block -->

            <!-- Product Images Block -->
            <div class="block">
                <!-- Product Images Title -->
                <div class="block-title">
                    <h2><i class="fa fa-picture-o"></i> <strong>Product</strong> Upload Images</h2>
                </div>
                <!-- END Product Images Title -->

                <!-- Product Images Content -->
                <div class="block-section">
                    <!-- Dropzone.js, You can check out https://github.com/enyo/dropzone/wiki for usage examples -->
                    <form action="image/upload?<?=$_SERVER['QUERY_STRING']?>" class="dropzone"></form>
                </div>
                <table class="table table-bordered table-striped table-vcenter">
                    <tbody>
                    <?php 
                    foreach ($product['images'] as $image) {
                        echo '<tr id="image-'.$image['id'].'" data-id="'.$image['id'].'">
                            <td style="width: 20%;">
                                <a href="'.base_url().$image['url'].'" data-toggle="lightbox-image">
                                    <img src="'.base_url().$image['url'].'" alt="" class="img-responsive center-block" style="max-width: 110px;">
                                </a>
                            </td>
                            <td class="text-center">
                                <label class="switch switch-primary">
                                    <input type="checkbox" name="display-'.$image['id'].'"'.($image['display']==1 ? ' checked' : '').'><span></span>
                                </label>
                                Display
                            </td>
                            <td class="text-center">
                                <select name="type" class="form-control" data-placeholder="Type image">
                                <option value="1"'.($image['type']==1 ? ' selected' : '').'>Normal</option>
                                <option value="2"'.($image['type']==2 ? ' selected' : '').'>Slide</option>
                            </td>
                            <td class="text-center">
                                <a href="javascript:deleteImage('.$image['id'].')" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                            </td>
                        </tr>';
                        } ?>
                        
                    </tbody>
                </table>
                <!-- END Product Images Content -->
            </div>
            <!-- END Product Images Block -->
        </div>
    </div>
    <!-- END Product Edit Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<script type="text/javascript">
    $(window).load(function () {
        $('select[name=type]').on('change', function (e) {
            var id = $(this).parents('tr').data("id");
            var type = this.value;
            $.post('image/update/'+id, {data:{type:type}}, function(data) {
                //$('tr#image-'+id).hide();
                console.log(data);
            });
        });
        $('input[name^=display-]').click(function(e) {
            var checkBoxes = $(this);
            var id = $(this).parents('tr').data("id");
            checkBoxes.attr("checked", !checkBoxes.attr("checked"));
            var display = $(this).is(':checked');
            console.log(display);
            $.post('image/update/'+id, {data:{display:+display}}, function(data) {
                //$('tr#image-'+id).hide();
                console.log(data);
            });
        });
    });
    function deleteImage(id) {
        $.post('image/delete/'+id, {}, function(data) {
            $('tr#image-'+id).hide();
            console.log(data);
        });
    }
</script>
<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/helpers/ckeditor/ckeditor.js"></script>

<?php include 'inc/template_end.php'; ?>