
$(document).ready(function(){
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    center: false,
    responsive:{
      0:{
        items:2,
      },
      576:{
        items:3,
      },
      768:{
        items:4,
      },
      1000:{
        items:6,
      }
  }
})
});

$(document).ready(function(){
    $(".next").click(function(){
      $(".myd").animate({right: '250px'});
    });

    $(".prev").click(function(){
        $(".myd").animate({left: '20px'});
      });  
  });