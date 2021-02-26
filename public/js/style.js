
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
        320:{
            items:2,
            margin:80
        },
        768:{
            items:4,
        },
        1024:{
            items:5,
        },
        1210:{
            items:7,
        },
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