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
      <nav class="navbar">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php?page=index" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=overview" class="nav-link">Overview</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=createGroup" class="nav-link">Create Group</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=group" class="nav-link">Group Details</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
    </nav>
    </header>
    <?php echo $content;?>

</main>
<footer>
      <ul class="footer-menu">
                <li class="footer-item">
                    <a href="index.php?page=index" class="footer-link">Home</a>
                </li>
                <hr>
                <li class="footer-item">
                    <a href="index.php?page=login" class="footer-link">Login</a>
                </li>
                <hr>
                <li class="footer-item">
                    <a href="index.php?page=overview" class="footer-link">Overview</a>
                </li>
                <hr>
                <li class="footer-item">
                    <a href="index.php?page=createGroup" class="footer-link">Create Group</a>
                </li>
                <hr>
                <li class="footer-item">
                    <a href="index.php?page=group" class="footer-link">Group Detail</a>
                </li>
            </ul>
    </footer>
  <?php echo $js; ?>
</body>
</html>
