<? $file = file_get_contents('../edith/data/citations.txt'); ?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Citations</title>
  <link rel="stylesheet" href="citations.css" />
</head>
<body>
  <h1>Citations</h1>

<?php foreach (explode("\n\n", $file) as $block) : ?>
  <dialog>
  <?php foreach (explode("\n", $block) as $line) :
    if (!$line) continue;
    list($user, $line) = preg_split('/: ?/', $line, 2);
    $line = htmlspecialchars($line);
    $line = preg_replace("`(http|ftp)+(s)?:(//)((\w|\.|\-|_)+)(/)?(\S+)?`i", "<a href=\"\\0\">\\0</a>", $line); ?>
    <dt><?= htmlspecialchars($user) ?></dt>
    <dd><?= $line ?></dd>
  <?php endforeach; ?>
  </dialog>
<?php endforeach; ?>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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