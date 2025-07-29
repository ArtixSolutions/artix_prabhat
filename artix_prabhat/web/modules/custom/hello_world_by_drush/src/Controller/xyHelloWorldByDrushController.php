<?php

declare(strict_types=1);

namespace Drupal\hello_world_by_drush\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for hello_world_by_drush routes.
 */
final class HelloWorldByDrushController extends ControllerBase {

  /**
   * Builds the response.
   */
  #public function __invoke(): array {

  public function __invoke(): array {
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
