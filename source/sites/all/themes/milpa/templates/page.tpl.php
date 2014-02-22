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

        <div id="navigation">

            <?php if ($main_menu): ?>
                <nav id="main-menu" role="navigation" tabindex="-1">
                    <?php
                    // This code snippet is hard to modify. We recommend turning off the
                    // "Main menu" on your sub-theme's settings form, deleting this PHP
                    // code block, and, instead, using the "Menu block" module.
                    // @see https://drupal.org/project/menu_block
                    print theme('links__system_main_menu', array(
                        'links' => $main_menu,
                        'attributes' => array(
                            'class' => array('links', 'inline', 'clearfix'),
                        ),
                        'heading' => array(
                            'text' => t('Main menu'),
                            'level' => 'h2',
                            'class' => array('element-invisible'),
                        ),
                    )); ?>
                </nav>
            <?php endif; ?>

            <?php print render($page['navigation']); ?>

        </div>
        <?php print render($page['header']); ?>

    </header>

    <div id="main">

        <div id="content" class="column" role="main">
            <?php print render($page['highlighted']); ?>
            <?php print $breadcrumb; ?>
            <a id="main-content"></a>

            <div id="content-top">
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                    <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php print $messages; ?>

                <?php print render($page['contet_top']); ?>

            </div>

            <div id="content-body">

                <?php print render($tabs); ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>

                <?php print render($page['content']); ?>


                <?php print $feed_icons; ?>

            </div>

        </div>

    </div>
    <div id="brand-info">

        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo"
               id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"
                              class="header__logo-image"/></a>

        <?php endif; ?>


        <?php print render($page['brand_info']); ?>
    </div>

    <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
