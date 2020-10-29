<?php
/**
 * @file
 * Contains \Drupal\custom_module\Controller\HelloController.
 */
namespace Drupal\custom_module\Controller;
class HelloController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}