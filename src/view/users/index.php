<section class="content">
  <h2>Plan group events with ease</h2>
  <p>Looking for the perfect platform to plan group activities on?</p>

  <div class="signup">
      <h3 class="section__title" data-aos="fade-up">Sign up</h3>
      <form method="post" action="index.php?page=competition" data-aos="fade-up">
      <input type="hidden" name="action" value="signUp">
          <label class="label__login">Your name:
              <input type="text" name="name" class="form__input input" placeholder="John Doe" required value="<?php
                  if (!empty($_POST['name'])) echo $_POST['name'];
              ?>">
              <span class="error"><?php if (!empty($errors['name'])) echo $errors['name']; ?></span>
          </label>
          <label class="label__login label__login--first">Your email:
              <input type="email" name="email" class="form__input input" placeholder="john.doe@gmail.com" required value="<?php
                  if (!empty($_POST['email'])) echo $_POST['email'];
              ?>">
              <span class="error"><?php if (!empty($errors['email'])) echo $errors['email']; ?></span>
          </label>
          <label class="label__login">Your password:
              <input type="password" name="password" class="form__input input" placeholder="Your password" required minlength="5" value="<?php
                  if (!empty($_POST['password'])) echo $_POST['password'];
              ?>">
              <span class="error"><?php if (!empty($errors['password'])) echo $errors['password']; ?></span>
          </label>
          <input type="submit" value="Sign up" class="button button--small">
      </form>
  </div>

  <p>Already have an account? Log in</p>

</section>
