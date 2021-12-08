<section class="content">

  <div class="event-info">
    <h2><?php echo $event['name']; ?></h2>

    <hr>

    <h3><?php echo $event['date']; ?></h3>

    <hr class="hr-footer">

    <p><?php echo $event['description']; ?></p>
    <br>
    <p><?php echo $event['location']; ?></p>

    <hr>

    <div>
      <p> Necessities to be brought </p>
    <?php foreach($event->items as $item): ?>
        <li>
          <?php echo $item['name']; ?> - <?php
          if(!empty($item->users->first()->name)) {
            echo $item->users->first()->name;
           }

          if(empty($item->users->first()->name)) {
            ?><a href=#>I will do this</a>
          <?php ;} ?>
        </li>
       <?php endforeach; ?>
    </div>

  </div>

  <button class="button">Go back to group</button>

</section>
