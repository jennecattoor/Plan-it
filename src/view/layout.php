<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <?php echo $css; ?>
  <title>Eveplan - <?php echo $title; ?></title>
</head>
<body>
  <main>
    <header class="header">
      <h1 class="title"><span class="color--accent">Eve</span>plan</h1>
      <span class="navigation__icon">&#9776;</span>
      <!--<nav class="header__nav">
        <ul>
          <li><a href="index.php?page=index">Home<a></li>
          <li><a href="index.php?page=overview">Overview<a></li>
        </ul>
      </nav>-->
    </header>
    <?php echo $content;?>
</main>
  <?php echo $js; ?>
</body>
</html>
