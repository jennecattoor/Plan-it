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

      </a>
    </div>

    <hr class="hr-footer">

    <div class="upcoming-events">
      <h3>Upcoming events</h3>
      <ul>
      <?php foreach($group->events as $event): ?>
        <li><a href="index.php?page=event&id=<?php echo $event['id']; ?>"><?php echo $event['name']; ?></a> - <?php echo $event['date']; ?></li>
      <?php endforeach; ?>
      </ul>
    </div>
    <button class="button"><a href="index.php?page=createEvent&id=<?php echo $group['id']; ?>">Create new event</a></button>
    <hr class="hr-footer">
  </div>

  <div class="group-buttons">
    <p>Want to invite people to the group? Click the button below to copy the invite code and send it to your friends!</p>
    <br>
    <button class="button" id="copy-btn">Copy invite code:<p id="group-code"><?php echo $group['code']; ?></p></button>
  </div>



</section>
