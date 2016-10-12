<?php

namespace Eniams\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MediaController extends Controller
{
    public function indexAction()
    {
        return $this->render('EniamsMediaBundle:Media:index.html.twig');
    }
}
