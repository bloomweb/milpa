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


// Place your code here.

    $(function(){

        if($('body').is(".front")){

            centrarContentenidoDeBienvenida = function (){
                marginForCenter = parseInt( ( ( $(document).height() - $("#content").height() ) /2) -25 );
                $("#content").css("margin-top",marginForCenter+"px");
            }

            centrarContentenidoDeBienvenida();

            $canvas = $("#tamanoCliente");
            $companiSizes = $(".tamano");
            $companiSizes.find(".texto").slideUp();

            $tamanoSeleccionadoPorCookie = $companiSizes.filter(".open");
            if( $tamanoSeleccionadoPorCookie.length ){ // si se carga con un tipo de compania seleccionado (cookie)

                $tamanoSeleccionadoPorCookie.find(".texto").slideDown().find(".nombre span").removeClass('sprite-gray_right_arrow').addClass("sprite-gray_down_arrow");
                $canvas.removeClass("sprite-company_sizes_empty sprite-tid-1 sprite-tid-2 sprite-tid-3").addClass( $tamanoSeleccionadoPorCookie.attr('rel') );

            }

            $companiSizes.hover(

                function(){

                    if( !$(this).is('.open') ){

                        $companiSizes.find(".texto").slideUp().addClass("open");
                        $companiSizes.find(".nombre span").removeClass("sprite-gray_down_arrow").addClass('sprite-gray_right_arrow');
                        $(this).find(".nombre span").removeClass('sprite-gray_right_arrow').addClass("sprite-gray_down_arrow");
                        $(this).find(".texto").slideDown();
                        $companiSizes.removeClass("open");
                        $(this).addClass("open");
                        $canvas.removeClass("sprite-company_sizes_empty sprite-tid-1 sprite-tid-2 sprite-tid-3").addClass( $(this).attr('rel') );

                    }

                },
                function(){

                }

            );

            $companiSizes.click(function(e){

                e.preventDefault();
                $.cookie('tipo_cliente', $(this).attr('rel').slice(-1), { expires: 1, path: '/' });
                window.location = "/proyectos";

            });

            $(".front .saltar").click(function(e){

                e.preventDefault();
                $.removeCookie('tipo_cliente');
                //$.cookie('tipo_cliente', $(this).attr('rel').slice(-1), { expires: 1, path: '/' });
              window.location = "/proyectos";

            });

            $(window).resize(function(){
                centrarContentenidoDeBienvenida();
            });
        }

    });

$(function(){

    $("#main-menu li:not(.last)").append("<span class='divider sprite sprite-gray_perpendicular_lin'></span>");

    jQuery('.view-estudio .view-content').cycle({ // slider for person scroller
        fx: 'fade',
        next:   '.next-person',
        prev:   '.prev-person',
        timeout: 1000
    }).append("<div style='clear:both'></div>");


});

})(jQuery, Drupal, this, this.document);
