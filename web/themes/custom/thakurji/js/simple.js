(function ($, Drupal) {
  "use strict";
  Drupal.behaviors.home_features = {
    attach: function (context, settings) {
      $(document).ready(function () {
        // Crousel image 
        jQuery(".carousel-inner .carousel-item:first-child").addClass("active");
        jQuery(".carousel-indicators button:first-child").addClass("active");
        
        jQuery("#block-popoutsearch").click(function(){
          jQuery("div#block-searchform ").toggle();         
        });
      });
    },
  };
})(jQuery, Drupal);


        var aa = jQuery(".view-latest-video-bhajan .views-view-grid .views-row").length;
        jQuery(".view-latest-video-bhajan .view-header").append("<div class='rowsss'>/"+ aa +"</div>");



   
        // Donation js
// document.addEventListener("DOMContentLoaded", function () {
//     document.querySelectorAll(".donation-tab-buttons li").forEach(function(tab) {
//       tab.addEventListener("click", function() {
//         document.querySelectorAll(".donation-tab-buttons li").forEach(function(t) {
//           t.classList.remove("active");
//         });
//         tab.classList.add("active");

//         var tabId = tab.getAttribute("data-tab");
//         document.querySelectorAll(".donation-tab-content").forEach(function(content) {
//           content.classList.remove("active");
//         });
//         var target = document.getElementById(tabId);
//         if (target) {
//           target.classList.add("active");
//         }
//       });
//     });
//   });

// document.addEventListener("DOMContentLoaded", function () {
//   const toggleBtns = document.querySelectorAll(".toggle-btn");
//   const photoSection = document.getElementById("photo-section");
//   const videoSection = document.getElementById("video-section");

//   if (!toggleBtns.length || !photoSection || !videoSection) return;

//   toggleBtns.forEach(btn => {
//     btn.addEventListener("click", () => {
//       toggleBtns.forEach(b => b.classList.remove("active"));
//       btn.classList.add("active");

//       const section = btn.dataset.section;
//       photoSection.style.display = section === "photos" ? "block" : "none";
//       videoSection.style.display = section === "videos" ? "block" : "none";
//     });
//   });

//   document.querySelectorAll(".gallery-section").forEach(section => {
//     const filterButtons = section.querySelectorAll(".filter-btn");
//     const cards = section.querySelectorAll(".gallery-card");

//     filterButtons.forEach(btn => {
//       btn.addEventListener("click", () => {
//         const filter = btn.dataset.filter;
//         filterButtons.forEach(b => b.classList.remove("active"));
//         btn.classList.add("active");

//         cards.forEach(card => {
//           if (filter === "all" || card.classList.contains(filter)) {
//             card.style.display = "block";
//           } else {
//             card.style.display = "none";
//           }
//         });
//       });
//     });
//   });
// });

// Dropdown language js

jQuery('.user-logged-in #block-thakurji-dropdownlanguage .dropbutton-multiple').on('click', function(event){
		event.preventDefault();
		jQuery(this).toggleClass('open');
	});


  // video Gallery js


// (function ($, Drupal) {
//   Drupal.behaviors.templeGallery = {
//     attach: function (context, settings) {
//       const toggleBtns = once('temple-gallery-toggle', '.toggle-btn', context);
//       const photoSection = once('temple-photo', '#photo-section', context)[0];
//       const videoSection = once('temple-video', '#video-section', context)[0];

//       if (!photoSection || !videoSection) return;

//       toggleBtns.forEach(btn => {
//         btn.addEventListener("click", () => {
//           toggleBtns.forEach(b => b.classList.remove("active"));
//           btn.classList.add("active");

//           const section = btn.dataset.section;
//           photoSection.style.display = section === "photos" ? "block" : "none";
//           videoSection.style.display = section === "videos" ? "block" : "none";
//         });
//       });

//       const filterBtns = once('temple-gallery-filter', '.filter-btn', context);
//       filterBtns.forEach(btn => {
//         btn.addEventListener("click", function () {
//           const filter = this.dataset.filter;
//           const section = this.closest(".gallery-section");
//           const cards = section.querySelectorAll(".gallery-card");

