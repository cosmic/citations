<? $file = file_get_contents('../edith/data/citations.txt'); ?>
<?

function markup($text) {
  $html = htmlspecialchars($text);
  $html = preg_replace("`(http|ftp)+(s)?:(//)((\w|\.|\-|_)+)(/)?(\S+)?`i", "<a href=\"\\0\">\\0</a>", $html);
  return $html;
}

?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Citations</title>
  <link href='//fonts.googleapis.com/css?family=Noto+Serif' rel='stylesheet' />
  <link rel="stylesheet" href="css/citations.css" />
</head>
<body>
  <h1>Citations</h1>

<?php foreach (explode("\n\n", $file) as $block) : ?>
  <ul>
  <?php foreach (explode("\n", $block) as $line) : ?>
    <?php if ($line and list($user, $line) = preg_split('/: ?/', $line, 2)) : ?>

      <li>
        <strong><?= htmlspecialchars($user) ?></strong>&nbsp;:
        <?= markup($line) ?>
      </li>
    <?php endif; ?>
  <?php endforeach; ?>

  </ul>
<?php endforeach; ?>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="scripts/jquery.fracs-0.10.min.js"></script>
  <script src="scripts/application.js"></script>
</body>
</html>
<?php // Code is poetry ?>

<!--   |\/|
      bd "n.
     /   _,"n.___.,--x.
    <co>'\             Y
     ~~   \       L   7|
           H l--'~\\ (||
           H l     H |`'
           H [     H [
      ____//,]____//,]___   -->
