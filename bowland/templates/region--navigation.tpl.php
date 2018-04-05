<?php
/**
 * @file
 * Returns HTML for a region.
 *
 * Complete documentation for this file is available online.
 * see https://drupal.org/node/1728112
 */
?>

<script type="text/javascript">

(function($) {
    // This jQuery function is called when the document is ready
    $(function() {
       $('input#menu-toggler').click(function() {
          $("body").toggleClass("overlay");
        });
    });
  })(jQuery);
  </script>
    <input type="checkbox" id="menu-toggler"/>
<label for="menu-toggler"><span>Menu</span></label>


<div class="<?php print $classes; ?>">
<?php if ($content): ?>
<?php print $content; ?>
<?php endif; ?>
</div>
