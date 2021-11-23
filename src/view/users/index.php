<section class="content">
  <h2>Plan group events with ease</h2>
  <p class="subheading">Looking for the perfect platform to plan group activities on?</p>

  <hr>

  <div class="signup">
      <h3 class="section__title">Sign up</h3>
      <form method="post">
      <input type="hidden" name="action" value="signUp">
          <label class="label">Your name:
              <input type="text" name="name" class="input" placeholder="Your name" required value="<?php
                  if (!empty($_POST['name'])) echo $_POST['name'];
              ?>">
              <span class="error"><?php if (!empty($errors['name'])) echo $errors['name']; ?></span>
          </label>
          <label class="label">Your email:
              <input type="email" name="email" class="input" placeholder="Email" required value="<?php
                  if (!empty($_POST['email'])) echo $_POST['email'];
              ?>">
              <span class="error"><?php if (!empty($errors['email'])) echo $errors['email']; ?></span>
          </label>
          <label class="label">Your password:
              <input type="password" name="password" class="input" placeholder="Your password" required minlength="5" value="<?php
                  if (!empty($_POST['password'])) echo $_POST['password'];
              ?>">
              <span class="error"><?php if (!empty($errors['password'])) echo $errors['password']; ?></span>
          </label>
          <input type="submit" value="Create your account" class="button">
      </form>
  </div>

  <p class="login-option">Already have an account? <a href="index.php?page=login" class="hyperlink">Log in<a></p>

  <div class="tutorial-info">
    <img src="./assets/img/group.svg" alt="group-icon">
    <h3>Create a groups and invite your friends and family.</h3>

    <img src="./assets/img/calendar.svg" alt="calender-icon">
    <h3>Create a event for your groups.</h3>

    <img src="./assets/img/organize.svg" alt="organize-icon">
    <h3>Organize the dates and to-bring lists for your events.</h3>
  </div>

</section>
