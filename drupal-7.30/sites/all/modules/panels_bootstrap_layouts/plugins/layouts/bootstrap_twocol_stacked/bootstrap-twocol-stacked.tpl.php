<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row-fluid">
    <?php print $content['top']; ?>
    <div class="clearfix"></div>
  </div>
  <div class="row-fluid">
    <?php print $content['left']; ?>
    <?php print $content['right']; ?>
    <div class="clearfix"></div>
  </div>
  <div class="row-fluid">
    <?php print $content['bottom']; ?>
    <div class="clearfix"></div>
  </div>
</div>
