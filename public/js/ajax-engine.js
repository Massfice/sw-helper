function go(action, form = false, part = true) {
  var url = aroot + 'forward/' + action;
  if(part) url = url + '/part';
  if(form) {
    var data = $('#'+form).serialize();
  } else {
    var data = {};
  }
  var success = function() {};
  $.post(url, data, success, 'json')
  .done(resp => {

    for(var index in resp['view_resolver_containers']) {
      if($("#"+index).length) $("#"+index).html(resp['view_resolver_containers'][index]);
    }

    for(var index in resp['view_resolver_contents']) {
      if($("#"+index).length) $("#"+index).html(resp['view_resolver_contents'][index]);
    }

  });
}

$(window).on('load',function(){
  go(start_action,false,false);
});
