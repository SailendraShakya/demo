<?php

namespace Drupal\example\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class projectsForm.
 *
 * @package Drupal\example\Form
 */
class projectsForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);
    $users = \Drupal::entityManager()->getStorage('projectuser')->loadMultiple();
    foreach($users as $user):
      $key = $user->id();
      $value = $user->getUsername();
      $dropdown_array[$key] = $value;
    endforeach;

    $projects = $this->entity;
    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $projects->label(),
      '#description' => $this->t("Label for the Projects."),
      '#required' => TRUE,
    );

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $projects->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\example\Entity\projects::load',
      ),
      '#disabled' => !$projects->isNew(),
    );

    $form['project_name'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Project Name'),
        '#default_value' => $projects->getProjectName(),
        '#size' => 30,
        '#required' => TRUE,
        '#maxlength' => 64,
        '#description' => $this->t('The color of this ball.'),
    );
    $form['duration'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Project Duration'),
        '#default_value' => $projects->getDuration(),
        '#size' => 30,
        '#required' => TRUE,
        '#maxlength' => 64,
        '#description' => $this->t('The number of points this ball is worth.'),
    );
    $form['user_id'] = array(
        '#type' => 'select',
        '#title' => $this->t('Project User'),
        '#description' => $this->t('The number of points this ball is worth.'),
        '#options' => $dropdown_array
    );

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $projects = $this->entity;
    $status = $projects->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Projects.', [
          '%label' => $projects->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Projects.', [
          '%label' => $projects->label(),
        ]));
    }
    $form_state->setRedirectUrl($projects->urlInfo('collection'));
  }

}
