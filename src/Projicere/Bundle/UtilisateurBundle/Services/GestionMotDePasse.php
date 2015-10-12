<?php

namespace Projicere\Bundle\UtilisateurBundle\Services;
use Projicere\Bundle\UtilisateurBundle\Entity\Utilisateur;

class GestionMotDePasse
{

    private $nbChiffreMin; // nombre minimum de Chiffre dans le mot de passe

    private $nbCarMajusculeMin; // nombre minimum de lettres majuscule dans le mot de passe

    private $tableauCarMajuscule; // tableau contenant les lettres majuscules

    private $nbCarMinusculeMin; // nombre minimum de lettres minuscule dans le mot de passe

    private $tableauCarMinuscule; // tableau contenant les lettres minuscules

    private $nbCarSpeciauxMin; // nombre minimum de caracteres spéciaux dans le mot de passe

    private $tableauCarSpeciaux; // tableau contenant les caracteres spéciaux utilisées

    private $nbCarMin; // nombre minimum de caractèrres dans le mot de passe

    private $nbCarMax; // nombre maximum de caractère dans le mot de passe, 0 = infinit

    /**
     * constructeur de la clase
     */
    public function __construct($nbChiffreMin, $nbCarMajusculeMin, $nbCarMinusculeMin, $nbCarSpeciauxMin, $nbCarMin, $nbCarMax)
    {
        if($nbChiffreMin < 0)
        {
            $this->nbChiffreMin = 0;
        }
        else {
            $this->nbChiffreMin = $nbChiffreMin;
        }
        if($nbCarMajusculeMin < 0)
        {
            $this->nbCarMajusculeMin = 0;
        }
        else {
            $this->nbCarMajusculeMin = $nbCarMajusculeMin;
        }
        if($nbCarMinusculeMin < 0)
        {
            $this->nbCarMinusculeMin = 0;
        }
        else {
            $this->nbCarMinusculeMin = $nbCarMinusculeMin;
        }
        if($nbCarSpeciauxMin < 0)
        {
            $this->nbCarSpeciauxMin = 0;
        }
        else {
            $this->nbCarSpeciauxMin = $nbCarSpeciauxMin;
        }
        $nbCarMinUltime = $this->nbChiffreMin + $this->nbCarMajusculeMin + $this->nbCarMinusculeMin + $this->nbCarSpeciauxMin;
        if($nbCarMin < 0)
        {
            $this->nbCarMin = 0;
        }
        elseif($nbCarMin < $nbCarMinUltime)
        {
            $this->nbCarMin = $nbCarMinUltime;
        }
        else {
            $this->nbCarMin = $nbCarMin;
        }
        if($nbCarMax < 0)
        {
            $this->$nbCarMax = 0;
        }
        elseif($nbCarMax < $this->nbCarMin)
        {
            $this->$nbCarMax = 0;
        }
        else {
            $this->nbCarMax = $nbCarMax;
        }
        $this->tableauCarMajuscule = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
                                          'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
                                          'U', 'V', 'W', 'X', 'Y', 'Z');
        $this->tableauCarMinuscule = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
                                          'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
                                          'U', 'V', 'W', 'X', 'Y', 'Z');
        $this->tableauCarSpeciaux  =array(',', '.', ':', '!', '?', ';', '/', '§', '&', '\"',
                                          '\'', '(', ')', '-', '_', '@', '=', '$', '*', '%');
    }

    /**
     * function validerMotDePasse($motDePasse)
     * permet de valider le mot de passe selon les rêgles configurer
     * @param $motDePasse
     * le mot de passe à valider
     */
    public function validerMotDePasse($motDePasse)
    {
        $regex = '/';
        $regex .= '(?=(.*[a-z]){'.$this->nbCarMinusculeMin.',})';// Nombre de lettres minuscule minimal
        $regex .= '(?=(.*[A-Z]){'.$this->nbCarMajusculeMin.',})';// Nombre de lettres majscule minimal
        $regex .= '(?=(.*[0-9]){'.$this->nbChiffreMin.',})';// Nombre de chiffres minimal
        $regex .= '(?=(.*[\W_]){'.$this->nbCarSpeciauxMin.',})';// Nombre de caracères spéciaux minimal
        $regex .= '(?=(.{'.$this->nbCarMin.',}))';// Nombre de caractères minimal
        if($this->nbCarMax > 0)
        {
            $regex .= '(?!.{'.$this->nbCarMax.',})';// Nombre de caractères maximal
        }
        $regex .= '/';
        return preg_match($regex, $motDePasse);
    }

    /**
     * function controlerMotDePasse(Utilisateur $Utilisateur, $motDePasse)
     * controle le mot de passe et renvoit le résultat
     * @param $Utilisateur
     * utilisateur avec le mot de passe à contrôler
     * @param $motDePasse
     * mot de passe donné par l'utilisateur
     * @return Boolean
     * true le mot de passe est correct
     * false le mot de passe est incorrect
     */
    public function controlerMotDePasse(Utilisateur $utilisateur, $motDePasse)
    {
        $motDePasseCrypte = crypt($motDePasse, $utilisateur->getSel());
        return $motDePasseCrypte == $utilisateur->getMotDePasse();
    }

    /**
     * function genererMotDePasse(Utilisateur $utilisateur)
     * génère un mot de passe aléatoire l'"envoi" par email à l'utilisateur et le crypte
     * @param $utilisateur
     * l'utilisateur à qui donner le mot de passe
     */
    public function genererMotDePasse(Utilisateur $utilisateur)
    {
        $utilisateur->creerSel();
        $nbCar = 0;
        $nouveauMotDePasse = "";
        $nbChiffre = 0;
        $nbCarMajuscule = 0;
        $nbCarMinuscule = 0;
        $nbCarSpeciaux = 0;
        do
        {
            do
            {
                do
                {
                    $nouveauMotDePasse .= rand(0, 9);
                    $nbCar++;
                    $nbChiffre++;
                }while($nbChiffre < $this->nbChiffreMin);
                do
                {
                    $nouveauMotDePasse .= $this->tableauCarMajuscule[rand(0, 25)];
                    $nbCar++;
                    $nbCarMajuscule++;
                }while($nbCarMajuscule < $this->nbCarMajusculeMin);
                do
                {
                    $nouveauMotDePasse .= $this->tableauCarMinuscule[rand(0, 25)];
                    $nbCar++;
                    $nbCarMinuscule++;
                }while($nbCarMinuscule < $this->nbCarMinusculeMin);
                do
                {
                    $nouveauMotDePasse .= $this->tableauCarSpeciaux[rand(0, (count($this->tableauCarSpeciaux) - 1))];
                    $nbCar++;
                    $nbCarSpeciaux++;
                }while($nbCarSpeciaux < $this->nbCarSpeciauxMin);
            } while ($nbCar < $this->nbCarMin);
            $nouveauMotDePasse = str_shuffle ($nouveauMotDePasse);
        }while (!$this->validerMotDePasse($nouveauMotDePasse));
        // envoyer le mot de passe par mail
        $utilisateur->setMotDePasse(crypt($nouveauMotDePasse, $utilisateur->getSel()));
    }

    /**
     * function changerMotDePasse(Utilisateur $utilisateur, $motDePasse1, $motDePasse2)
     * Permet de changer le mot de passe de l'utilisateur
     *
     * @param $utilisateur
     * utilisateur à qui donner le mot de passe
     * @param $motDePasse1
     * Nouveau mot de passe
     * @param $motDePasse2
     * la confirmation du nouveau mot de passe
     * @return Integer
     * retourne un code d'erreur
     * 0 changement OK
     * 1 mots de passes différents
     */
    public function changerMotDePasse(Utilisateur $utilisateur, $motDePasse1, $motDePasse2)
    {
        if($motDePasse1 == $motDePasse2)
        {
            if($this->validerMotDePasse($motDePasse1))
            {
                $utilisateur->creerSel();
                $utilisateur->setMotDePasse(crypt($motDePasse1, $utilisateur->getSel()));
                $erreur = 0;
            }
            else {
                $erreur = 2;
            }
        }
        else {
            $erreur = 1;
        }
        return $erreur;
    }
}
?>
