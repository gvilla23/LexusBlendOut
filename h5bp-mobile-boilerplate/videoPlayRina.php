 
<script src="js/AC_QuickTime.js"></script>

 <?
  $title = "Rina Video"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");

// page specific functions
if ($_GET["replay"])
  {
  echo "<script src ='js/videoFunc.js'></script>";
  }
  else
  {
 echo "<script src ='js/nextMovieRina.js'></script>";
  }
?>

 <!--start typing html/body text here -->


 <script>
$(document).ready(function(){


 });
</script>

<div id="container">


<div>
<script language="javascript" type="text/javascript">
   QT_WriteOBJECT('videos/iPhone4_Rina-WIREDRIVE.mov' , '320', '460', '', 'EnableJavaScript', 'True', 'scale', 'aspect', 'Autoplay', 'true', 'controller', 'false',
  'postdomevents', 'True', 'emb#NAME' , 'movie1' , 'obj#id' , 'movie1', 'emb#id',
  'qtmovie_embed') ;
</script>
</div>
 




<?php include_once("inc/footer.php");?> 