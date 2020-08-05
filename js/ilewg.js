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
    $('#arr_left').click(function () {
      if ($('.agenda_date_active').prev().length) {
        var elem = $('.agenda_date_active');
        $('.agenda_date_active').prev().addClass('agenda_date_active');
        elem.removeClass('agenda_date_active');
      }
      submitForm();
    });
    $('#arr_right').click(function () {
      if ($('.agenda_date_active').next().length) {
        var elem = $('.agenda_date_active');
        $('.agenda_date_active').next().addClass('agenda_date_active');
        elem.removeClass('agenda_date_active');
      }
      submitForm();
    });
    submitForm();
  }
  if ($('.missions_wraper').length) {

    $('.past').click(function () {
      if ($("#accordionPast").hasClass('d-none')) {
        $(".current,.resources").addClass('d-none');
        $("#accordionPast").removeClass('d-none');
        gsap.from('#accordionPast', 2, { y: '100%' });
      }
    });

    $('.current').click(function () {
      if ($("#accordionCurrent").hasClass('d-none')) {
        $(".past,.resources").addClass('d-none');
        $("#accordionCurrent").removeClass('d-none');
        $(this).removeClass('col-md-4 col-sm-12 order-md-2 order-sm-3 order-3');
        $(this).addClass('col-md-4 col-sm-12 order-md-1 order-sm-2 order-2');
        gsap.from('#accordionCurrent', 3, { y: '100%' });
      }
    });

    $('.resources').click(function () {
      if ($("#accordionResources").hasClass('d-none')) {
        $(".past,.current").addClass('d-none');
        $("#accordionResources").removeClass('d-none');
        $(this).removeClass('col-md-4 col-sm-12 order-md-3 order-sm-4 order-4');
        $(this).addClass('col-md-4 col-sm-12 order-md-1 order-sm-2 order-2');
        gsap.from('#accordionResources', 3, { y: '100%' });
      }
    });
    $('.close_button').click(function () {
      $(this).closest('.accordion').addClass('d-none');
      $('.past').attr('class', 'col-md-4 col-sm-12 order-md-1 order-sm-2 order-2 mission_col past');
      $('.current').attr('class', 'col-md-4 col-sm-12 order-md-2 order-sm-3 order-3 mission_col current');
      $('.resources').attr('class', 'col-md-4 col-sm-12 order-md-3 order-sm-4 order-4 mission_col resources');

    });
  }
});
