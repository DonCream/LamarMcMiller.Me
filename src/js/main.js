$(document).ready(function(){

  // hide our element on page load
  $('#work').css('opacity', 0);

  $('#work').waypoint(function() {
      $('#work').addClass('trackInExpand');
  }, { offset: '70%' });

});
