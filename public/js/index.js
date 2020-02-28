var owl = $('.owl-testimonial');
  owl.owlCarousel({
    items:2,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true
});
  $(document).ready(function(){
  $('a').each(function() {
    var a = new RegExp('/' + window.location.host + '/');
    if(!a.test(this.href)) {
      $(this).click(function(event) {
        event.preventDefault();
        event.stopPropagation();
        window.open(this.href, '_blank');
      });
    }
  });
});
var owl = $('.owl-clients');
owl.owlCarousel({
    items:8,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:700,
    autoplayHoverPause:true
})
