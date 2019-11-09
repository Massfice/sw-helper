<?php

namespace app\controllers;

use app\bundles\ActionExecutor\Custom\ActionExecutorFactory;
use app\bundles\Service\Custom\ServiceFactory;
use app\bundles\Form\Custom\FormFactory;
use app\bundles\ViewResolver\ViewResolver;
use app\routes\RoutesInfo;
use Massfice\SessionUtils\SessionUtils;
use app\bundles\ActionExecutor\Custom\SetPartExecutor;
use core\Validator;
use app\SWHelperFeatures\PostGenerator\PostGenerator;

class SetsCtrl {

  private static function createListForm() {
    FormFactory::create('SetsListForm')->getView()->assign('sets_list_form');
    $action = RoutesInfo::getAction();
    if($action != 'changeCurrentSet') SessionUtils::store('last_set_action',$action);
  }

  public function __construct() {
    self::createListForm();
  }

  public static function refresh() {
    self::createListForm();
    ViewResolver::refresh('sets');
  }

  public function action_setsView() {
    ActionExecutorFactory::create('SetsViewExecutor')->setContainer('sets')->action();
  }

  public function action_createSet() {
    $service = ServiceFactory::create('CreateSet');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('sets')->action($service);
  }

  public function action_modifySet() {
    $service = ServiceFactory::create('ModifySet');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('sets')->action($service);
  }

  public function action_deleteSet() {
    $service = ServiceFactory::create('DeleteSet');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('sets')->action($service);
  }

  public function action_changeCurrentSet() {
    $service = ServiceFactory::create('ChangeCurrentSet');
    ActionExecutorFactory::create('ServiceExecutor')->action($service);
  }

  public function action_varsView() {
    ActionExecutorFactory::create('VarsViewExecutor')->setContainer('sets')->action();
  }

  public function action_createVar() {
    $service = ServiceFactory::create('CreateVar');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('sets')->action($service);
  }

  public function action_modifyVar() {
    $service = ServiceFactory::create('ModifyVar');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('sets')->action($service);
  }

  public function action_deleteVar() {
    $service = ServiceFactory::create('DeleteVar');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('sets')->action($service);
  }

  public function action_moveVarUp() {
    $service = ServiceFactory::create('MoveVarUp');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('sets')->action($service);
  }

  public function action_moveVarDown() {
    $service = ServiceFactory::create('MoveVarDown');
    ActionExecutorFactory::create('ServiceExecutor')->setContainer('sets')->action($service);
  }

  public function action_generatorView() {
    ViewResolver::content('generator_view');
    SetPartExecutor::generatorView();
    ViewResolver::display('sets');
  }

  public function action_generatePost() {
    $validator = new Validator();

    $pattern = $validator->validateFromRequest('pattern',[
      'escape' => true
    ]);

    $form_data = FormFactory::create('PostGeneratorForm')->getData();
    $generator = new PostGenerator($form_data);

    $pattern = $generator->generatePost($pattern);

    ViewResolver::assign('post_generator_result',$pattern);
    ViewResolver::content('post_generator_result','post_generator_result');
    ViewResolver::display('sets');
  }
}

?>
