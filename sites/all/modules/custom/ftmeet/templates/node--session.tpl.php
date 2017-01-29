<?php

/**
 * @file
 * Template file for session content type
 */

?>
<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>
<?php endif; ?>
  <?php if (!$page): ?>
      <header>
  <?php endif; ?>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
      <h2 class="title" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <ul class="meta clearfix">
          <li><strong>Posted on:</strong> <?php print $date; ?></li>
          <li><strong>By:</strong> <?php print $name; ?></li>
        </ul>
      <?php endif; ?>

    <?php if (!$page): ?>
      </header>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // Hide comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_speaker']); ?>
      <h3><span>Speaker: </span><strong><?php print $full_name; ?></strong></h3>
      <?php print render($content);?>
  </div>

  <?php if (!empty($content['links'])): ?>
    <footer>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>
<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>
