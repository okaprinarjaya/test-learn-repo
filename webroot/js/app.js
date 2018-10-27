$(document).foundation();

var searchOpened = true;

$(document).ready(function() {

  $('#dp').datepicker({
    onSelect: function (formattedDate, date, inst) {
      console.log('formattedDate', formattedDate)
    }
  });

  $('.toggleme').click(function() {
    $('.form-search-props').toggle('slow', function() {
      searchOpened = !searchOpened;
      $('#search-opened-text').html(searchOpened ? '<i class="fi-x"></i>&nbsp;&nbsp;Tutup pencarian' : '<i class="fi-magnifying-glass"></i>&nbsp;&nbsp;Buka pencarian')
    });
  });

});
