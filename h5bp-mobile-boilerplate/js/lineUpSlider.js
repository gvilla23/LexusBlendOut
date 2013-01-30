$(document).ready(function(){

  // slide up nav and side down 
  var i = 0, howManyTimes = 2;
    function f() {

    $("#slideUpLinksContainer").trigger("click");
      i++;
      if( i < howManyTimes ){
        setTimeout( f, 4000 );
      }
    }
    f();

  });