<?php

namespace Application\Form;

use Laminas\Form\Form;
use Laminas\Form\Element\Csrf;

class Form3 extends Form
{
  public function __construct()
  {
    parent::__construct('form3');

    $this->add([
      'name' => 'loan_amount',
      'type' => 'Number',
      'options' => [
        'label' => 'Loan Amount',
      ],
    ]);

    $this->add([
      'name' => 'loan_duration',
      'type' => 'Number',
      'options' => [
        'label' => 'Loan Duration (months)',
      ],
    ]);

    $this->add([
      'name' => 'loan_reason',
      'type' => 'MultiCheckbox',
      'options' => [
        'label' => 'Reason for Loan',
        'value_options' => [
          'business_expansion' => 'expansion',
          'equipment_purchase' => 'equipment purchase',
          'inventory_purchase' => 'stock purchase',
          'working_capital' => 'capital',
          'debt_refinancing' => 'debt refinancing',
          'other' => 'other',
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
