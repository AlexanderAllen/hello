<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\hello\Service\HelloWorld;

/**
 * Class comment.
 *
 * @package Drupal\hello_world\Controller
 */
class HelloController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return value.
   */
  public function content() {

    // $config = \Drupal::config('system.performance');
    // $message = $config->get('css');

    // old way
    // $service = \Drupal::service('hello.say_hello');

    // new way
    $hello = \Drupal::getContainer()->get(HelloWorld::class);
    $msg = $hello->sayHello();


    // $string = "hello %output_text";
    // $arguments = [
    //   '%output_text' => var_export($message, true),
    // ];

    return [
      '#type' => 'markup',
      '#markup' => $msg,
    ];
  }

}
