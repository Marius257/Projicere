<?php

namespace Projicere\Bundle\UtilisateurBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Projicere\Bundle\UtilisateurBundle\Entity\Role;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class ChargerDonneeRoles extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $role = new Role();
        $role->setRole('ROLE_UTILISATEUR');
        $manager->persist($role);
        $this->addReference('ROLE_UTILISATEUR', $role);
        $manager->flush();
    }

    public function getOrder()
    {
        return 1; // l'ordre de chargement des fixtures
    }
}

?>
