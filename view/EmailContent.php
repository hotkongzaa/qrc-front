<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailContent
 *
 * @author WIN 10
 */
class EmailContent {

    //put your code here
    public function __construct() {
        
    }

    public function getCustomerEmailEnrollment($courseNameAndSub, $linkTOCOurse, $courseName, $dateTime) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Tempo-Responsive Email Template</title>

        <style type="text/css">
            /* Client-specific Styles */
            div, p, a, li, td { -webkit-text-size-adjust:none; }
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            html{width: 100%; }
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
            a img {border:none;}
            .image_fix {display:block;}
            p {margin: 0px 0px !important;}
            table td {border-collapse: collapse;}
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
            a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
            /*STYLES*/
            table[class=full] { width: 100%; clear: both; }
            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important;
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 440px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
                img[class=banner] {width: 440px!important;height:220px!important;}
                img[class=col2img] {width: 440px!important;height:220px!important;}


            }
            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important; 
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 280px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
                img[class=banner] {width: 280px!important;height:140px!important;}
                img[class=col2img] {width: 280px!important;height:140px!important;}


            }
        </style>
    </head>
    <body>
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->

                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->       
        <!-- Start of header -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- logo -->
                                                        <table bgcolor="#282828" width="140" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="140" height="50" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="http://www.gogetrich.net">
                                                                                <!--img src="img/logos.jpg" alt="" border="0" width="140" height="50" style="display:block; border:none; outline:none; text-decoration:none;"-->
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of logo -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Header -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of main-banner -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <!-- start of image -->
                                                    <td align="center" st-image="banner-image">
                                                        <div class="imgpop">
                                                            <img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="https://blog.compete.com/wp-content/uploads/2014/04/success.jpg" class="banner">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end of image -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of main-banner -->  

        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- start of Full text -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>
                                                                <tr>
                                                                    <table width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <table width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                                        <tbody>
                                                                                            <!-- title -->
                                                                                            <tr>
                                                                                                <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                                                    ขอบคุณสำหรับการลงทะเบียน
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- end of title -->
                                                                                            <!-- Spacing -->
                                                                                            <tr>
                                                                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                            </tr>
                                                                                            <!-- /Spacing -->
                                                                                            <!-- content -->
                                                                                            <tr>
                                                                                                <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                                                    ' . $courseNameAndSub . '
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- end of content -->
                                                                                            <!-- Spacing -->
                                                                                            <tr>
                                                                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                            </tr>
                                                                                            <!-- /Spacing -->
                                                                                            <!-- read more -->
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table width="120" height="32" bgcolor="#eacb3c" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" style="border-radius:3px;" st-button="learnmore">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height="9" align="center" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td height="14" align="center" valign="middle" style="font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight:bold;color: #ffffff; text-align:center; line-height: 14px; ; -webkit-text-size-adjust:none;" st-title="fulltext-btn">
                                                                                                                    <a style="text-decoration: none;color: #282828; text-align:center;" href="' . $linkTOCOurse . '">รายละเอียด</a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td height="9" align="center" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- end of read more -->
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                        รายละเอียดการลงทะเบียน
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                        <table width="100%">           
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ชื่อคอร์ส</strong></td>
                                                                                    <td>' . $courseName . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><strong>เวลาเรียน</strong></td>
                                                                                    <td>' . $dateTime . '</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><strong>ช่องทางการจ่ายเงิน</strong></td>
                                                                                    <td>โอนเงินเข้าบัญชี (ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3, กรุณาส่งสำเนาหลักฐานการโอนเงินมาที่ pinhatai.d@gmail.com)</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Full Text -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of Right Image -->      
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="right-image">
            <tbody>
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Right Image -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->
        <!-- Start of footer -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
            <tbody>
                <tr>
                    <td>
                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#eacb3c" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <!-- Social icons -->
                                                        <table  width="150" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="43" height="43" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="https://www.facebook.com/richplanning">
                                                                                <img src="img/facebook.png" alt="" border="0" width="30" height="30" style="display:block; border:none; outline:none; text-decoration:none;"/> 
                                                                            </a>
                                                                            <span style="cursor: pointer;font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098;">
                                                                                https://www.facebook.com/richplanning
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:18px; margin-left: 10px;">
                                                                    </td>                                                                   
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of Social icons -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of footer -->

    </body>
