<div class="main-container col1-layout content-color color">
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-main col-lg-12">
                                <div class="page-title">
                                    <h1>Forgot Your Password?</h1>
                                </div>
                                <?php 
                                    if(!empty($message)) {
                                        echo '<ul class="messages">
                                            '.(isset($message['success']) ? '<li class="success-msg"><ul><li><span>'.$message['success'].'</span></li>' : '
                                            <li class="error-msg"><ul><li><span>'.$message['error'].'</span></li></ul></li>').'
                                            </ul></li></ul>';
                                        } 
                                    ?>
                                <form action="customer/account/forgotpasswordpost/" method="post" id="form-validate">
                                    <div class="fieldset">
                                        <h2 class="legend">Retrieve your password here</h2>
                                        <p>Please enter your email address below. You will receive a link to reset your password.</p>
                                        <ul class="form-list">
                                            <li>
                                                <label for="email_address" class="required"><em>*</em>Email Address</label>
                                                <div class="input-box">
                                                    <input type="text" name="email" alt="email" id="email_address" class="input-text required-entry validate-email" value="" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="buttons-set">
                                        <p class="required">* Required Fields</p>
                                        <p class="back-link"><a href="customer/account/login/"><small>&laquo; </small>Back to Login</a></p>
                                        <button type="submit" title="Submit" class="button"><span><span>Submit</span></span></button>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    var dataForm = new VarienForm('form-validate', true);
                                    //]]>
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>