 
<script src="js/AC_QuickTime.js"></script>

 <?
  $title = "Amber Video"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");

// page specific functions
if ($_GET["replay"])
  {
  echo "<script src ='js/videoFunc.js'></script>";
  }
  else
  {
 echo "<script src ='js/nextMovieAmber.js'></script>";
  }
?>


<div id="container">

<div>
<script language="javascript" type="text/javascript">
  QT_WriteOBJECT('videos/iPhone4_Amber-WIREDRIVE.mov' , '320', '460', '', 'EnableJavaScript', 'True', 'Scale', 'Aspect', 'Autoplay', 'True', 'Controller', 'False',
  'postdomevents', 'True', 'emb#NAME' , 'movie1' , 'obj#id' , 'movie1', 'emb#id',
  'qtmovie_embed');



</script>
<div>

<?php include_once("inc/footer.php");?> 