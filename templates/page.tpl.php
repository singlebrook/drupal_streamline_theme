<div class="wrapper">
  <header role="banner">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="name-and-slogan">
        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <h1 class="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header>

  <?php if ($main_menu): ?>
    <nav role="navigation" class="main-menu">
      <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
    </nav>
  <?php endif; ?>

  <?php print $messages; ?>

  <section role="main">
    <?php if ($breadcrumb): ?>
      <div class="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <article role="article">
      <?php if ($page['highlighted']): ?>
        <div class="highlighted"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h2 class="title"><?php print $title; ?></h2><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </article>

    <?php if ($page['sidebar_first']): ?>
      <aside id="" class="sidebar sidebar-first">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if ($page['sidebar_second']): ?>
      <aside class="sidebar sidebar-second">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </section>

  <footer role="contentinfo">
    <?php if ($secondary_menu): ?>
      <nav role="navigation">
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </nav>
    <?php endif; ?>
    <?php print render($page['footer']); ?>
  </footer>
</div>