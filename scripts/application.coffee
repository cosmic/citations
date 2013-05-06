$('body').dblclick ->
  window.location = '../edith/citations'

$('ul').css(opacity: 0).fracs (fracs) ->
  $(this).css(opacity: 1) if fracs.possible == 1
