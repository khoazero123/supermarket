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
                <a href="page_ecom_categorys.php"><i class="gi gi-shopping_bag"></i> Products</a>
            </li>
            <li class="active">
                <a href="page_ecom_category_edit.php"><i class="gi gi-pencil"></i> Product Edit</a>
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
                <form action="category/page_ecom_category_add.php" method="post" class="form-horizontal form-bordered" onsubmit="">
                    <!-- <div class="form-group">
                        <label class="col-md-3 control-label" for="category-id">PID</label>
                        <div class="col-md-9">
                            <input type="text" id="category-id" name="category-id" class="form-control" value="6825">
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="category-name">Name</label>
                        <div class="col-md-9">
                            <input type="text" id="category-name" name="category-name" value="<?=@$category['name']?>" class="form-control" placeholder="Enter category name.." required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="category-category">Category parent</label>
                        <div class="col-md-8">
                            <!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->
                            <select id="category-category" name="category-category" class="select-chosen" data-placeholder="Choose Category.." style="width: 250px;">
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                <?php 
                                echo printMenuCategory('generateSelectMenuHTMLCategories');
                                /*foreach ($categorys as $category) {
                                    echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                                }*/
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Published?</label>
                        <div class="col-md-9">
                            <label class="switch switch-primary">
                                <input type="checkbox" id="category-status" name="category-status" checked><span></span>
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
                <form action="page_ecom_category_edit.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="category-meta-title">Meta Title</label>
                        <div class="col-md-9">
                            <input type="text" id="category-meta-title" name="category-meta-title" class="form-control" placeholder="Enter meta title..">
                            <div class="help-block">55 Characters Max</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="category-meta-keywords">Meta Keywords</label>
                        <div class="col-md-9">
                            <input type="text" id="category-meta-keywords" name="category-meta-keywords" class="form-control" placeholder="keyword1, keyword2, keyword3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="category-meta-description">Meta Description</label>
                        <div class="col-md-9">
                            <textarea id="category-meta-description" name="category-meta-description" class="form-control" rows="6" placeholder="Enter meta description.."></textarea>
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
                    <h2><i class="fa fa-picture-o"></i> <strong>Category</strong> Images</h2>
                </div>
                <!-- END Product Images Title -->
                <!-- Product Images Content -->
                <div class="block-section">
                    <!-- Dropzone.js, You can check out https://github.com/enyo/dropzone/wiki for usage examples -->
                    <form action="category/image/upload" class="dropzone"></form>
                </div>
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
            $.post('category/image/update/'+id, {data:{type:type}}, function(data) {
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

        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else { done(); }
            }
        };

    });
    function deleteImage(id) {
        $.post('category/image/delete/'+id, {}, function(data) {
            $('tr#image-'+id).hide();
            console.log(data);
        });
    }
</script>
<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/helpers/ckeditor/ckeditor.js"></script>

<?php include 'inc/template_end.php'; ?>