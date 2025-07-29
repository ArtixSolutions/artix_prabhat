<?php
namespace Drupal\hello_world_by_drush\Controller;
use Drupal\Core\Controller\ControllerBase;
/**
  * Controller for showing a message.
  */

class HelloWorldByDrushController extends ControllerBase {
	/**
	  * Hello World
	  * @ return array
	  * Our message
	  */
	public function helloWorldByDrush() {
	#public function vivek() {
	    return [
	        '#markup' => $this->t('Hello World message coming from Hello World Module created by Drush Commands'),
	    ];
	}
}