<?php

namespace App\Controller;

use App\Entity\UserData;
use App\Entity\View;
use http\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    /**
     * @Route("/collect", name="collect_action")
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function testAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //mandatories
        $stringError = 'Les parametres suivant sont manquants : ';
        $error = false;

        if(is_null($request->query->get('v'))) {
            $error = true;
            $stringError .= ' v';
        }

        if(!is_null($request->query->get('v')) && $request->query->get('v') != "1") {
            return new JsonResponse(array('Error' => 'La version demandee est incorrecte ; Le parametre v de la requete est invalide.'));
        }

        if(is_null($request->query->get('t'))) {
            $error = true;
            $stringError .= ' t';
        }

        if(is_null($request->query->get('tid'))) {
            $error = true;
            $stringError .= ' tid';
        }

        if(($request->query->get('t') == "event") &&
            (is_null($request->query->get('ec')) || is_null($request->query->get('ea')) )) {
            $error = true;
            $stringError .= ' ec ea';
        }

        if(is_null($request->query->get('sn')) && $request->query->get('t') == "screenview") {
            $error = true;
            $stringError .= ' sn';
        }

        //unknown user
        if(!is_null($request->query->get('wui'))) {
            $user = $em->getRepository(UserData::class)->findOneBy(["userName" => $request->query->get('wui')]);
            if(!$user) {
                return new JsonResponse(array('Error' => 'Cet utilisateur n\'existe pas.'));
            }
        }

        if($error) {
            return new JsonResponse(array('Error' => $stringError));
        } else {
            //Query
            $params = $request->query->all();
            //todo

            $views = $em->getRepository(View::class)->findByParams($params);

            var_dump($views);
die;
            //$data = $this->get('serializer')->serialize($views, 'json');


            //return new JsonResponse(array('Status' =>$data));
        }
    }
}
