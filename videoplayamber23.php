

 <?
  $title = "Amber Video"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");

// page specific functions
if ($_GET["replay"])
  {
  echo "<script src ='js/videofunc.js'></script>";
  }
  else
  {
 echo "<script src ='js/nextmovieamber.js'></script>";
  }
?>


 <!-- css nedded for each page that needs to support landscape orientation-->
<link rel="stylesheet" media="all and (orientation:landscape)" href="css/portrait.css"> 

<div id="container">

<a id="overlayLink" href="javascript:document.movie1.Play();">
<div id="lineupTitle"></div> 
<div id="lineupTitleAmber"></div> 
<div id="playIcon"></div>
<div id="playOverlay"></div>
</a>

<script language="javascript" type="text/javascript">
  QT_WriteOBJECT('videos/iPhone4_amber.mp4' , '320', '460', '', 'EnableJavaScript', 'True', 'Scale', 'Aspect', 'AUTOPLAY', 'True', 'Controller', 'False',
  'postdomevents', 'True', 'emb#NAME' , 'movie1' , 'obj#id' , 'movie1', 'emb#id', 'showlogo', 'no', 'Controller', 'False',
  'qtmovie_embed');

  RegisterListeners();

</script>
<div>

<?php include_once("inc/footer.php");?> 