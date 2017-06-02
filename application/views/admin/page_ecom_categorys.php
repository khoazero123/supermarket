<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- eCommerce Products Header -->
    <!-- <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li>
                <a href="page_ecom_dashboard.php"><i class="fa fa-bar-chart"></i> Dashboard</a>
            </li>
            <li>
                <a href="page_ecom_orders.php"><i class="gi gi-shop_window"></i> Orders</a>
            </li>
            <li>
                <a href="page_ecom_order_view.php"><i class="gi gi-shopping_cart"></i> Order View</a>
            </li>
            <li class="active">
                <a href="page_ecom_products.php"><i class="gi gi-shopping_bag"></i> Products</a>
            </li>
            <li>
                <a href="page_ecom_product_edit.php"><i class="gi gi-pencil"></i> Product Edit</a>
            </li>
            <li>
                <a href="page_ecom_customer_view.php"><i class="gi gi-user"></i> Customer View</a>
            </li>
        </ul>
    </div> -->
    <!-- END eCommerce Products Header -->

    <!-- Quick Stats -->
    <div class="row text-center">
        <div class="col-sm-6 col-lg-3">
            <a href="category/page_ecom_category_add.php" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-success">
                    <h4 class="widget-content-light"><strong>Add New</strong> Category</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>All</strong> Categorys</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">4.982</span></div>
            </a>
        </div>
    </div>
    <!-- END Quick Stats -->

    <!-- All Products Block -->
    <div class="block full">
        <!-- All Products Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
            </div>
            <h2><strong>All</strong> Products</h2>
        </div>
        <!-- END All Products Title -->

        <!-- All Products Content -->
        <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
            <thead>
                <tr>
                    <th class="text-center" style="width: 70px;">ID</th>
                    <th>Category Name</th>
                    <th class="text-right hidden-xs">Parent</th>
                    <th class="hidden-xs">Status</th>
                    <th class="hidden-xs text-center">Image</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                //echo printMenuCategory('generateSelectAdminHTMLCategories');
                //exit;
                //if(false)
                foreach ($categorys as $item) {
                    echo '<tr id="product-'.$item['id'].'" data-id="'.$item['id'].'">
                    <td class="text-center"><a href="category/page_ecom_category_edit.php?id='.$item['id'].'"><strong>ID#'.$item['id'].'</strong></a></td>
                    <td><a href="category/page_ecom_category_edit.php?id='.$item['id'].'">'.$item['name'].'</a></td>
                    <td class="text-right hidden-xs"><strong>HTC</strong></td>
                    <td class="hidden-xs">';
                    if($item['display']==0)
                        echo '<span class="label label-danger">Hide</span>';
                    else
                        echo '<span class="label label-success">Display</span>';
                    echo '</td>
                    <td class="hidden-xs text-center"><img src="'.$item['image'].'" /></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a target="_blank" href="category/page_ecom_category_edit.php?id='.$item['id'].'" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:deleteProduct('.$item['id'].')" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>';
                } ?>
            </tbody>
        </table>
        <!-- END All Products Content -->
    </div>
    <!-- END All Products Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/ecomProducts.js"></script>
<script>$(function(){ EcomProducts.init(); });</script>
<script type="text/javascript">
    function deleteProduct(id) {
        $.post('product/delete/'+id, {}, function(data) {
            $('tr#product-'+id).remove();
            console.log(data);
        });
    };
</script>
<?php include 'inc/template_end.php'; ?>