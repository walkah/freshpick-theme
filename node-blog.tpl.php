<div id="node-<?php print $node->nid; ?>" class="entry node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php print $picture ?>

<?php if (!$page): ?>
  <div class="image-block">
    <?php print $node->field_photo[0]['view']; ?>
  </div>
<?php endif; ?>

<div class="text-block post">
  <?php if (!$page): ?>
    <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>

  <?php if ($submitted): ?>
    <p class="post-info"><?php print $submitted ?></p>
  <?php endif; ?>

  <?php if ($terms && !$teaser): ?>
    <div class="terms terms-inline"><?php print $terms ?></div>
  <?php endif;?>

  <?php if ($page): ?>
  <div class="image-section">
    <?php print $node->field_photo[0]['view']; ?>
  </div>
  <? endif; ?>

  <div class="content">
    <?php print $node->content['body']['#value']; ?>
  </div>

  <?php if ($more_link): ?>
  <p><?php print $more_link; ?></p>
  <?php endif; ?>
  
  <?php if ($page && $links): ?>
  <p class="postmeta"><?php print $links; ?></a>
  <?php endif; ?>
</div>
</div>