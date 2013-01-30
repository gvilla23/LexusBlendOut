
/* define function that shows percentage of movie loaded */
function showProgress(){
  var percentLoaded = 0 ;
  percentLoaded = parseInt((document.movie1.GetMaxTimeLoaded() / document.movie1.GetDuration()) * 100);
  document.getElementById("loadStatus").innerHTML = 'Movie loading: ' + percentLoaded + '% complete...';
}

/* define function that executes when movie loading is complete */
function movieLoaded(){
  //document.getElementById("loadStatus").innerHTML = "Movie Loaded!!!" ;
  //$(movie1.Stop());
  //alert("stoped");
  alert("stoped ggggggg");
}

/* define function that executes when movie ended  */
function movieEnded(){
//document.getElementById("loadStatus").innerHTML = "Movie ENDED!!!" ;
//document.getElementById("loadStatus").innerHTML = "Movie Loaded!!!" ;
  location.href = 'replay.php';
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
  //RegisterListener('qt_progress', 'movie1', 'qtmovie_embed', showProgress);
  RegisterListener('qt_load', 'movie1', 'qtmovie_embed', movieLoaded);
  RegisterListener('qt_ended', 'movie1', 'qtmovie_embed', movieEnded);
}
