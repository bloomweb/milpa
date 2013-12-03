<?php

?>

<?php foreach($items as $key => $cuadricula):?>
    <?php foreach( $cuadricula['entity']['field_collection_item']as  $cuadriculaId => $images):?>
        <div class="cuadricula">
            <?php foreach($images['field_imagen_cuadricula']['#items'] as $image): ?>
                <?php
                $image = current(entity_load('field_collection_item', $image));
                $filaInicial = $image -> field_fila_inicial['und'][0]['value'];
                $columnaInicial = $image -> field_columna_inicial['und'][0]['value'];
                $left = isset($image -> field_desplazamiento_izquierda['und'][0]['value'])?$image -> field_desplazamiento_izquierda['und'][0]['value']:0;
                $top = isset($image -> field_desplazamiento_derecha['und'][0]['value'])?$image -> field_desplazamiento_derecha['und'][0]['value']:0;
                ?>

                <div class="celda <?php print 'r'.$filaInicial; print ' c'.$columnaInicial ?>" style="<?php print "left:".(($columnaInicial-1)*117+$left)."px;top:".(($filaInicial-1)*117+$top)."px;"?>">
                    <div class="container">
                    <?php print theme_image(array('path' =>$image -> field_image['und'][0]['uri'], 'attributes' => array('class' => array('imagen-cuadricula')))); ?>
                    <?php if(isset($image -> field_imagen_grande['und'][0]['uri'])): ?>
                        <div class="ico launch-image" rel="imagen"></div>
                        <div class="big-image <?php print $image ->field_direcci_n_despliegue_image['und'][0]['value']?>">
                            <?php print theme_image(array(
                                'path' =>$image -> field_imagen_grande['und'][0]['uri'],
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
            <?php endforeach;?>

        </div>

     <?php endforeach; ?>
<?php  endforeach; /*?>
    <?php for($i=0,$r=1,$c=1 ; $i < 36 ; $i++,$c++):?>
       <?php $realC = $c-1; $realR= $r -1;?>
       <div class="celda <?php print 'r'.$r; print ' c'.$c ?>" style="<?php print "left:".($realC*117)."px;top:".($realR*117)."px;"?>">
           <?php print $r.$c;?>
       </div>
        <?php if($c == 6) {$r++; $c=0; } ?>
    <?php endfor; */?>

