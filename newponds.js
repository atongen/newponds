$(document).ready(function() {
  var $pic = $('#picture');
  if ($pic[0]) {
    var page = $pic.attr("class"), n;
    switch(page) {
      case 'newponds':
        n = 45;
        break;
      case 'eagles_watch':
        n = 17;
        break;
      case 'torkels_hjem':
        n = 9;
        break;
    }
    if (n) {
      var str = "" + Math.floor(Math.random() * n);
      var pad = "00"
      var src = "images/" + page + pad.substring(0, pad.length - str.length) + str + ".jpg";
      $pic.html($("<img/>", { src: src, alt: page }));
    }
  }
});
