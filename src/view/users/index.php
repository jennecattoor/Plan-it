<div class="background">
<section class="content">
  <div class="all-access-info">
   <h2>Plan group events with ease</h2>
    <p class="subheading">Looking for the perfect platform to plan group activities on?</p>

    <hr>

    <div class="signup">
        <h3 class="section__title">Sign up</h3>
        <form method="post">
        <input type="hidden" name="action" value="signUp">
            <label class="label">Your name: <br>
                <input type="text" name="name" class="input" placeholder="Your name" required minlength="3" value="<?php
                    if (!empty($_POST['name'])) echo $_POST['name'];
                ?>">
                <span class="error"><?php if (!empty($errors['name'])) echo $errors['name']; ?></span>
            </label>
            <label class="label">Your email: <br>
                <input type="email" name="email" class="input" placeholder="Email" required value="<?php
                    if (!empty($_POST['email'])) echo $_POST['email'];
                ?>">
                <span class="error"><?php if (!empty($errors['email'])) echo $errors['email']; ?></span>
            </label>
            <label class="label">Your password: <br>
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
      <h4>Create groups and invite your friends and family.</h4>

      <img src="./assets/img/calendar.svg" alt="calender-icon">
      <h4>Create events for your groups.</h4>

      <img src="./assets/img/organize.svg" alt="organize-icon">
      <h4>Organize the dates and to-bring lists for your events.</h4>
    </div>
  </div>

</section>
</div>
