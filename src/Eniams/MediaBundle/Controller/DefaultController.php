<?php

namespace Eniams\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EniamsMediaBundle:Default:index.html.twig');
    }
}
