<html>

  <head>
    <title>{block name = 'title'}{/block}</title>

    <script>
      var aroot = "{$conf->action_root}";
      var start_action = "{$action}";
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src = "{$conf->action_root}js/ajax-engine.js?v=2"></script>

    {block name = 'extras'}{/block}
  </head>

  <body>
    {block name = 'body'}{/block}
  </body>
</html>