</html>';
    }

    public function getOfficialEmailEnrollment($cusName, $cusEmail, $cusPhone, $cusContactAddr, $cusContactReceipt, $courseName, $dateTime) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Tempo-Responsive Email Template</title>

        <style type="text/css">
            /* Client-specific Styles */
            div, p, a, li, td { -webkit-text-size-adjust:none; }
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            html{width: 100%; }
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
            a img {border:none;}
            .image_fix {display:block;}
            p {margin: 0px 0px !important;}
            table td {border-collapse: collapse;}
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
            a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
            /*STYLES*/
            table[class=full] { width: 100%; clear: both; }
            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important;
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 440px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
                img[class=banner] {width: 440px!important;height:220px!important;}
                img[class=col2img] {width: 440px!important;height:220px!important;}


            }
            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important; 
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 280px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
                img[class=banner] {width: 280px!important;height:140px!important;}
                img[class=col2img] {width: 280px!important;height:140px!important;}


            }
        </style>
    </head>
    <body>
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->

                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->       
        <!-- Start of header -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- logo -->
                                                        <table bgcolor="#282828" width="140" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="140" height="50" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="http://www.gogetrich.net">
                                                                                <!--img src="img/logos.jpg" alt="" border="0" width="140" height="50" style="display:block; border:none; outline:none; text-decoration:none;"-->
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of logo -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Header -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of main-banner -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <!-- start of image -->
                                                    <td align="center" st-image="banner-image">
                                                        <div class="imgpop">
                                                            <img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="https://blog.compete.com/wp-content/uploads/2014/04/success.jpg" class="banner">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end of image -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of main-banner -->  

        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- start of Full text -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>

                                                                <tr>
                                                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                        รายละเอียดการลงทะเบียน
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                        <table width="100%">           
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ชื่อผู้เรียน</strong></td>
                                                                                    <td>' . $cusName . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>Email ผู้เรียน</strong></td>
                                                                                    <td>' . $cusEmail . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>เบอร์โทรศัพท์ผู้เรียน</strong></td>
                                                                                    <td>' . $cusPhone . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ที่อยู่ผู้เรียน</strong></td>
                                                                                    <td>' . $cusContactAddr . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ที่อยู่เพื่อรับใบเสร็จ</strong></td>
                                                                                    <td>' . $cusContactReceipt . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="30%"><strong>ชื่อคอร์ส</strong></td>
                                                                                    <td>' . $courseName . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><strong>เวลาเรียน</strong></td>
                                                                                    <td>' . $dateTime . '</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top"><strong>ช่องทางการจ่ายเงิน</strong></td>
                                                                                    <td>โอนเงินเข้าบัญชี (ชื่อบัญชี "บจ. เอสอี ทอล์ค" ธนาคารกรุงเทพ เลขที่บัญชี 021-7-08688-3, กรุณาส่งสำเนาหลักฐานการโอนเงินมาที่ pinhatai.d@gmail.com)</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Full Text -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of Right Image -->      
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="right-image">
            <tbody>
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Right Image -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->
        <!-- Start of footer -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
            <tbody>
                <tr>
                    <td>
                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#eacb3c" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <!-- Social icons -->
                                                        <table  width="150" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="43" height="43" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="https://www.facebook.com/richplanning">
                                                                                <img src="img/facebook.png" alt="" border="0" width="30" height="30" style="display:block; border:none; outline:none; text-decoration:none;"/> 
                                                                            </a>
                                                                            <span style="cursor: pointer;font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098;">
                                                                                https://www.facebook.com/richplanning
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:18px; margin-left: 10px;">
                                                                    </td>                                                                   
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of Social icons -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of footer -->

    </body>
