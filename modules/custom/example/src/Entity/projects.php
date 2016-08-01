<?php

namespace Drupal\example\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Projects entity.
 *
 * @ConfigEntityType(
 *   id = "projects",
 *   label = @Translation("Projects"),
 *   handlers = {
 *     "list_builder" = "Drupal\example\projectsListBuilder",
 *     "form" = {
 *       "add" = "Drupal\example\Form\projectsForm",
 *       "edit" = "Drupal\example\Form\projectsForm",
 *       "delete" = "Drupal\example\Form\projectsDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\example\projectsHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "projects",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "project_name" = "project_name",
 *     "duration" = "duration",
 *     "user_id" = "user_id",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/projects/projects/{projects}",
 *     "add-form" = "/admin/structure/projects/projects/add",
 *     "edit-form" = "/admin/structure/projects/projects/{projects}/edit",
 *     "delete-form" = "/admin/structure/projects/projects/{projects}/delete",
 *     "collection" = "/admin/structure/projects/projects"
 *   }
 * )
 */
class projects extends ConfigEntityBase implements projectsInterface {

  /**
   * The Projects ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Projects label.
   *
   * @var string
   */
  protected $label;

  /**
   * The color of this ball.
   *
   * @var string
   */
  protected $project_name;

  /**
   * The color of this ball.
   *
   * @var string
   */
  protected $duration;

  /**
   * The User ID.
   *
   * @var string
   */
  protected $user_id;

  /**
   * {@inheritdoc}
   */
  public function getProjectName(){
    return $this->project_name;
  }

  /**
   * {@inheritdoc}
   */
  public function getDuration(){
    return $this->duration;
  }

  /**
   * {@inheritdoc}
   */
  public function getUserId(){
    return $this->user_id;
  }

    /**
   * {@inheritdoc}
   */
  public function getUsernameById($id){
    $entity_manager = \Drupal::entityManager()->getStorage('projectuser')->load($id);
    return $entity_manager->getUsername();

  }
//   public function getUserNameById(id) {

//     die('inside get username by id');
//         $entity_manager = \Drupal::entityManager();
//     return $entity_manager->getStorage($entity_manager->getEntityTypeFromClass(get_called_class()))->load($id);
// }


}
