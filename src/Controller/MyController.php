<?php
/**
 * @file
 * Contains \Drupal\my_module\Controller\MyController.
 */
 
namespace Drupal\my_module\Controller;

class MyController {
  public function demo() {
    return array(
      '#markup' => t('Hello, World!'),
    );
  }
}