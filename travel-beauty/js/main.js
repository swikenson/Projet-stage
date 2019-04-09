// $(document).ready(function(){
//     $(window).on('scroll', function () {
//         var scroll = $(window).scrollTop();
//
//         $('header').each(function() {
//
//             var topImg = $(this).offset().top - 300;
//
//             if ( topImg < scroll ) {
//
//                 $(this).css("transform", "translate(0,0)");
//                 $(this).css("opacity", "1");
//
//             };
//         });
//     });
// });

$(document).ready(function(){
    // Change this to the correct selector.
    $('header').midnight();
});