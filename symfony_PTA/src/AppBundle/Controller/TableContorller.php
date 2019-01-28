<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/table", name="table")
     */
    public function tableAction(Request $request)
    {
      $em = $this->getDoctorine()->getEntityManager();
      $client = $em->getRepository("AppBundle:Client")->findall();

      return new Response("<html><body>あなたの運勢は $clie[$number] です。</body></html>")
    }
}
