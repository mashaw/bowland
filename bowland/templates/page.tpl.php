<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>



<div id="page">

  <header class="header" id="header" role="banner">

  <div class="branding">

            <a href="<?php print $front_page; ?>" title="<?php print $site_name ?> : <?php print $site_slogan ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print $site_name ?> : <?php print $site_slogan ?>" class="header__logo-image" /></a>

     </div>

     <div class="header-search">

    <?php print render($page['header']); ?>

    </div>

  </header>

  <div id="main">


     <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>




      <div id="navigation">

      <?php print render($page['navigation']); ?>

    </div>

      <?php endif; ?>

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title && !$is_front): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </div>


	   <?php
      // Render the sidebars to see if there's anything in them.
    $content_row_1  = render($page['content_row_1']);
    ?>
<div class="content_rows">
    <?php if ($content_row_1): ?>
      <aside class="content_row">
        <?php print $content_row_1; ?>
      </aside>
    <?php endif; ?>

     </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
