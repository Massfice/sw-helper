<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\routes\RoutesInfo;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class HelloCtrl {

    public function action_hello() {

        $variable = RoutesInfo::getLast();

        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");

        App::getSmarty()->assign("value",$variable);
        App::getSmarty()->display("Hello.tpl");

    }

    public function action_hello2() {
      echo 'ss';
    }

}
