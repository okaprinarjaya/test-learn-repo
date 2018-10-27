$(document).foundation();

var searchOpened = true;

$(document).ready(function() {

  $('#dp').datepicker({
    onSelect: function (formattedDate, date, inst) {
      console.log('formattedDate', formattedDate)
    }
  });

  $('#due-date').datepicker({
    onSelect: function (formattedDate, date, inst) {
      console.log('due date = ', formattedDate)
    }
  });

  var due_date_dp = $('#due-date').datepicker().data('datepicker');
  due_date_dp.selectDate(new Date("December 28, 2018 21:27:00"));


  $('.toggleme').click(function() {
    $('.form-search-props').toggle('slow', function() {
      searchOpened = !searchOpened;
      $('#search-opened-text').html(searchOpened ? '<i class="fi-x"></i>&nbsp;&nbsp;Tutup pencarian' : '<i class="fi-magnifying-glass"></i>&nbsp;&nbsp;Buka pencarian')
    });
  });

});
