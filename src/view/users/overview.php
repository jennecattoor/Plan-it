<section class="content">
<h2 class="overview-header">Welcome <?php echo $_SESSION['name']?></h2>

<hr>

<p class="subtext">Have you been invited to join a group? <br> Enter the code here</p>
<div class="login">
  <h3 class="section__title">Join a group</h3>
  <form method="post">
  <input type="hidden" name="action" value="joinGroup">
    <label class="label">Group code:<br>
      <input type="text" name="code" class="input" placeholder="GQP691" required minlength="6" value="<?php
        if (!empty($_POST['code'])) echo $_POST['code'];
      ?>">
      <span class="error"><?php if (!empty($errors['code'])) echo $errors['code']; ?></span>
    </label>
    <input type="submit" value="Join group" class="button">
  </form>
</div>

<hr class="hr-footer">

<div class="group-list">
  <h3 class="group-heading">My Groups</h3>

  <?php foreach($user->groups as $group): ?>
    <a href="index.php?page=group&id=<?php echo $group['id']; ?>">
      <div class="group-entry">
        <figure style="background-color:<?php echo $group['color']; ?>"></figure>
        <div>
          <span class="overview-group-name"><?php echo $group['name']; ?></span><br>
          <?php if ($group->events->first()) { ?>
            <span>Upcoming event: <?php echo $group->events->first()->name; ?><br class="break"> - <?php echo dateFormat($group->events->first()->date); ?></span><?php
            } else {
              ?><p>No upcoming events</p><?php
            } ?>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
  <?php $inGroup = $user->groups->first()?>
  <?php if (!$inGroup) {
    ?> <p>You are not in a group yet. You can <a href="index.php?page=createGroup"><span class="color--accent">Create a group now</span></a></p><?php };?>
</div>



</section>
