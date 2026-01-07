


(function ($, Drupal) {

  Drupal.behaviors.visitCounter = {
    attach: function (context) {

      $('.visitCounter', context).once('visitCounter').each(function () {

        var $wrapper = $(this);

        // get Drupal base path
        var basePath = drupalSettings.path.baseUrl.replace(/\/$/, '');

        var currentPath = window.location.pathname;

        // language-aware route
        var url =
          currentPath.indexOf('/hi') !== -1
            ? basePath + '/hi/get-visitor-counter-link'
            : basePath + '/get-visitor-counter-link';

        $.ajax({
          url: url,
          type: 'GET',
          success: function (data) {

            // keep existing text ("Visitors :")
            $wrapper.html($wrapper.text() + ' ' + data);
          },
          error: function () {
            console.log('Visitor counter load failed');
          }
        });

      });

    }
  };

})(jQuery, Drupal);
