<?php
	require_once "user-profile-edit-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491161000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-profile-edit-v1.css?v=50491161000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=50491161000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/WEAccordion-v21.css?v=50491161000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491161000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"oe-users/user-profile-edit-v1","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"../","RenderMode":"Export","PageAssociatePath":"oe-users/user-profile-edit-v1","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491161000"></script>
  <script type="text/javascript" src="user-profile-edit-v1(var).js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.core.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.effects.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.accordion-v21.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/WEAccordion-v21.js?v=50491161000"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WE651df699d4":[{"MsgError":"Please enter your error message.","Expression":"(^$)|(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])"}],"WE578e63722d":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}]}
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
     <div id="WEf9b0c7a9c0" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEf9b0c7a9c0">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEf094f4573e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEf094f4573e">
          <span class="OESZ OESZ_Text OESZG_WEf094f4573e ContentBox OEDynTag0"><?php echo $oei['WEf094f4573e..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE136f66bfbe" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE136f66bfbe">
          <span class="OESZ OESZ_Text OESZG_WE136f66bfbe ContentBox OEDynTag0"><?php echo $oei['WE136f66bfbe..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEdf8e2705a4" class="BaseDiv RBoth OEWEAccordion OESK_WEAccordion_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEdf8e2705a4">
          <div id="9b5a6a3e" class="OESZ OESZ_WEAccordionHeader OESZG_WEdf8e2705a4">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WEdf8e2705a4"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WEdf8e2705a4">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WEdf8e2705a4">Modify password and/or email</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WEdf8e2705a4">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WEdf8e2705a4"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WEdf8e2705a4">
           <div class="OECT OECT_9b5a6a3e OECTAbs">
            <div id="WEc7ff79c299" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEc7ff79c299">
              <span class="OESZ OESZ_Text OESZG_WEc7ff79c299 ContentBox OEDynTag0"><?php echo $oei['WEc7ff79c299..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WE902610b6e1" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:13">
             <div class="OESZ OESZ_DivContent OESZG_WE902610b6e1">
              <script>
              // Animate color transition for report
              
              //
              
              $(function(){
                
                var $reportTag = $('#WEc7ff79c299');
                $reportTag.fadeTo('slow', 0.25).fadeTo('slow', 1.0);
                
              });
              
              
              </script>
             </div>
            </div>
            <div id="WE38f8c00907" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE38f8c00907">
              <span class="OESZ OESZ_Text OESZG_WE38f8c00907 ContentBox OEDynTag0">New password:</span>
             </div>
            </div>
            <div id="WE28ec33a618" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
             <div class="OESZ OESZ_DivContent OESZG_WE28ec33a618">
              <input name="oepNewPW" type="password" class="OESZ OESZ_TextBox OESZG_WE28ec33a618 OEDynTag0" value="<?php echo $oei['WE28ec33a618..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE6d18504a0e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE6d18504a0e">
              <span class="OESZ OESZ_Text OESZG_WE6d18504a0e ContentBox OEDynTag0" style="<?php echo $oei['WE6d18504a0e..OEDynTag0.style'];?>">Confirm new password:</span>
             </div>
            </div>
            <div id="WEbb947697cd" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WEbb947697cd">
              <input name="oepNewPW2" type="password" class="OESZ OESZ_TextBox OESZG_WEbb947697cd OEDynTag0" value="<?php echo $oei['WEbb947697cd..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE30856bed4a" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:10">
             <div class="OESZ OESZ_DivContent OESZG_WE30856bed4a">
              <div class="OESZ OESZ_Deco1 OESZG_WE30856bed4a" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco2 OESZG_WE30856bed4a" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco3 OESZG_WE30856bed4a" style="position:absolute"></div>
             </div>
            </div>
            <div id="WE9d16026f34" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE9d16026f34">
              <span class="OESZ OESZ_Text OESZG_WE9d16026f34 ContentBox">Modify email:</span>
             </div>
            </div>
            <div id="WE651df699d4" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE651df699d4">
              <input name="oepEmail" type="text" class="OESZ OESZ_TextBox OESZG_WE651df699d4 OEDynTag0" value="<?php echo $oei['WE651df699d4..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEf3ce92cc1c" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:11">
             <div class="OESZ OESZ_DivContent OESZG_WEf3ce92cc1c">
              <div class="OESZ OESZ_Deco1 OESZG_WEf3ce92cc1c" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco2 OESZG_WEf3ce92cc1c" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco3 OESZG_WEf3ce92cc1c" style="position:absolute"></div>
             </div>
            </div>
            <div id="WE2f3747d7cd" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WE2f3747d7cd">
              <span class="OESZ OESZ_Text OESZG_WE2f3747d7cd ContentBox OEDynTag0">For security reasons, enter the current password (obligatory):</span>
             </div>
            </div>
            <div id="WE578e63722d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
             <div class="OESZ OESZ_DivContent OESZG_WE578e63722d">
              <input name="oepPW" type="password" class="OESZ OESZ_TextBox OESZG_WE578e63722d OEDynTag0" />
             </div>
            </div>
            <div id="WEba2dbc56c3" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default OECenterAH" style="z-index:9">
             <div class="OESZ OESZ_DivContent OESZG_WEba2dbc56c3">
              <button class="OESZ OESZ_Button OESZG_WEba2dbc56c3 OEDynTag0" type="button" name="WEba2dbc56c3">Update password and/or email</button>
             </div>
            </div>
           </div>
          </div>
          <div id="49619388" class="OESZ OESZ_WEAccordionHeader OESZG_WEdf8e2705a4">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WEdf8e2705a4"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WEdf8e2705a4">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WEdf8e2705a4">Modify other information (click to open)</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WEdf8e2705a4">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WEdf8e2705a4"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WEdf8e2705a4">
           <div class="OECT OECT_49619388 OECTAbs">
            <div id="WEbd9bdd9faa" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WEbd9bdd9faa">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEbd9bdd9faa OEDynTag0" name="oepDetailsSaved" value="oepDetailsSaved" checked="checked"  />
             </div>
            </div>
            <div id="WE0b3d0c3df3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE0b3d0c3df3">
              <span class="OESZ OESZ_Text OESZG_WE0b3d0c3df3 ContentBox OEDynTag0">(keep this checkbox!)</span>
             </div>
            </div>
            <div id="WEdaf72d79f4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEdaf72d79f4">
              <span class="OESZ OESZ_Text OESZG_WEdaf72d79f4 ContentBox OEDynTag0">Real name</span>
             </div>
            </div>
            <div id="WE0d1880938c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE0d1880938c">
              <input name="oepRealName" type="text" class="OESZ OESZ_TextBox OESZG_WE0d1880938c OEDynTag0" value="<?php echo $oei['WE0d1880938c..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE6b416bb1f0" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:25">
             <div class="OESZ OESZ_DivContent OESZG_WE6b416bb1f0">
              <script> // Control the chosen date, ex. to avoid 31 April or 29 February 2001
              $(function(){
                
                var $inputDay = $('#WE00afbec433 select');
                var $inputMonth = $('#WEaf2757331f select');
                var $inputYear = $('#WE528569cea7 select');
                if ($inputYear.length < 1 || $inputMonth.length < 1 || $inputDay.length < 1) return;
                
                $inputMonth.change(function(){ // to fix 31s for months where last date is 30, and February
                  
                  //alert([$inputDay.val(), $inputMonth.val(), $inputYear.val()]);
                  
                  var valYear = parseInt($inputYear.val());
                  if (!valYear) valYear = 2000; // if not yet specified
                  var valMonth = parseInt($inputMonth.val());
                  if (!valMonth) return; // month not yet specified
                  var valDay = parseInt($inputDay.val());
                  if (!valDay) return; // day not yet specified
                  
                  var testDate = new Date(valYear, valMonth-1, valDay);
              
                  //alert([testDate.getDate(), valDay, valMonth, valYear]);
                  
                  if (testDate.getDate() !== valDay) { // date does not exist
                    // reset Day value
                    $inputDay.val('');
                  }
                });
                
                $inputDay.change(function(){ $inputMonth.change(); });
                $inputYear.change(function(){ $inputMonth.change(); }); // to fix 29 February
              });
              </script>
             </div>
            </div>
            <div id="WEeaadc1e1af" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:22">
             <div class="OESZ OESZ_DivContent OESZG_WEeaadc1e1af">
              <span class="OESZ OESZ_Text OESZG_WEeaadc1e1af ContentBox OEDynTag0">Gender</span>
             </div>
            </div>
            <div id="WE44787cd948" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:24">
             <div class="OESZ OESZ_DivContent OESZG_WE44787cd948">
              <span class="OESZ OESZ_Text OESZG_WE44787cd948 ContentBox OEDynTag0">Date of birth</span>
             </div>
            </div>
            <div id="WE65ef0e28e6" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:23">
             <div class="OESZ OESZ_DivContent OESZG_WE65ef0e28e6">
              <select name="oerGender" class="OESZ OESZ_ListBox OESZG_WE65ef0e28e6 OEDynTag0"><?php echo $oeIter['WE65ef0e28e6.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE00afbec433" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:26">
             <div class="OESZ OESZ_DivContent OESZG_WE00afbec433">
              <select name="oerDay" class="OESZ OESZ_ListBox OESZG_WE00afbec433 OEDynTag0"><?php echo $oeIter['WE00afbec433.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WEaf2757331f" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:27">
             <div class="OESZ OESZ_DivContent OESZG_WEaf2757331f">
              <select name="oerMonth" class="OESZ OESZ_ListBox OESZG_WEaf2757331f OEDynTag0"><?php echo $oeIter['WEaf2757331f.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE528569cea7" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:28">
             <div class="OESZ OESZ_DivContent OESZG_WE528569cea7">
              <select name="oerYear" class="OESZ OESZ_ListBox OESZG_WE528569cea7 OEDynTag0"><?php echo $oeIter['WE528569cea7.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE8789609814" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE8789609814">
              <span class="OESZ OESZ_Text OESZG_WE8789609814 ContentBox OEDynTag0">Mailing Address</span>
             </div>
            </div>
            <div id="WE0e84751b7f" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE0e84751b7f">
              <input name="oepAddr1" type="text" class="OESZ OESZ_TextBox OESZG_WE0e84751b7f OEDynTag0" value="<?php echo $oei['WE0e84751b7f..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE87a75a82a0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WE87a75a82a0">
              <span class="OESZ OESZ_Text OESZG_WE87a75a82a0 ContentBox OEDynTag0">Mailing Address - Line 2</span>
             </div>
            </div>
            <div id="WE570bc0a918" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
             <div class="OESZ OESZ_DivContent OESZG_WE570bc0a918">
              <input name="oepAddr2" type="text" class="OESZ OESZ_TextBox OESZG_WE570bc0a918 OEDynTag0" value="<?php echo $oei['WE570bc0a918..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE034bac679c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
             <div class="OESZ OESZ_DivContent OESZG_WE034bac679c">
              <span class="OESZ OESZ_Text OESZG_WE034bac679c ContentBox OEDynTag0">Town/City</span>
             </div>
            </div>
            <div id="WE403bc4cb3c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
             <div class="OESZ OESZ_DivContent OESZG_WE403bc4cb3c">
              <span class="OESZ OESZ_Text OESZG_WE403bc4cb3c ContentBox OEDynTag0">Country</span>
             </div>
            </div>
            <div id="WE61473476fa" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:11">
             <div class="OESZ OESZ_DivContent OESZG_WE61473476fa">
              <input name="oepCity" type="text" class="OESZ OESZ_TextBox OESZG_WE61473476fa OEDynTag0" value="<?php echo $oei['WE61473476fa..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE250bfd2572" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
             <div class="OESZ OESZ_DivContent OESZG_WE250bfd2572">
              <input name="oepCountry" type="text" class="OESZ OESZ_TextBox OESZG_WE250bfd2572 OEDynTag0" value="<?php echo $oei['WE250bfd2572..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE83c138c673" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:13">
             <div class="OESZ OESZ_DivContent OESZG_WE83c138c673">
              <span class="OESZ OESZ_Text OESZG_WE83c138c673 ContentBox OEDynTag0">Postal Code</span>
             </div>
            </div>
            <div id="WEbd85ae67c8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
             <div class="OESZ OESZ_DivContent OESZG_WEbd85ae67c8">
              <span class="OESZ OESZ_Text OESZG_WEbd85ae67c8 ContentBox OEDynTag0">Phone</span>
             </div>
            </div>
            <div id="WE7fd2eb83fd" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:15">
             <div class="OESZ OESZ_DivContent OESZG_WE7fd2eb83fd">
              <input name="oepZIP" type="text" class="OESZ OESZ_TextBox OESZG_WE7fd2eb83fd OEDynTag0" value="<?php echo $oei['WE7fd2eb83fd..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEbca84fa8c4" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:16">
             <div class="OESZ OESZ_DivContent OESZG_WEbca84fa8c4">
              <input name="oepPhone" type="text" class="OESZ OESZ_TextBox OESZG_WEbca84fa8c4 OEDynTag0" value="<?php echo $oei['WEbca84fa8c4..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE402f43f9ce" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:17">
             <div class="OESZ OESZ_DivContent OESZG_WE402f43f9ce">
              <span class="OESZ OESZ_Text OESZG_WE402f43f9ce ContentBox OEDynTag0">(Note: modify or delete this text according to website needs)</span>
             </div>
            </div>
            <div id="WEc53e1a9965" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:18">
             <div class="OESZ OESZ_DivContent OESZG_WEc53e1a9965">
              <textarea class="OESZ OESZ_TextArea OESZG_WEc53e1a9965 OEDynTag0" name="oepInfo" rows="3" cols="50"><?php echo $oei['WEc53e1a9965..OEDynTag0.html1'];?></textarea>
             </div>
            </div>
            <div id="WE447a200b25" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:21">
             <div class="OESZ OESZ_DivContent OESZG_WE447a200b25">
              <button class="OESZ OESZ_Button OESZG_WE447a200b25 OEDynTag0" type="button" name="WE447a200b25">Update additional information</button>
             </div>
            </div>
            <div id="WEc3913dcae6" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:19">
             <div class="OESZ OESZ_DivContent OESZG_WEc3913dcae6">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEc3913dcae6 OEDynTag0" name="oepSubscribe" value="oepSubscribe" <?php echo $oei['WEc3913dcae6..OEDynTag0.checked'];?>="<?php echo $oei['WEc3913dcae6..OEDynTag0.checked'];?>"  />
             </div>
            </div>
            <div id="WE83d878fdbf" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:20">
             <div class="OESZ OESZ_DivContent OESZG_WE83d878fdbf">
              <span class="OESZ OESZ_Text OESZG_WE83d878fdbf ContentBox OEDynTag0">Subscribe to Newsletter</span>
             </div>
            </div>
           </div>
          </div>
          <div id="c0906493" class="OESZ OESZ_WEAccordionHeader OESZG_WEdf8e2705a4">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WEdf8e2705a4"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WEdf8e2705a4">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WEdf8e2705a4">Account operations</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WEdf8e2705a4">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WEdf8e2705a4"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WEdf8e2705a4">
           <div class="OECT OECT_c0906493 OECTAbs">
            <div id="WE59c652aad9" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE59c652aad9">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE59c652aad9 OEDynTag0" name="WE59c652aad9" value="Valeur du champ" />
             </div>
            </div>
            <div id="WEfaee2fd50f" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WEfaee2fd50f">
              <script>
              $(function() {
                // On cicking Delete link, ask for confirmation; stop link processing if user cancels
                var $linkDel = $('#WEbeddd77f35 :button'); if (!$linkDel) return;
                var $msg = $('#oeDelAccountMsg');
                if (!$msg) return;
                $msg = $msg.html();
                
                $linkDel.click(function(){
                  return confirm($msg);
                });
                
                
                // Hide accordeon container section if no properties visible
                var $anyVisible =
                    ($('#WEbeddd77f35 button').css('display') !== 'none') ||
                    ($('#WE489c999ade a').css('display') !== 'none') ||
                    ($('#WE5a3e62f6e3 span').css('display') !== 'none') ||
                    ($('#WE041b57b3a5 span').css('display') !== 'none');
                  
                if (!$anyVisible) { //alert('Hide');
                  var $container = $('#WEdf8e2705a4');
                  var $sections = $('#WEdf8e2705a4 .OESZ_WEAccordionHeader');
                  if ($sections.length >= 3) {
                    var $sectionOperations = $($sections[2]);
                    var ht = $sectionOperations.height(); // section height
              
                    var $section1Content = $($('#WEdf8e2705a4 .OESZ_WEAccordionContent')[0]);
                    
                    var htS1C = $section1Content.css('height'); // css height of the accordeon container
                    if (ht && htS1C && htS1C.indexOf('px') > 0) { // height is in pixels
                      // increase height of first section to reduce the gap
                      htS1C = (parseInt(htS1C) + ht) + 'px';
                      $section1Content.css('height', htS1C);
                    }      
              
                    $sectionOperations.remove();
                  }
                }
                
              });
              </script>
             </div>
            </div>
            <div id="WEa055b39d79" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEa055b39d79">
              <span class="OESZ OESZ_Text OESZG_WEa055b39d79 ContentBox OEDynTag0"><?php echo $oei['WEa055b39d79..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WEbeddd77f35" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEbeddd77f35">
              <button class="OESZ OESZ_Button OESZG_WEbeddd77f35 OEDynTag0" type="button" name="WEbeddd77f35" style="<?php echo $oei['WEbeddd77f35..OEDynTag0.style'];?>" data-oe-target-url="<?php echo $oei['WEbeddd77f35..OEDynTag0.data-oe-target-url'];?>">Delete account (!)</button>
             </div>
            </div>
            <div id="WE489c999ade" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE489c999ade">
              <a class="OESZ OESZ_Link OESZG_WE489c999ade ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE489c999ade..OEDynTag0.href'];?>" style="<?php echo $oei['WE489c999ade..OEDynTag0.style'];?>">Confirm (validate) account and send notification to user</a>
             </div>
            </div>
            <div id="WE5a3e62f6e3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE5a3e62f6e3">
              <span class="OESZ OESZ_Text OESZG_WE5a3e62f6e3 ContentBox OEDynTag0" style="<?php echo $oei['WE5a3e62f6e3..OEDynTag0.style'];?>"><?php echo $oei['WE5a3e62f6e3..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WE041b57b3a5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WE041b57b3a5">
              <span class="OESZ OESZ_Text OESZG_WE041b57b3a5 ContentBox OEDynTag0" style="<?php echo $oei['WE041b57b3a5..OEDynTag0.style'];?>"><?php echo $oei['WE041b57b3a5..OEDynTag0.html1'];?></span>
             </div>
            </div>
           </div>
          </div>
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