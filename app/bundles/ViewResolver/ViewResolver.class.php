<?php

namespace app\bundles\ViewResolver;

use core\App;
use Massfice\Storage\Storage;
use Massfice\SelectingViewResolver\SelectingViewResolver;
use Massfice\SessionUtils\SessionUtils;

class ViewResolver {

  public static function data(string $key, $value, bool $override_allowed = false) {
    Storage::getInstance()
      ->getShelf('view_resolver_data')
      ->addData($key,$value,$override_allowed);
  }

  public static function content(string $file, string $el_name = 'content', bool $override_allowed = false) {
    Storage::getInstance()
      ->getShelf('view_resolver_contents')
      ->addData($el_name,App::getSmarty()->fetch($file.'.tpl'),$override_allowed);
  }

  public static function display(?string $container = null) {
    $resolver = new SelectingViewResolver();

    $container = isset($container) ? $container : (string) SessionUtils::advancedLoad('selecting_view_resolver_shelf','prev');
    echo $resolver->resolve($container, new Generate(), new Compare());
  }

  public static function assign(string $key, $value, bool $override_allowed = false) {
    $vars = App::getSmarty()->getTemplateVars();
    $keys = array_keys($vars);
    $isAssigned = in_array($key,$keys);

    if(!$isAssigned || $override_allowed)
      App::getSmarty()->assign($key,$value);
  }

}

?>
