
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <base href="<?php echo base_url(); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Log into Magento Admin Page</title>
    <link type="text/css" rel="stylesheet" href="skin/adminhtml/default/default/reset.css" media="all" />
    <link type="text/css" rel="stylesheet" href="skin/adminhtml/default/default/boxes.css" media="all" />
    <link rel="icon" href="skin/adminhtml/default/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="skin/adminhtml/default/default/favicon.ico" type="image/x-icon" />

    <script type="text/javascript" src="js/prototype/prototype.js"></script>
    <script type="text/javascript" src="js/prototype/validation.js"></script>
    <script type="text/javascript" src="js/scriptaculous/effects.js"></script>
    <script type="text/javascript" src="js/mage/adminhtml/form.js"></script>
    <script type="text/javascript" src="js/mage/captcha.js"></script>

    <!--[if IE]> <link rel="stylesheet" href="skin/adminhtml/default/default/iestyles.css" type="text/css" media="all" /> <![endif]-->
    <!--[if lt IE 7]> <link rel="stylesheet" href="skin/adminhtml/default/default/below_ie7.css" type="text/css" media="all" /> <![endif]-->
    <!--[if IE 7]> <link rel="stylesheet" href="skin/adminhtml/default/default/ie7.css" type="text/css" media="all" /> <![endif]-->
</head>
<body id="page-login" onload="document.forms.loginForm.username.focus();">
    <div class="login-container">
        <div class="login-box">
            <form method="post" action="" id="loginForm" autocomplete="off">
                <div class="login-form">
                    <input name="form_key" type="hidden" value="pGJbiea7EWgcriIw" />
                    <h2>Log in to Admin Panel</h2>
                    <div id="messages">
                                            </div>
                    <div class="input-box input-left"><label for="username">User Name:</label><br/>
                        <input type="text" id="username" name="login[username]" value="" class="required-entry input-text" /></div>
                    <div class="input-box input-right"><label for="login">Password:</label><br />
                        <!-- This is a dummy hidden field to trick firefox from auto filling the password -->
                        <input type="text" class="input-text no-display" name="dummy" id="dummy" />
                        <input type="password" id="login" name="login[password]" class="required-entry input-text" value="" /></div>
                                        <div class="clear"></div>
                    <div class="form-buttons">
                        <a class="left" href="admin/index/forgotpassword/">Forgot your password?</a>
                        <input type="submit" class="form-button" value="Login" title="Login" /></div>
                </div>
                <p class="legal">Magento is a trademark of Magento Inc. Copyright &copy; 2017 Magento Inc.</p>
            </form>
            <div class="bottom"></div>
            <script type="text/javascript">
                 var loginForm = new varienForm('loginForm');
            </script>
        </div>
    </div>
</body>
</html>

