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
  public function indexAction()
  {
    return $this->displayForm1Action();
  }

  public function displayForm1Action()
  {
    $form = new Form1();

    return new ViewModel([
      'form' => $form,
    ]);
  }

  public function submitForm1Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $form1 = new Form1();
    $form1->setData($postData);

    // Handle form validation and return user to form1 if validation fails
    if (!$form1->isValid()) {
      return new ViewModel([

        // This could be submit-form1.phtml, but with an error message to help the user?
        'form1' => $form1,
      ]);
    }

    $validatedData = $form1->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form2');
  }


  public function displayForm2Action()
  {
    $form = new Form2();

    return new ViewModel([
      'form' => $form,
    ]);
  }

  public function submitForm2Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $form2 = new Form2();
    $form2->setData($postData);

    // Handle form validation and return user to form2 if validation fails
    if (!$form2->isValid()) {
      return new ViewModel([

        // This could be submit-form2.phtml, but with an error message to help the user?
        'form2' => $form2,
      ]);
    }

    $validatedData = $form2->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form3');
  }

  public function displayForm3Action()
  {
    $form = new Form3();

    return new ViewModel([
      'form' => $form,
    ]);
  }

  public function submitForm3Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $form3 = new Form3();
    $form3->setData($postData);

    // Handle form validation and return user to form3 if validation fails
    if (!$form3->isValid()) {
      return new ViewModel([

        // This could be submit-form3.phtml, but with an error message to help the user?
        'form3' => $form3,
      ]);
    }

    $validatedData = $form3->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form4');
  }

  public function displayForm4Action()
  {
    $form = new Form4();

    return new ViewModel([
      'form' => $form,
    ]);
  }

  public function submitForm4Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $form4 = new Form4();
    $form4->setData($postData);

    // Handle form validation and return user to form4 if validation fails
    if (!$form4->isValid()) {
      return new ViewModel([

        // This could be submit-form4.phtml, but with an error message to help the user?
        'form4' => $form4,
      ]);
    }

    $validatedData = $form4->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form5');
  }

  public function displayForm5Action()
  {
    $form = new Form5();

    return new ViewModel([
      'form' => $form,
    ]);
  }

  public function submitForm5Action()
  {
    /** @var Request $request */
    $request = $this->getRequest();

    $postData = $request->getPost();
    $form5 = new Form5();
    $form5->setData($postData);

    // Handle form validation and return user to form5 if validation fails
    if (!$form5->isValid()) {
      return new ViewModel([

        // This could be submit-form5.phtml, but with an error message to help the user?
        'form5' => $form5,
      ]);
    }

    $validatedData = $form5->getData();
    // do something with the valid data

    // then redirect to the next form
    return $this->redirect()->toRoute('display-form6');
  }

}
