 


 <?
  $title = "Amber Video"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");

?>


<link rel="stylesheet" media="all and (orientation:portrait)" href="css/main.css">
<link rel="stylesheet" media="all and (orientation:landscape)" href="css/main.css">


<script src ='js/nextMoviepreRoll.js'></script>


<div id="container" class="commonBG">

<div>
<script language="javascript" type="text/javascript">
  QT_WriteOBJECT('videos/isfc-pre-roll.mp4' , '320', '460', '', 'EnableJavaScript', 'True', 'Scale', 'Aspect', 'Autoplay', 'True', 'Controller', 'False',
  'postdomevents', 'True', 'emb#NAME' , 'movie1' , 'obj#id' , 'movie1', 'emb#id',
  'qtmovie_embed');

  RegisterListeners();

</script>
<div>

<?php include_once("inc/footer.php");?> 