/**
 * Place a random photo in #picture
 */
document.addEventListener('DOMContentLoaded', function() {
  var pic = document.getElementById('picture');
  if (pic) {
    var page = pic.className, n;
    switch (page) {
      case 'newponds':     n = 45; break;
      case 'eagles_watch': n = 17; break;
      case 'torkels_hjem': n = 9;  break;
    }
    if (n) {
      var str = "" + Math.floor(Math.random() * n);
      var pad = "00";
      var src = "images/" + page + pad.substring(0, pad.length - str.length) + str + ".jpg";
      var img = document.createElement('img');
      img.src = src;
      img.alt = page.replace(/_/g, ' ');
      pic.appendChild(img);
    }
  }

  // Update copyright year
  var yr = document.getElementById('copyright-year');
  if (yr) yr.textContent = new Date().getFullYear();
});
