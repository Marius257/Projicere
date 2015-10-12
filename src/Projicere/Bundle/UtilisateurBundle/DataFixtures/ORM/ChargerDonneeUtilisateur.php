<?php

namespace Projicere\Bundle\UtilisateurBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
//use Projicere\Bundle\UtilisateurBundle\Entity\Role;
use Projicere\Bundle\UtilisateurBundle\Entity\utilisateur;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class ChargerDonneeUtilisateur extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $utilisateur = new utilisateur();
        $utilisateur->setNom('');
        $utilisateur->setPrenom('');
        $utilisateur->setEmail('');
        $utilisateur->setTelephone('');
        $utilisateur->setRoles(array($this->getReference('ROLE_UTILISATEUR')));
        $utilisateur->setNomAcces('');
        $motDePasse = '';
        $this->container->get('projicere_utilisateur.mot_de_passe')->changerMotDePasse($utilisateur, $motDePasse, $motDePasse);
        $utilisateur->setAvatar('');
        $manager->persist($utilisateur);
        $manager->flush();
    }

    public function getOrder()
    {
        return 2; // l'ordre de chargement des fixtures
    }
}

?>
