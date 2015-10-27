$(document).ready(function() {

    $("#featured-slide").owlCarousel({
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem : true,
        loop: true,
        margin: 0
      });

    $("#specials,#holiday-types").owlCarousel({
        items : 4,
        margin:10,
        lazyLoad : true,
        navigation : true
    });

    $("#resortslogo").owlCarousel({
        items : 7,
        margin:10,
        lazyLoad : true,
        navigation : true
    });    

    $("#testimonials").owlCarousel({
        items : 1,
        margin:0,
        autoPlay : 3000,
        stopOnHover : true,
        lazyLoad : true,
        navigation : true
  });

});

//Toggle
$(document).ready(function(){
    $("a.quik").click(function(){
        $("ul").toggle();
    });
});

//Gama Gallery

$(function() {

    var GammaSettings = {
            // order is important!
            viewport : [ {
                width : 1200,
                columns : 4
            }, {
                width : 900,
                columns : 3
            }, {
                width : 500,
                columns : 2
            }, { 
                width : 320,
                columns : 1
            }, { 
                width : 0,
                columns : 1
            } ]
    };

    Gamma.init( GammaSettings, fncallback );


    // Example how to add more items (just a dummy):

    var page = 0,
        items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="assets/images/featured-resorts.gif"></div><noscript><img src="assets/images/featured-resorts.gif" alt="img03"></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="assets/images/featured-resorts.gif"></div><noscript><img src="assets/images/featured-resorts.gif" alt="img03"></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="assets/images/featured-resorts.gif"></div><noscript><img src="assets/images/featured-resorts.gif" alt="img03"></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="assets/images/featured-resorts.gif"></div><noscript><img src="assets/images/featured-resorts.gif" alt="img03"></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="assets/images/featured-resorts.gif"></div><noscript><img src="assets/images/featured-resorts.gif" alt="img03"></noscript></div></li>']

    function fncallback() {

        $( '#loadmore' ).show().on( 'click', function() {

            ++page;
            var newitems = items[page-1]
            if( page <= 1 ) {
                
                Gamma.add( $( newitems ) );

            }
            if( page === 1 ) {

                $( this ).remove();

            }

        } );

    }

});