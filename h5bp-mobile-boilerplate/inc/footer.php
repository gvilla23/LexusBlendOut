
<div id="footArea">
  <ul id="footLinks">
  <li id="shareLink"><a href="social.php"><img src="img/footerShareLink_off.jpg" alt="footerShareLink_off" width="106" height="40"></a></li>
  <li id="lexusLink"><a href="http://www.lexuxsblendout.com"><img src="img/footerLexusLink.jpg" alt="footerLexusLink" width="108" height="40"></a></li>
  <li id="infoLink"><a href="about.php"><img src="img/footerShareInfo_off.jpg" alt="footerShareInfo_off" width="106" height="40"></a></li>
  </ul>
</div>

<div id="slideUpLinksContainer">       
<div id="slideUpLinksdown" class="slideUpLinks"></div> 
</div>
</div>

<script src="js/vendor/zepto.min.js"></script>
<script src="js/helper.js"></script>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script> 
  $(document).ready(function(){
      $("#slideUpLinksContainer").click(function(){
        $("#footArea").slideToggle();
        $("#slideUpLinksdown").toggleClass("slideUpLinksOff");			
      });
    });

  setTimeout(function () {
  window.scrollTo(0, 1);
  }, 2000);
</script> 

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
  g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
  s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

</body>
</html>
