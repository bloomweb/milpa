<?php

/**
 * @file
 * Display Suite 1 column template.
 */
$ds_content = str_replace('id="node_cliente_cliente_proyectos_group_imagen"','',$ds_content);
$ds_content = str_replace('id="node_cliente_cliente_proyectos_group_informacion"','',$ds_content)

?>
    <<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">

<?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>

<?php print $ds_content; ?>
    </<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
    <?php print $drupal_render_children ?>
<?php endif; ?>