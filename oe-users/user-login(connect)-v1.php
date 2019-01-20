<?php
	require_once "user-login(connect)-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491161000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-login(connect)-v1.css?v=50491161000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=50491161000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491161000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"oe-users/user-login(connect)-v1","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"../","RenderMode":"Export","PageAssociatePath":"oe-users/user-login(connect)-v1","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491161000"></script>
  <script type="text/javascript" src="user-login(connect)-v1(var).js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=50491161000"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WE8aca81e178":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}]}
  </script><?php
  	if (isset($oeHeaderInlineCode)) echo $oeHeaderInlineCode;
  ?>
 </head>
 <body class=""><?php
  	if (isset($oeStartBodyInlineCode)) echo $oeStartBodyInlineCode;
  ?>
  <form id="XForm" method="post" action="#"></form>
  <div id="XBody" class="BaseDiv RWidth OEPageXbody OESK_XBody_Default" style="z-index:0">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WE39e46f4309" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE39e46f4309">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE8611f488a5" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE8611f488a5">
          <span class="OESZ OESZ_Text OESZG_WE8611f488a5 ContentBox OEDynTag0"><?php echo $oei['WE8611f488a5..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEfbf2dbe2aa" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WEfbf2dbe2aa">
          <span class="OESZ OESZ_Text OESZG_WEfbf2dbe2aa ContentBox"><b>NOTE TO WEBMASTER</b> (delete after reading): this pack is not to be placed onto the Home Page (index.htm/php). If the homepage (or any other page) needs user to be logged in, place the pack "<span style="font-style:italic;">50 - Protect Page"</span>&nbsp;on it.&nbsp;</span>
         </div>
        </div>
        <div id="WE1426610570" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE1426610570">
          <span class="OESZ OESZ_Text OESZG_WE1426610570 ContentBox OEDynTag0"><?php echo $oei['WE1426610570..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE8119714d4e" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE8119714d4e">
          <script>
          
            // this script sets tab order: 
            // name input -> PW input -> button -> link Create account -> link Forgot password
            
            // also, this script imitates button click on pressing Enter
          
          $(function(){
            
            
            $('#WE8aca81e178 :input').attr('tabindex', '1');
            $('#WE038465ba2d :input').attr('tabindex', '2');
            $('#WE4d19493d1a :button').attr('tabindex', '3');
            $('#WE7013e77b57 a').attr('tabindex', '4');
            $('#WE5449889663 a').attr('tabindex', '5');
            
            // Enter on inputs submits form
            $(':input').keypress(function(e) {
                  if(e.which == 13) {
                    $(this).blur();
                    $('#WE4d19493d1a :button').focus().click();
                  }
              });
          });
          </script>
         </div>
        </div>
        <div id="WE76fb018b0c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE76fb018b0c">
          <span class="OESZ OESZ_Text OESZG_WE76fb018b0c ContentBox OEDynTag0"><?php echo $oei['WE76fb018b0c..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE8aca81e178" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE8aca81e178">
          <input name="oelName" type="text" class="OESZ OESZ_TextBox OESZG_WE8aca81e178 OEDynTag0" value="<?php echo $oei['WE8aca81e178..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE7013e77b57" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE7013e77b57">
          <a class="OESZ OESZ_Link OESZG_WE7013e77b57 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE7013e77b57..OEDynTag0.href'];?>">I don't have an account yet</a>
         </div>
        </div>
        <div id="WEc8d12acbe7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WEc8d12acbe7">
          <span class="OESZ OESZ_Text OESZG_WEc8d12acbe7 ContentBox OEDynTag0"><?php echo $oei['WEc8d12acbe7..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE038465ba2d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE038465ba2d">
          <input name="oelPW" type="password" class="OESZ OESZ_TextBox OESZG_WE038465ba2d OEDynTag0" value="<?php echo $oei['WE038465ba2d..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE5449889663" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE5449889663">
          <a class="OESZ OESZ_Link OESZG_WE5449889663 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE5449889663..OEDynTag0.href'];?>" style="<?php echo $oei['WE5449889663..OEDynTag0.style'];?>"><?php echo $oei['WE5449889663..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WE4d19493d1a" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE4d19493d1a">
          <button class="OESZ OESZ_Button OESZG_WE4d19493d1a OEDynTag0" type="button" name="WE4d19493d1a"><?php echo $oei['WE4d19493d1a..OEDynTag0.html1'];?></button>
         </div>
        </div>
        <div id="WEc16df5818f" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WEc16df5818f">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEc16df5818f OEDynTag0" style="<?php echo $oei['WEc16df5818f..OEDynTag0.style'];?>" name="oelRememberMe" value="oelRememberMe" />
         </div>
        </div>
        <div id="WE68b5c204c5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE68b5c204c5">
          <span class="OESZ OESZ_Text OESZG_WE68b5c204c5 ContentBox OEDynTag0" style="<?php echo $oei['WE68b5c204c5..OEDynTag0.style'];?>">Remember me on this computer</span>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs"></div>
   </div>
  </div>
 </body>
</html>