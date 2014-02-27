<?php

namespace Lalo\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {
        $content = array();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $data = $request->request->all();
            $content['nombre'] = $data['nombre'];
            $content['apellido'] = $data['apellido'];
            $content['escuela'] = $data['escuela'];
        }
        return $this->render('LaloPruebaBundle:Default:informacion.html.twig', array('content' => $content));
    }

    public function updateAction() {
        
    }

}