</html>';
    }

    public function getCustomerEmailRegister($resetUrl, $username, $password) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Tempo-Responsive Email Template</title>

        <style type="text/css">
            /* Client-specific Styles */
            div, p, a, li, td { -webkit-text-size-adjust:none; }
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            html{width: 100%; }
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
            a img {border:none;}
            .image_fix {display:block;}
            p {margin: 0px 0px !important;}
            table td {border-collapse: collapse;}
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
            a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
            /*STYLES*/
            table[class=full] { width: 100%; clear: both; }
            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important;
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 440px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
                img[class=banner] {width: 440px!important;height:220px!important;}
                img[class=col2img] {width: 440px!important;height:220px!important;}


            }
            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important; 
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 280px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
                img[class=banner] {width: 280px!important;height:140px!important;}
                img[class=col2img] {width: 280px!important;height:140px!important;}


            }
        </style>
    </head>
    <body>
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->

                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->       
        <!-- Start of header -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- logo -->
                                                        <table bgcolor="#282828" width="140" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="140" height="50" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="http://www.gogetrich.net">
                                                                                <!--img src="img/logos.jpg" alt="" border="0" width="140" height="50" style="display:block; border:none; outline:none; text-decoration:none;"-->
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of logo -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Header -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of main-banner -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <!-- start of image -->
                                                    <td align="center" st-image="banner-image">
                                                        <div class="imgpop">
                                                            <img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="https://blog.compete.com/wp-content/uploads/2014/04/success.jpg" class="banner">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end of image -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of main-banner -->  

        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- start of Full text -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>

                                                                <tr>
                                                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                        <table width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="600px" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                                            <tbody>
                                                                                                <!-- title -->
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                                                        ขอบคุณสำหรับการสมัครสมาชิก
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of title -->
                                                                                                <!-- Spacing -->
                                                                                                <tr>
                                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <!-- /Spacing -->
                                                                                                <!-- content -->
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;  ">
                                                                                                        <blockquote>
                                                                                                            <q>สามสิ่งสำคัญ ในความรู้ของการจัดการการเงิน ที่พี่อยากจะแชร์และแบ่งปันคนไทยทุกคน ได้แก่ การวางแผนงบการเงิน การอยู่อย่างพอเพียง และการใช้ชีวิตอย่างมีความสุข ...ซึ่งทุกคนทำได้  ขอเพียงรู้จักจัดการเงินอย่างฉลาด อิสระภาพทางการเงินและการใช้ชีวิต มันเป็นไปได้....และนี่แหละ คือ โชค ที่ทุกคนต้องการมี</q>
                                                                                                        </blockquote>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of content -->
                                                                                                <!-- Spacing -->
                                                                                                <tr>
                                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <!-- /Spacing -->
                                                                                                <!-- read more -->
                                                                                                <tr>
                                                                                                    <td>

                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of read more -->
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                        <table width="100%">           
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="2">
                                                                                        <strong>กรุณาเข้าสู่ระบบด้วย URL ข้างล่างนี้เพื่อเปลี่ยนรหัสผ่านและข้อมูลส่วนตัว</strong>
                                                                                        <a href="' . $resetUrl . '" target="_blank">
                                                                                            ' . $resetUrl . '
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2" height="10"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="5%"><strong>Username:</strong></td>
                                                                                    <td>' . $username . '</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" width="5%"><strong>Password:</strong></td>
                                                                                    <td>' . $password . '</td>
                                                                                </tr>  



                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Full Text -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of Right Image -->      
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="right-image">
            <tbody>
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Right Image -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->
        <!-- Start of footer -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
            <tbody>
                <tr>
                    <td>
                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#eacb3c" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <!-- Social icons -->
                                                        <table  width="150" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="43" height="43" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="https://www.facebook.com/richplanning">
                                                                                <img src="img/facebook.png" alt="" border="0" width="30" height="30" style="display:block; border:none; outline:none; text-decoration:none;"/> 
                                                                            </a>
                                                                            <span style="cursor: pointer;font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098;">
                                                                                https://www.facebook.com/richplanning
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:18px; margin-left: 10px;">
                                                                    </td>                                                                   
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of Social icons -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of footer -->

    </body>
