<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    /**
     * Méthode GET
     * @Route("/views/{id}",
     *     name="article_show")
     */
    public function showAction()
    {
        //Query pour récupérer les données demandées

        //On les renvoie
        $data = $this->get('jms_serializer')->serialize($TODO, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Méthode POST
     * @Route("/views",
     *     name="article_show")
     */
    public function insertAction (Request $request)
    {
        $data = $request->getContent();
        $article = $this->get('jms_serializer')->deserialize($data, 'AppBundle\Entity\View', 'json');

        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return new Response('', Response::HTTP_CREATED);
    }
}
