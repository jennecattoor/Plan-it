<section class="content">

<div class="login">
    <h3 class="section__title">Log in</h3>
    <form method="post">
    <input type="hidden" name="action" value="logIn">
      <label class="label">Your email:
        <input type="text" name="emailLogin" class="input" placeholder="john.doe@gmail.com" required value="<?php
          if (!empty($_POST['emailLogin'])) echo $_POST['emailLogin'];
        ?>">
        <span class="error"><?php if (!empty($errors['emailLogin'])) echo $errors['emailLogin']; ?></span>
      </label>
      <label class="label">Your password:
        <input type="password" name="passwordLogin" class="input" placeholder="Your password" required minlength="5" value="<?php
          if (!empty($_POST['passwordLogin'])) echo $_POST['passwordLogin'];
        ?>">
        <span class="error"><?php if (!empty($errors['passwordLogin'])) echo $errors['passwordLogin']; ?></span>
      </label>
      <input type="submit" value="Log in" class="button">
    </form>
</div>

</section>
