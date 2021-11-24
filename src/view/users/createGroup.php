<section class="content">

  <div class="create-group">
      <h3 class="section__title">Create a group</h3>
      <p>Creating a group gives you the oppertunity to invite the friends you want. Then create an awesome event and let the party begin!</p>
      <form method="post">
      <input type="hidden" name="action" value="createGroup">
          <label class="label">Name of group: <br>
              <input type="text" name="groupName" class="input" placeholder="Devine" required minlength="3" value="<?php
                  if (!empty($_POST['groupName'])) echo $_POST['groupName'];
              ?>">
              <span class="error"><?php if (!empty($errors['groupName'])) echo $errors['groupName']; ?></span>
          </label>
          <label class="label">Group description: <br>
              <input type="text" name="groupDesc" class="input" placeholder="The most fun class of Kortrijk" required maxlength="255" value="<?php
                  if (!empty($_POST['groupDesc'])) echo $_POST['groupDesc'];
              ?>">
              <span class="error"><?php if (!empty($errors['groupDesc'])) echo $errors['groupDesc']; ?></span>
          </label>
          <input type="submit" value="Create group" class="button">
      </form>
  </div>

</section>
