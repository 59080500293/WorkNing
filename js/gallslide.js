var slideIndex = 1;
showDivss(slideIndex);

function plusDivss(n) {
  showDivss(slideIndex += n);
}

function showDivss(n) {
  var i;
  var x = document.getElementsByClassName("mySlidess");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}