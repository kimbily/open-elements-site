<?php
	require_once "index(var).php";
	include_once "WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491161000" />
  <link id="OETemplate1" rel="stylesheet" type="text/css" href="Templates/Base.css?v=50491161000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="index.css?v=50491161000" />
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/opentip.css?v=50491161000" />
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/WEMenu-v23.css?v=50491161000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491161000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"index","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"","RenderMode":"Export","PageAssociatePath":"index","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491161000"></script>
  <script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491161000"></script>
  <script type="text/javascript" src="index(var).js?v=50491161000"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491161000"></script>
  <script type="text/javascript" src="WEFiles/Client/opentip-jquery.min.js?v=50491161000"></script>
  <script type="text/javascript" src="WEFiles/Client/WESendForm-v210.js?v=50491161000"></script>
  <script type="text/javascript" src="WEFiles/Client/WEMenu-v23.js?v=50491161000"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WE359a9dbaaf":[{"MsgError":"Please enter your error message.","Expression":".+"}],"WE84e6ff8baa":[{"MsgError":"Please enter your error message.","Expression":".+"}]}
  </script><?php
  	if (isset($oeHeaderInlineCode)) echo $oeHeaderInlineCode;
  ?>
 </head>
 <body class=""><?php
  	if (isset($oeStartBodyInlineCode)) echo $oeStartBodyInlineCode;
  ?>
  <form id="XForm" method="post" action="#"></form>
  <div id="XBody" class="BaseDiv RBoth OEPageXbody OESK_XBody_Default" style="z-index:1000">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WE3c68fb6540" class="BaseDiv RBoth OEWELinkImage OESK_WELinkImage_Default" style="z-index:1001" onclick="return OE.Navigate.open(event,'oe-users/user-login(connect)-v1.php',1)">
      <div class="OESZ OESZ_DivContent OESZG_WE3c68fb6540">
       <a href="oe-users/user-login(connect)-v1.php" data-cd="PageLink">
        <img style="width:100%;height:100%;border:none" src="WEFiles/Image/empty.png" />
       </a>
      </div>
     </div>
     <div id="WE2d5e74bc85" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
      <div class="OESZ OESZ_DivContent OESZG_WE2d5e74bc85">
       <div class="OECT OECT_Content OECTAbs OEDynTag0" style="<?php echo $oei['WE2d5e74bc85..OEDynTag0.style'];?>">
        <div id="WE3b527071d5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
         <div class="OESZ OESZ_DivContent OESZG_WE3b527071d5">
          <span class="OESZ OESZ_Text OESZG_WE3b527071d5 ContentBox OEDynTag0">User name or email</span>
         </div>
        </div>
        <div id="WE359a9dbaaf" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:1002">
         <div class="OESZ OESZ_DivContent OESZG_WE359a9dbaaf">
          <input name="oelName" type="text" class="OESZ OESZ_TextBox OESZG_WE359a9dbaaf OEDynTag0" value="<?php echo $oei['WE359a9dbaaf..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE0e054cb381" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1003">
         <div class="OESZ OESZ_DivContent OESZG_WE0e054cb381">
          <span class="OESZ OESZ_Text OESZG_WE0e054cb381 ContentBox OEDynTag0">Password</span>
         </div>
        </div>
        <div id="WE84e6ff8baa" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:1004">
         <div class="OESZ OESZ_DivContent OESZG_WE84e6ff8baa">
          <input name="oelPW" type="password" class="OESZ OESZ_TextBox OESZG_WE84e6ff8baa OEDynTag0" value="<?php echo $oei['WE84e6ff8baa..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE92454264b6" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:1005">
         <div class="OESZ OESZ_DivContent OESZG_WE92454264b6">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE92454264b6 OEDynTag0" name="oelRememberMe" value="oelRememberMe" <?php echo $oei['WE92454264b6..OEDynTag0.checked'];?>="<?php echo $oei['WE92454264b6..OEDynTag0.checked'];?>"  />
         </div>
        </div>
        <div id="WEa7150b28a0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1006">
         <div class="OESZ OESZ_DivContent OESZG_WEa7150b28a0">
          <span class="OESZ OESZ_Text OESZG_WEa7150b28a0 ContentBox OEDynTag0">Remember me on this computer</span>
         </div>
        </div>
        <div id="WE87762e1e4c" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:1007">
         <div class="OESZ OESZ_DivContent OESZG_WE87762e1e4c">
          <a class="OESZ OESZ_Link OESZG_WE87762e1e4c ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE87762e1e4c..OEDynTag0.href'];?>">I don't have an account yet</a>
         </div>
        </div>
        <div id="WEd30140a71c" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:1008">
         <div class="OESZ OESZ_DivContent OESZG_WEd30140a71c">
          <a class="OESZ OESZ_Link OESZG_WEd30140a71c ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEd30140a71c..OEDynTag0.href'];?>">I forgot my password</a>
         </div>
        </div>
        <div id="WE8128f4efb0" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:1009">
         <div class="OESZ OESZ_DivContent OESZG_WE8128f4efb0">
          <button class="OESZ OESZ_Button OESZG_WE8128f4efb0 OEDynTag0" type="button" name="WE8128f4efb0" data-oe-target-url="<?php echo $oei['WE8128f4efb0..OEDynTag0.data-oe-target-url'];?>">Login</button>
         </div>
        </div>
        <div id="WE133bfb8116" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1010">
         <div class="OESZ OESZ_DivContent OESZG_WE133bfb8116">
          <span class="ContentBox">This container is <b>invisible if a user is logged in,</b> unless you desactivate the corresponding parameter.<br />Delete or hide unnecessary elements.<br />Existence of Login Page (contains Pack 20) is obligatory.<br />(Delete this notice after reading)</span>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs"></div>
    <div id="WE72e42fd974" class="BaseDiv RBoth OEWEMenu OESK_WEMenu_Default" style="z-index:1003">
     <div class="OESZ OESZ_DivContent OESZG_WE72e42fd974">
      <div class="OESZ OESZ_WEMenuGroup OESZG_WE72e42fd974" style="display:none" id="WEMenuad1fe0">
       <div class="OESZ OESZ_WEMenuTop OESZG_WE72e42fd974"></div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WE72e42fd974" id="WEMenuaf1484">
        <table style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WE72e42fd974">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WE72e42fd974">
           <a href="">Link 1 of menu</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WE72e42fd974" id="WEMenue105ea">
        <table style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WE72e42fd974">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WE72e42fd974">
           <a href="">Link 2 of menu</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WE72e42fd974" id="WEMenuf60988">
        <table style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WE72e42fd974">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WE72e42fd974">
           <a href="">Link 3 of menu</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuBottom OESZG_WE72e42fd974"></div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>