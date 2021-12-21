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
        <li class="upcoming-list"><a href="index.php?page=event&g=<?php echo $group['id']; ?>&id=<?php echo $event['id']; ?>"><?php echo $event['name']; ?></a>&nbsp - <?php echo dateFormat($event['date']); ?></li>
      <?php endforeach; ?>
      </ul>
    </div>
    <a href="index.php?page=createEvent&id=<?php echo $group['id']; ?>" class="no-decoration"><button class="button">Create new event</button></a>
    <hr class="hr-footer">

    <div class="group-buttons">
      <p>Want to invite people to the group? <br> <br>
       Click the button below to copy the invite code and send it to your friends!
      </p>
      <br>
      <button class="button" id="copy-btn">Copy invite code:<p id="group-code"><?php echo $group['code']; ?></p></button>
    </div>

    <form method="post" id="leave-group" class="leave-form">
      <input type="hidden" name="action" value="leaveGroup">
      <input type="submit" value="Leave group" class="delete">
      <input type="hidden" name="groupID" value="<?php echo $_POST['groupID'] = $_GET['id']; ?>">
    </form>
  </div>
</section>
