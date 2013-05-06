(function() {

  $('body').dblclick(function() {
    return window.location = '../edith/citations';
  });

  $('ul').css({
    opacity: 0
  }).fracs(function(fracs) {
    if (fracs.possible === 1) {
      return $(this).css({
        opacity: 1
      });
    }
  });

}).call(this);
