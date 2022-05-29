var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex[no]-1].style.display = "block";
}

function changeHeight() {
  let title = document.querySelector(".slideshow-title");
  let titleHeight = title.clientHeight;
  let classes = document.getElementsByClassName("slideshow__button");
  for(let i = 0; i < classes.length; i++) {
    classes.item(i).style.top = "calc(50% + " + (titleHeight / 2) + "px)";
  }
}

setInterval(changeHeight, 1);
