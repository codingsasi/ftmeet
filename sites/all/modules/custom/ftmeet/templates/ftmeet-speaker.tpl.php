<?php
/**
 * @file Template file for speaker profile at speaker/%user.
 */
?>

<div>
<div><img src="<?php print file_create_url($speaker['image']); ?>" width="100%"/></div>
<p><?php print $speaker['description']; ?></p>
<h4><?php print $speaker['facebook']; ?></h4>
</div>
