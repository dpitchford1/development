/* -------------------------------------------------------------------------------------------------------------------------
   ONLOAD
   function addLoadEvent(func)
*/

function addLoadEvent(func) {
  var oldOnLoad = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  }
  else {
    window.onload = function() {
      oldOnLoad();
      func();
    }
  }
}


/* -------------------------------------------------------------------------------------------------------------------------
   ANIMATED ANCHOR SCROLL
   
   function animateAnchorScroll()
   function scrollPage()
   function scrollToAnchor(aname)
   function easeInOut(t,b,c,d)
*/

// set up the required variables
var scrollInt, scrTime, scrSt, scrDist, scrDur, scrInt;

function animateAnchorScroll() {
  // does the browser support the DOM?
  if (!document.getElementById) { return; }
  
  var anchors, i, targ, targarr;

  // create an array of the anchors present in the document
  anchors = document.getElementsByTagName("a");
  
  // loop through the anchor array
  for (i=0;i<anchors.length;i++) {
    // check if href links to an anchor on this page
    if (anchors[i].href.indexOf("#") != -1 &&
        anchors[i].href.indexOf( document.URL ) != -1) {
      // store name of target anchor
      targ = anchors[i].href.substring(anchors[i].href.indexOf("#")+1);
      // store target anchor
      targarr = document.getElementById(targ);
      if(targarr != null) {
        // append a class to anchor
        anchors[i].className = (targarr.offsetTop < anchors[i].offsetTop) ? "up" : "down";
        // save target as id with prefix (used in onclick function below)
        anchors[i].id = "__" + targ;
        // set action to perform on click
        anchors[i].onclick = function() { scrollToAnchor(this.id.substring(2)); return false; };
      }
    }
  }
}

function scrollPage() {
  scrTime += scrInt;
  if (scrTime < scrDur) { window.scrollTo( 0, easeInOut(scrTime,scrSt,scrDist,scrDur) ); }
  else                  { window.scrollTo( 0, scrSt+scrDist ); clearInterval(scrollInt); }
}

function scrollToAnchor(aname) {
  // does the browser support the DOM?
  if (!document.getElementById) { return; }
  
  // set up the required variables
  var anchors, i, ele;
  
  // get anchor
  if(document.getElementById(aname)) { ele = document.getElementById(aname); }

  // set scroll target
  if (window.scrollY) { scrSt = window.scrollY; }
  else                { scrSt = document.body.scrollTop; }

  scrDist = ele.offsetTop - scrSt;
  scrDur  = 500;
  scrTime = 0;
  scrInt  = 10;

  // set interval
  clearInterval(scrollInt);
  scrollInt = setInterval( scrollPage, scrInt );
}

function easeInOut(t,b,c,d) {
  return c/2 * (1 - Math.cos(Math.PI*t/d)) + b;
}

/* -------------------------------------------------------------------------------------------------------------------------
   CALL THE FUNCTIONS WE WANT TO RUN ON LOAD
*/

addLoadEvent(animateAnchorScroll);