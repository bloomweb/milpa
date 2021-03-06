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
        <div class="logo-wrapper">
         <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="sprite sprite-logo"
           id="logo"></a>
        </div>


        <div class="garden-tools">
            <div class="sprite sprite-header_garden_tools"></div>
        </div>

        <div class="contact_info">
            <div class="social">
                <a target="_blank" class="sprite sprite-facebook_icon" href="#"></a>
                <a target="_blank" class="sprite sprite-twitter_icon" href="#"></a>
                <a target="_blank" class="sprite sprite-linked_in_icon" href="#"></a>
                <div style="clear:both;float:none;"></div>
            </div>
            <div class="info">
                <p>
                    ave. 2da oeste # 10 -130 <br />
                    edificio tempo &middot; ofic. 801<br />
                    santa rita &middot; cali &middot; colombia<br />
                </p>
                <p>
                    <a href="mailto:hola@milpaestudio.com">hola@milpaestudio.com</a><br />
                    t (+57) 312 795 8233

                </p>
            </div>

        </div>
        <div style="clear:both;float:none;"></div>
        <?php print render($page['header']); ?>

    </header>



    <div id="main">

        <div id="content" class="column" role="main">
            <?php print render($page['highlighted']); ?>
            <?php print $breadcrumb; ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
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
            <?php print $feed_icons; ?>
        </div>

        <div id="navigation">

            <?php if ($main_menu): ?>
                <nav id="main-menu" class="sprite sprite-menu_borders" role="navigation" tabindex="-1">
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

        <?php
        // Render the sidebars to see if there's anything in them.
        $sidebar_first = render($page['sidebar_first']);
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