//           section.querySelectorAll(".filter-btn").forEach(b => b.classList.remove("active"));
//           this.classList.add("active");

//           cards.forEach(card => {
//             card.style.display = (filter === "all" || card.classList.contains(filter)) ? "block" : "none";
//           });
//         });
//       });
//     }
//   };
// })(jQuery, Drupal);



document.addEventListener("DOMContentLoaded", function() {
  const buttons = document.querySelectorAll(".filter-btn");
  const cards = document.querySelectorAll(".gallery-card");

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      // Remove active state from all buttons
      buttons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      const filter = btn.dataset.filter; // e.g. "festival"

      cards.forEach(card => {
        if (filter === "all" || card.classList.contains(filter)) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
});



 // coming soon page js

//   window.addEventListener('load', function () {
//   setTimeout(() => {
//     document.getElementById('quavigo-loader').style.display = 'none';
//   }, 1200);
// });

// function showNotifyPopup() {
//   document.getElementById('notify-popup').style.display = 'block';
// }

// function hideNotifyPopup() {
//   document.getElementById('notify-popup').style.display = 'none';
// }

// function submitNotify() {
//   alert("Thanks! You’ll be notified.");
//   hideNotifyPopup();
// }



// latest news 
// document.addEventListener('DOMContentLoaded', function () {
//   new Swiper('.lettestupdateSwiper', {
//     effect: 'coverflow',
//     grabCursor: true,
//     centeredSlides: true,
//     loop: true,
//     slidesPerView: 3,
//     spaceBetween: 30,
//     autoplay: {
//       delay: 3000,
//       disableOnInteraction: false,
//     },
//     coverflowEffect: {
//       rotate: 50,
//       stretch: 0,
//       depth: 200,
//       modifier: 1,
//       slideShadows: true,
//     },
//     pagination: {
//       el: '.swiper-pagination',
//       clickable: true,
//     },
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
//     breakpoints: {
//       0: { slidesPerView: 1 },
//       768: { slidesPerView: 2 },
//       1024: { slidesPerView: 3 }
//     }
//   });
// });

// document.addEventListener('DOMContentLoaded', function () {
//   new Swiper('.lettestupdateSwiper', {
//     loop: true,
//     centeredSlides: true,
//     slidesPerView: 'auto',
//     speed: 2800,
//     spaceBetween: 0,
//     autoplay: {
//       delay: 2000,
//       disableOnInteraction: false,
//     },
//     effect: 'coverflow',
//     coverflowEffect: {
//       rotate: 0,
//       stretch: 0,
//       depth: 200,
//       modifier: 1,
//       slideShadows: false,
//     },
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
//   });
// });


document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.lettestupdateSwiper', {
    loop: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    speed: 2800,
    spaceBetween: 0,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    effect: 'coverflow',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 200,
      modifier: 1,
      slideShadows: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // Pause on image hover, resume on leave
  document.querySelectorAll('.lettestupdateSwiper .swiper-slide img').forEach(img => {
    img.style.cursor = 'pointer'; // 👆 shows hand cursor
    img.addEventListener('mouseenter', () => {
      swiper.autoplay.stop();
    });
    img.addEventListener('mouseleave', () => {
      swiper.autoplay.start();
    });
  });
});


// banner video card mute buuton

 const btn = document.getElementById('unmuteBtn');
  const video = document.querySelector('.bannerVideo');

  btn.addEventListener('click', () => {
    video.muted = false;
    video.play();
    btn.style.display = 'none';
  });





 // Photot  gallery js

// $(document).ready(function () {
//     // Header Sticky
//     $(window).scroll(function () {
//         if ($(window).scrollTop() > 0) {
//             $('header').addClass('sticky');
//         } else {
//             $('header').removeClass('sticky');
//         }
//     });

