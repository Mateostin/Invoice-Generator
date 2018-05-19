<?php

namespace InvoiceGeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GeneratorController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        return $this->render('@InvoiceGenerator/Generator/index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/new")
     */
    public function newInvoiceGeneratedAction()
    {
        return $this->render('@InvoiceGenerator/Generator/new_invoice.html.twig', array(
            // ...
        ));
    }

}
