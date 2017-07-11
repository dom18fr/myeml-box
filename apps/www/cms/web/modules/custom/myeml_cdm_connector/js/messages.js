(function ($, Drupal, drupalSettings) {
  // Send message if available.
  if (drupalSettings.myeml_cdm_connector.messages) {
    parent.postMessage(drupalSettings.myeml_cdm_connector.messages, drupalSettings.myeml_cdm_connector.target);
  }
})(jQuery, Drupal, drupalSettings);