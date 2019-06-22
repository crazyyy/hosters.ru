// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
$(document).ready(function () {

  if ($('body').hasClass('post-type-hoster')) {
    let selected_template = $('#post_template').val();
    ToggleMetaBox(selected_template);

    $('#post_template').change(function() {
      let selected_template = $('#post_template').val();
      ToggleMetaBox(selected_template);
    });

  }

  function ToggleMetaBox(selected_template) {
    let arrMetaBoxName = ['#tagsdiv-virtualization', '#tagsdiv-os', '#tagsdiv-paymethods', '#tagsdiv-country', '#tagsdiv-conpan', '#tagsdiv-processor'];
    $.each(arrMetaBoxName, function (indexInArray, valueOfElement) {
      if (selected_template === 'default') {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }


});
