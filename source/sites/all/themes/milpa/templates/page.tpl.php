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
    	<div class="logo_mobile" style="display: none;">
    		<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image"/>
    	</div>

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
            	<div class="filter">
            		<a>chiquito</a>
            		<a>mediano</a>
            		<a>grande</a>
            		<a>ver todos</a>
            	</div>
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
                
                <article>
                
	                <div class="col">
	                	
					nos gusta labrar los terrenos para sembrar semillas que dan frutos; a partir de una estrategia, con creatividad convertimos tu marca en un ser vivo, definido, coherente, auténtico, capaz no sólo de relacionarse con las 
					personas a su alrededor sino de enamorar a su público objetivo, logrando posicionamiento y fidelidad.
					<br /><br />
					nuestro proceso parte de una investigación que traducimos a una estrategia de donde se desprenden miles de posibilidades creativas para conectar a las marcas con las personas de forma constructiva y sostenible, apuntándole al desarrollo de la sociedad y -por supuesto- al incremento de las ventas.
					<br /><br />
					creemos en la gente, en el equilibrio, la transparencia, la excelencia, el trasnocho, la familia, el trabajo en equipo y somos amantes del poder del diseño en la comunicación, el cual consideramos una herramienta poderosa para lograr cambios positivos en nuestro entorno.
					
	                </div>
	                <div class="col">
	                	
					sociedad y -por supuesto- al incremento de las ventas.
					<br /><br />
					creemos en la gente, en el equilibrio, la transparencia, la excelencia, el trasnocho, la familia, el trabajo en equipo y somos amantes del poder del diseño en la comunicación, el cual consideramos una herramienta poderosa para lograr cambios positivos en nuestro entorno.
					<br /><br />
					creemos que tu marca también puede hacer la diferencia. 
					hablemos!
	
	                </div>
	                
	                <div class="col services">
	                <a>estrategia de marca</a>
	                <br />
					<a>creación de marca</a>
					<br />
					<a>identidad corporativa</a>
					<br />				
					<a>revitalización de marca</a>
					<br />
					<a>consultoría</a>
					<br />
					<a>estrategias creativas de comunicación</a>
	
	                </div>
                
                </article>
                

            </div>

        </div>
        
        <div style="clear: both;"></div>

    </div>
    
    <!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="sites/all/themes/milpa/css/owl.carousel.css">
	 
	<!-- Default Theme -->
	<link rel="stylesheet" href="sites/all/themes/milpa/css/owl.theme.css">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script> 
	 
	<!-- Include js plugin -->
	<script src="sites/all/themes/milpa/js/owl.carousel.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			var owl = $("#owl-demo");
 
		  $("#owl-example").owlCarousel({
		  	items : 2
		  	
		  });
		  $(".next").click(function(){
		    owl.trigger('owl.next');
		  })
		  $(".prev").click(function(){
		    owl.trigger('owl.prev');
		  })
		 
		});
	</script>
    
    
    
    <div id="brand-info">

        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo"
               id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image"/></a>

        <?php endif; ?>

		<p>
			Ave. 2da oeste # 10-130
			<br />
			Edificio tiempo • Ofic. 801
			<br />
			Santa rita • Cali • Colombia
			
			<br /><br />
			<a href="mailto:hola@milpastudio.com">hola@milpastudio.com</a>
			<br />
			t(+57) 312 795 82 33
			
			<div class="social">
				<a href="#"><img src="/sites/all/themes/milpa/images/facebook.png" /></a>
				<a href="#"><img src="/sites/all/themes/milpa/images/twitter.png" /></a>
				<a href="#"><img src="/sites/all/themes/milpa/images/linkedin.png" /></a>
			</div>
		</p>
		
        <?php print render($page['brand_info']); ?>
    </div>
    <!--<a class="btn prev"><img src="/sites/all/themes/milpa/images/left.png" /></a>
    <a class="btn next"><img src="/sites/all/themes/milpa/images/right.png" /></a>-->
    <div id="owl-example" class="owl-carousel">
    	
	  	<div>
			<img src="sites/all/themes/milpa/images/ingrid.jpg" />
			<h1>ingrid claussen</h1>
			<p>
				diseñadora de comunicación, esposa y mamá de 2. estudió diseño de comunicación visual, - con énfasis en diseño sostenible- en colonia, alemania, y diseño gráfico en barcelona. 
				<br /><br />
				vivió 9 años en europa y hoy es feliz en cali.
				<br /><br />
				es profesora de "experiencia de marca" e "identidad corporativa" en la universidad javeriana. hace parte del del comité de carrera de diseño de comunicación visual de la universidad y coordinadora del énfasis de marca de la carrera.
				<br /><br />
				“amo todo de mi trabajo y estoy lista para trabajar con vos!”
				<br /><br />
				<a href="#">iclaussen@milpaestudio.com</a>
			</p>
		</div>
		<div>
			<img src="sites/all/themes/milpa/images/andrea.jpg" />
			<h1>ingrid claussen</h1>
			<p>
				diseñadora de comunicación, esposa y mamá de 2. estudió diseño de comunicación visual, - con énfasis en diseño sostenible- en colonia, alemania, y diseño gráfico en barcelona. 
				<br /><br />
				vivió 9 años en europa y hoy es feliz en cali.
				<br /><br />
				es profesora de "experiencia de marca" e "identidad corporativa" en la universidad javeriana. hace parte del del comité de carrera de diseño de comunicación visual de la universidad y coordinadora del énfasis de marca de la carrera.
				<br /><br />
				“amo todo de mi trabajo y estoy lista para trabajar con vos!”
				<br /><br />
				<a href="#">iclaussen@milpaestudio.com</a>
			</p>
		</div>
		<div>
			<img src="sites/all/themes/milpa/images/alejandro.jpg" />
			<h1>ingrid claussen</h1>
			<p>
				diseñadora de comunicación, esposa y mamá de 2. estudió diseño de comunicación visual, - con énfasis en diseño sostenible- en colonia, alemania, y diseño gráfico en barcelona. 
				<br /><br />
				vivió 9 años en europa y hoy es feliz en cali.
				<br /><br />
				es profesora de "experiencia de marca" e "identidad corporativa" en la universidad javeriana. hace parte del del comité de carrera de diseño de comunicación visual de la universidad y coordinadora del énfasis de marca de la carrera.
				<br /><br />
				“amo todo de mi trabajo y estoy lista para trabajar con vos!”
				<br /><br />
				<a href="#">iclaussen@milpaestudio.com</a>
			</p>
		</div>
		<div>
			<img src="sites/all/themes/milpa/images/eliza.jpg" />
			<h1>ingrid claussen</h1>
			<p>
				diseñadora de comunicación, esposa y mamá de 2. estudió diseño de comunicación visual, - con énfasis en diseño sostenible- en colonia, alemania, y diseño gráfico en barcelona. 
				<br /><br />
				vivió 9 años en europa y hoy es feliz en cali.
				<br /><br />
				es profesora de "experiencia de marca" e "identidad corporativa" en la universidad javeriana. hace parte del del comité de carrera de diseño de comunicación visual de la universidad y coordinadora del énfasis de marca de la carrera.
				<br /><br />
				“amo todo de mi trabajo y estoy lista para trabajar con vos!”
				<br /><br />
				<a href="#">iclaussen@milpaestudio.com</a>
			</p>
		</div>
		
	</div>
	
	 <div style="clear: both;"></div>
	
    <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
