<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/img/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <?php echo $css; ?>
  <title>Eveplan - <?php echo $title; ?></title>
</head>
<body>
  <main>
    <header class="header">
      <?php if ($_SESSION['valid'] == false) {?>
        <a href="index.php?page=index" class="no-decoration"><h1 class="title"><span class="color--accent">Eve</span>plan</h1></a>
        <?php }; ?>

      <?php if ($_SESSION['valid'] == true) {?>
        <a href="index.php?page=overview" class="no-decoration"><h1 class="title"><span class="color--accent">Eve</span>plan</h1></a>
        <?php }; ?>
        <nav class="navbar">
            <ul class="nav-menu">
              <?php if ($_SESSION['valid'] == false) {?>
              <li class="nav-item">
                  <a href="index.php?page=index" class="nav-link">Sign Up</a>
              </li>
              <li class="nav-item">
                 <a href="index.php?page=login" class="nav-link">Login</a>
              </li>
              <?php }; ?>
              <?php if ($_SESSION['valid'] == true) {?>
              <li class="nav-item">
                  <a href="index.php?page=overview" class="nav-link">Overview</a>
              </li>
              <li class="nav-item">
                  <a href="index.php?page=createGroup" class="nav-link">Create Group</a>
              </li>
              <?php }; ?>
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
  <div class="footer-content">
        <ul class="footer-menu">
        <?php if ($_SESSION['valid'] == false) {?>
        <li class="footer-item">
            <a href="index.php?page=index" class="footer-link">Sign Up</a>
        </li>
        <li class="footer-item">
            <a href="index.php?page=login" class="footer-link">Login</a>
        </li>
        <?php }; ?>
        <?php if ($_SESSION['valid'] == true) {?>
        <li class="footer-item">
            <a href="index.php?page=overview" class="footer-link">Overview</a>
        </li>
        <li class="footer-item">
            <a href="index.php?page=createGroup" class="footer-link">Create Group</a>
        </li>
        <li class="footer-item">
            <a href="index.php?page=group" class="footer-link">Sign out</a>
        </li>
        <?php }; ?>
      </ul>

      <?php if ($_SESSION['valid'] == false) {?>
        <a href="index.php?page=index" class="no-decoration"><h1 class="title"><span class="color--accent">Eve</span><span class="color--white">plan</span></h1></a>
        <?php }; ?>

      <?php if ($_SESSION['valid'] == true) {?>
        <a href="index.php?page=overview" class="no-decoration"><h1 class="title"><span class="color--accent">Eve</span><span class="color--white">plan</span></h1></a>
        <?php }; ?>

  </div>

    </footer>
  <?php echo $js; ?>
</body>
</html>
