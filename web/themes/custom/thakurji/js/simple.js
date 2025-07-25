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
        document.querySelectorAll(".donation-tab-buttons li").forEach(function(tab) {
  tab.addEventListener("click", function() {
    document.querySelectorAll(".donation-tab-buttons li").forEach(function(t) {
      t.classList.remove("active");
    });
    tab.classList.add("active");

    var tabId = tab.getAttribute("data-tab");
    document.querySelectorAll(".donation-tab-content").forEach(function(content) {
      content.classList.remove("active");
    });
    document.getElementById(tabId).classList.add("active");
  });
});


// video Gallery js


// document.addEventListener("DOMContentLoaded", function () {
//   const toggleBtns = document.querySelectorAll(".toggle-btn");
//   const photoSection = document.getElementById("photo-section");
//   const videoSection = document.getElementById("video-section");

//   toggleBtns.forEach(btn => {
//     btn.addEventListener("click", () => {
//       toggleBtns.forEach(b => b.classList.remove("active"));
//       btn.classList.add("active");
//       const section = btn.dataset.section;

//       if (section === "photos") {
//         photoSection.style.display = "block";
//         videoSection.style.display = "none";
//       } else {
//         photoSection.style.display = "none";
//         videoSection.style.display = "block";
//       }
//     });
//   });

//   // Filter buttons
//   document.querySelectorAll(".filter-btn").forEach(btn => {
//     btn.addEventListener("click", function () {
//       const filter = this.dataset.filter;
//       const section = this.closest(".gallery-section");
//       const cards = section.querySelectorAll(".gallery-card");
//       section.querySelectorAll(".filter-btn").forEach(b => b.classList.remove("active"));
//       this.classList.add("active");
//       cards.forEach(card => {
//         if (filter === "all" || card.classList.contains(filter)) {
//           card.style.display = "block";
//         } else {
//           card.style.display = "none";
//         }
//       });
//     });
//   });
// });





document.addEventListener("DOMContentLoaded", function () {
  const toggleBtns = document.querySelectorAll(".toggle-btn");
  const photoSection = document.getElementById("photo-section");
  const videoSection = document.getElementById("video-section");

  if (!toggleBtns.length || !photoSection || !videoSection) return;

  toggleBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      toggleBtns.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      const section = btn.dataset.section;
      photoSection.style.display = section === "photos" ? "block" : "none";
      videoSection.style.display = section === "videos" ? "block" : "none";
    });
  });

  document.querySelectorAll(".gallery-section").forEach(section => {
    const filterButtons = section.querySelectorAll(".filter-btn");
    const cards = section.querySelectorAll(".gallery-card");

    filterButtons.forEach(btn => {
      btn.addEventListener("click", () => {
        const filter = btn.dataset.filter;
        filterButtons.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

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
});