</html>';
    }

    public function getCusRegisterNormalContent($linkUrl) {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Tempo-Responsive Email Template</title>

        <style type="text/css">
            /* Client-specific Styles */
            div, p, a, li, td { -webkit-text-size-adjust:none; }
            #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
            html{width: 100%; }
            body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
            #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
            img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
            a img {border:none;}
            .image_fix {display:block;}
            p {margin: 0px 0px !important;}
            table td {border-collapse: collapse;}
            table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
            a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
            /*STYLES*/
            table[class=full] { width: 100%; clear: both; }
            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important;
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 440px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
                img[class=banner] {width: 440px!important;height:220px!important;}
                img[class=col2img] {width: 440px!important;height:220px!important;}


            }
            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }
                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important; 
                    pointer-events: auto;
                    cursor: default;
                }
                table[class=devicewidth] {width: 280px!important;text-align:center!important;}
                table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
                img[class=banner] {width: 280px!important;height:140px!important;}
                img[class=col2img] {width: 280px!important;height:140px!important;}


            }
        </style>
    </head>
    <body>
        <!-- Start of preheader -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->

                                                <!-- Spacing -->
                                                <tr>
                                                    <td width="100%" height="20"></td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of preheader -->       
        <!-- Start of header -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- logo -->
                                                        <table bgcolor="#282828" width="140" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="140" height="50" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="http://www.gogetrich.net">
                                                                                <!--img src="img/logos.jpg" alt="" border="0" width="140" height="50" style="display:block; border:none; outline:none; text-decoration:none;"-->
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of logo -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Header -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of main-banner -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                                            <tbody>
                                                <tr>
                                                    <!-- start of image -->
                                                    <td align="center" st-image="banner-image">
                                                        <div class="imgpop">
                                                            <img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="https://blog.compete.com/wp-content/uploads/2014/04/success.jpg" class="banner">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end of image -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of main-banner -->  

        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->   
        <!-- start of Full text -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="full-text">
            <tbody>
                <tr>
                    <td>
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <table width="560" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">
                                                            <tbody>

                                                                <tr>
                                                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Title -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                        <table width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="600px" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                                                            <tbody>
                                                                                                <!-- title -->
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #282828; text-align:left; line-height: 24px;">
                                                                                                        ขอบคุณสำหรับการสมัครสมาชิก
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of title -->
                                                                                                <!-- Spacing -->
                                                                                                <tr>
                                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <!-- /Spacing -->
                                                                                                <!-- content -->
                                                                                                <tr>
                                                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;  ">
                                                                                                        <blockquote>
                                                                                                            <q>สามสิ่งสำคัญ ในความรู้ของการจัดการการเงิน ที่พี่อยากจะแชร์และแบ่งปันคนไทยทุกคน ได้แก่ การวางแผนงบการเงิน การอยู่อย่างพอเพียง และการใช้ชีวิตอย่างมีความสุข ...ซึ่งทุกคนทำได้  ขอเพียงรู้จักจัดการเงินอย่างฉลาด อิสระภาพทางการเงินและการใช้ชีวิต มันเป็นไปได้....และนี่แหละ คือ โชค ที่ทุกคนต้องการมี</q>
                                                                                                        </blockquote>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of content -->
                                                                                                <!-- Spacing -->
                                                                                                <tr>
                                                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                                                </tr>
                                                                                                <!-- /Spacing -->
                                                                                                <!-- read more -->
                                                                                                <tr>
                                                                                                    <td>

                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- end of read more -->
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of Title -->
                                                                <!-- spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- End of spacing -->
                                                                <!-- content -->
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098; text-align:left; line-height: 24px;">
                                                                        <table width="100%">           
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="2">
                                                                                        <strong>กรุณาเข้าสู่ระบบด้วย URL ข้างล่างนี้</strong>
                                                                                        <a href="' . $linkUrl . '" target="_blank">
                                                                                            ' . $linkUrl . '
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="2" height="10"></td>
                                                                                </tr>
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- End of content -->
                                                                <!-- Spacing -->
                                                                <tr>
                                                                    <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                                </tr>
                                                                <!-- Spacing -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Full Text -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator --> 
        <!-- Start of Right Image -->      
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="right-image">
            <tbody>
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Right Image -->
        <!-- Start of seperator -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
            <tbody>
                <tr>
                    <td>
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of seperator -->
        <!-- Start of footer -->
        <table width="100%" bgcolor="#fcfcfc" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="footer">
            <tbody>
                <tr>
                    <td>
                        <table width="600" bgcolor="#eacb3c" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td width="100%">
                                        <table bgcolor="#eacb3c" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td>
                                                        <!-- Social icons -->
                                                        <table  width="150" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="43" height="43" align="center">
                                                                        <div class="imgpop">
                                                                            <a target="_blank" href="https://www.facebook.com/richplanning">
                                                                                <img src="img/facebook.png" alt="" border="0" width="30" height="30" style="display:block; border:none; outline:none; text-decoration:none;"/> 
                                                                            </a>
                                                                            <span style="cursor: pointer;font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #889098;">
                                                                                https://www.facebook.com/richplanning
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td align="left" width="20" style="font-size:18px; margin-left: 10px;">
                                                                    </td>                                                                   
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end of Social icons -->
                                                    </td>
                                                </tr>
                                                <!-- Spacing -->
                                                <tr>
                                                    <td height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                                </tr>
                                                <!-- Spacing -->
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of footer -->

    </body>
