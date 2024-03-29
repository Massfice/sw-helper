<?php

namespace app\bundles\ViewResolver;

use core\App;
use Massfice\Storage\Storage;
use Massfice\SelectingViewResolver\SelectingViewResolver;
use Massfice\SessionUtils\SessionUtils;
use app\init\InitSmartyAssign;

class ViewResolver {

  public static function data(string $key, $value, bool $override_allowed = true) {
    Storage::getInstance()
      ->getShelf('view_resolver_data')
      ->addData($key,$value,$override_allowed);
  }

  public static function content(string $file, string $el_name = 'content', bool $override_allowed = true) {
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

  public static function refresh(string $container = '') {
    InitSmartyAssign::refresh();
    $hierarchy = ContainersHierarchy::getInstance()->getHierarchyOf($container);
    $hierarchy = array_reverse($hierarchy);
    if($hierarchy) {
      for($i = 0; $i < count($hierarchy); $i++) {
        if($hierarchy[$i] == $container) break;
      }

      self::content('extends:containers/'.$container.'.tpl|core/up','up_'.$i);
      self::content('extends:containers/'.$container.'.tpl|core/down','down_'.$i);
      self::content('extends:containers/'.$container.'.tpl|core/title','container_title');
    }
  }

}

?>
