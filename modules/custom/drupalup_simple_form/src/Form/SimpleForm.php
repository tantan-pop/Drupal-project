<?php

namespace Drupal\drupalup_simple_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SimpleForm extends FormBase
{

  public function getFormId()
  {
    return 'hello_world_simple_form';
  }
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['number_1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First number')
    ];
    $form['number_2'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Second number')
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Calculate')
    ];
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    // form_set_error('price', t('Price must be a positive number.'));
    drupal_set_message($form_state->getValue('number_1') + $form_state->getValue('number_1'));
  }
}
