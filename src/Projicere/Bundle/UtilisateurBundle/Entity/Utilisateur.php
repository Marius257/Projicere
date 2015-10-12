<?php

namespace Projicere\Bundle\UtilisateurBundle\Entity;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projicere\Bundle\UtilisateurBundle\Entity\UtilisateurRepository")
 */
class Utilisateur implements TokenInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_acces", type="string", length=35)
     */
    private $nomAcces;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=64)
     */
    private $motDePasse;

    /**
     * @var string
     *
     * @ORM\Column(name="sel", type="string", length=32)
     */
    private $sel;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=35)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=35)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20)
     */
    private $telephone;

    /**
     * @var Array
     *
     * @ORM\ManyToMany(targetEntity="Role", cascade={"persist"})
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255)
     */
    private $avatar;

    private $auth;

    private $attributs;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Utilisateur
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomAcces
     *
     * @param string $nomAcces
     * @return Utilisateur
     */
    public function setNomAcces($nomAcces)
    {
        $this->nomAcces = $nomAcces;

        return $this;
    }

    /**
     * Get nomAcces
     *
     * @return string
     */
    public function getNomAcces()
    {
        return $this->nomAcces;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return Utilisateur
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set sel
     *
     * @return Utilisateur
     */
    public function setSel($sel)
    {
        $this->sel = $sel;
        return $this;
    }

    /**
     * Get sel
     *
     * @return string
     */
    public function getSel()
    {
        return $this->sel;
    }

    /**
     * fonction creerSel()
     * permet de créer le sel utilisé pour le mot de passe
     */
    function creerSel()
    {
        $this->sel = "";
        for($i = 0; $i < 32; $i++)
        {
            $numero = rand(0, 15);
            switch($numero)
            {
            default:
                $car = $numero;
                break;
            case 10:
                $car = "A";
                break;
            case 11:
                $car = "B";
                break;
            case 12:
                $car = "C";
                break;
            case 13:
                $car = "D";
                break;
            case 14:
                $car = "E";
                break;
            case 15:
                $car = "F";
                break;
            }
            $this->sel .= $car;
        }
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Utilisateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set roles
     *
     * @param Array $roles
     * @return Utilisateur
     */
    public function setRoles($roles)
    {
        $this->roles = new ArrayCollection($roles);

        return $this;
    }

    /**
     * Add role
     *
     * @param Role $role
     * @return Utilisateur
     */
    public function addRole(Role $role)
    {
        if(!in_array($role, $this->roles))
        {
            $this->roles[] = $role;
        }

        return $this;
    }

    public function removeRole(Role $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Utilisateur
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Permet d'avoir le nom de l'Utilisateur
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->getPrenom()." ".$this->getNom();
    }

    public function __toString()
    {
        return $this->getUsername();
    }

    /**
     * function getCredentials()
     * permet de récupérer les données de créditential
     *
     * @return string
     * json représentant les données
     */
    public function getCredentials()
    {
        return json_encode(
          array(
            'nom' => $this->getNom(),
            'prenom' => $this->getPrenom(),
            'email' => $this->getEmail(),
            'telephone' => $this->getTelephone()));
    }

    public function getUser()
    {
        return json_encode($this);
    }

    public function setUser($user)
    {
        $utilisateur = json_decode($user);
        foreach($utilisateur as $cleUtil => $valeurUtil)
        {
            switch($cleUtil)
            {
            case "id":
                $this->setId($valeurUtil);
                break;
            case "nomAcces":
                $this->setNomAcces($valeurUtil);
                break;
            case "motDePasse":
                $this->setMotDePasse($valeurUtil);
                break;
            case "nom":
                $this->setNom($valeurUtil);
                break;
            case "prenom":
                $this->setPrenom($valeurUtil);
                break;
            case "email":
                $this->setEmail($valeurUtil);
                break;
            case "telephone":
                $this->setTelephone($valeurUtil);
                break;
            case "roles":
                $this->setRoles($valeurUtil);
                break;
            case "avatar":
                $this->setAvatar($valeurUtil);
                break;
            case "auth":
                $this->setAuthenticated($valeurUtil);
                break;
            case "attributs":
                $this->setAttributes($valeurUtil);
                break;
            }
        }
    }

    public function isAuthenticated()
    {
        return $this->auth;
    }

    public function setAuthenticated($isAuthenticated)
    {
        $this->auth = $isAuthenticated;
    }

    public function eraseCredentials()
    {
      $this->getNom("");
      $this->getPrenom("");
      $this->getEmail("");
      $this->getTelephone("");
    }

    public function getAttributes()
    {
        return $this->attributs;
    }

    public function setAttributes(Array $attributes = NULL)
    {
        $this->attributs = $attributes;
    }

    public function hasAttribute($name)
    {
        return array_key_exists($name, $this->attributs);
    }

    public function getAttribute($name)
    {
        if($this->hasAttribute($name))
        {
            return $this->attributs[$name];
        }
        return false;
    }

    public function setAttribute($name, $value)
    {
        $this->attributs[$name] = $value;
    }

    public function serialize() {
        $tmpRoles = array();
        foreach($this->getRoles() as $role)
        {
            $tmpRoles[] = array('id' => $role->getId(), 'role' => $role->getRole());
        }
        return json_encode(
            array(
                'id' => $this->getId(),
                'nomAcces' => $this->getNomAcces(),
                'motDePasse' => $this->getMotDePasse(),
                'nom' => $this->getNom(),
                'prenom' => $this->getPrenom(),
                'email' => $this->getEmail(),
                'telephone' => $this->getTelephone(),
                'roles' => $tmpRoles,
                'avatar' => $this->getAvatar(),
                'auth' => $this->isAuthenticated(),
                'attributs' => $this->getAttributes()));
    }

    public function unserialize($data) {
        $donnees = json_decode($data, true);
        $this->setId($donnees['id']);
        $this->setNomAcces($donnees['nomAcces']);
        $this->setMotDePasse($donnees['motDePasse']);
        $this->setNom($donnees['nom']);
        $this->setPrenom($donnees['prenom']);
        $this->setEmail($donnees['email']);
        $this->setTelephone($donnees['telephone']);
        $tRoles = array();
        foreach($donnees['roles'] as $donneRole)
        {
            $role = new Role();
            $role->setId($donneRole['id'])
                  ->setRole($donneRole['role']);
            $tRoles[] = $role;
        }
        $this->setRoles($tRoles);
        $this->setAvatar($donnees['avatar']);
        $this->setAuthenticated($donnees['auth']);
        $this->setAttributes($donnees['attributs']);
    }
}
