// Avoid `console` errors in browsers that lack a console.
(function() {
  var method
  var noop = function() {}
  var methods = [
    "assert",
    "clear",
    "count",
    "debug",
    "dir",
    "dirxml",
    "error",
    "exception",
    "group",
    "groupCollapsed",
    "groupEnd",
    "info",
    "log",
    "markTimeline",
    "profile",
    "profileEnd",
    "table",
    "time",
    "timeEnd",
    "timeline",
    "timelineEnd",
    "timeStamp",
    "trace",
    "warn"
  ]
  var length = methods.length
  var console = (window.console = window.console || {})

  while (length--) {
    method = methods[length]

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop
    }
  }
})()
if (typeof jQuery === "undefined") {
  console.warn("jQuery hasn't loaded")
} else {
  console.log("jQuery " + jQuery.fn.jquery + " has loaded")
}
// Place any jQuery/helper plugins in here.
$(document).ready(function () {
  let isMobile;
  if ($(window).width() >= 576) {
    isMobile = false;
  } else {
    isMobile = true;
  }

  $.each($('.headnav a'), function (indexInArray, valueOfElement) {
    let content = `<span>123 s</span>`;
    $(this).append(content);
  });

  if(isMobile) {
    let $headerNavContainer = $('.header--nav');

    $headerNavContainer.on('click', function(e) {
      e.preventDefault();
      $headerNavContainer.toggleClass('header--nav__opened')
    })

  }

  $('p[style="padding-left: 40px;"]').addClass('blockquote-light')

  $('.phpinfo--container-more').on('click', function(){
    $('.phpinfo--container').toggleClass('phpinfo--container--hq')
  })

  if ($('body').hasClass('hoster-template-page-phpinfo')) {
    setTimeout(() => {
      var $iframeInner = $("#framePHP body");
      $iframeInner.html('<style>.center table{width:100%!important}</style>');
      console.log('prepended')
    }, 3000);
  }

  // function PHPinfoHeight() {
  //   document.getElementById('framePHP').style.height = document.getElementById('framePHP').contentWindow.document.body.offsetHeight + 'px';
  //   $(".phpinfo--container").css('height', '700px');
  //   $(".phpinfo--container-more").addClass('active').on("click", function() {
  //     $(".phpinfo--container").css('height', 'initial');
  //     $(".phpinfo--container-more").removeClass('active');
  //   });
  // }

  // function PHPinfo(id, serv, url) {
  //   var doc = $.find(".phpinfo--container iframe")[0].contentWindow.document;
  //   doc.open();
  //   content = '<div style="text-align:center; margin-top: 20px;"><?xml version="1.0" encoding="utf-8"?><svg width="60px" height="60px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-ring-alt"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><circle cx="50" cy="50" r="40" stroke="#e3e3e3" fill="none" stroke-width="10" stroke-linecap="round"></circle><circle cx="50" cy="50" r="40" stroke="#469139" fill="none" stroke-width="6" stroke-linecap="round"><animate attributeName="stroke-dashoffset" dur="2s" repeatCount="indefinite" from="0" to="502"></animate><animate attributeName="stroke-dasharray" dur="2s" repeatCount="indefinite" values="150.6 100.4;1 250;150.6 100.4"></animate></circle></svg></div>';
  //   content += '<div id="textContent" style="text-align:center; margin-top: 20px; font-family: sans-serif; font-size: 14px">Получение результата функции <strong>phpinfo</strong>';
  //   if (serv != '') {
  //     content += '<br> с сервера <span style="color: red">' + serv + '</span>';
  //   }
  //   content += '<br><br><span style="font-size: 12px; color: gray;">В случае ошибки попробуйте открыть файл <a onclick="document.getElementById(\'textContent\').innerHTML=\'\' ;parent.PHPinfoHeight()" style="color: gray;" target="framePHP" href="' + url + '">самостоятельно</a>.</span></div>';
  //   doc.write(content);
  //   doc.close();
  //   $.ajax({
  //     type: "POST",
  //     url: "/phpinfo.php",
  //     data: "id=" + id,
  //     cache: false,
  //     timeout: 30000,
  //     error: function() {},
  //     success: function(html) {
  //       var doc = $.find(".phpinfo--container iframe")[0].contentWindow.document;
  //       doc.open();
  //       doc.write("<style>.center table{width:100%!important}</style>" + html);
  //       doc.close();
  //       PHPinfoHeight();
  //     }
  //   });
  // }




});
