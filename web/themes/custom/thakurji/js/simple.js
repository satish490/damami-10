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

jQuery('.user-logged-in #block-thakurji-dropdownlanguage-2 .dropbutton-multiple').on('click', function(event){
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


// Visitor counter

$(document).ready(function () {

  // DEBUG: Check if base_url exists
  console.log("base_url element found:", $("#base_url").length);
  console.log("base_url value:", $("#base_url").val());

  if ($("#base_url").length) {
    var base_url = $("#base_url").val();

    if (base_url && base_url !== "undefined") {

      var substring = "/hi";
      var durl = "";

      if (typeof hindiLang !== "undefined" && hindiLang.indexOf(substring) !== -1) {
        durl = base_url + "/hi/get-visitor-counter-link";
      } else {
        durl = base_url + "/get-visitor-counter-link";
      }

      console.log("Calling visitor counter URL:", durl); // DEBUG

      $.ajax({
        beforeSend: function () {
          $(".spinner-border").css("visibility", "visible");
        },
        url: durl,
        method: "GET",
        cache: false,
        headers: {
          "Cache-Control": "no-cache, no-store, must-revalidate",
          "Pragma": "no-cache",
          "Expires": "0"
        },
        success: function (data) {
          console.log("Visitor counter response:", data); // DEBUG
          if (data && data.visitor_count !== undefined) {
            var padded = String(data.visitor_count).padStart(10, '0');
            $(".visitCounter").html("<p class='mb-0'>Visitors: " + padded + "</p>");
          }
        },
        complete: function () {
          $(".spinner-border").css("visibility", "hidden");
        },
        error: function (xhr, status, error) {
          console.log("Visitor counter FAILED:", status, error, xhr.responseText); // DEBUG
        }
      });

    } else {
      console.log("base_url is empty or undefined"); // DEBUG
    }

  } else {
    console.log("ERROR: #base_url input not found on page"); // DEBUG
  }

});





//  mobile js 



(function (Drupal, once) {
  Drupal.behaviors.accordionFlushBehavior = {
    attach: function (context) {

      // Use once() correctly and don’t index [0] before checking length.
      const filterShortEls = once('accordion-flush-trigger', '.filter-short', context);
      const mainContainers = once('accordion-flush-main', '.order-first', context);
      const additionalContainers = once('accordion-flush-extra', '.view-product-catalog .accordion-flush', context);

      if (!mainContainers.length || !additionalContainers.length) {
        // Nothing to do on this page – exit quietly.
        return;
      }

      const filterShort = filterShortEls[0] || null;
      const mainContainer = mainContainers[0];
      const additionalContainer = additionalContainers[0];

      function isMobileView() {
        return window.innerWidth <= 768; // Only apply for mobile views
      }

      function addHeaderAndCloseButton() {
        if (!isMobileView()) {
          return; // Only apply on mobile view
        }

        let panelHeader = mainContainer.querySelector('.panel-header');
        let closeButton = mainContainer.querySelector('.close-button');

        // Create panel-header if it doesn't exist
        if (!panelHeader) {
          panelHeader = document.createElement('div');
          panelHeader.classList.add('panel-header');

          const title = document.createElement('h2');
          title.textContent = 'Filters';

          panelHeader.appendChild(title);
          mainContainer.insertBefore(panelHeader, mainContainer.firstChild);
        }

        // Create close button if it doesn't exist
        if (!closeButton) {
          closeButton = document.createElement('button');
          closeButton.textContent = 'X';
          closeButton.classList.add('close-button');

          closeButton.addEventListener('click', function () {
            closePanel();
          });

          panelHeader.insertAdjacentElement('afterend', closeButton);
        }
      }

      function appendAdditionalContainer() {
        if (!mainContainer.contains(additionalContainer) && additionalContainer.parentNode) {
          additionalContainer.parentNode.removeChild(additionalContainer);
          mainContainer.appendChild(additionalContainer);
        }
      }

      function openPanel() {
        if (!isMobileView()) {
          return;
        }
        addHeaderAndCloseButton();
        appendAdditionalContainer();

        mainContainer.style.display = 'block';
        setTimeout(function () {
          mainContainer.classList.add('open');
          document.body.classList.add('background-blur');
        }, 10);
      }

      function closePanel() {
        if (!isMobileView()) {
          return;
        }
        mainContainer.classList.remove('open');
        setTimeout(function () {
          mainContainer.style.display = 'none';
          document.body.classList.remove('background-blur');
        }, 400);
      }

      function adjustPanelDisplay() {
        if (isMobileView()) {
          mainContainer.style.display = 'none';
        } else {
          mainContainer.style.display = 'block';
          // Make sure background blur is cleared on desktop.
          document.body.classList.remove('background-blur');
        }
      }

      if (filterShort) {
        filterShort.addEventListener('click', function () {
          if (mainContainer.style.display === 'none' || !mainContainer.classList.contains('open')) {
            openPanel();
          } else {
            closePanel();
          }
        });
      }

      // Only add one resize listener globally.
      if (!window._accordionFlushResizeBound) {
        window.addEventListener('resize', adjustPanelDisplay);
        window._accordionFlushResizeBound = true;
      }

      adjustPanelDisplay();
    }
  };
})(Drupal, once);






// menu js


document.addEventListener('DOMContentLoaded', function () {

  // ELEMENTS
  const mobileToggle = document.getElementById('mobileToggleBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileClose = document.getElementById('mobileCloseBtn');
  const searchToggle = document.getElementById('searchToggle');
  const searchBox = document.getElementById('searchBox');
  const searchClose = document.getElementById('searchCloseBtn');

  // open mobile menu
  function openMobile() {
    if (mobileMenu) {
      mobileMenu.classList.add('open');
      mobileMenu.setAttribute('aria-hidden', 'false');
      document.documentElement.style.overflow = 'hidden'; // prevent body scroll
    }
  }
  // close mobile menu
  function closeMobile() {
    if (mobileMenu) {
      mobileMenu.classList.remove('open');
      mobileMenu.setAttribute('aria-hidden', 'true');
      document.documentElement.style.overflow = '';
    }
  }

  // toggle mobile
  if (mobileToggle) {
    mobileToggle.addEventListener('click', function (e) {
      if (mobileMenu && mobileMenu.classList.contains('open')) closeMobile();
      else openMobile();
    });
  }
  if (mobileClose) mobileClose.addEventListener('click', closeMobile);

  // close on outside click (mobile)
  document.addEventListener('click', function (e) {
    if (!mobileMenu) return;
    if (mobileMenu.classList.contains('open')) {
      const inside = mobileMenu.contains(e.target) || (mobileToggle && mobileToggle.contains(e.target));
      if (!inside) closeMobile();
    }
  });

  // ESC closes mobile & search
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeMobile();
      if (searchBox) searchBox.classList.remove('show');
    }
  });

  // SEARCH toggle
  if (searchToggle && searchBox) {
    searchToggle.addEventListener('click', function (e) {
      e.preventDefault();
      const isShown = searchBox.classList.contains('show');
      if (isShown) searchBox.classList.remove('show');
      else searchBox.classList.add('show');
    });
  }
  if (searchClose) searchClose.addEventListener('click', function () {
    if (searchBox) searchBox.classList.remove('show');
  });

  // MOBILE SUBMENU: add toggles for li that have UL inside mobile menu
  (function addMobileSubmenuToggles() {
    if (!mobileMenu) return;
    // find list items in mobilePrimary that have nested ULs
    const mobilePrimary = mobileMenu.querySelector('.mobile-primary');
    if (!mobilePrimary) return;

    const listItems = mobilePrimary.querySelectorAll('li');
    listItems.forEach(function(li) {
      const sub = li.querySelector('ul');
      if (sub) {
        // create toggle button
        const toggle = document.createElement('button');
        toggle.type = 'button';
        toggle.className = 'submenu-toggle';
        toggle.innerHTML = '<span class="sr-only">Toggle submenu</span><span aria-hidden="true">+</span>';
        // place toggle at end of the anchor or li
        const link = li.querySelector('a');
        if (link) link.after(toggle);
        else li.insertBefore(toggle, sub);

        // click handler
        toggle.addEventListener('click', function (ev) {
          ev.preventDefault();
          const isOpen = sub.style.display === 'block';
          // close others on same level
          const siblings = li.parentElement.children;
          Array.prototype.forEach.call(siblings, function(sib) {
            if (sib !== li) {
              const sibSub = sib.querySelector('ul');
              if (sibSub) sibSub.style.display = 'none';
              const sibToggle = sib.querySelector('.submenu-toggle');
              if (sibToggle) sibToggle.querySelector('span[aria-hidden]').textContent = '+';
            }
          });
          if (isOpen) {
            sub.style.display = 'none';
            toggle.querySelector('span[aria-hidden]').textContent = '+';
          } else {
            sub.style.display = 'block';
            toggle.querySelector('span[aria-hidden]').textContent = '-';
          }
        });
      }
    });
  })();

});

