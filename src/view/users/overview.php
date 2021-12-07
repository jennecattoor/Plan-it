<section class="content">
<h2 class="overview-header">Welcome <?php echo $_SESSION['name']?></h2>

<hr>
<div class="group-list">
  <h3 class="group-heading">My Groups</h3>

  <?php foreach($user->groups as $group): ?>
    <a href="index.php?page=group&id=<?php echo $group['id']; ?>">
      <div class="group-entry">
        <figure></figure>
        <div>
          <span class="overview-group-name"><?php echo $group['name']; ?></span><br>
          <span>Upcoming event: <?php echo $group['description']; ?></span>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</div>

  <p class="subtext">Have you been invited to join a group? <br> Enter the code here</p>
  <div class="login">
    <h3 class="section__title">Join a group</h3>
    <form method="post">
    <input type="hidden" name="action" value="joinGroup">
      <label class="label">Group code:<br>
        <input type="text" name="code" class="input" placeholder="GQP691" required value="<?php
          if (!empty($_POST['code'])) echo $_POST['code'];
        ?>">
        <span class="error"><?php if (!empty($errors['code'])) echo $errors['code']; ?></span>
      </label>
      <input type="submit" value="Join group" class="button">
    </form>
</div>

</section>
