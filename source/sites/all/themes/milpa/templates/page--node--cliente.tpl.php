<?php
	/**
	 * @file
	 * Returns the HTML for a single Drupal page.
	 *
	 * Complete documentation for this file is available online.
	 * @see https://drupal.org/node/1728148
	 */
$tipoCliente = isset($_COOKIE["tipo_cliente"]) && !empty($_COOKIE["tipo_cliente"])?$_COOKIE["tipo_cliente"]:"all";
?>
	<div id="page">
		<header class="header" id="header" role="banner">
			<div class="logo_mobile" style="display: none;">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image"/>
			</div>

			<div id="navigation">

				<?php if($main_menu): ?>
					<nav id="main-menu" role="navigation" tabindex="-1">
						<?php
							// This code snippet is hard to modify. We recommend turning off the
							// "Main menu" on your sub-theme's settings form, deleting this PHP
							// code block, and, instead, using the "Menu block" module.
							// @see https://drupal.org/project/menu_block
							print theme('links__system_main_menu', array(
								'links'      => $main_menu,
								'attributes' => array(
									'class' => array('links', 'inline', 'clearfix'),
								),
								'heading'    => array(
									'text'  => t('Main menu'),
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

        <div id="size-filters">
            <a class="size-filter <?php if($tipoCliente== 3) print "active" ?>" href="#" rel="3">chiquito</a>
            <a class="size-filter <?php if($tipoCliente== 2) print "active" ?>" href="#" rel="2">mediano</a>
            <a class="size-filter <?php if($tipoCliente== 1) print "active" ?>" href="#" rel="1">grande</a>
            <a class="size-filter <?php if($tipoCliente== "all" ) print "active" ?>" href="#" rel="all">ver todos</a>
        </div>

		<div id="main">



			<div id="content" class="column" role="main">
				<?php print render($page['highlighted']); ?>
				<?php print $breadcrumb; ?>
				<a id="main-content"></a>

				<div id="content-top">
					<?php print render($title_prefix); ?>

					<?php /* if($title): ?>
                    <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
                <?php endif; ?>
					<div class="page__title title" id="page-title">
						<?php if(isset($node->field_frases['und'][0])): ?>
							<div
								id="frases"
								class="cycle-slideshow"
								data-cycle-fx="fade"
								data-cycle-timeout="10000"
								data-cycle-speed="2000"
								data-cycle-slides="> div"
							    data-cycle-random="true"
							    data-cycle-sync="false"
							>
								<?php foreach($node->field_frases['und'] as $key => $value): ?>
									<div class="frase"><p><?php print $value['value']; ?></p></div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
                    */
                    ?>
					<?php print render($title_suffix); ?>
					<?php print $messages; ?>

					<?php print render($page['contet_top']); ?>

				</div>

				<div id="content-body">

					<?php print render($tabs); ?>
					<?php print render($page['help']); ?>
					<?php if($action_links): ?>
						<ul class="action-links"><?php print render($action_links); ?></ul>
					<?php endif; ?>

					<?php //print render($page['content']); ?>


					<?php print $feed_icons; ?>

					<article>

						<div class="col first">
							<?php
								if(isset($node->field_descripcion['und'][0]['value'])) {
									print $node->field_descripcion['und'][0]['value'];
								}
							?>
                            <div class="line"></div>
                            <div
                                id="testimonios"
                                class="cycle-slideshow"
                                data-cycle-fx="fade"
                                data-cycle-timeout="10000"
                                data-cycle-speed="2000"
                                data-cycle-slides="> div"
                                data-cycle-random="true"
                                data-cycle-sync="false"
                                >
                                <?php print views_embed_view('testimonios', 'block_testimonios',$node -> nid); ?>
                            </div>
						</div>
						<div class="col double">
                            <?php print views_embed_view('cat_logo', 'proyectos_cliente',$node -> nid); ?>
						</div>



					</article>


				</div>

			</div>

			<div style="clear: both;"></div>

		</div>

		<div id="brand-info">

			<?php if($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo"
				   id="logo">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image"/>
				</a>
			<?php endif; ?>

			<p>
				Ave. 2da oeste # 10-130
				<br/>
				Edificio tiempo • Ofic. 801
				<br/>
				Santa rita • Cali • Colombia

				<br/>
				<br/>
				<a href="mailto:hola@milpastudio.com">hola@milpastudio.com</a>
				<br/>
				t(+57) 312 795 82 33

			<div class="social">
				<a href="#"><img src="/sites/all/themes/milpa/images/facebook.png"/></a>
				<a href="#"><img src="/sites/all/themes/milpa/images/twitter.png"/></a>
				<a href="#"><img src="/sites/all/themes/milpa/images/linkedin.png"/></a>
			</div>
			</p>

			<?php print render($page['brand_info']); ?>
		</div>

		<div style="clear: both;"></div>

		<?php print render($page['footer']); ?>

	</div>

<?php print render($page['bottom']); ?>