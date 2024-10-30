

jQuery( document ).ready(function() {

  $(document).bind('keydown', function(e) {
    if(e.ctrlKey && (e.which == 83)) {
      e.preventDefault();
      control_savePost();
      return false;
    }
    if(e.metaKey && (e.which == 83)) {
      e.preventDefault();
      control_savePost();
      return false;
    }
  });


});

function control_savePost() {
  $('#save-post').trigger('click');
  if($('#save-post').length<1) { $('#publish').trigger('click'); }
}
