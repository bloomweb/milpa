<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<?php if ($page): ?>
    <article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
            <header>
                <?php print render($title_prefix); ?>
                <?php if (!$page && $title): ?>
                    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a>
                    </h2>
                <?php endif; ?>
                <?php print render($title_suffix); ?>

                <?php if ($display_submitted): ?>
                    <p class="submitted">
                        <?php print $user_picture; ?>
                        <?php print $submitted; ?>
                    </p>
                <?php endif; ?>

                <?php if ($unpublished): ?>
                    <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
                <?php endif; ?>
            </header>
        <?php endif; ?>

        <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        ?>
        <div class="cliente-cointainer">

            <div class="cliente-info">
                <div class="description">
                    <?php print $field_descripcion[0]['value']; ?>
                </div>
                <div class="testimonial">
                    <?php
                        $testimonio = current( entity_load('field_collection_item',$field_col_testimonio[0]) );
                    ?>
                    <div class="texto">
                        "<?php print $testimonio -> field_testimonio['und'][0]['value'] ?>"
                    </div>
                    <div class="author">
                       - <?php print $testimonio -> field_nombre_persona['und'][0]['value'] ?>,
                    </div>
                    <div class="cargo">
                        <?php print $testimonio -> field_cargo['und'][0]['value'] ?>
                    </div>
                <?php ?>
                </div>
            </div>

            <div class="cuadricula-container">

                <?php if (count($field_cuadricula_de_trabajos) > 1): ?>
                <div id="cuadricula-controls">
                    <span class="prev-cuadricula pointer sprite sprite-gray_left_arrow"></span>

                    <div class="cycle-pager">
                </div>
                <span class="next-cuadricula pointer sprite sprite-gray_right_arrow"></span>
            </div>
            <?php endif; ?>

            <div class="cuadricula-wrapper">


                <?php foreach ($field_cuadricula_de_trabajos as $cuadiculaID): ?>
                    <div class="cuadricula">
                        <div class="wrapper">
                            <?php $cuadricula = current(entity_load('field_collection_item', $cuadiculaID)); ?>
                            <?php foreach ($cuadricula->field_imagen_cuadricula['und'] as $image): ?>
                                <?php
                                $image = current(entity_load('field_collection_item', $image));
                                $filaInicial = $image->field_fila_inicial['und'][0]['value'];
                                $columnaInicial = $image->field_columna_inicial['und'][0]['value'];
                                $left = isset($image->field_desplazamiento_izquierda['und'][0]['value']) ? $image->field_desplazamiento_izquierda['und'][0]['value'] : 0;
                                $top = isset($image->field_desplazamiento_derecha['und'][0]['value']) ? $image->field_desplazamiento_derecha['und'][0]['value'] : 0;
                                ?>

                                <div class="celda <?php print 'r' . $filaInicial;
                                print ' c' . $columnaInicial ?>"
                                     style="<?php print "left:" . (($columnaInicial - 1) * 117 + $left) . "px;top:" . (($filaInicial - 1) * 117 + $top) . "px;" ?>">
                                    <div class="container">
                                        <?php print theme_image(array('path' => $image->field_image['und'][0]['uri'], 'attributes' => array('class' => array('imagen-cuadricula')))); ?>
                                        <?php if (isset($image->field_imagen_grande['und'][0]['uri'])): ?>
                                            <div class="ico launch-image" rel="imagen"></div>
                                            <div
                                                class="big-image <?php print $image->field_direcci_n_despliegue_image['und'][0]['value'] ?>">
                                                <?php print theme_image(array(
                                                    'path' => $image->field_imagen_grande['und'][0]['uri'],
                                                    'attributes' => array(
                                                        'class' => array('')
                                                    )
                                                )); ?>
                                                <div class="ico close hide-image"></div>
                                            </div>

                                            <?php //field_direcci_n_despliegue_image ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (count($field_cuadricula_de_trabajos) > 1): ?>
            <div id="cuadricula-controls">
                <span class="prev-cuadricula pointer sprite sprite-gray_left_arrow"></span>

                <div class="cycle-pager">
            </div>
            <span class="next-cuadricula pointer sprite sprite-gray_right_arrow"></span>
        </div>
    <?php endif; ?>

        </div>

        </div>

        <?php print render($content['links']); ?>

        <?php print render($content['comments']); ?>

    </article>
<?php else: ?>
    asdfadf
<?php endif; ?>