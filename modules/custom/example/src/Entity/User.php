<?php

namespace Drupal\example\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the User entity.
 *
 * @ConfigEntityType(
 *   id = "projectuser",
 *   label = @Translation("User"),
 *   handlers = {
 *     "list_builder" = "Drupal\example\UserListBuilder",
 *     "form" = {
 *       "add" = "Drupal\example\Form\UserForm",
 *       "edit" = "Drupal\example\Form\UserForm",
 *       "delete" = "Drupal\example\Form\UserDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\example\UserHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "projectuser",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "username" = "username",
 *     "email" = "email",
 *     "phone_number" = "phone_number",
 *     "description" = "description",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/projectuser/projectuser/{projectuser}",
 *     "add-form" = "/admin/structure/projectuser/projectuser/add",
 *     "edit-form" = "/admin/structure/projectuser/projectuser/{projectuser}/edit",
 *     "delete-form" = "/admin/structure/projectuser/projectuser/{projectuser}/delete",
 *     "collection" = "/admin/structure/projectuser/projectuser"
 *   }
 * )
 */
class User extends ConfigEntityBase implements UserInterface {

  /**
   * The User ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The User Name.
   *
   * @var string
   */
  protected $username;

  /**
   * The User Email.
   *
   * @var string
   */
  protected $email;

  /**
   * The User Phone number.
   *
   * @var string
   */
  protected $phone_number;

  /**
   * The User Description.
   *
   * @var string
   */
  protected $description;

  /**
   * {@inheritdoc}
   */
  public function getUsername(){
    return $this->username;
  }

  /**
   * {@inheritdoc}
   */
  public function getEmail(){
    return $this->email;
  }

  /**
   * {@inheritdoc}
   */
  public function getPhoneNumber(){
    return $this->phone_number;
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription(){
    return $this->description;
  }

}
