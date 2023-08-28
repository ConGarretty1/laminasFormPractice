<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Laminas\http\Request;

// import forms 
use Application\Form\Form1;
use Application\Form\Form2;
use Application\Form\Form3;
use Application\Form\Form4;
use Application\Form\Form5;

class IndexController extends AbstractActionController
{
  // resitrct form modfications from here
  private $form1;
  private $form2;
  private $form3;
  private $form4;
  private $form5;

  // pass forms to the constructor when the controller is created
  public function __construct(
    Form1 $form1,
    Form2 $form2,
    Form3 $form3,
    Form4 $form4,
    Form5 $form5
  ) {
    $this->form1 = $form1;
    $this->form2 = $form2;
    $this->form3 = $form3;
    $this->form4 = $form4;
    $this->form5 = $form5;
  }

  public function indexAction()
  {
    return $this->displayForm1Action();
  }

  public function displayForm1Action()
  {
    return new ViewModel([
      'form' => $this->form1,
    ]);
  }

  public function submitForm1Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $this->form1->setData($postData);

    // Handle form validation and return user to form1 if validation fails
    if (!$this->form1->isValid()) {
      return new ViewModel([

        // This could be submit-form1.phtml, but with an error message to help the user?
        'form1' => $this->form1,
      ]);
    }

    $validatedData = $this->form1->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form2');
  }


  public function displayForm2Action()
  {
    return new ViewModel([
      'form' => $this->form2,
    ]);
  }

  public function submitForm2Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $this->form2->setData($postData);

    // Handle form validation and return user to form2 if validation fails
    if (!$this->form2->isValid()) {
      return new ViewModel([

        // This could be submit-form2.phtml, but with an error message to help the user?
        'form2' => $this->form2,
      ]);
    }

    $validatedData = $this->form2->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form3');
  }

  public function displayForm3Action()
  {
    return new ViewModel([
      'form' => $this->form3,
    ]);
  }

  public function submitForm3Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $this->form3->setData($postData);

    // Handle form validation and return user to form3 if validation fails
    if (!$this->form3->isValid()) {
      return new ViewModel([

        // This could be submit-form3.phtml, but with an error message to help the user?
        'form3' => $this->form3,
      ]);
    }

    $validatedData = $this->form3->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form4');
  }

  public function displayForm4Action()
  {
    return new ViewModel([
      'form' => $this->form4,
    ]); 
  }

  public function submitForm4Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $this->form4->setData($postData);

    // Handle form validation and return user to form4 if validation fails
    if (!$this->form4->isValid()) {
      return new ViewModel([

        // This could be submit-form4.phtml, but with an error message to help the user?
        'form4' => $this->form4,
      ]);
    }

    $validatedData = $this->form4->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form5');
  }

  public function displayForm5Action()
  {
    return new ViewModel([
      'form' => $this->form5,
    ]);
  }

  public function submitForm5Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $this->form5->setData($postData);

    // Handle form validation and return user to form5 if validation fails
    if (!$this->form5->isValid()) {
      return new ViewModel([

        // This could be submit-form5.phtml, but with an error message to help the user?
        'form5' => $this->form5,
      ]);
    }

    $validatedData = $this->form5->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form6');
  }
}
