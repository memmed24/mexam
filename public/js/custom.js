$(document).ready(function() {



    /*SITES FILTER START */
    var $sitefilters = $('.siteslist');
    $sitefilters.isotope({
        itemSelector: '.site'
    });
    
    $('.sitesListFilter li').on('click', function() {
        $('.sitesListFilter li[data-filter="*"').removeClass("active");
        if($(this).hasClass('active')) {
            $(this).removeClass("active");
        } else {
            $(this).addClass("active");
        }
        var filters = [];
        $('.sitesListFilter li.active').each(function(){    filters.push( $(this).attr('data-filter'));     });
        if(filters.length == 0) { $('.sitesListFilter li[data-filter="*"').addClass("active");}
        filters = filters.join(', ');
        $sitefilters.isotope({      filter: filters     });
        
    });
    
    /*SITES FILTER END */



    

  $(".fancyuser").fancybox({
      padding: 0,
      openEffect : 'fade',
      openSpeed  : 150,
      closeEffect : 'fade',
      closeSpeed  : 150,
      closeClick : false,
      autoCenter: true,
      autoSize   : false,
      width: 400 ,
      autoHeight: true,
      scrolling : 'auto',
      helpers : {
        overlay : true
      }
  });

  $('.reviewsCont').owlCarousel({
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:false
        }
    },
    pagination: false,
    autoplay: true,
    autoplaySpeed: 1000,
    stopOnHover: true,
    autoHeight: false
});


  var owlphone = $('#thiscarousel');
  owlphone.owlCarousel({
      margin: 10,
      loop: true,
      items:1,
      autoHeight:true,
      onInitialized: function() {
          console.log('initalised');
          var carouselHeight = $('.owl-height').height();
          $('.nextowl, .prevowl').height(carouselHeight);
      }
  });

  owlphone.on('changed.owl.carousel', function(event) {
      var carouselHeight = $('.owl-height').height();
      $('.nextowl, .prevowl').height(carouselHeight);
  });
  
  $('.nextowl').click(function() {  owlphone.trigger('next.owl.carousel');  });
  $('.prevowl').click(function() {  owlphone.trigger('prev.owl.carousel');  });


  
  $('.showtext').on('click', function(){   $(this).hide(); $('.hidetext').show();  });
  $('.mobile-menu').on('click',  function(){  $('.slide-mobile-menu').show(); });
  $('.slide-mobile-menu .closemenu').on('click',  function(){ $('.slide-mobile-menu').hide(); });
  $('.mainmenu li p.haschilds').on('click',  function(){
      if($(this).hasClass('opened')) {
          $(this).removeClass('opened').addClass('closed');
          $(this).siblings('ul.submenu').hide();
          $(this).siblings('span.collapse').text('+');
      } else {
          $(this).removeClass('closed').addClass('opened');
          $(this).siblings('ul.submenu').show();
          $(this).siblings('span.collapse').text('-');
      }
  });


$('.fagList .fag').on('click', function(){ 
    if($(this).hasClass('active')) {
        $(this).removeClass('active');
    } else {
        $('.fagList .fag').removeClass('active');
        $(this).addClass('active');
    }
});

  function HeaderLinks() {
      $('.headerProfileIcon').on('click', function (e) {
          if($(this).parent().attr('data-toggle') == 'opened') {
            $(this).parent().attr('data-toggle', 'closed');
            $(this).parent().find('.toggleDropdown').hide();
          } else {
              $('.headerLink').attr('data-toggle', 'closed');
              $('.toggleDropdown').hide();
              $(this).parent().attr('data-toggle', 'opened');
              $(this).parent().find('.toggleDropdown').show();
          }

      });
  }


  $(".sub-parent-menu>li").hover(function() { 
    $('.sub-parent-menu li').removeClass('active');
    $(this).addClass('active');
  });


  HeaderLinks();


  $(window).resize(function() {
  });

  $(window).scroll(function () {  

  });
  

  /* SWITCHER */
  (function(){
    if( $('.tabSwitcher span').hasClass('active')) {
        switcherCheck($('.tabSwitcher span.active'));
    }
  }(document));



  $('.tabSwitcher').on('click','span',  function(){
        if(!$(this).hasClass('active')) {
            switcherCheck($(this));
        }
  });
  function switcherCheck(elem){
    switcherShow(elem.attr('data-block'), elem.attr('rel') );
    elem.parent('.tabSwitcher').find('span.active').removeClass('active');
    elem.addClass('active');
  }

  function switcherShow(blockID, relClass) {
        $('.' +relClass).hide();
        $(blockID+'.'+relClass).show();
  }

  /* GOOGLE MAP INIT */

  google.maps.event.addDomListener(window, 'load', init);
        
            function init() {

                var mapOptions = {
                    zoom: 17,
					disableDefaultUI: true,
                    scrollwheel: false,
                    clickableLabels:false,
                    center: new google.maps.LatLng(40.378800, 49.843305)
					
                };
                var image = 'img/pin.png';

                var mapElement = document.getElementById('map');

                var map = new google.maps.Map(mapElement, mapOptions);

                var marker = new google.maps.Marker({
                    
                });
				var markerA = new google.maps.Marker({
					map: map,
					position: new google.maps.LatLng(40.378800, 49.843305),
					customInfo: "Mover.az",
					icon: image
				});
				
            }
 

});


