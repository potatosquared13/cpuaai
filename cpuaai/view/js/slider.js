jQuery(document).ready(function(){
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      items:4,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:1000,
      autoplayHoverPause:true
    });
    jQuery('.play').on('click',function(){
      owl.trigger('autoplay.play.owl',[1000])
    });
    jQuery('.stop').on('click',function(){
      owl.trigger('autoplay.stop.owl')
    });
  });
  