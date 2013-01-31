
// verify window postion //

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
