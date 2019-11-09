<?php

namespace app\SWHelperFeatures\PostGenerator;

use Iterator;

class PostGenerator {

  private $variables;

  private function addVariable(string $key, string $data) {
    $keys = explode('_',$key);
    if(count($keys) > 1) {
      $skey = $keys[count($keys) - 1];
      if($skey == 'begin' || $skey == 'end') {
        $key = '';
        for($i = 0; $i < count($keys) - 1; $i ++) {
          if($i != 0) $key = $key.'_';
          $key = $key.$keys[$i];
        }

        if($key != '') {
          $this->variables[$key][$skey] = $data;
        }
      }
    }
  }

  public function __construct(Iterator $data) {
    $this->variables = [];
    foreach($data as  $k => $d) {
      if($k != 'submit') $this->addVariable($k,$d);
    }
  }

  public function generatePost(string $pattern) : string {
    foreach($this->variables as $k => $v) {
      if(!SpecialResolver::isSpecial($k)) {
        $pattern = str_replace('['.$k.']',$v['begin'],$pattern);
        $pattern = str_replace('[/'.$k.']',$v['end'],$pattern);
      } else {
        $special = SpecialResolver::getSpecial($k);
        $pattern = str_replace('['.$k.']',$special->generate($this->variables[$special->getName()]['begin']),$pattern);
      }
    }

    return $pattern;
  }

}

?>
