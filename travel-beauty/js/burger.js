$( document ).ready(function() {
    $( ".hamburger" ).click(function() {
        // $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
            $('.menu').show();
            // $(".hamburger").toggleClass("d-none");
            // $(".cross").toggleClass("d-none");
            // $(".social").show();
            console.log('toto');
        // });
    });

    $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
            // $(".hamburger").toggleClass("d-none");
            // $(".cross").toggleClass("d-none");
            // $(".social").hide();
            console.log('tata');
        });
    });



});