<?php

namespace Drupal\example\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class UserForm.
 *
 * @package Drupal\example\Form
 */
class UserForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {

    $form = parent::form($form, $form_state);
    $projectuser = $this->entity;

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $projectuser->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\example\Entity\User::load',
      ),
      '#disabled' => !$projectuser->isNew(),
    );

    $form['username'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('*User Name'),
      '#maxlength' => 255,
      '#default_value' => $projectuser->getUsername(),
      '#description' => $this->t("User Name"),
      '#required' => TRUE,
    );



    $form['email'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Email'),
      '#maxlength' => 255,
      '#default_value' => $projectuser->getEmail(),
      '#description' => $this->t("User Email"),
      '#required' => TRUE,
    );

    $form['phone_number'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Phone number'),
      '#maxlength' => 255,
      '#default_value' => $projectuser->getPhoneNumber(),
      '#description' => $this->t("User Phone number"),
      '#required' => TRUE,
    );

    $form['description'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Description'),
      '#maxlength' => 255,
      '#default_value' => $projectuser->getDescription(),
      '#description' => $this->t("User Description"),
      '#required' => TRUE,
    );

    /* You will need additional form elements for your custom properties. */
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $projectuser = $this->entity;
    $status = $projectuser->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label User.', [
          '%label' => $projectuser->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label User.', [
          '%label' => $projectuser->label(),
        ]));
    }
    $form_state->setRedirectUrl($projectuser->urlInfo('collection'));
  }

}
