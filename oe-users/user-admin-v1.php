<?php
	require_once "user-admin-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491161000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-admin-v1.css?v=50491161000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491161000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"oe-users/user-admin-v1","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"../","RenderMode":"Export","PageAssociatePath":"oe-users/user-admin-v1","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491161000"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491161000"></script><?php
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
     <div id="WEfe07783b04" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEfe07783b04">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE5e6b537412" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE5e6b537412">
          <div class="OESZ OESZ_Deco1 OESZG_WE5e6b537412" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE5e6b537412" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE5e6b537412" style="position:absolute"></div>
         </div>
        </div>
        <div id="WEcc5813d031" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:17">
         <div class="OESZ OESZ_DivContent OESZG_WEcc5813d031">
          <span class="OESZ OESZ_Text OESZG_WEcc5813d031 ContentBox"><span style="font-weight:normal;font-size:13px;">. . . . User Database Administration . . . .</span></span>
         </div>
        </div>
        <div id="WE75730aff15" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE75730aff15">
          <div class="OESZ OESZ_Deco1 OESZG_WE75730aff15" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE75730aff15" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE75730aff15" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE5d74f155f2" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WE5d74f155f2">
          <div class="OESZ OESZ_Deco1 OESZG_WE5d74f155f2" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE5d74f155f2" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE5d74f155f2" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE6660d4a692" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WE6660d4a692">
          <div class="OESZ OESZ_Deco1 OESZG_WE6660d4a692" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE6660d4a692" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE6660d4a692" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE1ecd7c7ece" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE1ecd7c7ece">
          <a class="OESZ OESZ_Link OESZG_WE1ecd7c7ece ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE1ecd7c7ece..OEDynTag0.href'];?>"><?php echo $oei['WE1ecd7c7ece..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WEfe1d6bbc27" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WEfe1d6bbc27">
          <a class="OESZ OESZ_Link OESZG_WEfe1d6bbc27 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEfe1d6bbc27..OEDynTag0.href'];?>"><?php echo $oei['WEfe1d6bbc27..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WE01d14eea14" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE01d14eea14">
          <span class="OESZ OESZ_Text OESZG_WE01d14eea14 ContentBox OEDynTag0"><?php echo $oei['WE01d14eea14..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEb99a555a64" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:18">
         <div class="OESZ OESZ_DivContent OESZG_WEb99a555a64">
          <span class="OESZ OESZ_Text OESZG_WEb99a555a64 ContentBox"><b>NOTE TO WEBMASTER</b> (delete after reading): after placing all the packs, to start using or testing the site, <b style="color: rgb(192, 0, 0);">open this page at least once</b>&nbsp;in the browser to initialise the database and "<b>Admin</b>" account. It is strongly recommended to&nbsp;<b style="color: rgb(192, 0, 0);">change password immediately</b>&nbsp;after opening the page online (by default it equals the value of the coresponding &nbsp;parameter in Pack Configuration)</span>
         </div>
        </div>
        <div id="WEb9049f8e28" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEb9049f8e28">
          <span class="OESZ OESZ_Text OESZG_WEb9049f8e28 ContentBox">To <span style="text-decoration:underline;">sort</span> users by a column,&nbsp;click its header (name). <span style="text-decoration:underline;">Edit, block or delete</span><b>&nbsp;</b>any account by clicking "Edit" at its right. Use database management tools like PHPMyAdmin to manually modify or delete data.</span>
         </div>
        </div>
        <div id="WE7a3c2936fd" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE7a3c2936fd">
          <a class="OESZ OESZ_Link OESZG_WE7a3c2936fd ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE7a3c2936fd..OEDynTag0.href'];?>">Time since last visit</a>
         </div>
        </div>
        <div id="WE1a4d6682b9" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE1a4d6682b9">
          <a class="OESZ OESZ_Link OESZG_WE1a4d6682b9 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE1a4d6682b9..OEDynTag0.href'];?>">ID#</a>
         </div>
        </div>
        <div id="WEb137c65a23" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WEb137c65a23">
          <a class="OESZ OESZ_Link OESZG_WEb137c65a23 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEb137c65a23..OEDynTag0.href'];?>">User name</a>
         </div>
        </div>
        <div id="WE8564f14c4e" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE8564f14c4e">
          <a class="OESZ OESZ_Link OESZG_WE8564f14c4e ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE8564f14c4e..OEDynTag0.href'];?>">Email address (<b>bold</b> if subscribed)</a>
         </div>
        </div>
        <div id="WE3c122fd9cc" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE3c122fd9cc">
          <a class="OESZ OESZ_Link OESZG_WE3c122fd9cc ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE3c122fd9cc..OEDynTag0.href'];?>">Status</a>
         </div>
        </div>
        <div id="WE82ab439acc" class="BaseDiv RBoth OEWEDynIteratorPanelDBG OESK_WEDynIteratorPanelDBG_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE82ab439acc">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div class="OEIteratorParent OEDynTag1"><?php echo $oeIter['WE82ab439acc.OEDynTag1.0']; ?>
           </div>
          </div>
         </div>
        </div>
        <div id="WE08259585fe" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE08259585fe">
          <span class="OESZ OESZ_Text OESZG_WE08259585fe ContentBox OEDynTag0"><?php echo $oei['WE08259585fe..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE3b166a7020" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE3b166a7020">
          <span class="OESZ OESZ_Text OESZG_WE3b166a7020 ContentBox OEDynTag0"><?php echo $oei['WE3b166a7020..OEDynTag0.html1'];?></span>
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