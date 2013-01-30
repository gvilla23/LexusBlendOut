<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
//echo "The current page name is ".curPageName();







//footer states for social and about page
if(curPageName() == "social.php"):
    $socialState = "on";
else:
    $socialState = "off";
endif;

if(curPageName() == "about.php"):
   $aboutState = "on";
else:
    $aboutState = "off";
endif;


  



?>









<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> 
	<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cleartype" content="on">
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#222222">


        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" media="all and (orientation:portrait)" href="css/main.css">
        <link rel="stylesheet" media="all and (orientation:landscape)" href="css/portrait.css">
        <!-- <link rel="stylesheet" href="css/main.css">
       ?php echo $addCSS; ?>  -->
        <script src="http://code.jquery.com/jquery.min.js"></script>
      <!--  <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->
        <script>
            $(document).ready(function(){
                $("#slideUpLinksContainer").click(function(){
                    $(".exploreBanner").toggleClass("exploreBannerBump");
                    $("#footArea").slideToggle(100);
                    $("#slideUpLinksdown").toggleClass("slideUpLinksOff"); 
                   
                });

            });
        </script>
    </head>
    <body onload="RegisterListeners()">


