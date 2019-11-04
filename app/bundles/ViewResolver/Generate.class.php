<?php

namespace app\bundles\ViewResolver;

use core\App;
use Massfice\SelectingViewResolver\Generator\GeneratorMethod;
use Massfice\Storage\Storage;

class Generate implements GeneratorMethod {

  private function executeTempate(string $file) : array {
    if($file != '') {
      $r['up'] = App::getSmarty()->fetch('extends:containers/'.$file.'.tpl|core/up.tpl');
      $r['down'] = App::getSmarty()->fetch('extends:containers/'.$file.'.tpl|core/down.tpl');
      $r['title'] = App::getSmarty()->fetch('extends:containers/'.$file.'.tpl|core/title.tpl');;
    } else {
      $r['up'] = '';
      $r['down'] = '';
      $r['title'] = false;
    }

    return $r;
  }

  public function generateView(array $array) : string {

    for($i = 0; $i < count($array); $i++) {
      if($array[$i] || $array[$i] === '') {
        if(is_string($array[$i])) {
          $template = $this->executeTempate($array[$i]);
          Storage::getInstance()
            ->getShelf('view_resolver_containers')
            ->addData('up_'.$i,$template['up'])
            ->addData('down_'.$i,$template['down']);

          if($template['title']) {
            Storage::getInstance()
              ->getShelf('view_resolver_contents')
              ->addData('container_title',$template['title'],true);
          }
        }
      }
    }

    return Storage::getInstance()->makeJson();
  }
}

?>
