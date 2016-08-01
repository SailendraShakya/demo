<?php

namespace Drupal\example;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Provides a listing of User entities.
 */
class UserListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['username'] = $this->t('User Name');
    $header['email'] = $this->t('Email');
    $header['phone_number'] = $this->t('Phone Number');
    $header['description'] = $this->t('Description');
    $header['id'] = $this->t('Machine name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['username'] = $entity->getUsername();
    $row['email'] = $entity->getEmail();
    $row['phone_number'] = $entity->getPhoneNumber();
    $row['description'] = $entity->getDescription();
    $row['id'] = $entity->id();
    // You probably want a few more properties here...
    return $row + parent::buildRow($entity);
  }

}
