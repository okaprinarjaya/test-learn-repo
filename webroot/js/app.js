$(document).foundation();

var searchOpened = true;

$(document).ready(function() {

  var dp = $('#dp').datepicker().data('datepicker');
  dp.selectDate([new Date(), new Date()]);

  $('#dp').datepicker({
    onSelect: function (formattedDate, date, inst) {
      console.log('formattedDate', formattedDate)
    }
  });

  var due_date_dp = $('#due-date-dp').datepicker().data('datepicker');

  $('#due-date-dp').datepicker({
    dateFormat: 'yyyy-mm-dd',
    onSelect: function (formattedDate, date, inst) {
      $('#project-due-date').val(formattedDate);
    }
  });

  $('.group-button-add-order').click(function() {
    due_date_dp.selectDate(new Date($(this).data('duedate')));
    $('#create-order-modalbox').foundation('open');
  });

  $('.toggleme').click(function() {
    $('.form-search-props').toggle('slow', function() {
      searchOpened = !searchOpened;
      $('#search-opened-text').html(searchOpened ? '<i class="fi-x"></i>&nbsp;&nbsp;Tutup pencarian' : '<i class="fi-magnifying-glass"></i>&nbsp;&nbsp;Buka pencarian')
    });
  });

  $('#product-select').change(function () {
    if (this.value === 'PROD000') {
      $('#project-product-other').show();
    }
  });

});
