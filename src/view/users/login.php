<section class="content">
<h2>Log in to Eveplan</h2>
<hr>
<div class="login">
    <h3 class="section__title">Log in</h3>
    <form method="post">
    <input type="hidden" name="action" value="logIn">
      <label class="label">Your email:<br>
        <input type="text" name="emailLogin" class="input" placeholder="john.doe@gmail.com" required value="<?php
          if (!empty($_POST['emailLogin'])) echo $_POST['emailLogin'];
        ?>">
        <span class="error"><?php if (!empty($errors['emailLogin'])) echo $errors['emailLogin']; ?></span>
      </label>
      <label class="label">Your password:<br>
        <input type="password" name="passwordLogin" class="input" placeholder="Your password" required minlength="5" value="<?php
          if (!empty($_POST['passwordLogin'])) echo $_POST['passwordLogin'];
        ?>">
        <span class="error"><?php if (!empty($errors['passwordLogin'])) echo $errors['passwordLogin']; ?></span>
      </label>
      <input type="submit" value="Log in" class="button">
    </form>
</div>

<p class="signup-option">Don't have an account yet? <br><a href="index.php?page=login" class="hyperlink">Sign up</a></p>

</section>
