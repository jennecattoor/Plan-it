<section class="content">

  <div class="event-info">
    <h2><?php echo $event['name']; ?></h2>

    <hr>

    <h3><?php echo $event['date']; ?></h3>

    <hr class="hr-footer">

    <p><?php echo $event['description']; ?></p>
    <br>
    <p>Location: <?php echo $event['location']; ?></p>

    <hr>

    <div class="necessities">
      <h3> What needs to be brought</h3>
      <p>See who's responsible for different items, and assign yourself something that needs to be brought to the event!</p>
      <br>
      <br>
    <?php foreach($event->items as $item): ?>
        <li class="item-list">
          <?php echo $item['name']; ?> - <?php
          if(!empty($item->users->first()->name)) {
            echo $item->users->first()->name;
           }

          if(empty($item->users->first()->name)) {
            ?><form method="post">
              <input type="hidden" name="action" value="doItem">
              <input type="submit" value="I will do this" class="assign-btn">
        </form>
          <?php ;} ?>
        </li>
       <?php endforeach; ?>
       <div class="create-group-form">
        <form method="post">
        <input type="hidden" name="action" value="necessity">
            <label class="label">Add something to the list: <br>
                <input type="text" name="addItem" class="input" placeholder="Bring ..." required value="<?php
                    if (!empty($_POST['addItem'])) echo $_POST['addItem'];
                ?>">
                <span class="error"><?php if (!empty($errors['addItem'])) echo $errors['addItem']; ?></span>
            </label>
            <input type="submit" value="add" class="button">
        </form>

      </div>
    </div>

  </div>

  <button class="button">Go back to group</button>

</section>
