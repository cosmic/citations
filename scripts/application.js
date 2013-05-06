(function() {
  $('body').dblclick(function() {
    return window.location = '../edith/citations';
  });
  $('dialog').css({
    opacity: 0
  }).fracs(function(fracs) {
    if (fracs.possible === 1) {
      return $(this).animate({
        opacity: 1
      });
    }
  });
}).call(this);
