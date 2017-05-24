<div class="main-container col2-left-layout ">
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-main col-lg-9 col-md-9 col-sm-9 col-xs-12 content-color color f-right">
                                <div class="my-account">
                                    <div class="dashboard">
                                        <div class="page-title">
                                            <h1>My Dashboard</h1>
                                        </div>
                                        <?php 
                                        if(!empty($message)) {
                                            echo '<ul class="messages">
                                                '.(isset($message['success']) ? '<li class="success-msg"><ul><li><span>'.$message['success'].'</span></li>' : '
                                                <li class="error-msg"><ul><li><span>'.$message['error'].'</span></li></ul></li>').'
                                                </ul></li></ul>';
                                            } 
                                        ?>
                                        <div class="welcome-msg">
                                            <p class="hello"><strong>Hello, <?=$user['displayname'] ?>!</strong></p>
                                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                                        </div>
                                        <div class="box-account box-info">
                                            <div class="box-head">
                                                <h2>Account Information</h2>
                                            </div>
                                            <div class="col2-set">
                                                <div class="col-1">
                                                    <div class="box">
                                                        <div class="box-title">
                                                            <h3>Contact Information</h3>
                                                            <a href="customer/account/edit/">Edit</a>
                                                        </div>
                                                        <div class="box-content">
                                                            <p>
                                                                <?=$user['displayname'] ?><br /> <?=$user['email'] ?>
                                                                <br />
                                                                <a href="customer/account/edit/changepass/1/">Change Password</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="box">
                                                        <div class="box-title">
                                                            <h3>Newsletters</h3>
                                                            <a href="newsletter/manage/">Edit</a>
                                                        </div>
                                                        <div class="box-content">
                                                            <p>
                                                                You are currently not subscribed to any newsletter. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2-set">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Address Book</h3>
                                                        <a href="customer/address/">Manage Addresses</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <div class="col-1">
                                                            <h4>Default Billing Address</h4>
                                                            <address>
                    You have not set a default billing address.<br />
                    <a href="customer/address/edit/">Edit Address</a>
                </address>
                                                        </div>
                                                        <div class="col-2">
                                                            <h4>Default Shipping Address</h4>
                                                            <address>
                    You have not set a default shipping address.<br />
                    <a href="customer/address/edit/">Edit Address</a>
                </address>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-left sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12 left-color color f-left">
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

                                <div class="block block-account">
                                    <div class="block-title">
                                        <strong><span>My Account</span></strong>
                                    </div>
                                    <div class="block-content">
                                        <ul>
                                            <li class="current"><strong>Account Dashboard</strong></li>
                                            <li><a href="customer/account/edit/">Account Information</a></li>
                                            <li><a href="customer/address/">Address Book</a></li>
                                            <li><a href="sales/order/history/">My Orders</a></li>
                                            <li><a href="sales/billing_agreement/">Billing Agreements</a></li>
                                            <li><a href="sales/recurring_profile/">Recurring Profiles</a></li>
                                            <li><a href="review/customer/">My Product Reviews</a></li>
                                            <li><a href="tag/customer/">My Tags</a></li>
                                            <li><a href="wishlist/">My Wishlist</a></li>
                                            <li><a href="oauth/customer_token/">My Applications</a></li>
                                            <li><a href="newsletter/manage/">Newsletter Subscriptions</a></li>
                                            <li class="last"><a href="downloadable/customer/products/">My Downloadable Products</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="block block-cart">
                                    <div class="block-title">
                                        <strong><span>My Cart</span></strong>
                                    </div>
                                    <div class="block-content">
                                        <p class="empty">You have no items in your shopping cart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>