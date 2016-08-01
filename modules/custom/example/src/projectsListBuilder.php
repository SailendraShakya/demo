<?php

namespace Drupal\example;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Provides a listing of Projects entities.
 */
class projectsListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['label'] = $this->t('Projects');
    $header['id'] = $this->t('Machine name');
    $header['project_name'] = $this->t('Project name');
    $header['duration'] = $this->t('Duration');
     $header['user_id'] = $this->t('User');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['label'] = $entity->label();
    $row['id'] = $entity->id();
    $row['project_name'] = $entity->getProjectName();
    $row['duration'] = $entity->getDuration();
    $row['user_id'] = $entity->getUserNameById($entity->getUserId());

    // You probably want a few more properties here...
    return $row + parent::buildRow($entity);
  }

}
