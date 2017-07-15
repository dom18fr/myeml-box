(function ($, Drupal, drupalSettings, w) {
    function onReceiveMessage(event) {
        if (
            drupalSettings.myeml_cdm_connector.target === event.origin
            && 'parent-submit' === event.data
        ) {
            console.log('Post message received on cms, let\'s submit the form !');
            $('[data-submit-trigger=' + drupalSettings.myeml_cdm_connector.form_dom_id + ']').click();
        }
    }
    w.addEventListener('message', onReceiveMessage);
})(jQuery, Drupal, drupalSettings, window);
