<?php

namespace Application\Controller\Factory;

use Psr\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Application\Controller\IndexController;

// import forms 
use Application\Form\Form1;
use Application\Form\Form2;
use Application\Form\Form3;
use Application\Form\Form4;
use Application\Form\Form5;

class IndexControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
      // init() requires form manager from the container to be fetched
      $formManager = $container->get('FormElementManager');

      $form1 = $formManager->get(Form1::class);
      $form2 = $formManager->get(Form2::class);
      $form3 = $formManager->get(Form3::class);
      $form4 = $formManager->get(Form4::class);
      $form5 = $formManager->get(Form5::class);

        return new IndexController($form1, $form2, $form3, $form4, $form5);
    }
}
