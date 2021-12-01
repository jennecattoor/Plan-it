<section class="content">
<h2 class="overview-header">Welcome <?php echo $_SESSION['name']?></h2>

<hr>
<div class="group-list">
  <h3 class="group-heading">My Groups</h3>

<?php foreach($user->groups as $group): ?>
  <a href="#">
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

</section>
