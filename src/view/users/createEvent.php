<section class="content">

  <div class="create-group">
      <h2>Create an event</h2>
      <hr>
      <p>Creating a event gives you the opportunity to invite the friends you want.
        <br> <br>
        Then create an awesome event and let the party begin!</p>
      <hr>
      <div class="create-group-form">
        <form method="post">
        <input type="hidden" name="action" value="createEvent">
            <label class="label">Name of Event: <br>
                <input type="text" name="eventName" class="input" placeholder="Party at school" required minlength="3" value="<?php
                    if (!empty($_POST['eventName'])) echo $_POST['eventName'];
                ?>">
                <span class="error"><?php if (!empty($errors['eventName'])) echo $errors['eventName']; ?></span>
            </label>
            <label class="label">Event description: <br>
                <input type="text" name="eventDesc" class="input" placeholder="Pizza Party at school. Be there or be square" required maxlength="255" value="<?php
                    if (!empty($_POST['eventDesc'])) echo $_POST['eventDesc'];
                ?>">
                <span class="error"><?php if (!empty($errors['eventDesc'])) echo $errors['eventDesc']; ?></span>
            </label>
            <label class="label">Date: <br>
                <input type="date" name="eventDate" class="input" required value="<?php
                    if (!empty($_POST['eventDate'])) echo $_POST['eventDate'];
                ?>">
                <span class="error"><?php if (!empty($errors['eventDate'])) echo $errors['eventDate']; ?></span>
            </label>
            <label class="label">Event location: <br>
                <input type="text" name="eventLocation" class="input" placeholder="Pizza Party at school. Be there or be square" required maxlength="255" value="<?php
                    if (!empty($_POST['eventLocation'])) echo $_POST['eventLocation'];
                ?>">
                <span class="error"><?php if (!empty($errors['eventLocation'])) echo $errors['eventLocation']; ?></span>
            </label>
            <input type="submit" value="Create event" class="button">
        </form>

      </div>

  </div>

</section>
