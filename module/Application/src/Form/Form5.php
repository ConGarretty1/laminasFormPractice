<?php

namespace Application\Form;

use Laminas\Form\Form;
use Laminas\InputFilter\InputFilterProviderInterface;
use Laminas\Form\Element\Csrf;

class Form5 extends Form implements InputFilterProviderInterface
{
  public function __construct()
  {
    parent::__construct('form5');

    // Gender
    $this->add([
      'name' => 'gender',
      'type' => 'Select',
      'options' => [
        'label' => 'gender',
        'value_options' => [
          'male' => 'Male',
          'female' => 'Female',
          'other' => 'Other',
          'prefer_not_to_say' => 'Prefer not to say',
        ],
      ],
    ]);

    // Ethnicity
    $this->add([
      'name' => 'ethnicity',
      'type' => 'Select',
      'options' => [
        'label' => 'ethnicity',
        'value_options' => [
          'white' => 'White',
          'black' => 'Black',
          'asian' => 'Asian',
          'mixed' => 'Mixed/Multiple ethnic groups',
          'other' => 'Other ethnic group',
          'prefer_not_to_say' => 'Prefer not to say',
        ],
      ],
    ]);

    // Disability
    $this->add([
      'name' => 'disability',
      'type' => 'Radio',
      'options' => [
        'label' => 'Do you have a disability?',
        'value_options' => [
          'yes' => 'Yes',
          'no' => 'No',
          'prefer_not_to_say' => 'Prefer not to say',
        ],
      ],
    ]);

    $this->add([
      'type' => Csrf::class,
      'name' => 'csrf',
      'options' => [
        'csrf_options' => [
          'timeout' => 600,
        ],
      ],
    ]);

    // Submit button
    $this->add([
      'name' => 'submit',
      'type' => 'Submit',
      'attributes' => [
        'value' => 'Submit',
        'id' => 'submit',
      ],
    ]);
  }

  public function getInputFilterSpecification()
  {
    return [
      'gender' => [
        'required' => false,
      ],
      'ethnicity' => [
        'required' => false,
      ],
      'disability' => [
        'required' => false,
      ],
    ];
  }
}
