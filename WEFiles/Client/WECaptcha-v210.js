$(document).ready(function(){WECaptchaJS.Initialize()});var WECaptchaJS={Initialize:function(){if(window.location.protocol.match("file+"))return $(".OESZ_Cryptogram").css("background-color","#999999"),$(".OESZ_Cryptogram").css("color","#FFFFF"),$(".OESZ_Cryptogram").css("font-size","10px"),$(".OESZ_Cryptogram").css("font-family","Arial"),$(".OESZ_Cryptogram").css("text-align","center"),$(".OESZ_Cryptogram").html(OE.Common.htmlDecode(OE.Text.OnlineOnly)),!1;if(WEInfoPage.PHPVersion==""||WEInfoPage.PHPVersion=="undefined"||WEInfoPage.PHPVersion==null)return alert("WECaptcha : "+OE.Common.htmlDecode(OE.Text.NoPHP)),!1;for(Elem in OEConfWECaptcha)WECaptchaJS.Init(Elem)},Init:function(n){var t=OEConfWECaptcha[n].ScriptVersion,i=WEInfoPage.RelativePath+"./WEFiles/Server/WECaptcha/",r=i+"WECaptcha-v"+t+".php?Cfg=WECaptcha.cfg-v"+t+".php&PagePath="+WEInfoPage.PagePath+"&RelativePath="+WEInfoPage.RelativePath+"&OEVersion="+t+"&IdElem="+n;$.get(r,function(t){var u="",f="",i=!0,r;try{for(;;){if(!t)break;r=t.split("::");u=r[0];f=r[1];i=!1;break}}catch(e){i=!0}i?alert(OE.Common.getLocString(OEConfWECaptcha[n].TextError)):($("#"+n+" .OESZ_Cryptogram").attr("src",u),$("#"+n+" .OESZ_Reload").attr("onclick","javascript:var new_link; new_link = WECaptchaJS.CaptchaRndLink('"+f+"'); $('#"+n+" .OESZ_Cryptogram').attr('src', new_link);"))})},CaptchaRndLink:function(n){return n+(Math.floor(Math.random()*998)+1)}}