//     // Disable Animations
//     document.querySelector('.PauseAnimationAcc').addEventListener('click', function () {
//         document.body.classList.toggle('disable-animations');
//         this.classList.toggle('active'); // Optional: to show it's active/paused
//     });

//     // Add class in body
//     window.addEventListener('load', function () {
//         document.body.classList.add('tempClass');
//         setTimeout(function () {
//             document.body.classList.remove('tempClass');
//         }, 2000);
//     });


//     // Quote Swiper
//     if ($('.quoteInner').length) {
//         var quoteSwiper = new Swiper(".quoteSwiper", {
//             slidesPerView: 1,
//             loop: true,
//             pagination: {
//                 el: ".quotePagination",
//                 clickable: true,
//             },
//             speed: 1000,
//             autoplay: {
//                 delay: 3500,
//                 disableOnInteraction: false,
//             },
//         });
//     }

//     // Collaboration Swiper
//     if ($('.collaborationInner').length) {
//         let swiper = null;

//         // Function to initialize the Swiper
//         function initSwiper() {
//             // If swiper is already initialized, destroy it first
//             if (swiper) {
//                 swiper.destroy(true, true);
//                 swiper = null;
//             }

//             // Check if screen size is smaller than or equal to 1200px
//             if (window.innerWidth <= 992) {
//                 swiper = new Swiper('.collaborationSwiper', {
//                     slidesPerView: 4,
//                     spaceBetween: 10,
//                     autoplay: {
//                         delay: 3000,
//                         disableOnInteraction: false,
//                     },
//                     pagination: {
//                         el: '.swiper-pagination',
//                         clickable: true,
//                     },
//                     breakpoints: {
//                         480: {
//                             slidesPerView: 4,
//                             spaceBetween: 15,
//                         },
//                         768: {
//                             slidesPerView: 5,
//                             spaceBetween: 20,
//                         }
//                     }
//                 });
//                 updateStatus('Active');
//             } else {
//                 updateStatus('Disabled (Grid Layout)');
//             }
//         }

//         // Update the status on the page based on Swiper initialization
//         function updateStatus(swiperStatus) {
//             const screenSize = window.innerWidth > 992 ? 'Desktop (>992px)' : 'Mobile/Tablet (≤992px)';
//             document.getElementById('screenSize').textContent = screenSize;
//             document.getElementById('swiperStatus').textContent = swiperStatus;
//         }

//         // Initialize Swiper on page load
//         window.onload = function () {
//             initSwiper();
//         };

//         // Add a resize event listener with debouncing to handle screen resizing
//         window.addEventListener('resize', function () {
//             clearTimeout(window.resizeTimer);
//             window.resizeTimer = setTimeout(function () {
//                 initSwiper();
//             }, 250); // Debounce to ensure not too many re-initializations
//         });
//     }
//   });


//  Visitor Js 


// Visitor counter


$(document).ready(function () {

  if (!$("#base_url").length) return;

  var base_url = $("#base_url").val();
  if (!base_url || base_url === "undefined") return;

  // Build URL (supports Hindi language path)
  var durl = (typeof hindiLang !== "undefined"
               && hindiLang.indexOf("/hi") !== -1)
    ? base_url + "/hi/get-visitor-counter-link"
    : base_url + "/get-visitor-counter-link";

  $.ajax({
    beforeSend: function () {
      // Show spinner inside the block placeholder
      $(".visitCounter .spinner-border").css("visibility", "visible");
    },
    url:    durl,
    method: "GET",
    cache:  false,

    success: function (data) {
      if (data && data.visitor_count !== undefined) {
        var padded = String(data.visitor_count).padStart(10, '0');

        // ✅ Directly update the block div with fresh count — no page reload
        $(".visitCounter").html(
          "<p class='mb-0'>Visitors: " + padded + "</p>"
        );
      }
    },

    complete: function () {
      $(".visitCounter .spinner-border").css("visibility", "hidden");
    },

    error: function () {
      $(".visitCounter").html("<p class='mb-0'>Visitors: N/A</p>");
    }
  });

});
