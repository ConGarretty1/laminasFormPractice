<?php

namespace Application\Form;

use Laminas\Form\Form;  
use Laminas\Form\Element\Csrf;


// Applicant detail form

class Form2 extends Form
{
  public function __construct()
  {
    parent::__construct('form2');

    $this->add([
      'name' => 'first_name',
      'type' => 'Text',
      'options' => [
        'label' => 'first name',
      ],
    ]);

    $this->add([
      'name' => 'last_name',
      'type' => 'Text',
      'options' => [
        'label' => 'last name',
      ],
    ]);

    $this->add([
      'name' => 'email',
      'type' => 'Email',
      'options' => [
        'label' => 'email',
      ],
    ]);

    $this->add([
      'name' => 'address',
      'type' => 'Text',
      'options' => [
        'label' => 'address',
      ],
    ]);

    $this->add([
      'name' => 'city',
      'type' => 'Text',
      'options' => [
        'label' => 'city',
      ],
    ]);
    
    $this->add([
      'name' => 'postcode',
      'type' => 'Text',
      'options' => [
        'label' => 'postcode',
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

    $this->add([
      'name' => 'submit',
      'type' => 'Submit',
      'attributes' => [
        'value' => 'Submit',
        'id' => 'Submit',
      ],
    ]);

  }
}