<?php

namespace Drupal\hello\Service;

/**
 * Class.
 *
 * @package Drupal\hello\Service
 */
class HelloWorld {

  /**
   * Variable.
   *
   * @var mixed
   */
  protected $saySomething;

  /**
   * Constructor.
   *
   * @return void
   */
  public function __construct() {
    $this->saySomething = 'Hello World Service!';
  }

  /**
   * Function.
   *
   * @param string $name
   *   Comment.
   *
   * @return string
   *   comment
   */
  public function sayHello($name = '') {
    if (empty($name)) {
      return $this->saySomething;
    }
    else {
      return "Hello " . $name . "!";
    }
  }

}
