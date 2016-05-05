<?php

/**
 * @file
 * Theme implementation to display teaser for an article node.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $user_picture; ?>
      <ba><?php print $author; ?></ba>
      <p class="date"><?php print format_date($created, 'medium'); ?></p>
    </div>
  <?php endif; ?>

  <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h4<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h4>
    <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
