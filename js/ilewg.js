$(document).ready(function(){
  $('.menu_button').on('click', function () {
    if ($('#menu').hasClass('active')) {
      $('#menu').removeClass('active');
    }else{
      $('#menu').addClass('active');
    };
  });
});
