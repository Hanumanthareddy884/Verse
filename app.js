
var executed = false;
var loaded = function () {
  if (!executed) {
    $(".spinner-wrapper").fadeOut("slow");
    setTimeout(function () {
      $('spinner-wrapper').addClass('none');
    }, 10000);
    executed = true;
  }
};
$(window).on('load', loaded);
setTimeout(loaded, 5000);
