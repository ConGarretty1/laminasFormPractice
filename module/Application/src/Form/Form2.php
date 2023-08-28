<?php

namespace Application\Form;

use Laminas\Form\Form;
use Laminas\Form\Element\Csrf;
use Laminas\InputFilter\InputFilterProviderInterface;

// Applicant detail form

class Form2 extends Form implements InputFilterProviderInterface
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
      'address' => [
        'required' => true,
        'filters' => [
          ['name' => 'StringTrim'],
        ],
        'validators' => [
          [
            'name' => 'NotEmpty',
          ],
        ],
      ],
      'city' => [
        'required' => true,
        'filters' => [
          ['name' => 'StringTrim'],
        ],
        'validators' => [
          [
            'name' => 'NotEmpty',
          ],
        ],
      ],
      'postcode' => [
        'required' => true,
        'filters' => [
          ['name' => 'StringTrim'],
        ],
        'validators' => [
          [
            'name' => 'NotEmpty',
          ],
        ],
      ],
    ];
  }
}
