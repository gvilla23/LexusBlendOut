 
 <?
  $title = "Play Video"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");


// page specific functions
if ($_GET["jodi"])
  {
  $pid = $_GET["jodi"];
    $npid = "amber";
  }
  elseif($_GET["amber"])
  {
  $pid = $_GET["amber"];
  $npid = "replay.php";
  }
  else
  {

    $pid = $_GET["rina"];
    $npid = "jodi";
  }


// page specific functions
if ($_GET["replay"])
  {
  echo "<script src ='js/videofunc.js'></script>";
  }
  else
  {
 echo "<script src ='js/nextMovie<?php print ("$pid") ?>.js'></script>";
  }



?>

 <!-- css nedded for each page that needs to support landscape orientation-->
<link rel="stylesheet" media="all and (orientation:landscape)" href="css/portrait.css"> 



 <!--start typing html/body text here -->

<div id="container">


<div>
<script language="javascript" type="text/javascript">
   QT_WriteOBJECT('videos/iPhone4_<?php print ("$pid") ?>.mp4' , '320', '460', '', 'EnableJavaScript', 'True', 'scale', 'aspect', 'Autoplay', 'true', 'controller', 'false',
  'postdomevents', 'True', 'emb#NAME' , 'movie1' , 'obj#id' , 'movie1', 'emb#id',
  'qtmovie_embed') ;


    // $(document.movie1.Stop());
</script>
<a id="playMovie1" href="javascript:document.movie1.Play();">javascript:document.movie1.Play()</a>

</div>
 

<?php include_once("inc/footer.php");?> 