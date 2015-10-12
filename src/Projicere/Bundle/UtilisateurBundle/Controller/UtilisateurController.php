<?php

namespace Projicere\Bundle\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projicere\Bundle\UtilisateurBundle\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;

class UtilisateurController extends Controller
{
    public function connectionAction(Request $requette)
    {
        $utilisateurTemp = new Utilisateur();

        $form = $this->createFormBuilder($utilisateurTemp)->add('nomAcces', 'text')->add('motDePasse', 'password')->add('connecter', 'submit')->getForm();

        $form->handleRequest($requette);

        $message = '';

        if($form->isValid())
        {
            $repositoryUtilisateur = $this->getDoctrine()->getManager()->getRepository('ProjicereUtilisateurBundle:Utilisateur');
            $utilisateur = $repositoryUtilisateur->findOneByNomAcces($utilisateurTemp->getNomAcces());
            if($utilisateur)
            {
                if($this->get('projicere_utilisateur.mot_de_passe')->controlerMotDePasse($utilisateur, $utilisateurTemp->getMotDePasse()))
                {
                    $utilisateur->setAuthenticated(true);
                    $this->get('security.context')->setToken($utilisateur);
                    return $this->redirect($this->generateUrl('page_principal'));
                }
                else {
                    $message = "le couple Nom acces / Mot de passe est incorrect";
                }
            }
            else {
                $message = "le couple Nom acces / Mot de passe est incorrect";
            }
        }

        return $this->render('ProjicereUtilisateurBundle:Utilisateur:connection.html.twig', array('form' => $form->createView(), 'message' => $message));
    }

    public function deconnectionAction()
    {
        $this->get('security.context')->setToken(NULL);
        return $this->redirect($this->generateUrl('connection'));
    }

    public function ficheUtilisateurAction()
    {
        return $this->render('ProjicereUtilisateurBundle:Utilisateur:ficheUtilisateur.html.twig', array());
    }

    public function creerAction()
    {
        return $this->render('ProjicereUtilisateurBundle:Utilisateur:creer.html.twig', array());
    }

    public function supprimerAction()
    {
        return $this->render('ProjicereUtilisateurBundle:Utilisateur:supprimer.html.twig', array());
    }

}
