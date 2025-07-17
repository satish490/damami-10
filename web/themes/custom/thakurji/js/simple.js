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