window.onscroll = function() {myFunction()};

function myFunction() {
  var win = <a href="https://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a> = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myProgressBar").style.width = scrolled + "%";
  document.getElementById("myProgressBar").innerHTML= Math.round(scrolled) + "%";
}