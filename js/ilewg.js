$(document).ready(function () {
  $('.menu_button').on('click', function () {
    if ($('#menu').hasClass('active')) {
      $('#menu').removeClass('active');
    } else {
      $('#menu').addClass('active');
    };
  });
  if ($('#agenda_cetegory_select').length) {
    function submitForm() {
      var filterCategory = $('#agenda_cetegory_select')[0].value;
      var filterDate = $('.agenda_date_active')[0].innerText;
      $.ajax({
        url: url_ajax.url,
        data: {
          post_date_select: filterDate, 
          post_category_select: filterCategory,
          action: 'filter_action'
        },
        type: 'post',
        action: 'filter_action',
        success: function (data) {
          $('#filter-rezult').html(data);
        }
      });
      return false;
    }
    agenda_cetegory_select
    $('#agenda_cetegory_select').change(submitForm);
    $('#arr_left').click(function() {
      if ($('.agenda_date_active').prev().length) {
        elem = $('.agenda_date_active'); 
        $('.agenda_date_active').prev().addClass('agenda_date_active');
        elem.removeClass('agenda_date_active');
      }
      submitForm();
    });
    $('#arr_right').click(function() {
      if ($('.agenda_date_active').next().length) {
        elem = $('.agenda_date_active'); 
        $('.agenda_date_active').next().addClass('agenda_date_active');
        elem.removeClass('agenda_date_active');
      }
      submitForm();
    });
   submitForm();
  }
});
