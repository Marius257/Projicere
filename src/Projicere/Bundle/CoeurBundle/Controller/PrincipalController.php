<?php

namespace Projicere\Bundle\CoeurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrincipalController extends Controller
{
    public function pagePrincipalAction()
    {
        return $this->render('ProjicereCoeurBundle:Principal:pagePrincipal.html.twig', array(
                // ...
            ));    }

}
