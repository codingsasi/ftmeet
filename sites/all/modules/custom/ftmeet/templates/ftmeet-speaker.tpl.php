<?php
/**
 * @file Template file for speaker profile at speaker/%user.
 */
?>

<div>
  <div class="speaker-image">
    <img src="<?php print file_create_url($speaker['image']); ?>" width="100%"/>
  </div>
  <br>
  <hr>
  <?php print $speaker['description']; ?>
  <br>
  <?php if ($speaker['facebook']): ?>
    <h4 class="speaker-facebook"><?php print $speaker['facebook']; ?></h4>
  <?php endif ?>
  <br>
</div>
