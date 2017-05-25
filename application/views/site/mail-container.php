<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="background-color: #ebebeb;">
<head>
<base href="<?php echo base_url(); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="initial-scale=1.0, width=device-width">
</head>
<body style="font-family: Verdana, Arial; font-weight: normal; margin: 0; padding: 0; text-align: left; color: #333333; background-color: #ebebeb; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background: #ebebeb; font-size: 12px;">
<style type="text/css">
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    design
 * @package     base_default
 * @copyright   Copyright (c) 2006-2016 X.commerce, Inc. and affiliates (http://www.magento.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
@import url(http://fonts.googleapis.com/css?family=Raleway:400,500,700);
/* Font Styles */
/* Media Queries */
/* Setting the Web Font inside a media query so that Outlook doesn't try to render the web font */
@media screen {
  .email-heading h1,
  .store-info h4,
  th.cell-name,
  a.product-name,
  p.product-name,
  .address-details h6,
  .method-info h6,
  h5.closing-text,
  .action-button,
  .action-button a,
  .action-button span,
  .action-content h1 {
    font-family: 'Raleway', Verdana, Arial !important;
    font-weight: normal;
  }
}
@media screen and (max-width: 600px) {
  body {
    width: 94% !important;
    padding: 0 3% !important;
    display: block !important;
  }

  .container-table {
    width: 100% !important;
    max-width: 600px;
    min-width: 300px;
  }

  td.store-info h4 {
    margin-top: 8px !important;
    margin-bottom: 0px !important;
  }

  td.store-info p {
    margin: 5px 0 !important;
  }

  .wrapper {
    width: 100% !important;
    display: block;
    padding: 5px 0 !important;
  }

  .cell-name,
  .cell-content {
    padding: 8px !important;
  }
}
@media screen and (max-width: 450px) {
  .email-heading,
  .store-info {
    float: left;
    width: 98% !important;
    display: block;
    text-align: center;
    padding: 10px 1% !important;
    border-right: 0px !important;
  }

  .address-details, .method-info {
    width: 85%;
    display: block;
  }

  .store-info {
    border-top: 1px dashed #c3ced4;
  }

  .method-info {
    margin-bottom: 15px !important;
  }
}
/* Remove link color on iOS */
.no-link a {
  color: #333333 !important;
  cursor: default !important;
  text-decoration: none !important;
}

.method-info h6,
.address-details h6,
.closing-text {
  color: #3696c2 !important;
}

td.order-details h3,
td.store-info h4 {
  color: #333333 !important;
}

.method-info p,
.method-info dl {
  margin: 5px 0 !important;
  font-size: 12px !important;
}

td.align-center {
  text-align: center !important;
}

td.align-right {
  text-align: right !important;
}

/* Newsletter styles */
td.expander {
  padding: 0 !important;
}

table.button td,
table.social-button td {
  width: 92% !important;
}

table.facebook:hover td {
  background: #2d4473 !important;
}

table.twitter:hover td {
  background: #0087bb !important;
}

table.google-plus:hover td {
  background: #CC0000 !important;
}

@media screen and (max-width: 600px) {
  .products-grid tr td {
    width: 50% !important;
    display: block !important;
    float: left !important;
  }
}
.product-name a:hover {
  color: #3399cc !important;
  text-decoration: none !important;
}


</style>
<!-- Begin wrapper table --><table width="100%" cellpadding="0" cellspacing="0" border="0" id="background-table" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; padding: 0; margin: 0 auto; background-color: #ebebeb; font-size: 12px;"><tr>
<td valign="top" class="container-td" align="center" style="font-family: Verdana, Arial; font-weight: normal; border-collapse: collapse; vertical-align: top; padding: 0; margin: 0; width: 100%;">
            <table cellpadding="0" cellspacing="0" border="0" align="center" class="container-table" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; padding: 0; margin: 0 auto; width: 600px;">
<tr>
<td style="font-family: Verdana, Arial; font-weight: normal; border-collapse: collapse; vertical-align: top; padding: 0; margin: 0;">
                        <table cellpadding="0" cellspacing="0" border="0" class="logo-container" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; padding: 0; margin: 0; width: 100%;"><tr>
<td class="logo" style="font-family: Verdana, Arial; font-weight: normal; border-collapse: collapse; vertical-align: top; padding: 15px 0px 10px 5px; margin: 0;">
                                    <a href="./" style="color: #3696c2; float: left; display: block;">
                                        <img width="165" height="48" src="skin/frontend/alosupermarket/default/images/logo_email.gif" alt="Demo 1" border="0" style="-ms-interpolation-mode: bicubic; outline: none; text-decoration: none;"></a>
                                </td>
                            </tr></table>
</td>
                </tr>
<tr>
<td valign="top" class="top-content" style="font-family: Verdana, Arial; font-weight: normal; border-collapse: collapse; vertical-align: top; padding: 5px; margin: 0; border: 1px solid #ebebeb; background: #FFF;">
                    <!-- Begin Content -->



<table cellpadding="0" cellspacing="0" border="0" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; padding: 0; margin: 0; width: 100%;"><tr>
<td class="action-content" style="font-family: Verdana, Arial; font-weight: normal; border-collapse: collapse; vertical-align: top; padding: 10px 20px 15px; margin: 0; line-height: 18px;">
            <h1 style="font-family: Verdana, Arial; font-weight: bold; font-size: 25px; margin-bottom: 25px; margin-top: 5px; line-height: 28px;"><?=$user['displayname']?>,</h1>
            <p style="font-family: Verdana, Arial; font-weight: normal;">There was recently a request to change the password for your account.</p>
            <p style="font-family: Verdana, Arial; font-weight: normal;">If you requested this password change, please reset your password here:</p>
            <table cellspacing="0" cellpadding="0" class="action-button" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; padding: 0; margin: 0 auto; width: 220px; text-align: center;"><tr>
<td style="font-family: Verdana, Arial; font-weight: normal; border-collapse: collapse; vertical-align: middle; padding: 0; margin: 0 auto; background-color: #3696c2; color: #FFF; width: 100%; height: 40px; display: block; border: 0 none; text-align: center; text-transform: uppercase; white-space: nowrap;">
                        <a href="<?=$url_reset?>" style="color: #3696c2; width: 100%; height: 100%; line-height: 40px; font-size: 15px; display: inline-block; text-decoration: none;"><span style="color: #FFF;">Reset Password</span></a>
                    </td>
                </tr></table>
<p style="font-family: Verdana, Arial; font-weight: normal;">If you did not make this request, you can ignore this message and your password will remain the same.</p>
        </td>
    </tr></table>
<!-- End Content -->
</td>
                </tr>
</table>
<h5 class="closing-text" style="font-family: Verdana, Arial; font-weight: normal; text-align: center; font-size: 22px; line-height: 32px; margin-bottom: 75px; margin-top: 30px;">Thank you, Demo 1!</h5>
        </td>
    </tr></table>
<!-- End wrapper table -->
</body>
</html>