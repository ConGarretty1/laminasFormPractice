<?php

namespace Application\Form;

use Laminas\Form\Form;
use Laminas\Form\Element\Csrf;
use Laminas\InputFilter\InputFilterProviderInterface;

class Form1 extends Form implements InputFilterProviderInterface
{
  public function init()
  {
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
      'type' => Csrf::class,
      'name' => 'csrf',
      'options' => [
        'csrf_options' => [
          'timeout' => 600,
        ],
      ],
    ]);

    $this->add([
      'name' => 'sign_up',
      'type' => 'Submit',
      'attributes' => [
        'value' => 'Submit',
        'id' => 'sign-up',
      ],
    ]);
  }

  // SET FORM VALIDATION RULES  
  public function getInputFilterSpecification()
  {
    return [
      'first_name' => [
        'required' => true,
        'filters' => [
          ['name' => 'StringTrim'],
        ],
        'validators' => [
          [
            'name' => 'NotEmpty',
          ],
          [
            'name' => 'Alnum',
          ],
        ],
      ],
      'last_name' => [
        'required' => true,
        'filters' => [
          ['name' => 'StringTrim'],
        ],
        'validators' => [
          [
            'name' => 'NotEmpty',
          ],
          [
            'name' => 'Alnum',
          ],
        ],
      ],
      'email' => [
        'required' => true,
        'filters' => [
          ['name' => 'StringTrim'],
        ],
        'validators' => [
          [
            'name' => 'NotEmpty',
          ],
          [
            'name' => 'EmailAddress',
          ],
        ],
      ],
    ];
  }
}
