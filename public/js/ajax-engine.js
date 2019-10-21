function go(action, form = false) {
  var url = aroot + 'forward/' + action;
  if(form) {
    var data = $('#'+form).serialize();
  } else {
    var data = {};
  }
  var success = function() {};
  $.post(url, data, success, 'text'/*'json'*/)
  .done(resp => {
    $('#body').html(resp);
    // for(var index in resp) {
    //   if($("#"+index).length) $("#"+index).html(resp[index]);
    // }
  });
}

$(window).on('load',function(){
  go(start_action);
});
