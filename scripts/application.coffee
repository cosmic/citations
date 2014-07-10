$('[data-goto-double-click]').dblclick ->
  window.location = $(this).data('goto-double-click')

$('[data-show-on-scroll]').css(opacity: 0).fracs (fracs) ->
  $(this).css(opacity: 1) if fracs.possible == 1
