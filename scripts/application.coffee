$('body').dblclick ->
  window.location = '../edith/citations'

$('dialog').css(opacity: 0).fracs (fracs) ->
  $(this).animate(opacity: 1) if fracs.possible == 1