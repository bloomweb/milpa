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


    //FRONT PAGE
    $(function () {

        if ($('body').is(".front")) {

            centrarContentenidoDeBienvenida = function () {
                marginForCenter = parseInt(( ( $(document).height() - $("#content").height() ) / 2) - 25);
                $("#content").css("margin-top", marginForCenter + "px");
            }

            centrarContentenidoDeBienvenida();

            $canvas = $("#tamanoCliente");
            $companiSizes = $(".tamano");
            $companiSizes.find(".texto").slideUp();

            $tamanoSeleccionadoPorCookie = $companiSizes.filter(".open");
            if ($tamanoSeleccionadoPorCookie.length) { // si se carga con un tipo de compania seleccionado (cookie)

                $tamanoSeleccionadoPorCookie.find(".texto").slideDown().find(".nombre span").removeClass('sprite-gray_right_arrow').addClass("sprite-gray_down_arrow");
                $canvas.removeClass("sprite-company_sizes_empty sprite-tid-1 sprite-tid-2 sprite-tid-3").addClass($tamanoSeleccionadoPorCookie.attr('rel'));

            }

            $companiSizes.hover(

                function () {

                    if (!$(this).is('.open')) {

                        $companiSizes.find(".texto").slideUp().addClass("open");
                        $companiSizes.find(".nombre span").removeClass("sprite-gray_down_arrow").addClass('sprite-gray_right_arrow');
                        $(this).find(".nombre span").removeClass('sprite-gray_right_arrow').addClass("sprite-gray_down_arrow");
                        $(this).find(".texto").slideDown();
                        $companiSizes.removeClass("open");
                        $(this).addClass("open");
                        $canvas.removeClass("sprite-company_sizes_empty sprite-tid-1 sprite-tid-2 sprite-tid-3").addClass($(this).attr('rel'));

                    }

                },
                function () {

                }

            );

            $companiSizes.click(function (e) {

                e.preventDefault();
                $.cookie('tipo_cliente', $(this).attr('rel').slice(-1), { expires: 1, path: '/' });
                window.location = "/el-trabajo";

            });

            $(".front .saltar").click(function (e) {

                e.preventDefault();
                $.removeCookie('tipo_cliente');
                //$.cookie('tipo_cliente', $(this).attr('rel').slice(-1), { expires: 1, path: '/' });
                window.location = "/el-trabajo";

            });

            $(window).resize(function () {
                centrarContentenidoDeBienvenida();
            });
        }

    });

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
