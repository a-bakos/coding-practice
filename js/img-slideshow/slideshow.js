window.onload = initLinks;

var thePic = 0;
var myPix = new Array("szeged1.jpg", "szeged2.jpg", "szeged3.jpg", "szeged4.jpg");

function initLinks () {
  document.getElementById("prev-link").onclick = processPrevious;
  document.getElementById("next-link").onclick = processNext;
}

function processPrevious() {
  if (thePic == 0) {
    thePic = myPix.length;
  }

  thePic--;
  document.getElementById("my-picture").src = myPix[thePic];
  return false;
}

function processNext() {
  thePic++;
  if (thePic == myPix.length) {
    thePic = 0;
  }

  document.getElementById("my-picture").src = myPix[thePic];
  return false;
}
