<?php
	require_once "user-new-account-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491161000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-new-account-v1.css?v=50491161000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=50491161000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491161000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"oe-users/user-new-account-v1","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"../","RenderMode":"Export","PageAssociatePath":"oe-users/user-new-account-v1","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491161000"></script>
  <script type="text/javascript" src="user-new-account-v1(var).js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/WECaptcha-v210.js?v=50491161000"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WEce0eceef6e":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":"(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])"}],"WE45e224a46a":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}],"WE986f73b08b":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}],"WE953099acb5":[{"MsgError":"Please configure your error message.","Expression":".+"}]}
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
     <div id="WE9a350d804c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE9a350d804c">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE4120958d04" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE4120958d04">
          <span class="OESZ OESZ_Text OESZG_WE4120958d04 ContentBox OEDynTag0"><?php echo $oei['WE4120958d04..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE1376fd103a" class="BaseDiv RBoth OEWEText OESK_WEText_Default" style="z-index:51">
         <div class="OESZ OESZ_DivContent OESZG_WE1376fd103a">
          <span class="ContentBox"><b> NOTE TO WEBMASTER</b>&nbsp;(delete this element after reading):<br /><br />&nbsp;- Many fields below are optional, except those marked *; you can delete&nbsp;<b>any unnecessary optional field&nbsp;</b>(or, to keep it for future use,&nbsp;<b>make </b> <b>invisible</b> using Visible property). <br />&nbsp;- Email and both passwords are required<br />&nbsp;-&nbsp; Checkbox "Terms of use" is required; if you don't want users to check it, &nbsp;make it checked by default then hide it. <br />&nbsp;- CAPTCHA (along with its "(!)") can be deleted so that users don't need to type it, but it is not recommended for security reasons. <br />&nbsp;- To make a field (e.g. User Name or Gender) required, add a Validator to it (small button under an element when it is selected). <br />&nbsp;- "(!)" are error markers, visible when obligatory field value is invalid.</span>
         </div>
        </div>
        <div id="WEa0ef84f1c1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEa0ef84f1c1">
          <span class="OESZ OESZ_Text OESZG_WEa0ef84f1c1 ContentBox OEDynTag0">Email address*</span>
         </div>
        </div>
        <div id="WEce0eceef6e" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEce0eceef6e">
          <input name="oerEmail" type="text" class="OESZ OESZ_TextBox OESZG_WEce0eceef6e OEDynTag0" style="<?php echo $oei['WEce0eceef6e..OEDynTag0.style'];?>" value="<?php echo $oei['WEce0eceef6e..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE1b583678d6" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE1b583678d6">
          <span class="OESZ OESZ_Text OESZG_WE1b583678d6 ContentBox OEDynTag0" style="<?php echo $oei['WE1b583678d6..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WE26b4024e76" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE26b4024e76">
          <span class="OESZ OESZ_Text OESZG_WE26b4024e76 ContentBox OEDynTag0">User name - leave blank to use email address only</span>
         </div>
        </div>
        <div id="WEda96d276f9" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WEda96d276f9">
          <input name="oerName" type="text" class="OESZ OESZ_TextBox OESZG_WEda96d276f9 OEDynTag0" style="<?php echo $oei['WEda96d276f9..OEDynTag0.style'];?>" value="<?php echo $oei['WEda96d276f9..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE03f38232fd" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE03f38232fd">
          <span class="OESZ OESZ_Text OESZG_WE03f38232fd ContentBox OEDynTag0" style="<?php echo $oei['WE03f38232fd..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WE81b8e3fa15" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE81b8e3fa15">
          <span class="OESZ OESZ_Text OESZG_WE81b8e3fa15 ContentBox OEDynTag0">Password*</span>
         </div>
        </div>
        <div id="WE64076cc074" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE64076cc074">
          <span class="OESZ OESZ_Text OESZG_WE64076cc074 ContentBox OEDynTag0">Confirm your password*</span>
         </div>
        </div>
        <div id="WE45e224a46a" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE45e224a46a">
          <input name="oerPW" type="password" class="OESZ OESZ_TextBox OESZG_WE45e224a46a OEDynTag0" style="<?php echo $oei['WE45e224a46a..OEDynTag0.style'];?>" value="<?php echo $oei['WE45e224a46a..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE986f73b08b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE986f73b08b">
          <input name="oerPW2" type="password" class="OESZ OESZ_TextBox OESZG_WE986f73b08b OEDynTag0" style="<?php echo $oei['WE986f73b08b..OEDynTag0.style'];?>" value="<?php echo $oei['WE986f73b08b..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE274b339455" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE274b339455">
          <span class="OESZ OESZ_Text OESZG_WE274b339455 ContentBox OEDynTag0" style="<?php echo $oei['WE274b339455..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WEe70888ad87" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WEe70888ad87">
          <div class="OESZ OESZ_Deco1 OESZG_WEe70888ad87" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WEe70888ad87" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WEe70888ad87" style="position:absolute"></div>
         </div>
        </div>
        <div id="WEc7d86eaf6c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WEc7d86eaf6c">
          <span class="OESZ OESZ_Text OESZG_WEc7d86eaf6c ContentBox OEDynTag0">Real Name</span>
         </div>
        </div>
        <div id="WE9cdbac1f50" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WE9cdbac1f50">
          <input name="oerRealName" type="text" class="OESZ OESZ_TextBox OESZG_WE9cdbac1f50 OEDynTag0" value="<?php echo $oei['WE9cdbac1f50..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEd24cbfbc14" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:42">
         <div class="OESZ OESZ_DivContent OESZG_WEd24cbfbc14">
          <select name="oerGender" class="OESZ OESZ_ListBox OESZG_WEd24cbfbc14 OEDynTag0"><?php echo $oeIter['WEd24cbfbc14.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WE29a9ebcdde" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:41">
         <div class="OESZ OESZ_DivContent OESZG_WE29a9ebcdde">
          <span class="OESZ OESZ_Text OESZG_WE29a9ebcdde ContentBox OEDynTag0">Gender</span>
         </div>
        </div>
        <div id="WE46205117ec" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:43">
         <div class="OESZ OESZ_DivContent OESZG_WE46205117ec">
          <span class="OESZ OESZ_Text OESZG_WE46205117ec ContentBox OEDynTag0">Date of birth:</span>
         </div>
        </div>
        <div id="WE541c2c985a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:46">
         <div class="OESZ OESZ_DivContent OESZG_WE541c2c985a">
          <span class="OESZ OESZ_Text OESZG_WE541c2c985a ContentBox OEDynTag0">Day</span>
         </div>
        </div>
        <div id="WE95bae84b4a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:47">
         <div class="OESZ OESZ_DivContent OESZG_WE95bae84b4a">
          <span class="OESZ OESZ_Text OESZG_WE95bae84b4a ContentBox OEDynTag0">Month</span>
         </div>
        </div>
        <div id="WEa9521a9259" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:48">
         <div class="OESZ OESZ_DivContent OESZG_WEa9521a9259">
          <span class="OESZ OESZ_Text OESZG_WEa9521a9259 ContentBox OEDynTag0">Year</span>
         </div>
        </div>
        <div id="WE0b454dc291" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:50">
         <div class="OESZ OESZ_DivContent OESZG_WE0b454dc291">
          <script> // Control the chosen date, ex. to avoid 31 April or 29 February 2001
          $(function(){
            
            var $inputDay = $('#WE0ffc689ef6 select');
            var $inputMonth = $('#WE79b473f4bf select');
            var $inputYear = $('#WEfd670cedf5 select');
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
        <div id="WE0ffc689ef6" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:44">
         <div class="OESZ OESZ_DivContent OESZG_WE0ffc689ef6">
          <select name="oerDay" class="OESZ OESZ_ListBox OESZG_WE0ffc689ef6 OEDynTag0"><?php echo $oeIter['WE0ffc689ef6.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WE79b473f4bf" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:45">
         <div class="OESZ OESZ_DivContent OESZG_WE79b473f4bf">
          <select name="oerMonth" class="OESZ OESZ_ListBox OESZG_WE79b473f4bf OEDynTag0"><?php echo $oeIter['WE79b473f4bf.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WEfd670cedf5" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:49">
         <div class="OESZ OESZ_DivContent OESZG_WEfd670cedf5">
          <select name="oerYear" class="OESZ OESZ_ListBox OESZG_WEfd670cedf5 OEDynTag0"><?php echo $oeIter['WEfd670cedf5.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WE8f39ca1f9e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WE8f39ca1f9e">
          <span class="OESZ OESZ_Text OESZG_WE8f39ca1f9e ContentBox OEDynTag0">Street address</span>
         </div>
        </div>
        <div id="WE60b11b8cd5" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:17">
         <div class="OESZ OESZ_DivContent OESZG_WE60b11b8cd5">
          <input name="oerAddr1" type="text" class="OESZ OESZ_TextBox OESZG_WE60b11b8cd5 OEDynTag0" value="<?php echo $oei['WE60b11b8cd5..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE38984f5abd" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:18">
         <div class="OESZ OESZ_DivContent OESZG_WE38984f5abd">
          <span class="OESZ OESZ_Text OESZG_WE38984f5abd ContentBox OEDynTag0">Street address - line 2</span>
         </div>
        </div>
        <div id="WE40de857210" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:19">
         <div class="OESZ OESZ_DivContent OESZG_WE40de857210">
          <input name="oerAddr2" type="text" class="OESZ OESZ_TextBox OESZG_WE40de857210 OEDynTag0" value="<?php echo $oei['WE40de857210..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE94e4fa74e6" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:20">
         <div class="OESZ OESZ_DivContent OESZG_WE94e4fa74e6">
          <span class="OESZ OESZ_Text OESZG_WE94e4fa74e6 ContentBox OEDynTag0">Town/City</span>
         </div>
        </div>
        <div id="WE62482b4a79" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:21">
         <div class="OESZ OESZ_DivContent OESZG_WE62482b4a79">
          <input name="oerCity" type="text" class="OESZ OESZ_TextBox OESZG_WE62482b4a79 OEDynTag0" value="<?php echo $oei['WE62482b4a79..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEd94928fb95" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:22">
         <div class="OESZ OESZ_DivContent OESZG_WEd94928fb95">
          <span class="OESZ OESZ_Text OESZG_WEd94928fb95 ContentBox OEDynTag0">Postal code (ZIP)</span>
         </div>
        </div>
        <div id="WEbb13aef741" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:23">
         <div class="OESZ OESZ_DivContent OESZG_WEbb13aef741">
          <span class="OESZ OESZ_Text OESZG_WEbb13aef741 ContentBox OEDynTag0">Country</span>
         </div>
        </div>
        <div id="WE864686b21a" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:24">
         <div class="OESZ OESZ_DivContent OESZG_WE864686b21a">
          <input name="oerZIP" type="text" class="OESZ OESZ_TextBox OESZG_WE864686b21a OEDynTag0" value="<?php echo $oei['WE864686b21a..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE17c72977ad" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:25">
         <div class="OESZ OESZ_DivContent OESZG_WE17c72977ad">
          <input name="oerCountry" type="text" class="OESZ OESZ_TextBox OESZG_WE17c72977ad OEDynTag0" value="<?php echo $oei['WE17c72977ad..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE752a6fbb3f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:26">
         <div class="OESZ OESZ_DivContent OESZG_WE752a6fbb3f">
          <span class="OESZ OESZ_Text OESZG_WE752a6fbb3f ContentBox OEDynTag0">Phone</span>
         </div>
        </div>
        <div id="WEe88e32805d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:27">
         <div class="OESZ OESZ_DivContent OESZG_WEe88e32805d">
          <input name="oerPhone" type="text" class="OESZ OESZ_TextBox OESZG_WEe88e32805d OEDynTag0" value="<?php echo $oei['WEe88e32805d..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE639a4580e3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:28">
         <div class="OESZ OESZ_DivContent OESZG_WE639a4580e3">
          <span class="OESZ OESZ_Text OESZG_WE639a4580e3 ContentBox OEDynTag0">(Note: Modify or remove this text according to website needs)</span>
         </div>
        </div>
        <div id="WE7b204305c1" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:29">
         <div class="OESZ OESZ_DivContent OESZG_WE7b204305c1">
          <textarea class="OESZ OESZ_TextArea OESZG_WE7b204305c1 OEDynTag0" name="oerInfo" rows="3" cols="50"><?php echo $oei['WE7b204305c1..OEDynTag0.html1'];?></textarea>
         </div>
        </div>
        <div id="WE277b3ce3c5" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:30">
         <div class="OESZ OESZ_DivContent OESZG_WE277b3ce3c5">
          <div class="OESZ OESZ_Deco1 OESZG_WE277b3ce3c5" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE277b3ce3c5" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE277b3ce3c5" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE953099acb5" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:32">
         <div class="OESZ OESZ_DivContent OESZG_WE953099acb5">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE953099acb5 OEDynTag0" name="oerAccept" value="Valeur du champ" />
         </div>
        </div>
        <div id="WEe2ee556d55" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:33">
         <div class="OESZ OESZ_DivContent OESZG_WEe2ee556d55">
          <span class="OESZ OESZ_Text OESZG_WEe2ee556d55 ContentBox">I accept the <a href="">Terms of Use<span style="color:rgb(0, 0, 0);font-size:16px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:19px;text-align:-webkit-auto;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;">*</span></a>&nbsp;(!set the link for each language!)</span>
         </div>
        </div>
        <div id="WE6788b9bded" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:31">
         <div class="OESZ OESZ_DivContent OESZG_WE6788b9bded">
          <span class="OESZ OESZ_Text OESZG_WE6788b9bded ContentBox OEDynTag0" style="<?php echo $oei['WE6788b9bded..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WE93f815add6" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:34">
         <div class="OESZ OESZ_DivContent OESZG_WE93f815add6">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE93f815add6 OEDynTag0" name="oerSubscribe" value="Valeur du champ" <?php echo $oei['WE93f815add6..OEDynTag0.checked'];?>="<?php echo $oei['WE93f815add6..OEDynTag0.checked'];?>"  />
         </div>
        </div>
        <div id="WEf4ed115067" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:35">
         <div class="OESZ OESZ_DivContent OESZG_WEf4ed115067">
          <span class="OESZ OESZ_Text OESZG_WEf4ed115067 ContentBox">Subscribe to Newsletter</span>
         </div>
        </div>
        <div id="WEf397541748" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:36">
         <div class="OESZ OESZ_DivContent OESZG_WEf397541748">
          <span class="OESZ OESZ_Text OESZG_WEf397541748 ContentBox OEDynTag0" style="<?php echo $oei['WEf397541748..OEDynTag0.style'];?>">Enter the text from the CAPTCHA image*</span>
         </div>
        </div>
        <div id="WE895c8b7ef3" class="BaseDiv RWidth OEWECaptchaV2 OESK_WECaptcha2_Default" style="z-index:37">
         <div class="OESZ OESZ_DivContent OESZG_WE895c8b7ef3">
          <span class="OESZ OESZ_LeftInput OESZG_WE895c8b7ef3"></span>
          <input name="WE895c8b7ef3" type="text" class="OESZ OESZ_Input OESZG_WE895c8b7ef3" />
          <span class="OESZ OESZ_RightInput OESZG_WE895c8b7ef3"></span>
          <img class="OESZ OESZ_Cryptogram OESZG_WE895c8b7ef3" alt="" src="" />
          <span class="OESZ OESZ_Reload OESZG_WE895c8b7ef3"></span>
         </div>
        </div>
        <div id="WE7fe8daf76d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:38">
         <div class="OESZ OESZ_DivContent OESZG_WE7fe8daf76d">
          <span class="OESZ OESZ_Text OESZG_WE7fe8daf76d ContentBox OEDynTag0" style="<?php echo $oei['WE7fe8daf76d..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WEf6df58d6f7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:39">
         <div class="OESZ OESZ_DivContent OESZG_WEf6df58d6f7">
          <span class="OESZ OESZ_Text OESZG_WEf6df58d6f7 ContentBox OEDynTag0">* Required Fields</span>
         </div>
        </div>
        <div id="WE0afd0252bd" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:40">
         <div class="OESZ OESZ_DivContent OESZG_WE0afd0252bd">
          <button class="OESZ OESZ_Button OESZG_WE0afd0252bd OEDynTag0" type="button" name="WE0afd0252bd">Create account</button>
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