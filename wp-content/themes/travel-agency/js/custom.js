	
  // Get all tabs
var tabs_items = document.querySelectorAll(".tabs");

// Loop through all tabs
tabs_items.forEach(function (tabs) {
  // Set variable
  var controls = tabs.querySelector(".tabs__control");
  var tab = controls.querySelectorAll(".tabs__tab");
  var contents = tabs.querySelector(".tabs__contents");
  if(contents)
  var content = contents.querySelectorAll(".tabs__content");

  // Loop through all tabs
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

     jQuery('.popup-box').show(500);
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

jQuery('.pop-icon').click(function(){
  jQuery('.popup-box').toggle('show');
});