(function ($, Drupal, drupalSettings) {

  function sendPostMessageJson(json) {
    console.log('SEND ' + json);
    parent.postMessage(json, drupalSettings.myeml_cdm_connector.target);
  }

  function sendPostMessage(action, entity, id) {
    var json = JSON.stringify({
      "op": action,
      "entity_type": entity,
      "entity_id": id
    });
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
      $this.html('<input type="radio" value="' + nid + '" name="cdm-connector-nid" class="cdm-connector-nid" />');
    });

    $('.view-id-node_select .view-content').append('<input type="button" value="Select" class="button cdm-connector-select" />');

    $('.cdm-connector-select').on('click', function (event) {
      var nid = $('input[name="cdm-connector-nid"]:checked').attr('value');
      if ('undefined' !== typeof(nid)) {
        sendPostMessage('select', 'node', nid);
      }
    });
  });
})(jQuery, Drupal, drupalSettings);
