<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 *
 * PROYECTOS PAGE CONTENT
 */
?>

<?php if( isset($_COOKIE['tipo_cliente']) && $_COOKIE['tipo_cliente']): ?>
    <div class="clientes-como-tu-container catalogo-una-linea catalogo proyectos">

        <div class="left-tab sprite sprite-clientes_como_tu"> clientes como tu</div>
        <?php print views_embed_view('cat_logo', 'proyectos_como_tu'); ?>
        <div style="clear:both;"></div>

    </div>
    <div class="otros-clientes-container catalogo-una-linea catalogo proyectos">

        <div class="left-tab sprite sprite-otros_clientes"> clientes como tu</div>
        <?php print views_embed_view('cat_logo', 'otros_proyectos'); ?>
        <div style="clear:both;"></div>

    </div>
<?php else: ?>

    <div class="clientes-como-tu-container catalogo-completo catalogo proyectos">

        <?php print views_embed_view('cat_logo', 'todos_los_proyectos'); ?>

    </div>

<?php endif;?>
