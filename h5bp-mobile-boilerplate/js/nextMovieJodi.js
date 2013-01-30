/* define function that executes when movie ended  */
function movieEnded(){
  location.href = 'videoPageAmber.php';
}

/* define function that adds another function as a DOM event listener */
function myAddListener(obj, evt, handler, captures){
if ( document.addEventListener )
  obj.addEventListener(evt, handler, captures);
else
  // IE
  obj.attachEvent('on' + evt, handler);
}

/* define functions that register each listener */
function RegisterListener(eventName, objID, embedID, listenerFcn){
  var obj = document.getElementById(objID);
  if ( !obj )
    obj = document.getElementById(embedID);
  if ( obj )
    myAddListener(obj, eventName, listenerFcn, false);
}

/* define a single function that registers all listeners to call onload */
function RegisterListeners(){
  RegisterListener('qt_ended', 'movie1', 'qtmovie_embed', movieEnded);
}