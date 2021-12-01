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
      <?php foreach($events as $event): ?>
        <li><a href="#"><?php echo $event['name']; ?> #1</a> - <?php echo $event['date']; ?></li>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>




</section>
