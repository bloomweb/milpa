/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {

    // Tamaños de compañía
    $(function() {
        try {
            $companySize = $('.size-filter');
            $companySize.click(function(e) {
                e.preventDefault();
                $.cookie('tipo_cliente', $(this).attr('rel'), { expires: 1, path: '/' });
                window.location = window.location.pathname;
                /*pathname = window.location.pathname;
                if (pathname.indexOf('los-proyectos') != -1) {
                    window.location = "/los-proyectos";
                }
                if (pathname.indexOf('nuestros-clientes') != -1) {
                    window.location = "/nuestros-clientes";
                }*/
            });
        } catch (err) {
            console.log(err);
        }
    });

    // Servicios
    $(function() {
        try {
            $service = $('.service');
            $service.click(function(e) {
                e.preventDefault();
            });
        } catch (err) {
            console.log(err);
        }
    });

    // Slider personas
    $(function() {
        try {
            $owl = $("#owl-example");
            $owl.owlCarousel({
                items: 2
            });
        } catch (err) {
            console.log(err);
        }
    });

})(jQuery, Drupal, this, this.document);
