 
 <?
  $title = "Jodi Video"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");

// page specific functions
if ($_GET["replay"])
  {
  echo "<script src ='js/videofunc.js'></script>";
  }
  else
  {
 echo "<script src ='js/nextmoviejodi.js'></script>";
  }
?>

 <!-- css nedded for each page that needs to support landscape orientation-->
<link rel="stylesheet" media="all and (orientation:landscape)" href="css/portrait.css"> 

<div id="container">

<div>
<script language="javascript" type="text/javascript">
	QT_WriteOBJECT('videos/iPhone4_jodi.mp4' , '320', '460', '', 'EnableJavaScript', 'True', 'scale', 'aspect', 'Autoplay', 'true', 'controller', 'false',
	'postdomevents', 'True', 'emb#NAME' , 'movie1' , 'obj#id' , 'movie1', 'emb#id',
	'qtmovie_embed') ;

  RegisterListeners();

</script>
</div>
 

<?php include_once("inc/footer.php");?> 