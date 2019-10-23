<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\routes\RoutesInfo;

use app\bundles\ViewResolver\ViewResolver;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class HelloCtrl {

    public function action_hello() {
      ViewResolver::content('on','toggle');
      ViewResolver::display('ojciec');
    }

    public function action_hello2() {
      ViewResolver::content('off','toggle');
      ViewResolver::display('babcia');
    }

    public function action_on() {
      ViewResolver::content('on','toggle');
      ViewResolver::display();
    }

    public function action_off() {
      ViewResolver::content('off','toggle');
      ViewResolver::display();
    }

}
