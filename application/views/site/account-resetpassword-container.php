<div class="main-container col1-layout content-color color">
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-main col-lg-12">
                                <div class="page-title">
                                    <h1>Reset a Password</h1>
                                </div>
                                <?php 
                                    if(!empty($message)) {
                                        echo '<ul class="messages">
                                            '.(isset($message['success']) ? '<li class="success-msg"><ul><li><span>'.$message['success'].'</span></li>' : '
                                            <li class="error-msg"><ul><li><span>'.$message['error'].'</span></li></ul></li>').'
                                            </ul></li></ul>';
                                        } 
                                    ?>
                                <form action="customer/account/resetpasswordpost/?<?=@$_SERVER['QUERY_STRING']?>" method="post" id="form-validate">
                                    <div class="fieldset" style="margin-top: 70px;">
                                        <ul class="form-list">
                                            <li class="fields">
                                                <div class="field">
                                                    <label for="password" class="required"><em>*</em>New Password</label>
                                                    <div class="input-box">
                                                        <input type="password" class="input-text required-entry validate-password" name="password" id="password" />
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label for="confirmation" class="required"><em>*</em>Confirm New Password</label>
                                                    <div class="input-box">
                                                        <input type="password" class="input-text required-entry validate-cpassword" name="confirmation" id="confirmation" />
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="buttons-set">
                                        <p class="required">* Required Fields</p>
                                        <button type="submit" title="Reset a Password" class="button"><span><span>Reset a Password</span></span></button>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    /*<![CDATA[*/
                                    var dataForm = new VarienForm('form-validate', true);
                                    /*]]>*/
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>