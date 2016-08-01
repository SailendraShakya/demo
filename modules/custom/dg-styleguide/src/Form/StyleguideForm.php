<?php

/**
 * @file
 * Contains \Drupal\dg_styleguide\Form\StyleguideForm.
 */

namespace Drupal\dg_styleguide\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an example form.
 */
class StyleguideForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'dg_styleguide_base_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['input_title'] = array(
      '#type' => 'textfield',
      '#title' => t('Text Field'),
    );
    $form['input_textarea'] = array(
      '#type' => 'textarea',
      '#title' => t('Textarea Field'),
    );
    $form['input_select'] = array(
      '#type' => 'select',
      '#title' => t('Select Field'),
      '#options' => ['One', 'Two', 'Three', 'Four']
    );
    $form['input_radios'] = [
      '#title' => t('Radio Field'),
      '#type' => 'radios',
      '#options' => ['One', 'Two', 'Three', 'Four']
    ];
    $form['input_checkboxes'] = [
      '#title' => t('Checkbox Field'),
      '#type' => 'checkboxes',
      '#options' => ['One', 'Two', 'Three', 'Four']
    ];
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('phone_number')) < 3) {
      $form_state->setErrorByName('phone_number', $this->t('The phone number is too short. Please enter a full phone number.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($this->t('Your phone number is @number', array('@number' => $form_state->getValue('phone_number'))));
  }

}
