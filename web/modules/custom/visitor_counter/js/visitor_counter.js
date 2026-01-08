

(function ($, Drupal, drupalSettings) {

  Drupal.behaviors.visitCounter = {
    attach: function (context) {

      $('.visitCounter', context).each(function () {

        var $wrapper = $(this);

        console.log('visitCounter found');

        var base = drupalSettings.path.baseUrl.replace(/\/$/, '');
        var current = window.location.pathname;

        var url =
          current.indexOf('/hi') !== -1
            ? base + '/hi/get-visitor-counter-link'
            : base + '/get-visitor-counter-link';

        console.log('URL:', url);

        $.ajax({
          url: url,
          type: 'GET',
          success: function (data) {
            console.log('Counter received:', data);

            // final output
            $wrapper.text('Visitors : ' + $.trim(data));
          },
          error: function (xhr) {
            console.log('Visitor counter AJAX failed', xhr.status);
          }
        });

      });

    }
  };

})(jQuery, Drupal, drupalSettings);


