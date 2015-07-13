# Projicere
## Cahier des charges fonctionnelles
### Organigrame
#### Chef de projet (Marius)

* Responsable de la coordination et de la répartition des tâches
* Référent du cahier des charges

#### Directeur technique (Reijo/Rioxo)

* Responsable de la sécurité du code
* Référent des problèmes techniques

#### Directeur artistique (Liliande)

* Responsable de la charte graphique
* Référent des questions d'ergonomie et de graphisme
	
### Objectifs généraux (v1.0)

* Créer un site internet privé sécurisé capable d'évoluer
* Développer des outils personnalisés de gestion de projet
* Mettre en route notre équipe

#### Plan du site (v1.0)
##### Page d'identification (B0.1)

* Seule page accessible sans être connecté
* Formulaire de connexion

##### Page d'accueil (B0.1)

* Publications et commentaires non lues

##### Page de profil

* Informations du profil
* Bouton de modification des informations du profil (pour l'utilisateur et les modérateurs)
* Historique des activités
* Publications spécifiques (#*Nom du profil*)

### Objectifs de la Béta (o1)(o2)B0.1

* o1 : IdentificationBundle
	* Interdire à toute personne non identifier l'accès au site
	* Configurer le routeur et le pare-feux
	* Créer les bases de données de profil
	* Créer la base de donnée des historiques et statistiques de connexions
* o2 : PublicationBundle
	* Créer la base de donnée des publications et commentaires
	* Créer le protocole d'envoi des publications et commentaires
	* Créer le protocole d'affichage et de mise en forme Markdown des publications et des commentaires
	* Créer le protocole de modification des publications et des commentaires
	* Grérer un système d'avis positifs, neutres et négatifs sur les publications et les commentaires
	* Afficher les publications et commentaires lu ou non lus
	* Créer la page d'accueil