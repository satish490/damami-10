(function ($, Drupal, drupalSettings) {
  $(document).ready(function () {
    const base_url = drupalSettings.visitor_tracker.base_url;

    $.post(base_url + 'path-entry', { location: window.location.href })
      .done(() => console.log('Path entry recorded'))
      .fail(() => console.log('Failed to record path entry'));

    setTimeout(() => {
      $.get(base_url + 'set-path-entry')
        .done((data) => {
          $('#block-visitorscountblock .counterPerDay').text(data);
        })
        .fail(() => console.log('Failed to fetch updated count'));
    }, 4000);
  });
})(jQuery, Drupal, drupalSettings);
