<?php
/**
 * @file
 * Contains \Drupal\custom_module\Controller\HelloController.
 */
namespace Drupal\custom_module\Controller;

class HelloController {

  public function content() {

    // Do something with your variables here.
    $myText = 'This is not just a default text!';
    $myNumber = 1;
    $myArray = [1, 2, 3];
 
    return [
       // Your theme hook name.
       '#theme' => 'module_name_theme_hook',      
       // Your variables.
       '#variable1' => $myText,
       '#variable2' => $myNumber,
       '#variable3' => $myArray,
     ];

  }
  
}