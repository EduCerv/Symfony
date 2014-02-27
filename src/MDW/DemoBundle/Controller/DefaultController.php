<?php


namespace MDW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;
  //use Symfony\Component\HttpFoundation\RedirectResponse;
 
class DefaultController extends Controller
{
         public function indexAction($name)
          {
        return $this->render('MDWDemoBundle:Default:index.html.twig', array('name' => $name));
    }
    
   
         public function holaAction()
          {
//          $response = new Response('Hola mundo!!!');
//          return  $response;
         return $this->render('MDWDemoBundle:Default:hola.html.twig', array('hola' => 'Hola mundo'));
        }
        
        
        public function ejemplo1Action(){
               return $this->redirect(
			$this->generateUrl('ejemplo2')
		);
//              return new RedirectResponse($this->generateUrl('MDWDemoBundle:Default:ejemplo2.html.twig', array('mostrar' => 'tres tristes tigres...')), 301);
//              return $this->render('MDWDemoBundle:Default:ejemplo1.html.twig', array('ejemplo' => 'Hola'));
        }
        
        
        public function ejemplo2Action(){
          return $this->render('MDWDemoBundle:Default:ejemplo2.html.twig', array('ola' => 'Que paso men.'));
        }

        public function articulosAction() {  
    
            //-- Simulamos obtener los datos de la base de datos cargando los artículos a un array
            $articulos = array(
            array('id' => 1, 'title' => 'Ferrari SP12 EC', 'created' =>
            '15/05/1990', 'description' => 'Eric Clapton, además de ser un genial músico, es un amante de las Ferraris y en especial del 512 BB, del cual tuvo tres unidades. Ahora la casa de Maranello lo involucró en el desarrollo de un modelo único en el mundo, hecho sólo para él e inspirado en su coche favorito. '),
            array('id' => 2, 'title' => 'Ferrari 340 Mexico', 'created' =>
            '30/07/2001', 'description' => 'En 1952, se crea una versión supermejorada del ya famoso 340 America. Para orgullo del pueblo azteca, uno de los Ferrari más potentes de principios de los cincuenta lleva como denominación México. El motor es un V12 de 60 grados y 4101 cc de capacidad, con una potencia de 280 HP capaz de llegar a los impresionantes 280 km/h.'),
            array('id' => 3, 'title' => 'Ferrari 250 GTO', 'created' =>
             '18/11/2012', 'description' => 'Esta versión de la serie de los 250 fue hecha eminentemente para competir. Uno de los primeros modelos hechos en la década de los sesenta (1962), presentó como novedad frenos de disco, él único de los 250 que los posee. '),
                );
            return $this->render('MDWDemoBundle:Default:articulos.html.twig',
            array('articulos' => $articulos));
        }
  

        public function articuloAction($id){
            //-- Simulamos obtener los datos de la base de datos cargando los artículos a un array
                $articulos = array(
            array('id' => 1, 'title' => 'Ferrari SP12 EC', 'created' =>
            '15/05/1990', 'description' => 'Eric Clapton, además de ser un genial músico, es un amante de las Ferraris y en especial del 512 BB, del cual tuvo tres unidades. Ahora la casa de Maranello lo involucró en el desarrollo de un modelo único en el mundo, hecho sólo para él e inspirado en su coche favorito. '),
            array('id' => 2, 'title' => 'Ferrari 340 Mexico', 'created' =>
            '30/07/2001', 'description' => 'En 1952, se crea una versión supermejorada del ya famoso 340 America. Para orgullo del pueblo azteca, uno de los Ferrari más potentes de principios de los cincuenta lleva como denominación México. El motor es un V12 de 60 grados y 4101 cc de capacidad, con una potencia de 280 HP capaz de llegar a los impresionantes 280 km/h.'),
            array('id' => 3, 'title' => 'Ferrari 250 GTO', 'created' =>
            '18/11/2012', 'description' => 'Esta versión de la serie de los 250 fue hecha eminentemente para competir. Uno de los primeros modelos hechos en la década de los sesenta (1962), presentó como novedad frenos de disco, él único de los 250 que los posee. '),
                );
            //-- Buscamos dentro del array el ID solicitado
            $articuloSeleccionado = null;
            foreach($articulos as $articulo)
            {
            if($articulo['id'] == $id)
            {
            $articuloSeleccionado = $articulo;
            break;
            }
            }

            //-- Invocamos a nuestra nueva plantilla, pasando los datos
            return $this->render('MDWDemoBundle:Default:articulo.html.twig',
            array('articulo' => $articuloSeleccionado));
        }

        public function herenciaAction() {
              
        return $this->render('MDWDemoBundle:Default:heredar.html.twig', array('ola' => 'Como está??'));            
              
        }
        
        public function heredarAction() {
        
            return $this->render('MDWDemoBundle:Default:heredar.html.twig', array('ola' => 'Locura Automatica'));
        
        }
        
        public function menuAction() {
            return $this->render('MDWDemoBundle:Default:principal.html.twig', array('us' => 'Bienvenid@'));            
        }
}

