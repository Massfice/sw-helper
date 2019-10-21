<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('start'); #default action
App::getRouter()->setLoginRoute('cant'); #action to forward if no permissions

// Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('start','MainCtrl');
Utils::addRoute('forward','MainCtrl');
Utils::addRoute('cant','MainCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
