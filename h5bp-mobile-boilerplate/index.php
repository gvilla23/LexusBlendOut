 <?
  $title = "Home Page"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");
?>

<script type="text/javascript">
// Find matches
var mql = window.matchMedia("(orientation: portrait)");

// If there are matches, we're in portrait
if(mql.matches) {  
  // Portrait orientation
  alert("We are in Portrait orientation");
} else {  
  // Landscape orientation
  alert("We are in Landscape orientation");
}

// Add a media query change listener
mql.addListener(function(m) {
  if(m.matches) {
    // Changed to portrait
    alert("Changed to portrait");
  }
  else {
    // Changed to landscape
    alert("Changed to landscape");
  }
});
</script>
 <!--start typing html/body text here -->
 
<div id="container" class="commonBG">

<div id="yourMove"></div> 
<div id="bringModels"><a title href="videoPage.php" class="blocklink"> &nbsp; </a></div> 
<div id="noMag"><a title href="#" class="blocklink"> &nbsp; </a></div> 
 
<?php include_once("inc/footer.php");?> 