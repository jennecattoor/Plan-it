<section class="content">

  <div class="create-event">
      <h2>Change event info</h2>
      <hr>

      <div class="create-event-form">
        <form method="post">
        <input type="hidden" name="action" value="eventChange">
            <label class="label">Name of Event: <br>
                <input type="text" name="eventName" class="input" placeholder="Party at school" required minlength="3" value="<?php echo $event['name']; ?>">
                <span class="error"><?php if (!empty($errors['eventName'])) echo $errors['eventName']; ?></span>
            </label>
            <label class="label">Event description: <br>
                <input type="text" name="eventDesc" class="input" placeholder="Pizza Party at school. Be there or be square" required maxlength="255" value="<?php
                    if (!empty($event['description'])) echo $event['description'];
                ?>">
                <span class="error"><?php if (!empty($errors['eventDesc'])) echo $errors['eventDesc']; ?></span>
            </label>
            <label class="label">Date: <br>
                <input type="date" name="eventDate" class="input" required value="<?php
                    if (!empty($event['date'])) echo $event['date'];
                ?>">
                <span class="error"><?php if (!empty($errors['eventDate'])) echo $errors['eventDate']; ?></span>
            </label>
            <label class="label">Event location: <br>
                <input type="text" name="eventLocation" class="input" placeholder="Dam 2a, 8500 Kortrijk" required maxlength="255" value="<?php
                    if (!empty($event['location'])) echo $event['location'];
                ?>">
                <span class="error"><?php if (!empty($errors['eventLocation'])) echo $errors['eventLocation']; ?></span>
            </label>
            <input type="submit" value="Update event info" class="button">
        </form>

      </div>

  </div>

</section>
