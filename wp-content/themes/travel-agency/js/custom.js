	
  // Get all tabs
var tabs_items = document.querySelectorAll(".tabs");

// Loop through all tabs
tabs_items.forEach(function (tabs) {
  // Set variable
  var controls = tabs.querySelector(".tabs__control");
  if(controls)
    var tab = controls.querySelectorAll(".tabs__tab");
  if(tab)
    var contents = tabs.querySelector(".tabs__contents");
  if(contents)
    var content = contents.querySelectorAll(".tabs__content");

  // Loop through all tabs
  if(tab)
  {
  tab.forEach(function (item) {
    item.onclick = function (e) {
      e.preventDefault();

      // Get clicked tab ID
      var tabId = item.dataset.tab;

      // Set current tab
      tab.forEach(function (item) {
        if (tabId == item.dataset.tab) {
          item.classList.add("tabs__tab--current");
          item.setAttribute('aria-selected','true');
          item.removeAttribute('tabindex','-1');
        } else {
          item.classList.remove("tabs__tab--current");
          item.setAttribute('aria-selected','false');
          item.setAttribute('tabindex','-1');
        }
      });

      // Set current content
      content.forEach(function (item) {
        if (tabId == item.dataset.tabContent) {
          item.classList.add("tabs__content--current");
          item.removeAttribute('hidden','hidden');
        } else {
          item.classList.remove("tabs__content--current");
          item.setAttribute('hidden','hidden');
        }
      });
    };
  });
  };
});


  // Testimonial slider
  jQuery('.testimonial-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 3000
  });

 jQuery('#owl-carousel').owlCarousel({
    loop: false,
    // dots: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 3
    }
  }
})
  jQuery('#owl-carousel-home').owlCarousel({
    loop: false,
    //dots: false,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 3
    }
  }
})

jQuery('#owl-carousel-package').owlCarousel({
    loop: false,
    //dots: false,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 3
    }
  }
})
jQuery('#owl-carousel-place').owlCarousel({
    loop: false,
    //dots: false,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 3
    }
  }
})
  ///Read More
jQuery(document).ready(function(){
  // jQuery('.popup-box').hide();

    jQuery('.readmore-btn').click(function(event) {   
          console.log(jQuery(this).prev('.more-ul')); 
          var id = jQuery(this).attr('id');  
          console.log('id is '+id);
         // jQuery('.more-ul').toggle('show');
         if(jQuery(this).prev('#more-ul-'+id).is(":hidden"))
         {
          jQuery(this).prev('#more-ul-'+id).show(500);
          jQuery(this).text('Read Less');
        }
        else
        {
          jQuery(this).prev('#more-ul-'+id).hide(500);
          jQuery(this).text('Read More');
        }
    });

    //Read more places to visit
    jQuery('.read-text').click(function(event) {
          // console.log(jQuery(this).prev('.more-ul')); 
          var content = jQuery(this).prev('p').attr('content');
          console.log(content); 
          var trimmedString = content.substring(0, 60);
          var ecxerpt = trimmedString+'...';
          console.log(ecxerpt);
          if( jQuery(this).text()=='Read more')
          {
            jQuery(this).text('Read less');
            jQuery(this).prev('p').text(content);
          }
          else
          {
            jQuery(this).text('Read more');
            jQuery(this).prev('p').text(ecxerpt);
          }
         
    });

    jQuery('.pop-icon').click(function(){
    jQuery('.popup-box').toggle('show');
  });

     // jQuery('.popup-box').show(500);
      // Home slider

      


     jQuery('.homeslider').slick({
       dots: false,
    infinite: true,
    speed: 800,
    slidesToShow: 4,
    // centerMode: true,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
  prevArrow: '<button class="slide-arrow prev-arrow"></button>',
  nextArrow: '<button class="slide-arrow next-arrow"></button>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});

});

