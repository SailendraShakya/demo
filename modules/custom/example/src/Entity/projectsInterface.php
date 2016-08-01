<?php

namespace Drupal\example\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface for defining Projects entities.
 */
interface projectsInterface extends ConfigEntityInterface {

  // Add get/set methods for your configuration properties here.
    public function getProjectName();
    public function getDuration();
}
