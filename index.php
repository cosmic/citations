<?
function markup($text) {
  $html = htmlspecialchars($text);
  return preg_replace("`(http|ftp)+(s)?:(//)((\w|\.|\-|_)+)(/)?(\S+)?`i", "<a href=\"\\0\">\\0</a>", $html);
}
$file = file_get_contents('../edith/data/citations.txt');
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Citations</title>
  <link href="//fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet" />
  <link rel="stylesheet" href="css/citations.css" />
</head>
<body data-goto-double-click="../edith/citations">
  <h1>Citations</h1>

<? foreach (explode("\n\n", $file) as $block) : ?>
  <ul data-show-on-scroll>
  <? foreach (explode("\n", $block) as $line) : ?>
    <? if ($line and list($user, $text) = preg_split('/: ?/', $line, 2)) : ?>
      <li>
        <? if ($text) : ?>
          <strong><?= htmlspecialchars($user) ?></strong>&nbsp;:
          <?= markup($text) ?>
        <? else : ?>
          <span class="context"><?= htmlspecialchars($user) ?></span>
        <? endif; ?>
      </li>
    <? endif; ?>
  <? endforeach; ?>

  </ul>
<? endforeach; ?>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="scripts/jquery.fracs-0.10.min.js"></script>
  <script src="scripts/application.js"></script>
</body>
</html>
<? // Code is poetry ?>

<!--   |\/|
      bd "n.
     /   _,"n.___.,--x.
    <co>'\             Y
     ~~   \       L   7|
           H l--'~\\ (||
           H l     H |`'
           H [     H [
      ____//,]____//,]___   -->
