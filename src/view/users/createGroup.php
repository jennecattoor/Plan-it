<section class="content">

  <div class="create-group">
      <h2>Create a group</h2>
      <hr>
      <p class="subtext">Creating a group gives you the opportunity to invite the friends you want.
        <br> <br>
        Then create an awesome event and let the party begin!</p>
      <hr>
      <div class="create-group-form">
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
            <label class="label">Group color: <br>
                <input type="color" name="groupColor" class="input" required value="<?php
                    if (!empty($_POST['groupColor'])) echo $_POST['groupColor'];
                ?>">
                <span class="error"><?php if (!empty($errors['groupColor'])) echo $errors['groupColor']; ?></span>
            </label>
            <input type="submit" value="Create group" class="button">
        </form>

      </div>

  </div>

</section>
