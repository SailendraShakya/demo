<?php

namespace Drupal\example\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface for defining User entities.
 */
interface UserInterface extends ConfigEntityInterface {

  // Add get/set methods for your configuration properties here.
  public function getUsername();
  public function getEmail();
  public function getPhoneNumber();
  public function getDescription();
}