</html>';
    }

    public function getEmailContentContact($contactName, $contactSubject, $contactMessage, $contactPhone) {
        return '<!DOCTYPE html "-//w3c//dtd xhtml 1.0 transitional //en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
        <!--[if gte mso 9]><xml>
         <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
         </o:OfficeDocumentSettings>
        </xml><![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width">
                <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
                    <title>QRC Building: Contact</title>

                    </head>
                    <body style="width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF">
                        <style id="media-query">
                            /* Client-specific Styles & Reset */
                            #outlook a {
                                padding: 0;
                            }

                            /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
                            .ExternalClass {
                                width: 100%;
                            }

                            .ExternalClass,
                            .ExternalClass p,
                            .ExternalClass span,
                            .ExternalClass font,
                            .ExternalClass td,
                            .ExternalClass div {
                                line-height: 100%;
                            }

                            #backgroundTable {
                                margin: 0;
                                padding: 0;
                                width: 100% !important;
                                line-height: 100% !important;
                            }

                            /* Buttons */
                            .button a {
                                display: inline-block;
                                text-decoration: none;
                                -webkit-text-size-adjust: none;
                                text-align: center;
                            }

                            .button a div {
                                text-align: center !important;
                            }

                            /* Outlook First */
                            body.outlook p {
                                display: inline !important;
                            }

                            /*  Media Queries */
                            @media only screen and (max-width: 500px) {
                                table[class="body"] img {
                                    height: auto !important;
                                    width: 100% !important; }
                                table[class="body"] img.fullwidth {
                                    max-width: 100% !important; }
                                table[class="body"] center {
                                    min-width: 0 !important; }
                                table[class="body"] .container {
                                    width: 95% !important; }
                                table[class="body"] .row {
                                    width: 100% !important;
                                    display: block !important; }
                                table[class="body"] .wrapper {
                                    display: block !important;
                                    padding-right: 0 !important; }
                                table[class="body"] .columns, table[class="body"] .column {
                                    table-layout: fixed !important;
                                    float: none !important;
                                    width: 100% !important;
                                    padding-right: 0px !important;
                                    padding-left: 0px !important;
                                    display: block !important; }
                                table[class="body"] .wrapper.first .columns, table[class="body"] .wrapper.first .column {
                                    display: table !important; }
                                table[class="body"] table.columns td, table[class="body"] table.column td, .col {
                                    width: 100% !important; }
                                table[class="body"] table.columns td.expander {
                                    width: 1px !important; }
                                table[class="body"] .right-text-pad, table[class="body"] .text-pad-right {
                                    padding-left: 10px !important; }
                                table[class="body"] .left-text-pad, table[class="body"] .text-pad-left {
                                    padding-right: 10px !important; }
                                table[class="body"] .hide-for-small, table[class="body"] .show-for-desktop {
                                    display: none !important; }
                                table[class="body"] .show-for-small, table[class="body"] .hide-for-desktop {
                                    display: inherit !important; }
                                .mixed-two-up .col {
                                    width: 100% !important; } }
                            @media screen and (max-width: 500px) {
                                div[class="col"] {
                                    width: 100% !important;
                                }
                            }

                            @media screen and (min-width: 501px) {
                                table[class="container"] {
                                    width: 500px !important;
                                }
                            }
                        </style>
                        <table class="body" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed" cellpadding="0" cellspacing="0" width="100%" border="0">
                            <tbody><tr style="vertical-align: top">
                                    <td class="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF" align="center" valign="top">

                                        <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #61626F" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                                            <tbody><tr style="vertical-align: top">
                                                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
                                                        <!--[if gte mso 9]>
                                                        <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                                                        <![endif]-->
                                                        <!--[if (IE)]>
                                                        <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td>
                                                        <![endif]-->
                                                        <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
                                                                                                                <tbody><tr style="vertical-align: top">
                                                                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 25px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
                                                                                                                            <div style="color:#ffffff;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;">            
                                                                                                                                <div style="font-size:18px;line-height:22px;text-align:left;color:#ffffff;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: left"><span style="font-size: 24px; line-height: 28px;" mce-data-marked="1"><strong>Contact from: ' . $contactName . ' (Phone Number: ' . $contactPhone . ')</strong></span></p></div><div style="font-size:18px;line-height:22px;text-align:left;color:#ffffff;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: left"><span style="font-size: 24px; line-height: 28px;" mce-data-marked="1"><strong>Subject: ' . $contactSubject . '</strong></span></p></div>
                                                                                                                            </div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody></table>
                                                                                                            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
                                                                                                                <tbody><tr style="vertical-align: top">
                                                                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 0px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
                                                                                                                            <div style="color:#FFFFFF;line-height:150%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;">            
                                                                                                                                <div style="font-size:14px;line-height:21px;text-align:left;color:#FFFFFF;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;"><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: left"><span style="font-size: 16px; line-height: 24px; font-family: tahoma, arial, helvetica, sans-serif;">' . $contactMessage . '</span></p></div>
                                                                                                                            </div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody></table>
                                                                                                            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                                                                <tbody><tr style="vertical-align: top">
                                                                                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
                                                                                                                            <div style="height: 0px;">
                                                                                                                                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 0px solid transparent;width: 100%" align="center" border="0" cellspacing="0">
                                                                                                                                    <tbody><tr style="vertical-align: top">
                                                                                                                                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="center"></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody></table>
                                                                                                                            </div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody></table></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                                                        <!--[if mso]>
                                                        </td></tr></table>
                                                        <![endif]-->
                                                        <!--[if (IE)]>
                                                        </td></tr></table>
                                                        <![endif]-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                    </body>
                    </html>';
    }

}
