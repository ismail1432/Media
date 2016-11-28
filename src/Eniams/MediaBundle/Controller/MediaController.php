<?php

namespace Eniams\MediaBundle\Controller;

use Eniams\MediaBundle\Entity\Article;
use Eniams\MediaBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;





class MediaController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Article $listArticle */
        $listArticle = $em->getRepository('EniamsMediaBundle:Article')->findAll();

        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($request->isXmlHttpRequest())
        {
            $article = $form->getData();
            $em->persist($article);
            $em->flush();

        }

        return $this->render('EniamsMediaBundle:Media:index.html.twig',
                        array('form'=> $form->createView(), 'listArticle' => $listArticle));

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
