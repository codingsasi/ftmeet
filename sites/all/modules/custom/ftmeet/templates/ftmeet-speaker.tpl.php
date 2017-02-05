<?php
/**
 * @file Template file for speaker profile at speaker/%user.
 */
?>

<div>
  <div class="speaker-image">
    <img src="<?php print file_create_url($speaker['image']); ?>" width="100%"/>
  </div>
  <p class="speaker-description"><?php print $speaker['description']; ?></p>
  <?php if ($speaker['facebook']): ?>
    <h4 class="speaker-facebook"><?php print $speaker['facebook']; ?></h4>
  <?php endif ?>
</div>
