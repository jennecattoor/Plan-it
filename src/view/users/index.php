<section class="content">
<ul class="demo-list">
<?php
    foreach ($users as $user){
      echo('<li>' . $user->id . '</li>');
    }
  ?>
  </ul>
</section>
