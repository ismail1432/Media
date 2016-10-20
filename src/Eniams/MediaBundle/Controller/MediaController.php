<?php

namespace Eniams\MediaBundle\Controller;

use Eniams\MediaBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;




class MediaController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Article $listArticle */
        $listArticle = $em->getRepository('EniamsMediaBundle:Article')->findAll();

        var_dump($listArticle);

        return $this->render('EniamsMediaBundle:Media:index.html.twig',
            array('listArticle' => $listArticle));
        die();
    }

    public function monapiAction(){

        $em = $this->getDoctrine()->getManager();
        /** @var Article $listArticle */
       // $listArticle = $em->getRepository('EniamsMediaBundle:Article')->getArrayResult()->findById('1');
        $query = $em->createQuery('SELECT a FROM EniamsMediaBundle:Article a');

        $listArticle = $query->getArrayResult();
        $jsonContent = new JsonResponse();
        $jsonContent->setData(array('listArticle' => $listArticle));
       // var_dump($jsonContent);
        return $this->render('EniamsMediaBundle:Media:api.html.twig',
           array( 'jsoncontent'=> $jsonContent));

    }
}
