(function ($, Drupal, drupalSettings, w) {
    function onReceiveMessage(event) {
        if (
            drupalSettings.myeml_cdm_connector.target === event.origin
            && 'parent-submit' === event.data
        ) {
            console.log('#' + drupalSettings.myeml_cdm_connector.form_dom_id);
            $('#' + drupalSettings.myeml_cdm_connector.form_dom_id).submit();
        }
    }
    w.addEventListener('message', onReceiveMessage);
})(jQuery, Drupal, drupalSettings, window);
