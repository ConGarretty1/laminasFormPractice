<?php

namespace Application\Form;

use Laminas\Form\Form;
use Laminas\Form\Element\Csrf;
use Laminas\Form\Element\Captcha as CaptchaElement;
use Laminas\Captcha\Figlet as FigletCaptcha;
use Laminas\InputFilter\InputFilterProviderInterface;

class Form4 extends Form implements InputFilterProviderInterface
{
  public function __construct()
  {
    parent::__construct('form4');

    $this->add([
      'name' => 'contact_name',
      'type' => 'Text',
      'options' => [
        'label' => 'Your Name',
      ],
    ]);

    $this->add([
      'name' => 'contact_email',
      'type' => 'Email',
      'options' => [
        'label' => 'Your Email',
      ],
    ]);

    $this->add([
      'name' => 'contact_message',
      'type' => 'Textarea',
      'options' => [
        'label' => 'Your Message',
      ],
    ]);

    // WORK ON VALIDATION ERROR ON SUBMIT
    // $captcha = new CaptchaElement('captcha');
    // $figletConfig = [
    //   'name' => 'captcha',
    //   'wordLen' => 5,
    //   'timeout' => 300,
    // ];

    // $captcha->setCaptcha(new FigletCaptcha($figletConfig));
    // $this->add($captcha);

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
        'id' => 'submit',
      ],
    ]);
  }

  public function getInputFilterSpecification()
  {
    return [
      'contact_name' => [
        'required' => true,
        'filters' => [
          ['name' => 'StringTrim'],
        ],
        'validators' => [
          [
            'name' => 'StringLength',
            'options' => [
              'min' => 3,
              'max' => 255,
            ],
          ],
        ],
      ],
      'contact_email' => [
        'required' => true,
        'validators' => [
          ['name' => 'EmailAddress'],
        ],
      ],
      'contact_message' => [
        'required' => true,
        'filters' => [
          ['name' => 'StringTrim'],
        ],
        'validators' => [
          [
            'name' => 'StringLength',
            'options' => [
              'min' => 1,
            ],
          ],
        ],
      ],
      // 'captcha' => [
      //   'required' => true,
      // ],
    ];
  }
}
