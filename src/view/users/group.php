<section class="content">
  <!-- Insert group name here -->
  <h2>Group detail view</h2>
  <hr>

  <div class="all-group-content">
    <div class="group-info">
      <h3><?php echo $group['name']; ?></h3>
      <p class="group-desc"><?php echo $group['description']; ?>
      </p>
      <a href="#">
        <button class="button">Invite People</button>
      </a>
    </div>

    <hr>

    <div class="upcoming-events">
      <h3>Upcoming events</h3>
      <ul>
      <?php foreach($group->events as $event): ?>
        <li><a href="index.php?page=event&id=<?php echo $event['id']; ?>"><?php echo $event['name']; ?></a> - <?php echo $event['date']; ?></li>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <a href="index.php?page=createEvent" class="hyperlink">Create event</a>


</section>
