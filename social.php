 <?
  $title = "Share Page"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");
?>



 <!-- css nedded for each page that needs to support landscape orientation-->
<link rel="stylesheet" media="all and (orientation:landscape)" href="css/portrait.css"> 

<!--start typing html/body text here -->
 
<div id="container" class="commonBG">
<div id="shareText"></div>        

	<ul id="socialIcons">
	<li id="fb"><a href="https://www.facebook.com/sharer.php?s=100&amp;p[title]=The%20All%20New%20Lexus%20IS%20in%20Sports%20Illustrated&amp;p[url]=http%3A%2F%2Fwww.lexusblendout.com&amp;p[summary]=Check%20out%20the%20all-new%20Lexus%20IS%20in%20the%20Sports%20Illustrated%20Swimsuit%20Issue.%20It's%20the%20print%20ad%20that%20blends%20out.&amp;p[images][0]=http%3A%2F%2Fplacehold.it%2F100x56%2FFF0000">&nbsp;</a></li>

		<li id="tweet"><a href="https://twitter.com/intent/tweet?
text=Check%20out%20the%20all-new%20Lexus%20IS%20in%20the%20Sports%20Illustrated%20Swimsuit%20Issue.%20It's%20the%20print%20ad%20that%20blends%20out.&
url=http%3A%2F%2Fwww.lexusblendout.com">&nbsp;</a></li>
		
		<li id="google"><a  href="https://m.google.com/app/plus/x/?v=compose&content=[Check%20out%20the%20all-new%20Lexus%20IS%20in%20the%20Sports%20Illustrated%20Swimsuit%20Issue.%20It's%20the%20print%20ad%20that%20blends%20out.]%20[http%3A%2F%2Fwww.lexusblendout.com]">&nbsp;</a></li>

		<li id="email"><a href="mailto:?
subject=The%20All%20New%20Lexus%20IS%20in%20Sports%20Illustrated&
body=Check%20out%20the%20all-new%20Lexus%20IS%20in%20the%20Sports%20Illustrated%20Swimsuit%20Issue.%20It's%20the%20print%20ad%20that%20blends%20out.%0A%0Ahttp%3A%2F%2Fwww.lexusblendout.com">&nbsp;</a></li>
	</ul>

<div id="copyLink"><input type="text" value="http://www.lexuxsblendout.com" size="20"></div>

 
<?php include_once("inc/footer.php");?> 