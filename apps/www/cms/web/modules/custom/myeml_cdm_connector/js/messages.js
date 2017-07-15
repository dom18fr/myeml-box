(function ($, Drupal, drupalSettings) {

  function sendPostMessageJson(json) {
    console.log('SEND ' + json);
    parent.postMessage(json, drupalSettings.myeml_cdm_connector.target);
  }

  function sendPostMessage(action, entity, id) {
    var json = JSON.stringify([action, entity, id]);
    sendPostMessageJson(json);
  }

  // Send message if available.
  if (drupalSettings.myeml_cdm_connector.messages) {
    //parent.postMessage(drupalSettings.myeml_cdm_connector.messages, drupalSettings.myeml_cdm_connector.target);
    $.map(JSON.parse(drupalSettings.myeml_cdm_connector.messages), function(element) {
      sendPostMessageJson(JSON.stringify(element));
    });
  }

  $(function() {
    $('.view-id-node_select td.views-field-nid').each(function () {
      var $this = $(this);
      var nid = parseInt($this.text());
      $this.html('<input type="checkbox" value="' + nid + '" class="cdm-connector-nid" />');
    });

    $('.view-id-node_select .view-content').append('<input type="button" value="Select" class="button cdm-connector-select" />');

    $('.cdm-connector-select').on('click', function (event) {
      var nids = $('.cdm-connector-nid:checked').map(function () {
        return this.value;
      });
      if (nids.length) {
        sendPostMessage('select', 'node', $.makeArray(nids).join(','));
        $('.cdm-connector-nid:checked').prop('checked', false);
      }
    });
  });
})(jQuery, Drupal, drupalSettings);
