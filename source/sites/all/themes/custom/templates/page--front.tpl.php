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
    <div id="main">

        <div id="content" class="column" role="main">
            <?php print render($page['highlighted']); ?>
            <?php print $breadcrumb; ?>
            <a id="main-content"></a>

            <?php print $messages; ?>
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>


            <div class="hola-message sprite-hola sprite"></div>

            <a class="saltar dk" href="/proyectos">
                SALTAR

            </a>

            <div class="sprite-gray_2px_lin sprite"></div>

            <div id="tamanoCliente" class="sprite sprite-company_sizes_empty">
                <?php
                $vid = taxonomy_vocabulary_machine_name_load('tamano_clientes');
                $terms = taxonomy_get_tree($vid->vid, 0, null, true);

                ?>

                <?php foreach ($terms as $pos => $term): ?>

                    <div class="tamano <?php print "pos-" . $pos." tid-".$term -> tid; if( isset($_COOKIE["tipo_cliente"]) && $_COOKIE["tipo_cliente"] == $term -> tid) print " open"; ?>" rel="<?php print "sprite-tid-".$term -> tid ?>">

                        <div class="nombre"><?php echo $term->name; ?> <span class="arrow sprite sprite-gray_right_arrow"></span></div>
                        <div class="texto">
                            <?php echo $term->description; ?>
                        </div>
                        <a class="select-company-size" href="#">
                            ENTRAR
                            <div class="sprite-gray_2px_lin sprite"></div>
                        </a>


                    </div>

                <?php endforeach; ?>

                <div style="clear:both;"></div>
                <?php print $feed_icons; ?>

            </div>

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

        <div id="footer">
            hacemos que lo bueno crezca
        </div>

    </div>



</div>

<?php print render($page['bottom']); ?>
